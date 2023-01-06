<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Helpers\ResponseFormatter;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function index()
    {
        return ResponseFormatter::success(Category::all(),'OK');
    }

    public function show($id)
    {
        return ResponseFormatter::success(Category::find($id),'OK');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required|unique:categories',
            'price' => 'required|integer',
            'description' => 'required|string'
        ]);
        $category = Category::create($request->all());
        return ResponseFormatter::success($category,'OK');
    }

    public function update($id, Request $request)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return ResponseFormatter::success($category,'OK');
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return ResponseFormatter::success([],'OK');
    }
}