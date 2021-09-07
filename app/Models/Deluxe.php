<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Deluxe
 *
 * @property $id
 * @property $title
 * @property $description
 * @property $location
 * @property $cover_image
 * @property $from
 * @property $until
 * @property $images_ready
 * @property $condo_title
 * @property $condo_description
 * @property $youtube
 * @property $youtube_image
 * @property $form_image
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */



class Deluxe extends Model
{

    protected $table = 'deluxe';
    protected $primaryKey = 'id';
    public $timestamps = false;

    static $rules = [
		'title' => 'required',
		'description' => 'required',
		'location' => 'required',
		'from' => 'required',
		'until' => 'required',
		'condo_title' => 'required',
		'condo_description' => 'required',
		'youtube' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','description','location','cover_image','from','until','images_ready','condo_title','condo_description','youtube','youtube_image','form_image'];



}
