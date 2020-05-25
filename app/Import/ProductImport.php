<?php

namespace App\Imports;

use App\Unit;
use App\Brand;
use App\Group;
use App\Subgroup;
use App\Helpers\Functions;
use App\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ProductImport implements ToCollection, WithHeadingRow, WithValidation, WithChunkReading, ShouldQueue
{
    public function collection(Collection $rows)
    {    
        $i=1;

        foreach ($rows as $row) 
        {
            $row = $row->toArray();

            $validator = Validator::make($row, $this->rules(), [], $this->customValidationAttributes());
            
            if ($validator->fails()) {
                $message = Functions::getValidatorMessageOneLine($validator);
                \Log::info($message);
            } else {

                // DB::beginTransaction(); 

                $group = Group::firstOrCreate([
                    "description" => $row['categoria']
                ]);  

                if (isset($row['subcategoria'])) {
                    $subgrupo = Subgroup::firstOrCreate([
                        "description" => $row['subcategoria'],
                        "group_id" => $group->id
                    ]); 
                } else {
                    $subgrupo = null;
                }                

                $brand = Brand::firstOrCreate([
                    "description" => $row['marca']
                ]); 

                if (isset($row['presentacion'])) {
                    $unit = Unit::firstOrCreate([
                        "description_sg" => $row['presentacion'],
                        "description_pl" => $row['presentacion'] . "S"
                    ]); 
                } else {
                    $unit = null;
                } 

                $product = Product::updateOrCreate(
                    [
                        "code" => $row['codigo'] * 989898
                    ],
                    [
                        "description" => $row['nombre'],
                        "group_id" => $group->id,
                        "subgroup_id" => $subgrupo->id ?? null,
                        "brand_id" => $brand->id,
                        "unit_id" => $unit->id ?? null,
                        "prize_1" => 1000
                    ]
                );  
                
                // DB::commit();
            }           

            $i++;
        }
    }

    public function batchSize(): int
    {
        return 500;
    }

    public function chunkSize(): int
    {
        return 500;
    }

    public function rules(): array
    {
        return [
            'categoria' => 'required',
            'codigo' => 'required',
            'nombre' => 'required',
            'subcategoria' => '',
            'fabricante' => '',
            'marca' => 'required',
            'presentacion' => ''
        ];
    }

    /**
     * @return array
     */
    public function customValidationAttributes()
    {
        return [
            'categoría' => 'categoría',
            'codigo' => 'código',
            'nombre' => 'nombre',
            'subcategoria' => 'subcategoría',
            'fabricante' => 'fabricante',
            'marca' => 'marca',
            'presentacion' => 'presentación'
        ];
    }
}