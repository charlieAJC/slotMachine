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
        // if (Session::has('account')) {
            
        //     return view("Marry.Marry");
        // }else{
        //     return redirect("/login");
        // }
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
        if(isset($request->documentready)){
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
            $fruitname=["pineapple","watermelon","grape","strawberry","orange","cherry","tomato","cranberry","carrot"];
            $fruittype=array();
            $fruitarray=array();
            foreach($fruit as $u=>$k){
                array_push($fruittype, $u);
                foreach($k as $v){
                    $odds[$v]=$fruitodds[array_search($u,$fruittype)]; 
                    $fruitarray[$v]=$u;
                }
            } 
            $Account=Session::get('account');
            $GameCoin=User::where('Account', '=', $Account)->pluck('GameCoin');
            echo json_encode(array('fruitarray'=>$fruitarray,'fruitodds'=>$fruitodds,'GameCoin'=>$GameCoin[0],'fruitType'=>$fruitname));
        }else{
            if (isset($request->bet)) {
                // $name=$request->bet;
                // $qqq=explode(",", $name);        //把字串以,分割成陣列
                $qqq=$request->bet;
                // echo '下注陣列:'.var_dump($qqq).'<hr>';
                $sum=0;
                foreach ($qqq as $v) {
                    $sum +=$v;
                }
                //下注總額 $sum
                // echo '下注總額:'.$sum,'<hr>';
                //中獎號碼 $number
                $number=rand(1, 28);
                // echo '中獎號嗎:'.$number.'<hr>';
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
                foreach ($fruit as $u=>$k) {
                    array_push($fruittype, $u);
                    foreach ($k as $v) {
                        if (in_array($number, $k)) {
                            $whatfruit=$k;
                        } //else {
                        //     echo "";
                        // }
                        $odds[$v]=$fruitodds[array_search($u, $fruittype)];
                        $fruitarray[$v]=$u;
                    }
                }
                // echo var_dump($odds).'<hr>';
                // echo var_dump($fruit).'<hr>';
                // echo '中獎號碼賠率:'.$odds[$number].'<hr>';
                // echo var_dump($whatfruit);
                $luckeyfruit = array_search($whatfruit, $fruit);
                // echo "中獎水果為：".$luckeyfruit.'<hr>';
                $fruitnumber = array_search($luckeyfruit, $fruittype);
                // echo "中獎水果號碼為：".$fruitnumber.'<hr>';
                $coin=$qqq[$fruitnumber]*$odds[$number];
                // echo '中獎金額:'.$coin.'<hr>';
                // echo json_encode(array($request->coinAdjustList));
                $Account=Session::get('account');
                // echo $Account;
                $UserID=User::where('Account', '=', $Account)->pluck('UserID');
                // echo $UserID;
                $GameCoin=User::where('Account', '=', $Account)->pluck('GameCoin');
                // echo $GameCoin;
                $NewGameCoin=$GameCoin[0]-$sum+$coin;
                // echo $NewGameCoin;
                DB::update('update users set GameCoin = ?,UpdateDate= current_timestamp where Account=?', [$NewGameCoin,$Account]);

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
            } else {
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
        }
        //if($GameCoin[0]<$total+$need+$need&&)) 
        // echo json_encode($request->bet);
    }
}
