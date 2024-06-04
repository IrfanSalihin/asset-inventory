<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopsTable extends Migration
{
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->string('assigned_staff_name')->nullable();
            $table->string('assigned_staff_number')->nullable();
            $table->string('location')->nullable();
            $table->string('model')->nullable();
            $table->string('pc_name')->nullable();
            $table->string('serial_number')->unique(); // Make serial number unique
            $table->enum('charger', ['Available', 'Not Available'])->nullable();
            $table->enum('power_cable', ['Available', 'Not Available'])->nullable();
            $table->string('operating_system')->nullable();
            $table->string('windows_product_key')->nullable();
            $table->enum('operating_system_bit', ['32 bit', '64 bit'])->nullable();
            $table->string('processor')->nullable();
            $table->string('device_id')->nullable();
            $table->string('product_id')->nullable();
            $table->integer('hdd_size_gb')->nullable(); // Consider using singular form for consistency
            $table->integer('ssd_size_gb')->nullable();
            $table->integer('ram_size_gb')->nullable();
            $table->string('gpu')->nullable();
            $table->string('microsoft_office_year')->nullable();
            $table->string('microsoft_office_license')->nullable();
            $table->string('microsoft_id')->nullable();
            $table->string('microsoft_password')->nullable();
            $table->enum('antivirus', ['Available', 'Not Available']);

            // Conditional columns based on antivirus availability
            $table->date('antivirus_expired_date')->nullable();
            $table->string('antivirus_license')->nullable();

            $table->year('year_purchased')->nullable();
            $table->date('purchasing_date')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->integer('warranty_years')->nullable(); // Consider using singular form and integer for years
            $table->enum('status', ['Available', 'Reserve', 'Damaged', 'Scrap']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('laptops');
    }
}
