<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class regis extends Controller
{
    function regis(Request $request){
        // $arr["name"] = $request->name;
        $arr["account"] = $request->account;
        $arr["password"] = $request->password;
        echo json_encode($arr);

        // echo "success";
    }
}
