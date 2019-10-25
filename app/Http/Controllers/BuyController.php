<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Payment;
use App\Stamp;
use Session;

class BuyController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    function buy(Request $request){
        if(isset($request->MoneyOrigin)){
            $Account=Session::get('account');
            $StoreMoney=$request->StoreMoney;
            $MoneyOrigin=$request->MoneyOrigin;
            $UserID=User::where('Account', '=', $Account)->pluck('UserID');
            Payment::insert([
                'UserID'=>$UserID[0],
                "MoneyOrigin"=>$MoneyOrigin,
                "StoreMoney"=>$StoreMoney,
            ]);
            switch($StoreMoney){
                case 100:
                $GetCoin=300;
                break;
                case 250:
                $GetCoin=800;
                break;
                case 500:
                $GetCoin=1700;
                break;
                case 1000:
                $GetCoin=3500;
                break;
                case 2500:
                $GetCoin=10000;
                break;
            }
            // $GetCoin=Stamp::where('UserID','=',$UserID)->orderBy('StampID', 'desc')->take(1)->value('GetCoin');
            $oldGameCoin=Stamp::where('UserID', '=', $UserID)->orderBy('StampID', 'desc')->take(1)->value('GameCoin');
            $GameCoin=$oldGameCoin+$GetCoin;
            Stamp::insert([
                'UserID'=>$UserID[0],
                'GetWay'=>'Store',
                'GetCoin'=>$GetCoin,
                'GameCoin'=>$GameCoin,
            ]);
            User::where('UserID', $UserID[0])->update(['GameCoin' => $GameCoin]);
            echo json_encode(array('StoredCoin'=> $GetCoin));
        }
        
      
    }
}
