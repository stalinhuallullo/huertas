<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Novelty
 *
 * @property $id
 * @property $idCategory
 * @property $idCoverImagen
 * @property $title
 * @property $slug
 * @property $resume
 * @property $youtube
 * @property $text
 * @property $dateCreate
 * @property $status
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Novelty extends Model
{

    static $rules = [
		'idCategory' => 'required',
		'idCoverImagen' => 'required',
		'title' => 'required',
		'slug' => 'required',
		'resume' => 'required',
		'youtube' => 'required',
		'text' => 'required',
		'dateCreate' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;
    public $timestamps = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idCategory','idCoverImagen','title','slug','resume','youtube','text','dateCreate','status'];



}
