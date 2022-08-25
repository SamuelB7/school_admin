<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'permission-create',
            'permission-show',
            'permission-edit',
            'permission-delete',
            'user-create',
            'user-show',
            'user-edit',
            'user-delete',
            'course-create',
            'course-show',
            'course-edit',
            'course-delete',
            'subject-create',
            'subject-show',
            'subject-edit',
            'subject-delete',
        ];

        foreach($permissions as $permission) {
            $permissions[] = Permission::create(['name' => $permission]);
        }

        $role = Role::create(['name' => "admin"]);
        $role->syncPermissions($permissions);
        
        Role::create(['name' => 'secretary']);
        Role::create(['name' => 'professor']);
        Role::create(['name' => 'student']);
        Role::create(['name' => 'treasurer']);
    }
}
