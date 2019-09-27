<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class memberController extends Controller
{
    function index() {
        return view("create.create");
    }
    
    function create(Request $request){
        $memberPassword = $request -> password;
        $memberName = $request -> name;
        $memberAccount = $request -> account;
        $email = $request -> email;
        //帳號密碼驗證需英數字6到12碼
        $pwFlag = preg_match('/^\w{6,12}$/', $memberPassword);
        $acFlag = preg_match('/^\w{6,12}$/', $memberAccount);
        if($pwFlag && $acFlag && $memberName !=""){
            User::insert([
                'memberAccount'=>$memberAccount,
                'memberPassword'=>$memberPassword,
                'memberName'=>$memberName
            ]);
                // $data = User::ALL();
                // echo $data;
        } else {
            echo "fail";
            // die();
            
        }
        // return array($name,$account,$email);
        // dd($name,$account,$email);
        // dd($account);
        // dd($email);
    }
    function login(Request $request,$memberAccount) {
        $memberAccount = $request -> account;
        if( User::find($memberAccount)==true){
            echo 'ok';
        }else{
            echo "account doen't exist";
        }
       
    }
}
