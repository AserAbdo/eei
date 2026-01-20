<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'site-name',
        'logo',
        'favicon',
        'phone',
        'footer',
        'email',
        'working_hours',
        'address',
        'facebook',
        'instagram',
        'linkedin',
        'youtube',
        'contact_hero',
        'contact_img',
    ];

    public function interiorDesignGallery()
    {
        return $this->belongsTo(Category::class, 'interior_design_gallery');
    }
}
