<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;

    protected $fillable = [
        'slider1',
        'slider2',
        'title',
        'description',
        'who_we_are_desc',
        'feature1_icon',
        'feature2_icon',
        'feature3_icon',
        'feature1_title' ,
        'feature2_title' ,
        'feature3_title' ,
        'feature1_desc' ,
        'feature2_desc' ,
        'feature3_desc' ,
        'who_we_are_img_first',
        'who_we_are_img_second',
        'why_eei_image',
        'services',
        'why_eei_desc',
        'why_eei_points',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function partnerCategory()
    {
        return $this->belongsTo(Category::class, 'partner_category_id');
    }
}
