<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Schema::enableForeignKeyConstraints();
        $roles = [
                [
                    'section_id'                =>  1,
                    'title'                     =>  'Dashboard',
                    'route'                     =>  'admin.dashboard.index',
                    'params'                    =>  '',
                    'icon'                      =>  'icon-home',
                    'image'                     =>  '',
                    'icon_type'                 =>  'line-icons',
                    'allowed_permissions'       =>  'access',
                    'sequence'                  =>  1,
                    'is_display'                =>  'y',
                    'is_active'                 =>  'y',
                    'created_at'                => \Carbon\Carbon::now(),
                    'updated_at'                => \Carbon\Carbon::now(),
                ],
                [
                    'section_id'                =>  2,
                    'title'                     =>  'Role Management',
                    'route'                     =>  'admin.roles.index',
                    'params'                    =>  '',
                    'icon'                      =>  'fab fa-black-tie',
                    'image'                     =>  '',
                    'icon_type'                 =>  'font-awesome',
                    'allowed_permissions'       =>  'access,add,edit,delete',
                    'sequence'                  =>  1,
                    'is_display'                =>  'y',
                    'is_active'                 =>  'y',
                    'created_at'                => \Carbon\Carbon::now(),
                    'updated_at'                => \Carbon\Carbon::now(),
                ],
                [
                    'section_id'                =>  3,
                    'title'                     =>  'Users',
                    'route'                     =>  'admin.users.index',
                    'params'                    =>  '',
                    'icon'                      =>  'icon-users',
                    'image'                     =>  '',
                    'icon_type'                 =>  'line-icons',
                    'allowed_permissions'       =>  'access,add,edit,delete',
                    'sequence'                  =>  1,
                    'is_display'                =>  'y',
                    'is_active'                 =>  'y',
                    'created_at'                => \Carbon\Carbon::now(),
                    'updated_at'                => \Carbon\Carbon::now(),
                ],
                [
                    'section_id'                =>  4,
                    'title'                     =>  'Gallery Management',
                    'route'                     =>  'admin.gallery.index',
                    'params'                    =>  '',
                    'icon'                      =>  'fa fa-check',
                    'image'                     =>  '',
                    'icon_type'                 =>  'font-awesome',
                    'allowed_permissions'       =>  'access,add,edit,delete',
                    'sequence'                  =>  1,
                    'is_display'                =>  'y',
                    'is_active'                 =>  'y',
                    'created_at'                => \Carbon\Carbon::now(),
                    'updated_at'                => \Carbon\Carbon::now(),
                ],
                [
                    'section_id'                =>  5,
                    'title'                     =>  'FAQ Management',
                    'route'                     =>  'admin.faqs.index',
                    'params'                    =>  '',
                    'icon'                      =>  'fa fa-question-circle',
                    'image'                     =>  '',
                    'icon_type'                 =>  'font-awesome',
                    'allowed_permissions'       =>  'access,add,edit,delete,view',
                    'sequence'                  =>  1,
                    'is_display'                =>  'y',
                    'is_active'                 =>  'y',
                    'created_at'                => \Carbon\Carbon::now(),
                    'updated_at'                => \Carbon\Carbon::now(),
                ],
                [
                    'section_id'                =>  6,
                    'title'                     =>  'CMS Management',
                    'route'                     =>  'admin.pages.index',
                    'params'                    =>  '',
                    'icon'                      =>  'fa fa-cogs',
                    'image'                     =>  '',
                    'icon_type'                 =>  'font-awesome',
                    'allowed_permissions'       =>  'access,edit,view',
                    'sequence'                  =>  1,
                    'is_display'                =>  'y',
                    'is_active'                 =>  'y',
                    'created_at'                => \Carbon\Carbon::now(),
                    'updated_at'                => \Carbon\Carbon::now(),
                ],
                [
                    'section_id'                =>  7,
                    'title'                     =>  'Countries',
                    'route'                     =>  'admin.countries.index',
                    'params'                    =>  '',
                    'icon'                      =>  'fas fa-flag',
                    'image'                     =>  '',
                    'icon_type'                 =>  'font-awesome',
                    'allowed_permissions'       =>  'access,add,edit,delete',
                    'sequence'                  =>  1,
                    'is_display'                =>  'y',
                    'is_active'                 =>  'y',
                    'created_at'                => \Carbon\Carbon::now(),
                    'updated_at'                => \Carbon\Carbon::now(),
                ],
                [
                    'section_id'                =>  8,
                    'title'                     =>  'States',
                    'route'                     =>  'admin.states.index',
                    'params'                    =>  '',
                    'icon'                      =>  'la la-flag',
                    'image'                     =>  '',
                    'icon_type'                 =>  'other',
                    'allowed_permissions'       =>  'access,add,edit,delete',
                    'sequence'                  =>  1,
                    'is_display'                =>  'y',
                    'is_active'                 =>  'y',
                    'created_at'                => \Carbon\Carbon::now(),
                    'updated_at'                => \Carbon\Carbon::now(),
                ],
                [
                    'section_id'                =>  9,
                    'title'                     =>  'Cities',
                    'route'                     =>  'admin.cities.index',
                    'params'                    =>  '',
                    'icon'                      =>  'la la-city',
                    'image'                     =>  '',
                    'icon_type'                 =>  'other',
                    'allowed_permissions'       =>  'access,add,edit,delete',
                    'sequence'                  =>  1,
                    'is_display'                =>  'y',
                    'is_active'                 =>  'y',
                    'created_at'                => \Carbon\Carbon::now(),
                    'updated_at'                => \Carbon\Carbon::now(),
                ],
                [
                    'section_id'                =>  10,
                    'title'                     =>  'Address',
                    'route'                     =>  'admin.addresses.index',
                    'params'                    =>  '',
                    'icon'                      =>  'la la-city',
                    'image'                     =>  '',
                    'icon_type'                 =>  'other',
                    'allowed_permissions'       =>  'access,add,edit,delete',
                    'sequence'                  =>  1,
                    'is_display'                =>  'y',
                    'is_active'                 =>  'y',
                    'created_at'                => \Carbon\Carbon::now(),
                    'updated_at'                => \Carbon\Carbon::now(),
                ],
                [
                    'section_id'                =>  11,
                    'title'                     =>  'Category',
                    'route'                     =>  'admin.categories.index',
                    'params'                    =>  '',
                    'icon'                      =>  'la la-city',
                    'image'                     =>  '',
                    'icon_type'                 =>  'other',
                    'allowed_permissions'       =>  'access,add,edit,delete',
                    'sequence'                  =>  1,
                    'is_display'                =>  'y',
                    'is_active'                 =>  'y',
                    'created_at'                => \Carbon\Carbon::now(),
                    'updated_at'                => \Carbon\Carbon::now(),
                ],
                [
                    'section_id'                =>  12,
                    'title'                     =>  'Event',
                    'route'                     =>  'admin.events.index',
                    'params'                    =>  '',
                    'icon'                      =>  'la la-city',
                    'image'                     =>  '',
                    'icon_type'                 =>  'other',
                    'allowed_permissions'       =>  'access,add,edit,delete',
                    'sequence'                  =>  1,
                    'is_display'                =>  'y',
                    'is_active'                 =>  'y',
                    'created_at'                => \Carbon\Carbon::now(),
                    'updated_at'                => \Carbon\Carbon::now(),
                ],
                [
                    'section_id'                =>  13,
                    'title'                     =>  'Donation',
                    'route'                     =>  'admin.donations.index',
                    'params'                    =>  '',
                    'icon'                      =>  'la la-city',
                    'image'                     =>  '',
                    'icon_type'                 =>  'other',
                    'allowed_permissions'       =>  'access,add,edit,delete',
                    'sequence'                  =>  1,
                    'is_display'                =>  'y',
                    'is_active'                 =>  'y',
                    'created_at'                => \Carbon\Carbon::now(),
                    'updated_at'                => \Carbon\Carbon::now(),
                ],
                [
                    'section_id'                =>  14,
                    'title'                     =>  'Team',
                    'route'                     =>  'admin.volunteers.index',
                    'params'                    =>  '',
                    'icon'                      =>  'la la-city',
                    'image'                     =>  '',
                    'icon_type'                 =>  'other',
                    'allowed_permissions'       =>  'access,add,edit,delete',
                    'sequence'                  =>  1,
                    'is_display'                =>  'y',
                    'is_active'                 =>  'y',
                    'created_at'                => \Carbon\Carbon::now(),
                    'updated_at'                => \Carbon\Carbon::now(),
                ],
        ];

        Role::insert($roles);
        //updated permissions of admin for new added section and role
        if(!empty(getPermissions('admin'))){
            DB::table('admins')->where(['id' => 1])->update(['permissions' => serialize(getPermissions('admin'))]);
        }
    }
}
