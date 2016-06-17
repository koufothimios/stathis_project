<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;

class HomeController extends Controller
{
    public function gallery(){
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

    public function vraveyseis(){
        $loop_counter = 0;
        $directory = public_path()."/images/vraveyseis/";
        $vraveyseis_photos = glob($directory . "*.jpg");
        $final_photos = [];
        foreach($vraveyseis_photos as $photo){
            $vraveyseis_photos[$loop_counter] = substr($photo,strlen(public_path()));
            array_push($final_photos, explode("-",$vraveyseis_photos[$loop_counter]));
            $final_photos[$loop_counter][0] = $vraveyseis_photos[$loop_counter];
            $final_photos[$loop_counter][2] = substr($final_photos[$loop_counter][2], 0, -4);
            $loop_counter++;
        }
        //return $final_photos;
        return view('pages.vraveyseis',compact('final_photos'));
    }

    public function seminaria(){
        return view('pages.seminaria');
    }

    public function epikoinwnia(){
        return view('pages.epikoinwnia');
    }

    public function index(){
        return redirect('/gallery');
    }

    public function sendmail(Request $request)
    {
        // Mail::send('emails.blank', array('key' => 'value'), function($message)
        // {
        //     $message->from('ezeinis13@gmail.com');
        //     $message->to('ezeinis@hotmail.gr', 'John Smith')->subject('Welcome!');
        // });
        return back();
    }
}
