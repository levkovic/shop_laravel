<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Cart;
use Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $product = Product::find($id);
        $category = Category::find($product->category_id);
        return view('product.show')->withProduct($product)->withCategory($category);
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

    public function getAddToCart(Request $request, $id){
        $product = Product::find($id);
        
        $oldCart =Session::has('cart') ? Session::get('cart') : "";

        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        Session::flash('success', 'Товар добавлен в корзину');
        return back();
    }

    public function getCart(){
        if(!Session::has('cart')){
            return view('pages.shopping-cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('pages.shopping-cart', ['products' => $cart->items, 'totalP' => $cart->totalP]);
    }

    public function getRemoveFromCart(Request $request, $id){
        $product = Product::find($id);

        $cart = Session::get('cart');
        $cart->remove($product, $product->id);
        if($cart->totalQ != 0){
            $request->session()->put('cart', $cart);
        }
        else{
            $request->session()->forget('cart');
        }
        return back();
    }

    public function getDeleteFromCart(Request $request, $id){
        $product = Product::find($id);

        $cart = Session::get('cart');
        $cart->delete($product, $product->id);
        if($cart->totalQ != 0){
            $request->session()->put('cart', $cart);
        }
        else{
            $request->session()->forget('cart');
        }
        return back();
    }

    public function getCheckout(){
        if(!Session::has('cart')){
            return view('pages.shopping-cart');
        }

        return view('pages.checkout');
    }

    public function postCheckout(){
        Session::flash('ordered', 'Ваш заказ принят в обработку в ближайшее время с вами свяжется наш менеджер! Спасибо');
        return redirect(route('home'));
    }
}
