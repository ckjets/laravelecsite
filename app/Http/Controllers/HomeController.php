<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use DB;

class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   //アクセスコントローラー（expect=>引数にいれたアクションメソッドはログインしなくても閲覧可能）
        $this->middleware('auth',['except'=>['index','show']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //モデルクラスからデータを取得
        $items = Shop::All();

        //viewに引数を渡す
        return view('index')->with('items', $items);
    }

    public function show($id)
    {
        //モデルクラスからデータを取得
        $item = Shop::find($id);
        DB::table('shops');

        //viewに引数を渡す
        return view('product.show')->with('item',$item);

    }

}
