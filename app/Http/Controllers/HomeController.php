<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
class HomeController extends Controller
{
    public function index(){
       
        
    	$cate_product = Category::where('category_status','0')->orderby('category_id','desc')->get(); 
       

        
        
         $all_product = Product::where('product_status','0')->orderby('product_id','desc')->limit(15)->get(); 

    	return view('pages.home')->with('category',$cate_product)->with('all_product',$all_product);
    }
    public function search(Request $request){
        
        $keywords = $request->keysearch;

        $cate_product = Category::where('category_status','0')->orderby('category_id','desc')->get(); 
         

        $search_product = Product::where('product_name','like','%'.$keywords.'%')->get(); 


        return view('pages.search')->with('category',$cate_product)->with('search_product',$search_product);
    }
    
}
