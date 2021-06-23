<?php

namespace App\Http\Controllers;

use App\Midsemester;
use Illuminate\Http\Request;

class UtsController extends Controller
{
    //
    public function index()
    {


        /*$products = Product::all();*/
        $midsemesters = Midsemester::all();

        /*dd($midsemesters);    */

        return view('mid.index', compact('midsemesters'));
        //
    }
    public function add()
    {
        return view('mid.add');
        //

    }
    public function save(Request $request)
    {
       
        Midsemester::create($request->all());
        return redirect()->route('mid.index');
    }
    public function delete($id_215)
    {
        //
        $midsemesters = Midsemester::find($id_215);
        $midsemesters->delete();
        return redirect()->route('mid.index');
        
    }
}
