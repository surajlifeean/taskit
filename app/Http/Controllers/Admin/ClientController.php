<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use Session;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('admin.client.index')->withClients($clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client=new Client;
        $validatedData =$request->validate([
        'email' => 'bail|required|unique:clients',
        ]);
        $variable=$request->toArray();
        foreach ($variable as $key => $value){
        if($key!='_token')
            $client->$key=$value;
        }

        $client->save();
        session::flash('success', 'The Client Has Been Added Successfully!');
        return redirect()->route('client.index');
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
        $client=Client::find($id);
        return view('admin.client.edit')->withClient($client);

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
        $client=Client::find($id);
        $variable=$request->toArray();
        foreach ($variable as $key => $value){
        if($key!='_token' & $key!='_method')
            $client->$key=$value;
        }

        $client->save();
        session::flash('success', 'The Client Has Been Updated Successfully!');
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id,Request $request)
    {   
        $client=Client::find($id);
        $client->delete();
        $request->session()->flash('success', 'The Assignee Details Has Been Deleted.');
        return redirect('/admin/client');
        
        // dd($request); 
    }
}
