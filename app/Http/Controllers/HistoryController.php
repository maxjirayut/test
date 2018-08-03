<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\History;
use DB;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history= History::all()->toArray();
        return view('history.index',compact('history'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('history.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

          'name' => 'required',
          'sex' => 'required',
          'status' => 'required',
          'nationality' => 'required',
          'religion' => 'required',
          'birthdays' => 'required',
          'address' => 'required',
          'phone' => 'required',
          'graduated' => 'required',
          'branch' => 'required'

        ]);

        $history = new History([

          'name' => $request->get('name'),
          'sex' => $request->get('sex'),
          'status' => $request->get('status'),
          'nationality' => $request->get('nationality'),
          'religion' => $request->get('religion'),
          'birthdays' => $request->get('birthdays'),
          'address' => $request->get('address'),
          'phone' => $request->get('phone'),
          'graduated' => $request->get('graduated'),
          'branch' => $request->get('branch')
        ]);

        $history->save();
        return redirect()->route('history.index');

        // $name = $request->input('name');
        // $sex = $request->input('sex');
        // $status = $request->input('status');
        // $nationality = $request->input('nationality');
        // $religion = $request->input('religion');
        // $birthdays = $request->input('birthdays');
        // $address = $request->input('address');
        // $phone = $request->input('phone');
        // $graduated = $request->input('graduated');
        // $branch = $request->input('branch');
        //
        // $data = array(
        //   'name'=>$name,
        //   'sex'=>$sex,
        //   'status'=>$status,
        //   'nationality'=>$nationality,
        //   'religion'=>$religion,
        //   'birthdays'=>$birthdays,
        //   'address'=>$address,
        //   'phone'=>$phone,
        //   'graduated'=>$graduated,
        //   'branch'=>$branch);
        //
        //   DB::table('students')->insert($data);
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
      $history = History::find($id);
      return view('history.edit', compact('history','id'));
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
      $this->validate($request,[
        'name' => 'required',
        'sex' => 'required',
        'status' => 'required',
        'nationality' => 'required',
        'religion' => 'required',
        'birthdays' => 'required',
        'address' => 'required',
        'phone' => 'required',
        'graduated' => 'required',
        'branch' => 'required'
      ]);
      $history= History::find($id);
      $history->name = $request->get('name');
      $history->sex = $request->get('sex');
      $history->status = $request->get('status');
      $history->nationality = $request->get('nationality');
      $history->religion = $request->get('religion');
      $history->birthdays = $request->get('birthdays');
      $history->address = $request->get('address');
      $history->phone = $request->get('phone');
      $history->graduated = $request->get('graduated');
      $history->branch = $request->get('branch');
      $history->save();
      return redirect()->route('history.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $history = History::find($id);
      $history->delete();
      return redirect()->route('history.index');
    }
}
