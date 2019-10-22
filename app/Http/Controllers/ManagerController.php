<?php

namespace App\Http\Controllers;

use App\Stamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;

class ManagerController extends Controller
{
    public function manager(Request $request){
        // Stamp::where('Account', '=', $memberAccount)->firstOrFail();
        //小瑪莉遊玩次數
        $countMary = Stamp::where('GameName','LittleMary' )->count();
        //拉霸機遊玩次數
        $countSlot = Stamp::where('GameName','SlotMachine' )->count();
        //小瑪莉總獲利
        $maryProfit=Stamp::where('GameName','LittleMary')->sum('BetCoin')-
        Stamp::where('GameName','LittleMary')->sum('GetCoin');
        //拉霸機總獲利
        $slotProfit=Stamp::where('GameName','SlotMachine')->sum('BetCoin')-
        Stamp::where('GameName','SlotMachine')->sum('GetCoin');
        
        // $bet = Stamp::sum('BetCoin');
        // $change=Stamp::sum('GetCoin');
        // $profit=$bet-$change;

        //官方總勝率
        $lose=Stamp::where('GetWay','Play')->where('GetCoin','0')->count();
        $total=Stamp::count('GetCoin');
        $winrate=($lose/$total)*100;
        //拉霸勝率
        $loseSlot=Stamp::where('GetWay','Play')->where('GetCoin','0')
        ->where('GameName','SlotMachine')->count();
        $totalSlot=Stamp::where('GameName','SlotMachine')->count('GetCoin');
        $winrateSlot=($loseSlot/$totalSlot)*100;
        //小瑪莉勝率
        $loseMary=Stamp::where('GetWay','Play')->where('GetCoin','<','BetCoin')
        ->where('GameName','LittleMary')->count();
        $totalMary=Stamp::where('GameName','LittleMary')->count('GetCoin');
        $winrateMary=($loseMary/$totalMary)*100;
        

        $arr["countMary"]=$countMary;
        $arr["countSlot"]=$countSlot;

        $arr["maryProfit"]=$maryProfit;
        $arr["slotProfit"]=$slotProfit;

        $arr["winrate"]=$winrate;
        $arr["winrateSlot"]=$winrateSlot;
        $arr["winrateMary"]=$winrateMary;
        echo json_encode($arr);

        // $array=array("countMary"=>$countMary);
        // dd("$winrate"."%");
        // dd($maryProfit);
        // dd($countMary);
        // dd($countSlot);
        // dd($bet);
        // dd($change);
        // dd($profit);
    }
}
