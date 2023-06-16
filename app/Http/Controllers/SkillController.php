<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class SkillController extends Controller
{
    public function Skill()
    {
        $skills = DB::table('skills')->get();
        return view('backend.pages.Skill.index',compact('skills'));
    }

    public function SkillAdd ()
    {
        return view('backend.pages.Skill.add');
    }

    public function SkillPost (Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['number'] = $request->number;
        $data['status'] = $request->status;
        DB::table('skills')->insert($data);
        $notification = array('message' => 'Add Success!','alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function SkillEdit ($id)
    {
        $data = DB::table('skills')->where('id',$id)->first();
        return view('backend.pages.Skill.edit',compact('data'));
    }

    public function SkillDelete ($id)
    {
        $check =  DB::table('skills')->where('id',$id)->first();
        if ($check->icon) {
            @unlink(public_path($check->icon));
        }
        DB::table('skills')->where('id',$id)->delete();
        $notification = array('message' => 'Remove Success!','alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function SkillUpdate (Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['number'] = $request->number;
        $data['status'] = $request->status;
        DB::table('skills')->where('id',$request->id)->update($data);
        $notification = array('message' => 'Update Success!','alert-type' => 'success');
        return redirect()->route('Skill')->with($notification);
    }


}
