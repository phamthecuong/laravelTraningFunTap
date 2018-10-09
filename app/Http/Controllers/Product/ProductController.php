<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\productRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::select('id', 'name')->get();
        return view('product.add', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(productRequest $request)
    {   
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->categoryId = $request->categoryId;
        if($request->hasfile('img'))
        {
            $file = $request->file('img');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
            $product->img = $name;
        }
        $product->save();
        return redirect('admin/product')->with('message', 'Create successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $product = Product::with('category')->find(1);
        return view('product.edit', ['product' => $product, 'category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(productRequest $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->categoryId = $request->categoryId;
        if($request->hasfile('img'))
        {
            $file = $request->file('img');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
            $product->img = $name;
        }
        $product->save();
        return redirect('admin/product')->with('message', 'Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();
        return redirect('admin/product')->with('message', 'Delete successful');
    }
}
