<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('category.index',compact('categories'));
    }

    public function add_index(){
        return view('category.add');
    }

    public function create(Request $request){

        $data = $request->validate(
            ['category' => 'required|string|max:15|unique:categories,name'],
            [
                'category.require' => 'Пустое поле',
                'category.string' => 'Неверное значение',
                'category.max' => 'Поле не может быть больше :max символов',
                'category.unique' => 'Это уже занято'
            ]
        );
        Category::create([
            'name'=>$data['category']
            ]);
        return redirect('/catalog');
    }

    public function edit_index($id){
        $category = Category::find($id);
        return view('category.edit',compact('category'));
    }

    public function edit_category(Request $request, $id){
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect('/categories');
    }
}
