<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
//use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PriceController extends Controller
{
        public function index(Request $request)
    {
		if($request->input('price')){
		$name = $request->input('price');
		$response = Http::get('https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol='.$name.'&apikey=0O18XUJW9P8QVGQJ');
		$body = $response->json();
		return view('get-price', [ 'articles' => $body['Global Quote'] ]);
		}
		else{
		return view('get-price', [ 'articles' => ["Please enter the quote" ]]);	
		}
    }
	    public function store(Request $request)
    {
        $name = $request->input('price');
		echo $name;
		exit (0);

        //
    }
}
