<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Desktop extends Model
{
    protected $fillable = [
        'assigned_staff_name',
        'assigned_staff_number',
        'location',
        'desktop_model',
        'desktop_name',
        'desktop_serial_number',
        'monitor_model',
        'monitor_serial_number',
        'keyboard',
        'mouse',
        'power_cable',
        'display_cable',
        'operating_system',
        'windows_product_key',
        'operating_system_bit',
        'processor',
        'device_id',
        'product_id',
        'hdd_sizes_gb',
        'ssd_sizes_gb',
        'ram_sizes_gb',
        'microsoft_office_year',
        'microsoft_office_license',
        'microsoft_office_id',
        'microsoft_office_password',
        'antivirus',
        'antivirus_expired_date',
        'antivirus_license',
        'year_purchased',
        'account_date_purchase',
        'date_purchased',
        'price',
        'status',
    ];
}
