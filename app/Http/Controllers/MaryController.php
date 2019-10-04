<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Marry.Marry");
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
        if (isset($request->coinAdjustList)) {
            // echo gettype($request->coinAdjustList);
            // $name=$request->bet;
            // $qqq=explode(",", $name);          
            // // echo $name.'<hr>';
            // echo var_dump($qqq).'<hr>';
            // $sum=0;
            // foreach($qqq as $v){  
            //     $sum +=$v;
            //     // echo $sum,'<hr>';
            // }
            // //下注總額
            // echo $sum,'<hr>';          
            // // echo var_dump($odds).'<hr>';
            // //中獎號碼
            // $number=rand(1, 28);
            // echo $number.'<hr>';
            // $fruit=array(
            // //水果圖形
            // $pineapple=[27],
            // $watermelon=[4,20],
            // $grape=[8,21],
            // $strawberry=[2,10,25],
            // $orange=[5,13,16],
            // $cherry=[3,9,18,23],
            // $tomato=[7,14,17,22],
            // $cranberry=[6,11,19,28],
            // $carrot=[1,12,15,24,26],
            // );

            // foreach($fruit as $u=>$k){

            //     foreach($k as $v){
            //         // [$pineapple]=[1];    
            //         // $watermelon=1;
            //         if(in_array($number,$k)){
            //             $qwe=$k;
            //         } else {
            //             echo "";
            //         }
            //         // $key = array_search($number,$k);
            //         // echo "Key值為：".$key;
            //         $xxx=[10,5,5,2,2,0.5,0.5,0.5,0.2];
            //         $odds[$v]=$xxx[$u];
                    
            //     }
            // }

            // echo var_dump($odds).'<hr>';
            // echo var_dump($fruit).'<hr>';

            // // $odds=array(1,2,3,4,5);
            // // echo $qqq[0]*$odds[1];
            // echo $odds[$number].'<hr>';

            // echo var_dump($qwe);
            // $key = array_search($qwe,$fruit);
            // echo "Key值為：".$key.'<hr>';
            // echo $qqq[$key]*$odds[$number].'<hr>';
            // wwwww
            
            echo json_encode(array($request->coinAdjustList));
            
        }else{
            echo 'insert bet';
        }


    }
}
