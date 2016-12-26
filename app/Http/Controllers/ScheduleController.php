<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DBReservation;
use JavaScript;

class ScheduleController extends Controller
{
    
    public function index()
    {
        $schedule = DBReservation::where('room_id', '=', '5')->first();
        //JavaScript::put(['schedule' => array()$schedule]);
        return view('pages.index', compact('schedule'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
