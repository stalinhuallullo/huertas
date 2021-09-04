<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Us extends Model
{
    protected $table = 'us';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $rule = [
        'longitude' => 'required',
        'latitude' => 'required',
        'description' => 'required',
        'trust_year' => 'required',
        'trust_dev' => 'required',
        'trust_benefits' => 'required',
        'trust_areas' => 'required',
        'contact_mission' => 'required',
        'contact_mission_img' => 'required',
        'contact_vision' => 'required',
        'contact_vision_img' => 'required'
    ];

    protected $fillable = [
        'longitude',
        'longitude',
        'latitude',
        'description',
        'trust_year',
        'trust_dev',
        'trust_benefits',
        'trust_areas',
        'contact_mission',
        'contact_mission_img',
        'contact_vision',
        'contact_vision_img'
    ];
}
