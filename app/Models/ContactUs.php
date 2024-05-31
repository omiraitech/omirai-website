<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'contact',
        'company_name',
        'sector_of_activity',
        'motive',
        'message',
        'created_at',
        'updated_at',
    ];
}
