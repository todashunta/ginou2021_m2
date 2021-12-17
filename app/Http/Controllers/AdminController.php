<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassShop;

class AdminController extends Controller
{
    public function home()
    {
        $shops = ClassShop::get();
        return view('home', compact('shops'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'grade' => 'required|integer',
            'class' => 'required',
            'program' => 'required',
            'leader' => 'required',
            'shop_flag' => 'required',
            'remarks' => '',
        ]);

        ClassShop::create([
            'grade' => $request->grade,
            'class' => $request->class,
            'program' => $request->program,
            'leader' => $request->leader,
            'shop_flag' => $request->shop_flag,
            'remarks' => $request->remarks,
        ]);
        return view('comp');
    }
}
