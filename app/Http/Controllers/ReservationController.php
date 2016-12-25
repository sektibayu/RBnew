<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DBReservation;
use App\DBUser;
use App\DBRoom;

class ReservationController extends Controller
{
    public function ReservationInput(Request $req){
        $data = $req->all();
        $user = DBUser::where('nrp_nip', '=', $data['nrp_nip'])->first();
        if($user === null){
            return 1;
        }
        else{
            DBReservation::InsertGetId(array(
                'nrp_nip'=>$data['nrp_nip'],
                'room_id'=>$data['room_id'],
                'date_begin'=>$data['date_begin'],
                'time_begin'=>$data['time_begin'],
                'date_finish'=>$data['date_finish'],
                'time_finish'=>$data['time_finish'],
                'purpose'=>$data['purpose'],
                'status'=>'0'
                ));
            return redirect('reservasi');
        }
    }

    public function DisplayPendingRequest(){
        $display = DBReservation::where('status', '=', '0')->get();
        return view('pages.reservasi',compact('display'));
    }

    public function DisplayAvaibilityRoom(){
    }
}
