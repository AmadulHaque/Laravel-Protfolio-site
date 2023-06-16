<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class HeroController extends Controller
{
    //

    public function HeroHome ()
    {
        $hero = DB::table('hero_sections')->first();
        return view('backend.pages.heroSection.index',compact('hero'));
    }

    public function updateHeroSec (Request $request)
    {
   
        $check =DB::table('hero_sections')->first();
        $data = array();
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('images/profile/'.$check->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('images/profile/'),$filename);
            $data['image'] = $filename;
        }
        if ($request->file('frontimage')) {
            $file = $request->file('frontimage');
            @unlink(public_path('images/profile/'.$check->frontimage));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('images/profile/'),$filename);
            $data['frontimage'] = $filename;
        }
        if ($request->file('backimage')) {
            $file = $request->file('backimage');
            @unlink(public_path('images/profile/'.$check->backimage));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('images/profile/'),$filename);
            $data['backimage'] = $filename;
        }
        $data['head'] = $request->head;
        $data['name'] = $request->name;
        $data['designation'] = $request->designation;
        $data['title'] = $request->title;
        $data['project'] = $request->project;
        $data['github'] = $request->github;
        $data['fb'] = $request->fb;
        $data['linkdin'] = $request->linkdin;
        $data['youtube'] = $request->youtube;
        DB::table('hero_sections')->update($data);
        $notification = array('message' => 'Update Success!','alert-type' => 'success');
        return redirect()->back()->with($notification);

    }





}
