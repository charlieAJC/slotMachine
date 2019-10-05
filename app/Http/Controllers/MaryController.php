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
        if (isset($request->bet)) {
            // echo gettype($request->coinAdjustList);
            $name=$request->bet;
            $qqq=explode(",", $name);        //把字串以,分割成陣列  
            // echo $name.'<hr>';
            echo '下注陣列:'.var_dump($qqq).'<hr>';
            $sum=0;
            foreach($qqq as $v){  
                $sum +=$v;        
                // echo $sum,'<hr>';
            }
            //下注總額 $sum
            echo '下注總額:'.$sum,'<hr>';          
            //中獎號碼 $number
            $number=rand(1, 28);
            echo '中獎號嗎:'.$number.'<hr>';
            //水果圖形位置
            // $fruit=array(
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
            $fruittype=array();
            foreach($fruit as $u=>$k){
                array_push($fruittype, $u);
                foreach($k as $v){
                    if(in_array($number,$k)){
                        $whatfruit=$k;
                    } //else {
                    //     echo "";
                    // }
                    //水果種類賠率 [$pineapple,$watermelon,$grape,$strawberry,$orange,$cherry,$tomato,$cranberry,$carrot]
                    $fruitodds=[10,5,4,3,2,1,0.4,0.25,0.2];
                    $odds[$v]=$fruitodds[array_search($u,$fruittype)];        
                }
            } 
            // echo var_dump($odds).'<hr>';
            // echo var_dump($fruit).'<hr>';
            echo '中獎號碼賠率:'.$odds[$number].'<hr>';
            // echo var_dump($whatfruit);
            $luckeyfruit = array_search($whatfruit,$fruit);
            echo "中獎水果為：".$luckeyfruit.'<hr>';
            $fruitnumber = array_search($luckeyfruit, $fruittype);
            echo "中獎水果號碼為：".$fruitnumber.'<hr>';
            $coin=$qqq[$fruitnumber]*$odds[$number];
            echo '中獎金額:'.$coin.'<hr>';
            
            echo json_encode($number);
            echo json_encode($coin);
            // echo json_encode(array($request->coinAdjustList));
            
        }else{
            echo 'insert bet';
        }


    }
}
