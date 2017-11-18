<?php 

/**
* 
*/
class CustomerController extends BaseController
{
	function customer()
	{	
		$nav_active = 'customer';

		$customera = Customer::where("customer_type", '1')->get();
		$customerb = Customer::where("customer_type", '2')->get();
		$customerc = Customer::where("customer_type", '3')->get();
		
		return View::make('web/customer', compact('nav_active','customera','customerb','customerc'));
	}
}