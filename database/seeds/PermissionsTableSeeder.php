<?php

use App\Client;
use App\Constants\SystemMasterParameters;
use App\SystemParameter;
use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name' => "index-users",
                'guard_name' => 'api',
                'description' => "Ver usuarios"
            ],
            [
                'name' => "store-users",
                'guard_name' => 'api',
                'description' => "Crear usuarios"
            ],
            [
                'name' => "update-users",
                'guard_name' => 'api',
                'description' => "Actualizar usuarios"
            ],
            [
                'name' => "delete-users",
                'guard_name' => 'api',
                'description' => "Eliminar usuarios"
            ],
            [
                'name' => "active-users",
                'guard_name' => 'api',
                'description' => "Activar usuarios"
            ],
            [
                'name' => "index-roles",
                'guard_name' => 'api',
                'description' => "Ver roles"
            ],
            [
                'name' => "store-roles",
                'guard_name' => 'api',
                'description' => "Crear roles"
            ],
            [
                'name' => "update-roles",
                'guard_name' => 'api',
                'description' => "Actualizar roles"
            ],
            [
                'name' => "delete-roles",
                'guard_name' => 'api',
                'description' => "Eliminar roles"
            ],
            [
                'name' => "active-roles",
                'guard_name' => 'api',
                'description' => "Activar roles"
            ],
            [
                'name' => "index-pollsters",
                'guard_name' => 'api',
                'description' => "Ver encuestadores"
            ],
            [
                'name' => "store-pollsters",
                'guard_name' => 'api',
                'description' => "Crear encuestadores"
            ],
            [
                'name' => "update-pollsters",
                'guard_name' => 'api',
                'description' => "Actualizar encuestadores"
            ],
            [
                'name' => "delete-pollsters",
                'guard_name' => 'api',
                'description' => "Eliminar encuestadores"
            ],
            [
                'name' => "active-pollsters",
                'guard_name' => 'api',
                'description' => "Activar encuestadores"
            ],
            [
                'name' => "index-clients",
                'guard_name' => 'api',
                'description' => "Ver clientes"
            ],
            [
                'name' => "store-clients",
                'guard_name' => 'api',
                'description' => "Crear clientes"
            ],
            [
                'name' => "update-clients",
                'guard_name' => 'api',
                'description' => "Actualizar clientes"
            ],
            [
                'name' => "delete-clients",
                'guard_name' => 'api',
                'description' => "Eliminar clientes"
            ],
            [
                'name' => "active-clients",
                'guard_name' => 'api',
                'description' => "Activar clientes"
            ],
            [
                'name' => "index-cities",
                'guard_name' => 'api',
                'description' => "Ver ciudades"
            ],
            [
                'name' => "store-cities",
                'guard_name' => 'api',
                'description' => "Crear ciudades"
            ],
            [
                'name' => "update-cities",
                'guard_name' => 'api',
                'description' => "Actualizar ciudades"
            ],
            [
                'name' => "delete-cities",
                'guard_name' => 'api',
                'description' => "Eliminar ciudades"
            ],
            [
                'name' => "active-cities",
                'guard_name' => 'api',
                'description' => "Activar ciudades"
            ],
            [
                'name' => "index-attributes",
                'guard_name' => 'api',
                'description' => "Ver atributos"
            ],
            [
                'name' => "store-attributes",
                'guard_name' => 'api',
                'description' => "Crear atributos"
            ],
            [
                'name' => "update-attributes",
                'guard_name' => 'api',
                'description' => "Actualizar atributos"
            ],
            [
                'name' => "delete-attributes",
                'guard_name' => 'api',
                'description' => "Eliminar atributos"
            ],
            [
                'name' => "active-attributes",
                'guard_name' => 'api',
                'description' => "Activar atributos"
            ],
            [
                'name' => "index-categories",
                'guard_name' => 'api',
                'description' => "Ver categorías"
            ],
            [
                'name' => "store-categories",
                'guard_name' => 'api',
                'description' => "Crear categorías"
            ],
            [
                'name' => "update-categories",
                'guard_name' => 'api',
                'description' => "Actualizar categorías"
            ],
            [
                'name' => "delete-categories",
                'guard_name' => 'api',
                'description' => "Eliminar categorías"
            ],
            [
                'name' => "active-categories",
                'guard_name' => 'api',
                'description' => "Activar categorías"
            ],
            [
                'name' => "index-skus",
                'guard_name' => 'api',
                'description' => "Ver skus"
            ],
            [
                'name' => "store-skus",
                'guard_name' => 'api',
                'description' => "Crear skus"
            ],
            [
                'name' => "update-skus",
                'guard_name' => 'api',
                'description' => "Actualizar skus"
            ],
            [
                'name' => "delete-skus",
                'guard_name' => 'api',
                'description' => "Eliminar skus"
            ],
            [
                'name' => "active-skus",
                'guard_name' => 'api',
                'description' => "Activar skus"
            ],
            [
                'name' => "index-channels",
                'guard_name' => 'api',
                'description' => "Ver canales"
            ],
            [
                'name' => "store-channels",
                'guard_name' => 'api',
                'description' => "Crear canales"
            ],
            [
                'name' => "update-channels",
                'guard_name' => 'api',
                'description' => "Actualizar canales"
            ],
            [
                'name' => "delete-channels",
                'guard_name' => 'api',
                'description' => "Eliminar canales"
            ],
            [
                'name' => "active-channels",
                'guard_name' => 'api',
                'description' => "Activar canales"
            ],
            [
                'name' => "index-sale_points",
                'guard_name' => 'api',
                'description' => "Ver puntos de venta"
            ],
            [
                'name' => "store-sale_points",
                'guard_name' => 'api',
                'description' => "Crear puntos de venta"
            ],
            [
                'name' => "update-sale_points",
                'guard_name' => 'api',
                'description' => "Actualizar puntos de venta"
            ],
            [
                'name' => "delete-sale_points",
                'guard_name' => 'api',
                'description' => "Eliminar puntos de venta"
            ],
            [
                'name' => "active-sale_points",
                'guard_name' => 'api',
                'description' => "Activar puntos de venta"
            ],
            [
                'name' => "index-attribute_values",
                'guard_name' => 'api',
                'description' => "Ver valores de atributos"
            ],
            [
                'name' => "store-attribute_values",
                'guard_name' => 'api',
                'description' => "Crear valores de atributos"
            ],
            [
                'name' => "update-attribute_values",
                'guard_name' => 'api',
                'description' => "Actualizar valores de atributos"
            ],
            [
                'name' => "delete-attribute_values",
                'guard_name' => 'api',
                'description' => "Eliminar valores de atributos"
            ],
            [
                'name' => "active-attribute_values",
                'guard_name' => 'api',
                'description' => "Activar valores de atributos"
            ],
            [
                'name' => "index-chains",
                'guard_name' => 'api',
                'description' => "Ver cadenas"
            ],
            [
                'name' => "store-chains",
                'guard_name' => 'api',
                'description' => "Crear cadenas"
            ],
            [
                'name' => "update-chains",
                'guard_name' => 'api',
                'description' => "Actualizar cadenas"
            ],
            [
                'name' => "delete-chains",
                'guard_name' => 'api',
                'description' => "Eliminar cadenas"
            ],
            [
                'name' => "active-chains",
                'guard_name' => 'api',
                'description' => "Activar cadenas"
            ],
            [
                'name' => "index-flags",
                'guard_name' => 'api',
                'description' => "Ver banderas"
            ],
            [
                'name' => "store-flags",
                'guard_name' => 'api',
                'description' => "Crear banderas"
            ],
            [
                'name' => "update-flags",
                'guard_name' => 'api',
                'description' => "Actualizar banderas"
            ],
            [
                'name' => "delete-flags",
                'guard_name' => 'api',
                'description' => "Eliminar banderas"
            ],
            [
                'name' => "active-flags",
                'guard_name' => 'api',
                'description' => "Activar banderas"
            ],
            [
                'name' => "index-parameters",
                'guard_name' => 'api',
                'description' => "Ver parámetros"
            ],
            [
                'name' => "store-parameters",
                'guard_name' => 'api',
                'description' => "Crear parámetros"
            ],
            [
                'name' => "update-parameters",
                'guard_name' => 'api',
                'description' => "Actualizar parámetros"
            ],
            [
                'name' => "delete-parameters",
                'guard_name' => 'api',
                'description' => "Eliminar parámetros"
            ],
            [
                'name' => "active-parameters",
                'guard_name' => 'api',
                'description' => "Activar parámetros"
            ],
            [
                'name' => "index-logs",
                'guard_name' => 'api',
                'description' => "Ver logs"
            ],
            [
                'name' => "index-zones",
                'guard_name' => 'api',
                'description' => "Ver zonas"
            ],
            [
                'name' => "store-zones",
                'guard_name' => 'api',
                'description' => "Crear zonas"
            ],
            [
                'name' => "update-zones",
                'guard_name' => 'api',
                'description' => "Actualizar zonas"
            ],
            [
                'name' => "delete-zones",
                'guard_name' => 'api',
                'description' => "Eliminar zonas"
            ],
            [
                'name' => "active-zones",
                'guard_name' => 'api',
                'description' => "Activar zonas"
            ],
            [
                'name' => "index-contracts",
                'guard_name' => 'api',
                'description' => "Ver contratos"
            ],
            [
                'name' => "store-contracts",
                'guard_name' => 'api',
                'description' => "Crear contratos"
            ],
            [
                'name' => "update-contracts",
                'guard_name' => 'api',
                'description' => "Actualizar contratos"
            ],
            [
                'name' => "delete-contracts",
                'guard_name' => 'api',
                'description' => "Eliminar contratos"
            ],
            [
                'name' => "active-contracts",
                'guard_name' => 'api',
                'description' => "Activar contratos"
            ]
        ];

        collect($permissions)->map(function ($permission) {
            Permission::create($permission);
        });
    }
}