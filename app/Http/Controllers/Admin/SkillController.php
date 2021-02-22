<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Skill;
use DB;
use Session;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $skills=Skill::all();
       return view('admin.skill.index')->withSkills($skills);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $skills = new Skill;
        $validatedData =$request->validate([
        'skill' => 'bail|required|unique:skills',
        ]);
        $skills->skill = $request['skill'];

        $skills->save();
        session::flash('success', 'The Skill Has Been Added Successfully!');
        return redirect()->route('skill.index');
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

        $skills=Skill::find($id);
        // dd($skills);

        return view('admin.skill.edit')->withSkills($skills);
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
        $skills=Skill::find($id);
        $validatedData =$request->validate([
        'skill' => 'bail|required|unique:skills',
        ]);
        $skills->skill = $request['skill'];
        $skills->save();
        session::flash('success', 'The Skill Has Been Updated Successfully!');
        return redirect()->route('skill.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id,Request $request)
    {
        $skill=Skill::find($id);
        $skill->delete();
        $request->session()->flash('success', 'The Skill Details Has Been Deleted.');
        return redirect('/admin/skill');
    }
}
