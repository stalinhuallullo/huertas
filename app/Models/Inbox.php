<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inbox
 *
 * @property $id
 * @property $typepage
 * @property $name
 * @property $lastname
 * @property $email
 * @property $message
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inbox extends Model
{
    protected $table = 'inbox';
    protected $primaryKey = 'id';
    public $timestamps = false;

    static $rules = [
		'name' => 'required',
		'movil' => 'required',
		'lastname' => 'required',
		'email' => 'required',
		'message' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['typepage', 'movil','name','lastname','email','message'];



}
