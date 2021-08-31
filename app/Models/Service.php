<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 *
 * @property $id
 * @property $title
 * @property $description
 * @property $image
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Service extends Model
{

    static $rules = [
		'title' => 'required',
		'description' => 'required',
		'image' => 'required|image|max:2048',
    ];

//    protected $perPage = 20;
    protected $table = 'services';
    protected $primaryKey = 'id';
    public $timestamps = false;
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','description','image'];


}
