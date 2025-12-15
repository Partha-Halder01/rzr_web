<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistributorApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company_name',
        'city',
        'state',
        'experience',
        'message',
        'status',
        'is_read',
    ];

    protected $casts = [
        'is_read' => 'boolean',
    ];
}
