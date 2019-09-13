<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'         => '1',
                'title'      => 'user_management_access',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '17',
                'title'      => 'expense_management_access',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '18',
                'title'      => 'expense_category_create',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '19',
                'title'      => 'expense_category_edit',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '20',
                'title'      => 'expense_category_show',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '21',
                'title'      => 'expense_category_delete',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '22',
                'title'      => 'expense_category_access',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '23',
                'title'      => 'income_category_create',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '24',
                'title'      => 'income_category_edit',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '25',
                'title'      => 'income_category_show',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '26',
                'title'      => 'income_category_delete',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '27',
                'title'      => 'income_category_access',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '28',
                'title'      => 'expense_create',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '29',
                'title'      => 'expense_edit',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '30',
                'title'      => 'expense_show',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '31',
                'title'      => 'expense_delete',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '32',
                'title'      => 'expense_access',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '33',
                'title'      => 'income_create',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '34',
                'title'      => 'income_edit',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '35',
                'title'      => 'income_show',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '36',
                'title'      => 'income_delete',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '37',
                'title'      => 'income_access',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '38',
                'title'      => 'expense_report_create',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '39',
                'title'      => 'expense_report_edit',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '40',
                'title'      => 'expense_report_show',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '41',
                'title'      => 'expense_report_delete',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
            [
                'id'         => '42',
                'title'      => 'expense_report_access',
                'created_at' => '2019-09-13 19:21:30',
                'updated_at' => '2019-09-13 19:21:30',
            ],
        ];

        Permission::insert($permissions);
    }
}
