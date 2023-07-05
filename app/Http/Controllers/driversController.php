<?php

namespace App\Http\Controllers;

use App\drivers;
use App\spots;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class driversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = drivers::with('spots')->get();
        $spots = spots::with('drivers')->get();
        return view('pages.driversView',compact('drivers','spots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.driversForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([          
            'name' => 'required|max:255',
            'phone'=>'required|digits:11|Numeric', 
            'age'=>'required|integer',
            'nId'=>'required|Numeric|digits:14',
            'shift'=>'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', ],
            'ambulance_spot_id'=>['required', 'integer'],
        ]);
        $input['password'] = bcrypt($input['password']);
        drivers::create($input);
        return redirect('drivers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function delete(){
        $drivers = drivers::with('spots')->get();
        $spots = spots::with('drivers')->get();
        return view('pages.deleteDrivers',compact('drivers','spots'));
     }
    public function destroy($id)
    {
        drivers::destroy($id);

      Session::flash('message', 'Delete successfully!');
      Session::flash('alert-class', 'alert-success');
      return redirect()->route('drivers');
    }
}
