<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('nPerCodigo',20)->unique();
            $table->string('cPerApellido',50);
            $table->string('cPerNombre',50);
            $table->string('cPerDireccion',50);
            $table->date('dPerFecNac');
            $table->integer('nPerEdad');
            $table->char('cPerSexo', 15)->nullable()->default('Maculino');
            $table->decimal('nPerSueldo', 6, 2);
            $table->string('cPerRnd',50);
            $table->char('cPerEstado',1)->default('1');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
