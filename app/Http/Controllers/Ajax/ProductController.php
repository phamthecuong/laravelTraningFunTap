<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = \DB::table('product')->select('id', 'name', 'description', 'img', 'categoryId', 'created_at', 'updated_at')->get();
        return \DataTables::of($product)
            ->addColumn('image', function($ct){
                return view('templates.image', ['url'=>$ct->img])->render();
            })
            ->addColumn('action', function($ct){
              $actionEdit = 'product/'.$ct->id.'/edit';
              $actionDelete = 'product/'.$ct->id;
              return
                   '<form method="get" action="'.$actionEdit.'">
                        <button type="submit" class="btn btn-xs btn-info">Edit</button>
                         <a href="/admin/product/delete/'.$ct->id.'" class="btn btn-xs btn-danger"><i class="fa fa-eraser"></i> Delete</a>
                   </form>';
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
