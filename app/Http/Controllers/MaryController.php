<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Stamp;
use Session;

class MaryController extends Controller
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
    function test(Request $request){
        //水果圖形排序
        $fruit=array(
            'pineapple'=>[27],
            'watermelon'=>[4,20],
            'grape'=>[8,21],
            'strawberry'=>[2,10,25],
            'orange'=>[5,13,16],
            'cherry'=>[3,9,18,23],
            'tomato'=>[7,14,17,22],
            'cranberry'=>[6,11,19,28],
            'carrot'=>[1,12,15,24,26],
            );
        //水果種類賠率 [$pineapple,$watermelon,$grape,$strawberry,$orange,$cherry,$tomato,$cranberry,$carrot]
        $fruitodds=[10,6,5,4,3.5,3,2.5,2,1.5];
        $fruittype=array();
        $fruitarray=array();
        foreach($fruit as $u=>$k){
            //水果種類陣列
            array_push($fruittype, $u);
            foreach($k as $v){
                //每個格子的賠率各為多少
                $odds[$v]=$fruitodds[array_search($u, $fruittype)];
                //給前端的水果陣列資料
                $fruitarray[$v]=$u;
            }
        } 
         
        if(isset($request->documentready)){
           
            $Account=Session::get('account');
            $GameCoin=User::where('Account', '=', $Account)->pluck('GameCoin');
            echo json_encode(array('fruitarray'=>$fruitarray,'fruitodds'=>$fruitodds,'GameCoin'=>$GameCoin[0],'fruitType'=>$fruittype));
        }else if (isset($request->bet)) {
            //接收玩家下注資料
            $qqq=$request->bet;
            //玩家下注總額
            $sum=0;
            foreach ($qqq as $v) {
                $sum +=$v;
            }
            //中獎號碼
            $number=rand(1, 28);
            //中獎水果
            $whatfruit=$fruitarray[$number];
            // 中獎水果號碼
            $fruitnumber = array_search($whatfruit, $fruittype);
            // 中獎金額
            $coin=$qqq[$fruitnumber]*$odds[$number];
            // 接收玩家帳號
            $Account=Session::get('account');
            // 找到玩家UserID
            $UserID=User::where('Account', '=', $Account)->pluck('UserID');
            // 玩家原有遊戲代幣
            $GameCoin=User::where('Account', '=', $Account)->pluck('GameCoin');
            // 玩家遊戲後代幣
            $NewGameCoin=$GameCoin[0]-$sum+$coin;
            //更新玩家遊戲後代幣到User資料表
            DB::update('update users set GameCoin = ?,UpdateDate= current_timestamp where Account=?', [$NewGameCoin,$Account]);
            //新增遊戲紀錄到紀錄資料表
            Stamp::insert([
            'UserID'=>$UserID[0],
            'GetWay'=>'Play',
            'GameName'=>'LittleMary',
            'BetCoin'=>$sum,
            'GetCoin'=>$coin,
            'GameCoin'=>$NewGameCoin
            ]);
            $transJSON=array('number'=>$number,'coin'=>$coin,'GameCoin'=>$NewGameCoin);
            echo json_encode($transJSON);
        } else if(isset($request->need) && isset($request->total)) {
            $Account=Session::get('account');
            $GameCoin=User::where('Account', '=', $Account)->pluck('GameCoin');
            $total=$request->total;
            $need=$request->need;
            if ($GameCoin[0]>=$total+$need) {
                // echo json_encode(array('yoyo'=>'123'));
                echo json_encode(array('need'=>$need,'GameCoin'=>$GameCoin[0]-($total+$need),'tatal'=>$total));
            } else {
                echo json_encode(array('need'=>$GameCoin[0]-$total,'GameCoin'=>$GameCoin[0]-($total+($GameCoin[0]-$total)),'total'=>$total));
            }
                // echo json_encode(array('yoyo'=>'123'));
        }
        
        //if($GameCoin[0]<$total+$need+$need&&)) 
        // echo json_encode($request->bet);
    }
}
