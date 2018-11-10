<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function nomorsatu(){
    	$produk = [
    		'itemId' => '12341822',
    		'itemName' => 'basic T-shirt',
    		'price' => '70000',
    		'availableColorAndSize' => [
    			'pertama' => [
    				'color' => 'red',
    				'size' => 'S,M,L',
    			],
    			'kedua' => [
    				'color' => 'solid black',
    				'size' => 'M,L',
    			],
    		],
    		'freeShiping'=>'false',
    	];

    	return response()->json($produk, 200);
    }

    public function nomortiga(){
    	$segitigaAsli = 7;
    	for($a=1;$a<=$segitigaAsli;$a++){

    		for($b=1;$b<=$a;$b++){
    			$segitiga = $b;
    			echo $segitiga;
    		}
    		echo '<br/>';
    	}
    }
}
