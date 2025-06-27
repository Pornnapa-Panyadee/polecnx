<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FloodMark; 
use App\Models\ImageFloodmark; 

class floodmark24Controller extends Controller
{
    public function getTable() {
        $data = FloodMark::select('*')->get();
        // $data = FloodMark::select('*')->get();
        // dd($pole[0]->pole_id);
        return view('floodmark24.table',compact('data'));      
    }

    public function getDataSurveyLevel($level=0) {
        header('Access-Control-Allow-Origin: *');
        $lower=[0,0,50,100,150,200];
        $upper=[0,50,100,150,200,400];
        $location = FloodMark::select('*')->where('water_level', '>', $lower[$level])->where('water_level', '<=', $upper[$level])->get();
        //dd($location);
        $result = $location->map(function($loc) {
        return [
            'code' => $loc->code,
            'date_survey' => $loc->date_survey,
            'affected_area' => $loc->affected_area,
            'other_detail' => $loc->other_detail,
            'place_detail' => $loc->place_detail,
            'latitude' => $loc->latitude,
            'longitude' => $loc->longitude,
            'place_around' => $loc->place_around,
            'water_level' => $loc->water_level,
            'tool' => $loc->tool,
            'tool_detail' => $loc->tool_detail,
            'note' => $loc->note,
            'image' => $loc->images,  // images มาจากความสัมพันธ์
        ];
    });

        $result = json_encode($result);
        echo $result;
    }

    public function getImage($code=0) {
        $image = ImageFloodmark::select('*')->where('code_mark',$code)->get();
        $data = FloodMark::select('*')->where('code',$code)->get();
        //dd($image[0]['image_path']);
        return view('floodmark24.image',compact('data','image'));      
    }

    public function getImagereport($code=0) {
        $image = ImageFloodmark::select('*')->where('code_mark',$code)->get();
        $data = FloodMark::select('*')->where('code',$code)->get();
        // dd($image[0]['image_path']);
        return view('genImage.genPNG',compact('data','image'));      
    }
}
