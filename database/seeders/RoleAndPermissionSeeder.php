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

        // // CRUD VOOR PROJECTS !!!!!!

        // Permission::create(['name' => 'index project']); 
        // Permission::create(['name' => 'show project']); 
        // Permission::create(['name' => 'create project']); 
        // Permission::create(['name' => 'edit project']); 
        // Permission::create(['name' => 'delete project']); 

// CRUD voor TASKS

        Permission::create(['name' => 'index task']); 
        Permission::create(['name' => 'show task']); 
        Permission::create(['name' => 'create task']); 
        Permission::create(['name' => 'edit task']); 
        Permission::create(['name' => 'delete task']); 




        
        // roles student  project

        $student = Role::create(['name' => 'student'])
        ->givePermissionTo(['index task','show task','create task','edit task', 'delete task' ]); 
  
        // roles teacher project

        $teacher = Role::create(['name' => 'teacher'])
        ->givePermissionTo(['index task','show task','create task','edit task','delete task' ]); 
  


        // admin role  project

        $admin = Role::create([ 'name' => 'admin'])
        ->givePermissionTo([Permission::all()]); 




        // // roles student  project

        // $student = Role::create(['name' => 'student'])
        // ->givePermissionTo(['index project','show project','create project','edit project' ]); 
 

        // // roles teacher project

        // $teacher = Role::create(['name' => 'teacher'])
        // ->givePermissionTo(['index project','show project','create project','edit project','delete project' ]); 



        // // admin role  project

        // $admin = Role::create([ 'name' => 'admin'])
        // ->givePermissionTo([Permission::all()]); 




  
  
    }
}
