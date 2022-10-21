<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
;

class PermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Listar Roles',
            'slug' => 'roles.index',
            'description' => 'Listar Roles'
        ]);

    Permission::create([
            'name' => 'Ver Roles',
            'slug' => 'roles.show',
            'description' => 'Ver datos de Roles'
        ]);

    Permission::create([
            'name' => 'Editar Roles',
            'slug' => 'roles.edit',
            'description' => 'Editar datos de Roles'
        ]);

    Permission::create([
            'name' => 'Eliminar Roles',
            'slug' => 'roles.destroy',
            'description' => 'Navegar y ver Roles'
        ]);

    Permission::create([
            'name' => 'Crear Roles',
            'slug' => 'roles.create',
            'description' => 'Navegar y ver Roles'
        ]);

    //Fin de Permisos de Roles

    //permiso de usuarios Users
    Permission::create([
            'name' => 'Listar Usuarios',
            'slug' => 'users.index',
            'description' => 'Listar usuarios'
        ]);

    Permission::create([
            'name' => 'Ver Usuarios',
            'slug' => 'users.show',
            'description' => 'Ver datos de usuarios'
        ]);

    Permission::create([
            'name' => 'Editar Usuarios',
            'slug' => 'users.edit',
            'description' => 'Editar datos de usuarios'
        ]);

    Permission::create([
            'name' => 'Eliminar Usuarios',
            'slug' => 'users.destroy',
            'description' => 'Navegar y ver usuarios'
        ]);

    Permission::create([
            'name' => 'Crear Usuarios',
            'slug' => 'users.create',
            'description' => 'Navegar y ver usuarios'
        ]);

    ////// Fin de permisos de Usuarios

    ///permisos de Condominios Condominios
    Permission::create([
            'name' => 'Listar Usuarios',
            'slug' => 'condominios.index',
            'description' => 'Listar usuarios'
        ]);

    Permission::create([
            'name' => 'Ver Condominios',
            'slug' => 'condominios.show',
            'description' => 'Ver datos de Condominios'
        ]);

    Permission::create([
            'name' => 'Editar Condominios',
            'slug' => 'condominios.edit',
            'description' => 'Editar datos de Condominios'
        ]);

    Permission::create([
            'name' => 'Eliminar Condominios',
            'slug' => 'condominios.destroy',
            'description' => 'Navegar y ver Condominios'
        ]);

    Permission::create([
            'name' => 'Crear Condominios',
            'slug' => 'condominios.create',
            'description' => 'Navegar y ver Condominios'
        ]);


    Permission::create([
            'name' => 'Ver Cuentas del Condominio',
            'slug' => 'condominios.showCttas',
            'description' => 'Navegar y ver cuentas del Condominio'
        ]);



    ///// Fin de permisos de apartamentos apartamentos;

    ////permiso de apartamentos
    Permission::create([
            'name' => 'Listar apartamentos',
            'slug' => 'apartamentos.index',
            'description' => 'Listar apartamentos'
        ]);

    Permission::create([
            'name' => 'Ver apartamentos',
            'slug' => 'apartamentos.show',
            'description' => 'Ver datos de apartamentos'
        ]);

    Permission::create([
            'name' => 'Editar apartamentos',
            'slug' => 'apartamentos.edit',
            'description' => 'Editar datos de apartamentos'
        ]);

    Permission::create([
            'name' => 'Eliminar apartamentos',
            'slug' => 'apartamentos.destroy',
            'description' => 'Navegar y ver apartamentos'
        ]);

    Permission::create([
            'name' => 'Crear apartamentos',
            'slug' => 'apartamentos.create',
            'description' => 'Navegar y ver apartamentos'
        ]);

    /// Permisos bancos Bancos

    Permission::create([
        'name' => 'Listar Bancos',
        'slug' => 'bancos.index',
        'description' => 'Listar Bancos'
    ]);

    Permission::create([
            'name' => 'Ver Bancos',
            'slug' => 'bancos.show',
            'description' => 'Ver datos de Bancos'
        ]);

    Permission::create([
            'name' => 'Editar Bancos',
            'slug' => 'bancos.edit',
            'description' => 'Editar datos de Bancos'
        ]);

    Permission::create([
            'name' => 'Eliminar Bancos',
            'slug' => 'bancos.destroy',
            'description' => 'Navegar y ver Bancos'
        ]);

    Permission::create([
            'name' => 'Crear Bancos',
            'slug' => 'bancos.create',
            'description' => 'Navegar y ver Bancos'
        ]);

    // fin permisos de bancos

    ////permisos de Gastos Gastos

    Permission::create([
            'name' => 'Admin: Listar Gastos Comunes',
            'slug' => 'comunes.index',
            'description' => 'Listar comunes'
        ]);

    Permission::create([
            'name' => 'Admin: Ver Gastos comunes',
            'slug' => 'comunes.show',
            'description' => 'Ver datos de gastos comunes'
        ]);

    Permission::create([
            'name' => 'Admin: Editar Gastos comunes',
            'slug' => 'comunes.edit',
            'description' => 'Editar datos de gastos comunes'
        ]);

    Permission::create([
            'name' => 'Admin: Eliminar Gastos comunes',
            'slug' => 'comunes.destroy',
            'description' => 'Navegar y ver Gastos comunes'
        ]);


Permission::create([
            'name' => 'Admin: Pagar Gastos comunes',
            'slug' => 'comunes.pagar',
            'description' => 'Pagar Gastos comunes'
        ]);


    Permission::create([
            'name' => 'Admin: Crear Gastos comunes',
            'slug' => 'comunes.create',
            'description' => 'Navegar y ver Gastos comunes'
        ]);

        Permission::create([
            'name' => 'Admin: Crear Gastos comunes',
            'slug' => 'comunes.nuevo',
            'description' => 'Navegar y ver Gastos comunes'
        ]);


    //fin de permisos gastos
    ///permisos mensualidades

    Permission::create([
            'name' => 'Admin: Listar gastos de mes',
            'slug' => 'gastosdemes.index',
            'description' => 'Listar gastosdemes'
        ]);

    Permission::create([
            'name' => 'Admin: Ver gastos de mes',
            'slug' => 'gastosdemes.show',
            'description' => 'Ver datos de gastosdemes'
        ]);

    Permission::create([
            'name' => 'Admin: Editar gastos de mes',
            'slug' => 'gastosdemes.edit',
            'description' => 'Editar datos de gastosdemes'
        ]);

    Permission::create([
            'name' => 'Admin: Eliminar gastos de mes',
            'slug' => 'gastosdemes.destroy',
            'description' => 'Navegar y ver gastosdemes'
        ]);

    Permission::create([
            'name' => 'Admin: Crear gastos de mes',
            'slug' => 'gastosdemes.create',
            'description' => 'Navegar y ver gastosdemes'
        ]);




   ///// Permisos de administracion
    Permission::create([
            'name' => 'Admin: Administrar Condominio',
            'slug' => 'condominios.seleccionar',
            'description' => 'Administración de condominios'
           ]);

    Permission::create([
            'name' => 'Admin:Ver Listado de Condominios Administrables',
            'slug' => 'admin.seleccion',
            'description' => 'Seleccionar Condominio a Administrar'
           ]);

///// Permisos de administracion de Movimientos bancarios



Permission::create([
            'name' => 'Admin: Ver lista de movimientos Bancarios',
            'slug' => 'movimientos.index',
            'description' => 'Permite ver listado de movimientos bancarios'
           ]);

Permission::create([
            'name' => 'Admin: Confirmar movimientos Bancarios',
            'slug' => 'movimientos.confirmar',
            'description' => 'Permite confirmar movimiento bancario'
           ]);

           Permission::create([
            'name' => 'Admin: Anular movimientos Bancarios',
            'slug' => 'movimientos.anular',
            'description' => 'Permite anular movimiento bancario'
           ]);

           Permission::create([
            'name' => 'Admin: Ver detalles de movimientos Bancarios',
            'slug' => 'movimientos.show',
            'description' => 'Permite ver detalles de movimiento bancario'
           ]);

           Permission::create([
            'name' => 'Admin: Editar movimientos Bancarios',
            'slug' => 'movimientos.edit',
            'description' => 'Permite editar movimiento bancario'
           ]);

           Permission::create([
            'name' => 'Admin: Crear movimientos Bancarios',
            'slug' => 'movimientos.create',
            'description' => 'Permite crear movimiento bancario'
           ]);

           Permission::create([
            'name' => 'Admin: Eliminar movimientos Bancarios',
            'slug' => 'movimientos.destroy',
            'description' => 'Permite Eliminar movimiento bancario'
           ]);

           Permission::create([
            'name' => 'Admin: Ver Bancos del condominio',
            'slug' => 'movimientos.verbancos',
            'description' => 'Permite ver Edo de Ctta del Banco'
           ]);

           Permission::create([
            'name' => 'Admin: Ver Movimientos de Bancos del condominio',
            'slug' => 'movimientos.porbanco',
            'description' => 'Permite ver Detalle de Edo de Ctta del Banco'
           ]);







        Permission::create([
            'name' => 'Admin: Actualizar gasto de Mes',
            'slug' => 'gastosdemes.actualizar',
            'description' => 'Publica gasto para Cobro'
        ]);


        Permission::create([
            'name' => 'Admin: Publicar Gasto de Mes',
            'slug' => 'gastosdemes.publicar',
            'description' => 'Publica gasto para Cobro'
        ]);



     ///// Permisos de administracion

     Permission::create([
        'name' => 'Admin: Despublicar gasto de Mes',
        'slug' => 'gastosdemes.desPublicar',
        'description' => 'Despublica Gasto de Mes'
       ]);



Permission::create([
        'name' => 'Admin: Publicar los Gastos mensuales del condominio (Facturar)',
        'slug' => 'mensualidades.publicar',
        'description' => 'Publica el Monto de la mensualidad y lo factura a cada residente'
       ]);


       Permission::create([
        'name' => 'Admin: Lista de Gastos Particulares',
        'slug' => 'particulares.index',
        'description' => 'Lista los gastos particulares'
       ]);

       Permission::create([
        'name' => 'Admin: Crear Gastos Particulares',
        'slug' => 'particulares.nuevo',
        'description' => 'Crear gastos particulares'
       ]);

       Permission::create([
        'name' => 'Admin: Crear Gastos Particulares',
        'slug' => 'particulares.store',
        'description' => 'Crear gastos particulares'
       ]);


      Permission::create([
        'name' => 'Admin: Crear Gastos Particulares',
        'slug' => 'particulares.create',
        'description' => 'Crear gastos particulares'
       ]);

       Permission::create([
        'name' => 'Admin: Ver detalles Gastos Particulares',
        'slug' => 'particulares.show',
        'description' => 'Crear gastos particulares'
       ]);

       Permission::create([
        'name' => 'Admin: Eliminar Gastos Particulares',
        'slug' => 'particulares.destroy',
        'description' => 'Eliminar gastos particulares'
       ]);


       Permission::create([
        'name' => 'Admin: Editar Gastos Particulares',
        'slug' => 'particulares.edit',
        'description' => 'Editar gastos particulares'
       ]);



       Permission::create([
        'name' => 'Admin: Listar Mensualidades',
        'slug' => 'mensualidades.index',
        'description' => 'Listar mensualidades'
       ]);

       Permission::create([
        'name' => 'Admin: Listar Estado de cuentas',
        'slug' => 'admin.edoCttas',
        'description' => 'Permite ver estado de cuenta de todos los apartamentos'
       ]);




       Permission::create([
        'name' => 'Admin: Listar Gastos Comunes por lotes',
        'slug' => 'excel.comunes',
        'description' => 'Permite importar Gastos comunes'
       ]);


    }
}
