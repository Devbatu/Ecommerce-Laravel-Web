<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;

class HomeController extends Controller
{

    public function index(){
        $product=Product::all();
        return view('home.userpage',compact('product'));
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            return view('cart');
        }
    }
    public function userpage() {
        $product=Product::all();
        return view('home.userpage',compact('product'));
    }
    public function cart() {
        if(Auth::id()){
            $products=Product::all();
            $id=Auth::user()->id;
            $cart=Cart::where('user_id','=',$id)->get();
            $cart=Cart::paginate(4);
            return view('home.cart',compact('cart','products'));
        }else{
            return redirect('login');
        }
        
    }  
    public function shop() {
        $product = Product::paginate(8);
        return view('home.shop', compact('product'));
    }
    public function about() {
        return view('home.about');
    }
    public function servicesupport() {
        return view('home.servicesupport');
    }
    public function contact() {
        return view('home.contact');
    }
    public function blogpage() {
        return view('home.blogpage');
    }

    public function product_details($id) {
        $product=Product::find($id);

        return view('home.product_details',compact('product'));
    } 
    public function add_cart(Request $request,$id) {
       
        if(Auth::id())
        {
            $user=Auth::user();
            $product=Product::find($id);
            $cart=new Cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;
            $cart->product_title=$product->title;

            if($product->discountprice!=null){
                 $cart->price=$product->discountprice * $request->req_quantity;
            }else{
                $cart->price=$product->price * $request->req_quantity;
            }

            $cart->catagory=$product->catagory;
            $cart->product_id=$product->id;
            $cart->image=$product->image;
            $cart->quantity=$request->req_quantity;
            $cart->save();
            return redirect()->back();


        }
        else
        {
            return redirect('login');
        }
    }
    public function remove_cart($id) {
        $cartItem=Cart::find($id);
        $cartItem->delete();

        return redirect()->back();
    } 
    
    public function clearDeletedCart()
    {
        // Silinmiş olan cartItem'ları veritabanından tamamen kaldır
        Cart::where('is_deleted', true)->delete();
    
        // İşlem sonrası kullanıcıya bir mesaj gösterebilir veya sepet sayfasına yönlendirebilirsiniz
        return redirect()->back()->with('success', 'Silinmiş ürünler başarıyla temizlendi.');
    }
}
