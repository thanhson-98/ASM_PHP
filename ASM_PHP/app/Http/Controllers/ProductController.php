<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 7/25/2018
 * Time: 2:12 PM
 */

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function Index(){
        $product = Product::all();
        return view('admin.product.list') -> with('products_in_view',$product);
    }

    public function create(){
        return view('admin.product.form');
    }

    public function store(){
        $product = new Product();
        $product -> name = Input::get('name');
        $product -> price = Input::get('price');
        $product -> description = Input::get('description');
        $product -> image = Input::get('image');
        $product -> save();
        return redirect('admin/product/list');

    }

    public function update(){
        $product = Product::find(Input::get('id'));
        if($product == null){
            return view('404');
        }
        $product -> name = Input::get('name');
        $product -> price = Input::get('price');
        $product -> description = Input::get('description');
        $product -> image = Input::get('image');
        $product -> save();
        return redirect('/admin/product/list');

    }

    public function destroy($id){
        $product = Product::find($id);
        if($product == null){
            return view('404');
        }
    }

    public function edit($id){
        $product = Product::find($id);
        if($product == null){
            return view('404');
        }
        return view('admin.product.edit') -> with('product_in_view',$product);

    }
}