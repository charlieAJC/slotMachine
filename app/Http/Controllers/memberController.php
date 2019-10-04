<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;


class memberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("fronted.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $memberPassword = $request -> password;
        $memberName = $request -> name;
        $memberAccount = $request -> account;
        $email = $request -> email;
        //帳號密碼驗證需英數字6到12碼
        $pwFlag = preg_match('/^\w{6,12}$/', $memberPassword);
        $acFlag = preg_match('/^\w{6,12}$/', $memberAccount);

        $memberPassword = Hash::make($memberPassword);
        $count = User::where('Account', '=', $memberAccount)->count();
       
        
        if($count==0 && $pwFlag && $acFlag && $memberName !=""){
            $msg=User::insert([
                'Account'=>$memberAccount,
                'Password'=>$memberPassword,
                'Name'=>$memberName
            ]);
            echo "success";
            // var_dump($msg);
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

    public function login(Request $request){
        $memberAccount = $request -> account;
        $memberPassword = $request -> password;
        $count = User::where('Account', '=', $memberAccount)->count();
        if($count){
            // 帳號存在
            $user = User::where('Account', '=', $memberAccount)->firstOrFail();
            
            if (Hash::check($memberPassword, $user->Password))
            {
                // The passwords match...
                echo 'success';

            }else{
                echo 'pw not correct';
            }
            
            // if($memberPassword === $user->memberPassword){
            //     echo 'success';
            // }else{
            //     echo 'pw not correct';
            // }
        }else{
            // 帳號不存在
            echo 'error';
        }
        // if( User::find($memberAccount)==true){
        //     echo 'success';
        // }else{
        //     echo "account doen't exist";
        // }
        // return $model;
        // return $model->memberPassword;
        // var_dump($model->memberPassword);
        
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
}
