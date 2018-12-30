<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LatestNews;
use App\Models\Talukas;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class Dashboard extends Controller
{
    public function index(Request $request){
    	$users = \Auth::user();
    	return view("admin_pages.dashboard.home",compact('users'));
    }

    public function listLatestNews(Request $request){
    	if(@$request->type){
    		LatestNews::destroy($request->id);
    		return redirect()->back()->with('status','Successfully Deleted.');
    	}
    	$users = \Auth::user();
    	if($request->isMethod('GET')){
    		$data = LatestNews::orderBy('created_at', 'DESC')->get();
    		return view("admin_pages.latestNews.list",compact('data'));
    	}
    }

    public function saveLatestNews(Request $request){
    	$users = \Auth::user();
    	if($request->isMethod('GET')){
    		$data = NULL;
    		if($request->id){
    			$data = LatestNews::find($request->id);
    		}
    		return view("admin_pages.latestNews.create",compact('data'));
    	}
    	$id = $request->id;
    	$title = $request->title;
    	$descriptions = $request->descriptions;
    	$createUPdate = LatestNews::updateOrCreate(
    		['id' => $id],
    		['name' => $title, 'descriptions'=> $descriptions]
    	);
    	return redirect('admin/latestNews')->with('status','Successfully Saved.');
    }
   	// ----------------------- End Latest News ----------------------------

    public function listTaluka(Request $request){
    	if(@$request->type){
    		Talukas::destroy($request->id);
    		return redirect()->back()->with('status','Successfully Deleted.');
    	}
    	if($request->isMethod('GET')){
    		return view("admin_pages.taluka.list",compact('data'));
    	}
    }

    public function saveTaluka(Request $request){
    	$users = \Auth::user();
    	if($request->isMethod('GET')){
    		$data = NULL;
    		if($request->id){
    			$data = Talukas::getList()->where('t.id','=',$request->id)->first();
    		}
    		$states = DB::table('states')->select('*')->get();
    		return view("admin_pages.taluka.save",compact('data','states'));
    	}
    	$id = $request->id;
    	$name = $request->name;
    	$district_id = $request->district;
    	$createUPdate = Talukas::updateOrCreate(
    		['id' => $id],
    		['name' => $name, 'district_id'=> $district_id]
    	);
    	return redirect('admin/taluka')->with('status','Successfully Saved.');
    }

    public function districtAjax(Request $request){
    	if($request->isMethod('POST')){
    		$district = DB::table('districts')->select('*')->where('state_id','=',$request->state_id)->get();
    		$html = NULL;
    		foreach ($district as $key => $value) {
    			$html .= '<option value="'.$value->id.'">'.$value->name.'</option>';
    		}
    		return response()->json(['data' => $html],200);
    	}
    }

    public function talukaJson(){
    	$data = Talukas::getList()->get();
    	return Datatables::of($data)->make(true);
    }
    // --------------------- End Taluka ------------------------------------
}
