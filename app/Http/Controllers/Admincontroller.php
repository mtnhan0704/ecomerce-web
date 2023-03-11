<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;



class Admincontroller extends Controller
{
    public function view_catagory()
    {
        return view('admin.catagory');
    }
    public function add_catagory(Request $request)
    {
        $data = new catagory;
        $data->catagory_name = $request->catagory;

        $data->save();
        return redirect()->back();
    }
}
