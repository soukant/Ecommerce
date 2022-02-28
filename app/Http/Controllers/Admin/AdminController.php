<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        $data = User::select('id','created_at')->get()->groupBy(function($data)
        {
            return Carbon::parse($data->created_at)->format('M');
        });
        $months=[];
        $monthsCount=[];
        foreach($data as $month => $values){
            $months[]=$month;
            $monthCount[]=count($values);
        }
        return view('admin.index', ['data'=>$data, 'months'=>$months,'monthCount'=>$monthCount]);
    }



    // blank page functions
    public function blade_index()
    {
        return view('admin.blank.index');
    }
    public function blade_create()
    {
        return view('admin.blank.create');
    }
    public function blade_view()
    {
        return view('admin.blank.view');
    }
}
