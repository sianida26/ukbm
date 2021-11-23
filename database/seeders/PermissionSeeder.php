<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{

    

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $permissionNames = [];
        $skipCount = 0;
        collect($permissionNames)->map(function ($name) use (&$skipCount){
            if (Permission::all()->contains('name', $name)) { //preventing duplicate permission
                $skipCount++;
                return;
            }
            $permission = Permission::create([/* 'guard_name' => 'api', */ 'name' => $name]);
        });
        if ($skipCount > 0) $this->command->info($skipCount.' '. Str::plural('permission',$skipCount) .' skipped');
    }
}
