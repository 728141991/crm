<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Product;
<<<<<<< HEAD
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
class ProductController extends Controller
{
=======
use App\User;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $id=Auth::user()->id;
        $products=User::find($id)->products()->get();

        return view('product.list',['products'=>$products]);

    }
    public function show()
    {
        $id=Auth::user()->id;
        $products=User::find($id)->products()->get();

        return view('product.list',['products'=>$products]);

    }
>>>>>>> panshan
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*  $this->validate($request, [
              'title' => 'required|unique:pages|max:255',
              'body' => 'required',
          ]);*/

        $product = new Product;
<<<<<<< HEAD
        $product->product_name =$request->input('name');
        $product->product_code = $request->input('code');
        $product->product_description = $request->input('description');
        $product->part_number = $request->input('part_number');
        $product->unit_price = $request->input('unit_price');
        $product->commission_rate = $request->input('rate');
        $product->qty_per_unit = $request->input('quantity');
        $product->weight = $request->input('weight');
        $product->sales_start_date = $request->input('start_date');
        $product->update = $request->input('update');
        $product->assign_to = $request->input('assign_to');


        if ($product->save()) {
            return Redirect::to('');
=======
        $product->product_name =$request->input('product_name');
        $product->product_code = $request->input('product_code');
        $product->product_description = $request->input('product_description');
        $product->part_number = $request->input('part_number');
        $product->unit_price = $request->input('unit_price');
        $product->commission_rate = $request->input('commission_rate');
        $product->qty_per_unit = $request->input('qty_per_unit');
        $product->weight = $request->input('weight');
        $product->sales_start_date = $request->input('sales_start_date');
        $product->sales_end_date = $request->input('sales_end_date');
        $product->update ="";
        $product->assign_to = Auth::id();

        if ($product->save()) {
            return Redirect::to('product/list');
>>>>>>> panshan
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败！');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('product.edit')->withProduct(Product::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
<<<<<<< HEAD
        $this->validate($request, [
            'title' => 'required|unique:pages,title,'.$id.'|max:255',
            'body' => 'required',
        ]);
        $product = Product::find($id);
        $product->product_name =$request->input('name');
        $product->product_code = $request->input('code');
        $product->product_description = $request->input('description');
        $product->part_number = $request->input('part_number');
        $product->unit_price = $request->input('unit_price');
        $product->commission_rate = $request->input('rate');
        $product->qty_per_unit = $request->input('quantity');
        $product->weight = $request->input('weight');
        $product->sales_start_date = $request->input('start_date');
        $product->update = $request->input('update');
        $product->assign_to = $request->input('assign_to');

        if ($product->save()) {
            return Redirect::to('');
=======

        $product = Product::find($id);
        $product->product_name =$request->input('product_name');
        $product->product_code = $request->input('product_code');
        $product->product_description = $request->input('product_description');
        $product->part_number = $request->input('part_number');
        $product->unit_price = $request->input('unit_price');
        $product->commission_rate = $request->input('commission_rate');
        $product->qty_per_unit = $request->input('qty_per_unit');
        $product->weight = $request->input('weight');
        $product->sales_start_date = $request->input('sales_start_date');
        $product->sales_end_date = $request->input('sales_end_date');

        if ($product->save()) {
            return Redirect::to('product');
>>>>>>> panshan
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败！');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product= Product::find($id);
        $product->delete();

        return Redirect::to('admin');
    }

}
