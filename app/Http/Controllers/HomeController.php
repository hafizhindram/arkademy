<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\ProductCategory;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('welcome');
    }

    public function soaldua(Request $request){
        
        $username = $request->username;

        if (preg_match("/[a-z]{5}_[A-Z]{2}/", $username)) {
            Session::flash('flash_message','Validasi berhasil!');

            return redirect()->route('home');
        } else if(preg_match("/[a-z]{5}.[A-Z]{2}/", $username)){
            Session::flash('flash_message','Validasi berhasil!');

            return redirect()->route('home');
        }
        else {
            Session::flash('flash_error','Validasi gagal!');
            return redirect()->route('home');
        }


    }

    public function hasil(){
        $datas = DB::table('product_categories')
                ->join('products', 'product_categories.id','=', 'products.category_id')
                ->select ('product_categories.id', 'product_categories.name', DB::raw('COUNT(products.id) as Jumlah_Product'))
                ->groupBy('products.category_id','product_categories.id','product_categories.name')->get();

                return view('welcome',compact('datas'));
    }
}
