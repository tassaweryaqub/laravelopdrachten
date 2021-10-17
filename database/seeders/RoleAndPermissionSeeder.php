<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role; 
use Spatie\Permission\Models\Permission; 

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // permissies toevoegen voor rollen 
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions(); 

        // CRUD VOOR PROJECTS !!!!!!

        Permission::create(['name' => 'index project']); 
        Permission::create(['name' => 'show project']); 
        Permission::create(['name' => 'create project']); 
        Permission::create(['name' => 'edit project']); 
        Permission::create(['name' => 'delete project']); 


        // roles student 

        $student = Role::create(['name' => 'student']);
 

        // roles teacher

        $teacher = Role::create(['name' => 'teacher']);


        // admin role 

        $admin = Role::create([ 'name' => 'admin'])
        ->givePermissionTo([Permission::all()]); 




  
  
    }
}
