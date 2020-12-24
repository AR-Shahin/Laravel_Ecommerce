<?php

use App\Admin;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $admin = [
            'name' => 'Default Admin',
            'email' => 'default@admin.com',
            'password' => bcrypt(123),
            'image' => 'uploads/admin/default.png',
            'status' => 1,
            'created_at' => now()
        ];
        Admin::create($admin);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
