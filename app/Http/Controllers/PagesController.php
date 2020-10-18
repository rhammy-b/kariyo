<?php 
	
namespace App\Http\Controllers;

class PagesController extends Controller{

	
	public function getIndex() {
		return view('pages.index');
	}

	public function getContact(){
		return view('pages.contact');
	}

	public function getShop(){
		return view('pages.shop');
	}

	public function getBlog(){
		return view('pages.Blog');
	}

	public function getShopcart(){
		return view('pages.shop-cart');
	}

	public function getCheckout(){
		return view('pages.checkout');
	}

	public function getProductdetails(){
		return view('pages.product-details');
	}

	public function getLogin(){
		return view('pages.login');
	}

	public function getSignup(){
		return view('pages.sign-up');
	}


}	
 ?>