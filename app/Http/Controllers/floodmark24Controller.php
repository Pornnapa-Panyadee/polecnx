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
        $lower=[0,0,50,100,150];
        $upper=[0,50,100,150,300];
        $location = FloodMark::select('*')->where('water_level', '>', $lower[$level])->where('water_level', '<=', $upper[$level])->get();
        //dd($location);
        for ($i=0;$i<count($location);$i++){ 
            $image = ImageFloodmark::select('*')->where('code_mark',$location[$i]->code)->get();
            
            $result[] = [
                'code'=> $location[$i]->code,
                'date_survey'=>$location[$i]->date_survey,
                'affected_area'=> $location[$i]->affected_area,
                'other_detail'=>$location[$i]->other_detail,
                'place_detail'=> $location[$i]->place_detail,
                'latitude'=> $location[$i]->latitude,
                'longitude'=> $location[$i]->longitude,
                'place_around'=> $location[$i]->place_around,
                'water_level'=> $location[$i]->water_level,
                'tool'=> $location[$i]->tool,
                'tool_detail'=>$location[$i]->tool_detail,
                'note'=> $location[$i]->note,
                'image'=>$image,
            ];
        }
        $result = json_encode($result);
        echo $result;
    }

    public function getImage($code=0) {
        $image = ImageFloodmark::select('*')->where('code_mark',$code)->get();
        $data = FloodMark::select('*')->where('code',$code)->get();
        //dd($image[0]['image_path']);
        return view('floodmark24.image',compact('data','image'));      
    }
}
