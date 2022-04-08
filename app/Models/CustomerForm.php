<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'trackingCode',
        'city',
        'serviceName',
        'customerID',
        'formStatus',
        'data'
    ];
}
