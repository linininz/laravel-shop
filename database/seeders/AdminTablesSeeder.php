<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // base tables
        Dcat\Admin\Models\Menu::truncate();
        Dcat\Admin\Models\Menu::insert(
            [
                [
                    "created_at" => "2021-03-21 01:16:20",
                    "icon" => "feather icon-bar-chart-2",
                    "id" => 1,
                    "order" => 1,
                    "parent_id" => 0,
                    "title" => "Index",
                    "updated_at" => NULL,
                    "uri" => "/"
                ],
                [
                    "created_at" => "2021-03-21 01:16:20",
                    "icon" => "feather icon-settings",
                    "id" => 2,
                    "order" => 7,
                    "parent_id" => 0,
                    "title" => "Admin",
                    "updated_at" => "2021-04-14 23:02:32",
                    "uri" => ""
                ],
                [
                    "created_at" => "2021-03-21 01:16:20",
                    "icon" => "",
                    "id" => 3,
                    "order" => 8,
                    "parent_id" => 2,
                    "title" => "Users",
                    "updated_at" => "2021-04-14 23:02:32",
                    "uri" => "auth/users"
                ],
                [
                    "created_at" => "2021-03-21 01:16:20",
                    "icon" => "",
                    "id" => 4,
                    "order" => 9,
                    "parent_id" => 2,
                    "title" => "Roles",
                    "updated_at" => "2021-04-14 23:02:32",
                    "uri" => "auth/roles"
                ],
                [
                    "created_at" => "2021-03-21 01:16:20",
                    "icon" => "",
                    "id" => 5,
                    "order" => 10,
                    "parent_id" => 2,
                    "title" => "Permission",
                    "updated_at" => "2021-04-14 23:02:32",
                    "uri" => "auth/permissions"
                ],
                [
                    "created_at" => "2021-03-21 01:16:20",
                    "icon" => "",
                    "id" => 6,
                    "order" => 11,
                    "parent_id" => 2,
                    "title" => "Menu",
                    "updated_at" => "2021-04-14 23:02:33",
                    "uri" => "auth/menu"
                ],
                [
                    "created_at" => "2021-03-21 01:16:20",
                    "icon" => "",
                    "id" => 7,
                    "order" => 12,
                    "parent_id" => 2,
                    "title" => "Operation log",
                    "updated_at" => "2021-04-14 23:02:33",
                    "uri" => "auth/logs"
                ],
                [
                    "created_at" => "2021-03-21 15:37:24",
                    "icon" => "fa-user",
                    "id" => 8,
                    "order" => 2,
                    "parent_id" => 0,
                    "title" => "用户管理",
                    "updated_at" => "2021-03-21 15:37:59",
                    "uri" => "/users"
                ],
                [
                    "created_at" => "2021-03-21 15:45:12",
                    "icon" => "fa-cubes",
                    "id" => 9,
                    "order" => 4,
                    "parent_id" => 0,
                    "title" => "商品管理",
                    "updated_at" => "2021-04-14 23:02:32",
                    "uri" => "/products"
                ],
                [
                    "created_at" => "2021-03-22 19:48:41",
                    "icon" => "fa-rmb",
                    "id" => 10,
                    "order" => 5,
                    "parent_id" => 0,
                    "title" => "订单管理",
                    "updated_at" => "2021-04-14 23:02:32",
                    "uri" => "/orders"
                ],
                [
                    "created_at" => "2021-03-22 22:27:13",
                    "icon" => "fa-tags",
                    "id" => 11,
                    "order" => 6,
                    "parent_id" => 0,
                    "title" => "优惠券管理",
                    "updated_at" => "2021-04-14 23:02:32",
                    "uri" => "/coupon_codes"
                ],
                [
                    "created_at" => "2021-04-14 23:02:23",
                    "icon" => "fa-bars",
                    "id" => 12,
                    "order" => 3,
                    "parent_id" => 0,
                    "title" => "类目管理",
                    "updated_at" => "2021-04-14 23:02:32",
                    "uri" => "/categories"
                ]
            ]
        );

        Dcat\Admin\Models\Permission::truncate();
        Dcat\Admin\Models\Permission::insert(
            [
                [
                    "created_at" => "2021-03-21 01:16:20",
                    "http_method" => "",
                    "http_path" => "",
                    "id" => 1,
                    "name" => "Auth management",
                    "order" => 1,
                    "parent_id" => 0,
                    "slug" => "auth-management",
                    "updated_at" => NULL
                ],
                [
                    "created_at" => "2021-03-21 01:16:20",
                    "http_method" => "",
                    "http_path" => "/auth/users*",
                    "id" => 2,
                    "name" => "Users",
                    "order" => 2,
                    "parent_id" => 1,
                    "slug" => "users",
                    "updated_at" => NULL
                ],
                [
                    "created_at" => "2021-03-21 01:16:20",
                    "http_method" => "",
                    "http_path" => "/auth/roles*",
                    "id" => 3,
                    "name" => "Roles",
                    "order" => 3,
                    "parent_id" => 1,
                    "slug" => "roles",
                    "updated_at" => NULL
                ],
                [
                    "created_at" => "2021-03-21 01:16:20",
                    "http_method" => "",
                    "http_path" => "/auth/permissions*",
                    "id" => 4,
                    "name" => "Permissions",
                    "order" => 4,
                    "parent_id" => 1,
                    "slug" => "permissions",
                    "updated_at" => NULL
                ],
                [
                    "created_at" => "2021-03-21 01:16:20",
                    "http_method" => "",
                    "http_path" => "/auth/menu*",
                    "id" => 5,
                    "name" => "Menu",
                    "order" => 5,
                    "parent_id" => 1,
                    "slug" => "menu",
                    "updated_at" => NULL
                ],
                [
                    "created_at" => "2021-03-21 01:16:20",
                    "http_method" => "",
                    "http_path" => "/auth/logs*",
                    "id" => 6,
                    "name" => "Operation log",
                    "order" => 6,
                    "parent_id" => 1,
                    "slug" => "operation-log",
                    "updated_at" => NULL
                ]
            ]
        );

        Dcat\Admin\Models\Role::truncate();
        Dcat\Admin\Models\Role::insert(
            [
                [
                    "created_at" => "2021-03-21 01:16:20",
                    "id" => 1,
                    "name" => "Administrator",
                    "slug" => "administrator",
                    "updated_at" => "2021-03-21 01:16:20"
                ]
            ]
        );

        // pivot tables
        DB::table('admin_role_menu')->truncate();
        DB::table('admin_role_menu')->insert(
            [

            ]
        );

        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_role_permissions')->insert(
            [

            ]
        );

        // finish
    }
}
