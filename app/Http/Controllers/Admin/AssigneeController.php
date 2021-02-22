<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Assignee;
use App\Skill;
use Session;
use DB;

class AssigneeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignees=Assignee::all();
        return view('admin.assignee.index')->withAssignees($assignees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $skills=Skill::all();
        return view('admin.assignee.create')->withSkills($skills);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $assignee=new Assignee;
        $variable=$request->toArray();
        foreach ($variable as $key => $value){
        if($key!='_token' & $key!='skills')
            $assignee->$key=$value;
        }

        $assignee->save();


        $assignee->skills()->sync($request->skills,false);        

        session::flash('success', 'The Assignee Has Been Added Successfully!');
        return redirect()->route('assignee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assignee=Assignee::find($id);
        // dd($assignee);
        $skills_id = DB::table('assignees_skills')->where('assignee_id', $id)->pluck('skill_id');
        // dd($skills);

        foreach($skills_id as $skill_id){
            $rslt = DB::table('skills')->where('id', $skill_id)->pluck('skill');
            $skills[$skill_id] = $rslt;
        }
        // dd($skills);

        return view('admin.assignee.show')->withAssignee($assignee)->withSkills($skills);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $assignee=Assignee::find($id);
        $skills=Skill::all();
        return view('admin.assignee.edit')->withAssignee($assignee)->withSkills($skills);

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
        $assignee=Assignee::find($id);
        $variable=$request->toArray();
        foreach ($variable as $key => $value){
        if($key!='_method' & $key!='skills'& $key!='_token')
            $assignee->$key=$value;
        }

        $assignee->save();


        $assignee->skills()->sync($request->skills,false);        

        session::flash('success', 'The Assignee Has Been updated Successfully!');
        return redirect()->route('assignee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id,Request $request)
    {   
        $assignee=Assignee::find($id);
        $assignee->delete();
        $request->session()->flash('success', 'The Assignee Details Has Been Deleted.');
        return redirect('/admin/assignee');
        
        // dd($request); 
    }
}