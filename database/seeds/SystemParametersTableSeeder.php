<?php

use App\SystemParameter;
use Illuminate\Database\Seeder;

class SystemParametersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $system_parameters = [
            [
                'group' => "TYPES_OF_USERS",
                'description' => "Usuario interno",
                'abbreviation' => "INT",
                'active' => true
            ],
            [
                'group' => "TYPES_OF_USERS",
                'description' => "Cliente",
                'abbreviation' => "CLI",
                'active' => true
            ],
            [
                'group' => "TYPES_OF_CLIENTS",
                'description' => "Empresa",
                'abbreviation' => "EMP",
                'active' => true
            ],
            [
                'group' => "TYPES_OF_CLIENTS",
                'description' => "Persona Natural",
                'abbreviation' => "PN",
                'active' => true
            ],
            [
                'group' => "TYPES_OF_DOCUMENTS",
                'subgroup' => "PEOPLE_DOCUMENTS",
		        'description' => "Documento Nacional de Identidad",
		        'abbreviation' => "DNI",
                'active' => true
            ],
            [
                'group' => "TYPES_OF_DOCUMENTS",
                'subgroup' => "PEOPLE_DOCUMENTS",
		        'description' => "Carnet de Extranjería",
		        'abbreviation' => "CE",
                'active' => true
            ],
            [
                'group' => "TYPES_OF_DOCUMENTS",
                'subgroup' => "PEOPLE_DOCUMENTS",
		        'description' => "Pasaporte",
		        'abbreviation' => "PAS",
                'active' => true
            ],
            [
                'group' => "TYPES_OF_DOCUMENTS",
                'subgroup' => "BUSINESS_DOCUMENTS",
		        'description' => "Registro Único de Contribuyentes",
		        'abbreviation' => "RUC",
                'active' => true
            ],
            [
                'group' => "EXHIBITORS",
                'description' => "Góndola",
                'abbreviation' => "GÓN",
                'active' => true
            ],
            [
                'group' => "EXHIBITORS",
                'description' => "Exhibidor especial",
                'abbreviation' => "EXE",
                'active' => true
            ],
            [
                'group' => "EXHIBITORS",
                'description' => "Cabecera",
                'abbreviation' => "CAB",
                'active' => true
            ],
            [
                'group' => "EXHIBITORS",
                'description' => "Checkouts",
                'abbreviation' => "CHE",
                'active' => true
            ],
            [
                'group' => "EXHIBITORS",
                'description' => "Cooler",
                'abbreviation' => "COO",
                'active' => true
            ],
            [
                'group' => "EXHIBITORS",
                'description' => "Isla",
                'abbreviation' => "ISL",
                'active' => true
            ],
            [
                'group' => "EXHIBITORS",
                'description' => "Muro valor",
                'abbreviation' => "MUV",
                'active' => true
            ],
            [
                'group' => "EXHIBITORS",
                'description' => "Gancheras",
                'abbreviation' => "GAN",
                'active' => true
            ],
            [
                'group' => "EXHIBITORS",
                'description' => "Piscinas",
                'abbreviation' => "PIS",
                'active' => true
            ],
            [
                'group' => "EXHIBITORS",
                'description' => "Check out horiz",
                'abbreviation' => "COH",
                'active' => true
            ],
            [
                'group' => "EXHIBITORS",
                'description' => "Congeladora",
                'abbreviation' => "CON",
                'active' => true
            ],
            [
                'group' => "EXHIBITORS",
                'description' => "Horizontales",
                'abbreviation' => "HOR",
                'active' => true
            ],
            [
                'group' => "EXHIBITORS",
                'description' => "Faja checkout",
                'abbreviation' => "FAC",
                'active' => true
            ],
            [
                'group' => "EXHIBITORS",
                'description' => "Verticales",
                'abbreviation' => "VER",
                'active' => true
            ],
            [
                'group' => "EXHIBITORS",
                'description' => "Chimenea",
                'abbreviation' => "CHI",
                'active' => true
            ],
            [
                'group' => "EXHIBITORS",
                'description' => "Check out vert",
                'abbreviation' => "COV",
                'active' => true
            ],
            [
                'group' => "TYPES_OF_STUDY",
                'description' => "Check",
                'abbreviation' => "CHE",
                'active' => true
            ],
            [
                'group' => "TYPES_OF_STUDY",
                'description' => "Exhibición",
                'abbreviation' => "EXH",
                'active' => true
            ],
            [
                'group' => "TYPES_OF_STUDY",
                'description' => "Chequeo y distribución",
                'abbreviation' => "CYD",
                'active' => true
            ],
            [
                'group' => "TYPES_OF_CHANNELS",
                'description' => "Tradicional",
                'abbreviation' => "TRA",
                'active' => true
            ],
            [
                'group' => "TYPES_OF_CHANNELS",
                'description' => "Moderno",
                'abbreviation' => "MOD",
                'active' => true
            ],
            [
                'group' => "TYPES_OF_FREQUENCY",
                'description' => "Diario",
                'abbreviation' => "DIA",
                'active' => true
            ],
            [
                'group' => "TYPES_OF_FREQUENCY",
                'description' => "Semanal",
                'abbreviation' => "SEM",
                'active' => true
            ],
            [
                'group' => "TYPES_OF_FREQUENCY",
                'description' => "Quincenal",
                'abbreviation' => "QUI",
                'active' => true
            ],
            [
                'group' => "TYPES_OF_FREQUENCY",
                'description' => "Mensual",
                'abbreviation' => "MEN",
                'active' => true
            ],
            [
                'group' => "LEVEL_OF_QUESTIONS",
                'description' => "SKU",
                'abbreviation' => "SKU",
                'active' => true
            ],
            [
                'group' => "LEVEL_OF_QUESTIONS",
                'description' => "Marca",
                'abbreviation' => "MAR",
                'active' => true
            ],
            [
                'group' => "LEVEL_OF_QUESTIONS",
                'description' => "Fabricante",
                'abbreviation' => "FAB",
                'active' => true
            ],
            [
                'group' => "LEVEL_OF_QUESTIONS",
                'description' => "Punto de venta",
                'abbreviation' => "PVE",
                'active' => true
            ],
            [
                'group' => "LEVEL_OF_QUESTIONS",
                'description' => "Exhibidor",
                'abbreviation' => "EXH",
                'active' => true
            ],
            [
                'group' => "RESPONSE_TYPE",
                'description' => "Sí / No",
                'abbreviation' => "QUI",
                'active' => true
            ],
            [
                'group' => "RESPONSE_TYPE",
                'description' => "Selección única",
                'abbreviation' => "SUN",
                'active' => true
            ],
            [
                'group' => "RESPONSE_TYPE",
                'description' => "Selección múltiple",
                'abbreviation' => "SKU",
                'active' => true
            ],
            [
                'group' => "RESPONSE_TYPE",
                'description' => "Texto",
                'abbreviation' => "TEX",
                'active' => true
            ],
            [
                'group' => "RESPONSE_TYPE",
                'description' => "Numérico decimal",
                'abbreviation' => "DEC",
                'active' => true
            ],
            [
                'group' => "RESPONSE_TYPE",
                'description' => "Numérico entero",
                'abbreviation' => "ENT",
                'active' => true
            ],
            [
                'group' => "RESPONSE_TYPE",
                'description' => "Fotos",
                'abbreviation' => "FOT",
                'active' => true
            ],
            [
                'group' => "SKU_UPDATE",
                'description' => "Actualización de SKUs",
                'abbreviation' => "ASK",
                'active' => true
            ],
            [
                'group' => "EXHIBITORS",
                'description' => "TRENES",
                'abbreviation' => "TRE",
                'active' => true
            ],
        ];

        collect($system_parameters)->map(function ($system_parameter) {
            SystemParameter::create($system_parameter);
        });
    }
}
