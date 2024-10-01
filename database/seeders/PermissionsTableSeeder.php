<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'project_create',
            ],
            [
                'id'    => 19,
                'title' => 'project_edit',
            ],
            [
                'id'    => 20,
                'title' => 'project_show',
            ],
            [
                'id'    => 21,
                'title' => 'project_delete',
            ],
            [
                'id'    => 22,
                'title' => 'project_access',
            ],
            [
                'id'    => 23,
                'title' => 'employee_create',
            ],
            [
                'id'    => 24,
                'title' => 'employee_edit',
            ],
            [
                'id'    => 25,
                'title' => 'employee_show',
            ],
            [
                'id'    => 26,
                'title' => 'employee_delete',
            ],
            [
                'id'    => 27,
                'title' => 'employee_access',
            ],
            [
                'id'    => 28,
                'title' => 'professional_category_create',
            ],
            [
                'id'    => 29,
                'title' => 'professional_category_edit',
            ],
            [
                'id'    => 30,
                'title' => 'professional_category_show',
            ],
            [
                'id'    => 31,
                'title' => 'professional_category_delete',
            ],
            [
                'id'    => 32,
                'title' => 'professional_category_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
