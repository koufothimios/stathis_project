<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index(){
        $directory = public_path()."/images/index_photos/";
        $index_photos = glob($directory . "*.jpg");
        $loop_counter = 1;
        $number_of_total_photos = sizeof($index_photos);
        $final_photos = [];
        $temp=[];
        foreach($index_photos as $photo){
            //return strlen(public_path());
            $index_photos[$loop_counter] = substr($photo,strlen(public_path()));
            array_push($temp, $index_photos[$loop_counter]);
            if(fmod($loop_counter,3)==0){
                array_push($final_photos, $temp);
                $temp=[];
            }else{
                if($number_of_total_photos==$loop_counter){
                    array_push($final_photos, $temp);
                }
            }
            $loop_counter = $loop_counter + 1;
        }
        //return $final_photos;
        //return $index_photos;
        //$index_photos=["images/index_photos/1.jpg"];
        return view('pages.index',compact('final_photos'));
    }
}
