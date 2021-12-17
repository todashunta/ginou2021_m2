<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassShop;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        $query = ClassShop::query();
        // dd(isset($request->gradeNumber));
        if (!empty($request->gradeNumber)) {
            $query->where('grade', $request->gradeNumber);
        }
        if (!empty($request->classNumber)) {
            $query->where('class', $request->classNumber);
        }
        if (!empty($request->program)) {
            $query->where('program', 'like', '%' . $request->program . '%');
        }
        if (!empty($request->food_flag)) {
            $query->where('shop_flag', $request->food_flag);
        }
        $shop = $query->get();
        return response()->json($shop);
    }
}
