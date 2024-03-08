<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up() {
        DB::table('roles')->insert([
            ['name' => 'client'],
   
        ]);
    }

    public function down() {
        DB::table('roles')->where('name', '=', 'client')->delete();
        // Ajoutez la suppression d'autres rôles ici si nécessaire
    }
};