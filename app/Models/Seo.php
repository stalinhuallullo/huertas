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
class Seo extends Model
{

    static $rules = [
        'title' => 'required',
        'description' => 'required',
        'tag' => 'required',
        'image' => 'required',
        'idPage' => 'required'
    ];

//    protected $perPage = 20;
    protected $table = 'seo';
    protected $primaryKey = 'id';
    public $timestamps = false;
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','description','tag', 'image', 'idPage'];
}
