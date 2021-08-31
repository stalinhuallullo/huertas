<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Clientreferred
 *
 * @property $id
 * @property $idClient
 * @property $idProperty
 * @property $name
 * @property $firstSurname
 * @property $lastSurname
 * @property $phone
 * @property $email
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Clientreferred extends Model
{

    static $rules = [
		'idClient' => 'required',
		'idProperty' => 'required',
		'name' => 'required',
		'firstSurname' => 'required',
		'lastSurname' => 'required',
		'phone' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;
    public $timestamps = false;
    protected $table = 'clientreferred';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idClient','idProperty','name','firstSurname','lastSurname','phone','email'];



}
