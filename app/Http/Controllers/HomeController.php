<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class HomeController extends Controller
{
    public function index(){
        $cate_product = DB::table('tbl_category_product')->where('category_status',"0")->orderby('category_id','desc')->get();
        
        $brand_product = DB::table('tbl_brand')->where('brand_status',"0")->orderby('brand_id','desc')->get();

        $slider_product = DB::table('tbl_product')->where('product_status',"0")->orderby('product_price','desc')->limit(2)->get();

        $all_product = DB::table('tbl_product')->where('product_status',"0")->orderby('product_id','desc')->limit(9)->get();

        return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)->with('slider',$slider_product)->with('all_product',$all_product);

    }
    public function search(Request $request){
        $keywords = $request->keywords_submit;
        $cate_product = DB::table('tbl_category_product')->where('category_status',"0")->orderby('category_id','desc')->get();
        
        $brand_product = DB::table('tbl_brand')->where('brand_status',"0")->orderby('brand_id','desc')->get();

        $slider_product = DB::table('tbl_product')->where('product_status',"0")->orderby('product_price','desc')->limit(2)->get();

        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get();

        

        return view('pages.product.search')->with('category',$cate_product)->with('brand',$brand_product)->with('slider',$slider_product)->with('search_product',$search_product);
    }
    public function about(){
        $cate_product = DB::table('tbl_category_product')->where('category_status',"0")->orderby('category_id','desc')->get();
        
        $brand_product = DB::table('tbl_brand')->where('brand_status',"0")->orderby('brand_id','desc')->get();

        $slider_product = DB::table('tbl_product')->where('product_status',"0")->orderby('product_price','desc')->limit(2)->get();

        return view('pages.about.about')->with('category',$cate_product)->with('brand',$brand_product)->with('slider',$slider_product);

    }
}
