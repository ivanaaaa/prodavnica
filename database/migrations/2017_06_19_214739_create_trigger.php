<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
CREATE TRIGGER `cena_triger` AFTER INSERT ON `produkti` FOR EACH ROW BEGIN IF NEW.cena < 1000 THEN INSERT INTO `notifikacii`(`id_produkt`, `prethodna_cena`) VALUES (NEW.id, NEW.cena); END IF; END;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `cena_triger`');
    }
}
