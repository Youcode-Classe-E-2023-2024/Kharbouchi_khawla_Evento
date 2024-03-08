<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up() {
        
        DB::table('roles')->insert([
            ['name' => 'client'],
            ['name' => 'admin'], 
            ['name' => 'organisateur']
        ]);
    }

    public function down() {
        DB::table('roles')->where('name', '=', 'client')->delete();
        DB::table('roles')->where('name', '=', 'admin')->delete(); 
        DB::table('roles')->where('name', '=', 'organisateur')->delete(); 
    }
};
