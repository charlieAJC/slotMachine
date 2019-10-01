<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlotController extends Controller
{
    function slot(Request $request){
        if(isset($request->slot) && $request->slot === '1'){
            // echo "hi, PHP get it!";
            $arr["1"] = rand(1,6);
            $arr["2"] = rand(1,6);
            $arr["3"] = rand(1,6);
            echo json_encode($arr);
            // echo var_dump($arr);
        } else {
            echo "Oops!";
        }
    }
}
