<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSetting extends Model
{
    use HasFactory;
        protected $table = 'about_settings';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = true;

        protected $fillable = [
            'title',
            'hero_image',
            'who_we_are',
            'who_we_are_image',
            // 'our_message',
            // 'our_message_image',
            'our_vision',
            'our_vision_image',
            'our_vision_image2',
            'our_mission',
            'our_mission_image',
            'gallery_id',
            'gallery_value_id',

        ];

        protected $hidden = [
            'created_at',
            'updated_at',
        ];
}
