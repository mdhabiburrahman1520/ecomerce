<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Posts;

use App\Order;

use Session;

use App\Category;

class FrontEndController extends Controller
{
    public function Product(){
        $products = Product::all();
        return view('products')->with('products',$products);
    }
    public function blogs(){
        $posts = Posts::all();
        return view('blog')->with('posts',$posts);
    }

    public function singlePost($slug){
		
		$post = Posts::where('slug',$slug)->first();

        return view('singleBlog')->with('post',$post);
    }  
    public function welcome(){
        $categories = Category::all();
        $products = Product::all();
       return view('welcome')
       ->with('categories',$categories)
       ->with('products',$products); 
    }
    
    public function checkout(){
       
        if(!Session::has('client')){

            return redirect()->route('login.user');
         }
      
          if(!Session::has('cart')){
      
             return redirect()->back();
          }
       return view('checkout'); 
    }
    public function orders(){

        $orders = Order::all();

        $orders->transform(function ($order,$key){
                   
              $order->cart = unserialize($order->cart);

              return $order;
        });

        return view('admin.orders.index')->with('orders',$orders);
    }

    public function login(){
        return view('login');
    }
    public function signup(){
        return view('register');
    }

}
