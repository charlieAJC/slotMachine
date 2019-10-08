<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Date;

class SlotController extends Controller
{
    public function slot(Request $request){
        
        
        if(isset($request->slot) && $request->slot === '1'){
            // $memberAccount = $request->account;
            $memberAccount = Session::get("account");
            $cost = $request->cost;
            // $cost = 100;
            // echo "hi, PHP get it!";
            $arr[1] = rand(1,12);
            $arr[2] = rand(1,12);
            $arr[3] = rand(1,12);
            for( $i=1; $i<4; $i++){
                switch($arr[$i]){
                    case 1:case 2:case 3:case 4:
                    $arr[$i] = 1;
                    // $win= $cost*3;
                    break;
                    case 5:case 6:case 7:
                    $arr[$i] = 2;
                    // $win= $cost*5;
                    break;
                    case 8:case 9:
                    $arr[$i] = 3;
                    // $win= $cost*10;
                    break;
                    case 10:
                    $arr[$i] = 4;
                    // $win= $cost*20;
                    break;
                    case 11:
                    $arr[$i] = 5;
                    // $win= $cost*30;
                    break;
                    case 12:
                    $arr[$i] = 6;
                    // $win=$cost*50;
                    break;
                }
            }
            if($arr[1]===$arr[2] && $arr[1]===$arr[3]){
                switch($arr[1]){
                    case 1:
                    $win=$cost*5; // 1/3 * 1/3* 1/3
                    break;
                    case 2:
                    $win=$cost*10; //1/4 * 1/4* 1/4
                    break;
                    case 3:
                    $win=$cost*20; //1/6 * 1/6* 1/6
                    break;
                    case 4:
                    $win=$cost*30; //1/12 * 1/12* 1/12
                    break;
                    case 5:
                    $win=$cost*50; //1/12 * 1/12* 1/12
                    break;
                    case 6:
                    $win=$cost*80; //1/12 * 1/12* 1/12
                    break;
                }
                // $coin=User::where('Account', '=', $memberAccount)->pluck("GameCoin");
                $coin = User::where('Account', $memberAccount)->pluck('GameCoin');
                // $name = User::select('GameCoin')->where('Account', $memberAccount)->first();
                $arr["game"]="W";
                $arr["win"]=$win;
                $arr["coin"]=$coin[0]+$win;
                User::where('Account', $memberAccount)->update(array('GameCoin' => $arr["coin"]));
                
            }else{
                $arr["game"]="L";
                $coin = User::where('Account', $memberAccount)->pluck('GameCoin');
                $arr["coin"]=$coin[0]-$cost;
                User::where('Account', $memberAccount)->update(array('GameCoin' => $arr["coin"]));
            }
            echo json_encode($arr);
            // echo var_dump($arr);
        } else {
            echo "Oops!";
        }
    }
}
