<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DBRoom extends Model
{
    protected $table='room';
 	protected $primaryKey='room_id';
    public $timestamps=false;
    protected $fillable=[
    'room_name'
    ];

 	public function reservation()
 	{
 		return $this->hasMany('App/DBReservation');
 	}
}
