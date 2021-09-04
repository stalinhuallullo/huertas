<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PropertyGaller extends Model
{
    protected $table = 'propertygallery';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'idProperty',
        'idPicture',
        'number_order'
    ];

//    protected static function boot()
//    {
//        parent::boot(); // TODO: Change the autogenerated stub
//        static::creating(function ($model) {
//            $model->created_at = $model->freshTimestamp();
//        });
//    }
}
