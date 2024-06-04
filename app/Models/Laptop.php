<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $fillable = [
        'assigned_staff_name',
        'assigned_staff_number',
        'location',
        'model',
        'pc_name',
        'serial_number',
        'charger',
        'power_cable',
        'operating_system',
        'windows_product_key',
        'operating_system_bit',
        'processor',
        'device_id',
        'product_id',
        'hdd_size_gb',
        'ssd_size_gb',
        'ram_size_gb',
        'gpu',
        'microsoft_office_year',
        'microsoft_office_license',
        'microsoft_id',
        'microsoft_password',
        'antivirus',
        'antivirus_expired_date',
        'antivirus_license',
        'year_purchased',
        'purchasing_date',
        'price',
        'warranty_years',
        'status',
    ];
}
