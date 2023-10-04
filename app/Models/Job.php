<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'user_name',
        'file_name',
        'validated',
        'pdf_creation_date',
        'pdf_modified_date',
        'status',
        'edited'
    ];
}
