<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Order;
use CodeCommerce\OrderItem;
use CodeCommerce\Category;


class CheckoutController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
	
	//pega o usuario e gera a ordem de pedido no sistema
    public function place(Order $orderModel, OrderItem $orderItem) {
    	if(!Session::has('cart')){
    		return false;
    	}
    	
    	$cart = Session::get('cart');
    	
    	if($cart->getTotal() > 0){
    		$order = $orderModel->create(['user_id'=>Auth::user()->id, 'total'=>$cart->getTotal()]);
    	 	
    	foreach ($cart->all() as $k=>$item){
    		
    		$order->items()->create(['product_id'=>$k, 'price'=>$item['price'], 'qtd'=>$item['qtde]']]);
    	}
    	
    	$cart->clear();
    	
    	//gerar a ordem de serviço
    	return view('store.checkout', compact('order'));
    	
    }
    	$categories = Category::all();
    	return view('store.checkout', ['cart'=>'empty', 'categories' => $categories]);
    }   	

}
