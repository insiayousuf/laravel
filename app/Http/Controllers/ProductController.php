<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;

use Illuminate\Http\Request;

class ProductController extends Controller
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
    public function store(Request $r)
    {
        $p = new product();

        $p->name = $r->name;
        $p->price = $r->price;

        if($r->hasfile('image'))
        {

            $file = $r->file('image');
            $exc = $file->getClientOriginalExtension();
            $fileName = time(). '.' .$exc;
            $file->move("images/", $fileName);
            $p->image = $file;
        }
            $p->save();
            return redirect()->back();    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $product= product::all();
        return view('show', compact('product'));
    }
    public function productPost(Request $r)
    {
        $product=new Product();

            $product->name=$r->ProductName;
            $product->price=$r->ProductPrice;
            $product->description=$r->ProductDescription;
            $product->CategoryId=$r->categoryId;
        if($r->hasfile('image'))
        {
            $file=$r->file('image');
            $ext=$file->getClientOrignalExtension();
            $fileimage=time().".".$ext;
            $file->move("images",$fileimage);
            $product->image=$fileimage;
         }
        $product->save();
        return redirect('showProduct');
    }
    public function showProduct(){
        $product= category::all();
        return view ('admin.productForm',compact('product'));

    }
}
