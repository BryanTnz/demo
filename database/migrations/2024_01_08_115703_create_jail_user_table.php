<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('jail_user', function (Blueprint $table) {
            // ID para la tabla de la BDD
            $table->id();

            // columnas para la tabla de la BDD
            $table->unsignedBigInteger('jail_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('state')->default(true);

            // Relación
            //Un usuario puede estar en varias cárceles y una cárcel puede tener muchos usuarios             $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            //Un usuario puede estar en varias cárceles y una cárcel puede tener muchos usuarios 
            $table->foreign('jail_id')
                    ->references('id')
                    ->on('jails')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            // columnas especiales para la tabla de la BDD
            $table->timestamps();
        
            
        });
        
        
    }

    

    public function down(): void
    {
        Schema::dropIfExists('jail_user');
    }
};
