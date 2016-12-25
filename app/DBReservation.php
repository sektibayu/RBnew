<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DBReservation extends Model
{
	protected $table='reservation';
    protected $primaryKey='reservation_id';
    public $timestamps=false;
    protected $fillable=[
    'nrp_nip',
    'room_id',
    'date_begin',
    'time_begin',
    'date_finish',
    'time_finish',
    'purpose',
    'status'
    ];

 	public function room()
 	{
 		return $this->belongsTo('App\DBRoom','room_id','room_id');
 	}

 	public function user()
 	{
 		return $this->belongsTo('App\DBUser','nrp_nip','nrp_nip');
 	}
}
