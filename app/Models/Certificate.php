<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $table = 'certificate_setting';
    protected $fillable = [
        'title' ,
        'description' ,
        'gallery' ,
        'hero'
    ];
}
