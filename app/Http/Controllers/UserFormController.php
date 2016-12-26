<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DBUser;

class UserFormController extends Controller
{
    
    public function index()
    {
        return view('pages.admin.form');
    }
   
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $user = DBUser::where('nrp_nip', '=', $data['nrp_nip'])->first();
        if($user === null){
            DBUser::InsertGetId(array(
                'nrp_nip'=>$data['nrp_nip'],
                'name'=>$data['name']
                ));
            return redirect('form');    
        }
        else{
            return 1;
        }
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
