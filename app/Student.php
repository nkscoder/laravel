<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    const TABLE      = 'students';
    const NAME       = 'name';
    const USERNAME   = 'username';
//
//
//    protected $table = self::TABLE;
//
//
//    protected $fillable = [self::NAME, self::USERNAME];
//
//    public $timestamps = false;



    protected $table = 'students';

    protected $fillable = ['name', 'username'];

    public $timestamps = false;

//    public function section()
//    {
//        return $this->belongsTo('App\Section');
//    }
}
