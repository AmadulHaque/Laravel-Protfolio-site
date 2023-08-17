<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB , Str;
class PortfolioController extends Controller
{
   
    public function PortfolioType()
    {
        $data = DB::table('port_types')->get();
        return view('backend.pages.PortfolioType.index',compact('data'));
    }
    public function PortfolioTypeAdd ()
    {
        return view('backend.pages.PortfolioType.add');
    }
    public function PortfolioTypeEdit ($id)
    {
        $data = DB::table('port_types')->where('id',$id)->first();
        return view('backend.pages.PortfolioType.edit',compact('data'));
    }
    public function PortfolioTypeDelete ($id)
    {
        $check =  DB::table('port_types')->where('id',$id)->first();
        DB::table('port_types')->where('id',$id)->delete();
        $notification = array('message' => 'Remove Success!','alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    public function PortfolioTypePost (Request $request)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['slug'] = Str::slug($request->title);
        $data['status'] = $request->status;
        DB::table('port_types')->insert($data);
        $notification = array('message' => 'Add Success!','alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    public function PortfolioTypeUpdate (Request $request)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['slug'] = Str::slug($request->title);
        $data['status'] = $request->status;
        DB::table('port_types')->where('id',$request->id)->update($data);
        $notification = array('message' => 'Update Success!','alert-type' => 'success');
        return redirect()->route('PortfolioType')->with($notification);
    }

    
    // =================== //
    public function Portfolio()
    {
        $data = DB::table('portfolios')->get();
        return view('backend.pages.Portfolio.index',compact('data'));
    }
    public function PortfolioAdd ()
    {
        return view('backend.pages.Portfolio.add');
    }
    public function PortfolioEdit ($id)
    {
        $data = DB::table('portfolios')->where('id',$id)->first();
        return view('backend.pages.Portfolio.edit',compact('data'));
    }
    public function PortfolioDetails ($id)
    {
        $data = DB::table('portfolios')->where('id',$id)->first();
        return view('backend.pages.Portfolio.details',compact('data'));
    }
    public function PortfolioDelete ($id)
    {
        $check =  DB::table('portfolios')->where('id',$id)->first();
        if ($check->image) {
            @unlink(public_path($check->image));
        }
        DB::table('portfolios')->where('id',$id)->delete();
        $notification = array('message' => 'Remove Success!','alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    public function PortfolioPost (Request $request)
    {
        $data = array();
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('images/portfolio/'),$filename);
            $data['image'] = 'images/portfolio/'.$filename;
        }
        $data['type_id'] = $request->type_id;
        $data['title'] = $request->title;
        $data['desc'] = $request->desc;
        $data['project'] = $request->project;
        $data['languages'] = $request->languages;
        $data['client'] = $request->client;
        $data['preview'] = $request->preview;
        $data['status'] = $request->status;
        DB::table('portfolios')->insert($data);
        $notification = array('message' => 'Add Success!','alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    public function PortfolioUpdate (Request $request)
    {
        $data = array();
        if ($request->file('image')) {
            $check =  DB::table('portfolios')->where('id',$request->id)->first();
            if ($check->image) {
                @unlink(public_path($check->image));
            }
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('images/portfolio/'),$filename);
            $data['image'] = 'images/portfolio/'.$filename;
        }
        $data['type_id'] = $request->type_id;
        $data['title'] = $request->title;
        $data['desc'] = $request->desc;
        $data['project'] = $request->project;
        $data['languages'] = $request->languages;
        $data['client'] = $request->client;
        $data['preview'] = $request->preview;
        $data['status'] = $request->status;
        DB::table('portfolios')->where('id',$request->id)->update($data);
        $notification = array('message' => 'Update Success!','alert-type' => 'success');
        return redirect()->route('Portfolio')->with($notification);
    }






}
