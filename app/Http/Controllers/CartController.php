<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\Shop;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        //LEFT OUTER JOIN
        $carts =DB::select('SELECT * FROM carts c LEFT OUTER JOIN shops s ON c.product_id = s.id');
        return view('cart.index',compact('user','carts'));
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
     * store = add
     */
    public function store(Request $request)
    {
        // $carts = DB::select('select * from shops s INNER JOIN carts c ON s.id = c.product_id');

        if(auth()->user()->id == DB::select('SELECT user_id FROM carts;')) {

            if($request->input('product_id') == DB::select('SELECT product_id FROM carts;')){

                $qty1=$request->input('qty')+DB::select('SELECT qty FROM carts;');
                $carts = DB::update('UPDATE carts SET qty=$qty1;');

            }
            else{
                $cartitems = new Cart;
                $cartitems->user_id = auth()->user()->id;
                $cartitems->product_id = $request->input('product_id');
                $cartitems->qty = $request->input('qty');
                $cartitems->save();
            }

        } else {

            $cartitems = new Cart;
            $cartitems->user_id = auth()->user()->id;
            $cartitems->product_id = $request->input('product_id');
            $cartitems->qty = $request->input('qty');
            $cartitems->save();

        }
   
        return redirect('/cart');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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

}