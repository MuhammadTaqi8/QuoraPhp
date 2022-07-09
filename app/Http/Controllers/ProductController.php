<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index(){
        $data = Product::all();
        return view('product', ['product'=>$data]);
    }
    function detail($id){
        $data = Product::find($id);
        return view('detail', ['data'=>$data]);
    }
    function add_to_cart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart();
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;

            return "Hello User";
        }
        else{
            return redirect('/login');
        }
        return "Hello Cart";
    }
}
