<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesktopsTable extends Migration
{
    public function up()
    {
        Schema::create('desktops', function (Blueprint $table) {
            $table->id();
            $table->string('assigned_staff_name')->nullable();
            $table->string('assigned_staff_number')->nullable();
            $table->string('location')->nullable();
            $table->string('desktop_model')->nullable();
            $table->string('desktop_name')->nullable();
            $table->string('desktop_serial_number')->nullable();
            $table->string('monitor_model')->nullable();
            $table->string('monitor_serial_number')->nullable();
            $table->enum('keyboard', ['Available', 'Not Available'])->nullable();
            $table->enum('mouse', ['Available', 'Not Available'])->nullable();
            $table->enum('power_cable', ['Available', 'Not Available'])->nullable();
            $table->enum('display_cable', ['Available', 'Not Available'])->nullable();
            $table->string('operating_system')->nullable();
            $table->string('windows_product_key')->nullable();
            $table->enum('operating_system_bit', ['32 bit', '64 bit'])->nullable();
            $table->string('processor')->nullable();
            $table->string('device_id')->nullable();
            $table->string('product_id')->nullable();
            $table->integer('hdd_sizes_gb')->nullable();
            $table->integer('ssd_sizes_gb')->nullable();
            $table->integer('ram_sizes_gb')->nullable();
            $table->string('microsoft_office_year')->nullable();
            $table->string('microsoft_office_license')->nullable();
            $table->string('microsoft_office_id')->nullable();
            $table->string('microsoft_office_password')->nullable();
            $table->enum('antivirus', ['Available', 'Not Available'])->nullable();
            $table->date('antivirus_expired_date')->nullable();
            $table->string('antivirus_license')->nullable();
            $table->year('year_purchased')->nullable();
            $table->date('account_date_purchase')->nullable();
            $table->date('date_purchased')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->enum('status', ['Available', 'Reserve', 'Damaged', 'Scrap'])->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('desktops');
    }
}
