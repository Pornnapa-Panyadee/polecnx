<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PoleLocation;

class PolelocationController extends Controller
{
    public function getDataHomeTable() {
        $data = PoleLocation::select('*')->get();
        // dd($pole[0]->pole_id);
        return view('guest.index',compact('data'));      
        
        
    }

    public function getDataSurvey($compass=0) {
        header('Access-Control-Allow-Origin: *');
        $location = PoleLocation::select('*')->where('compass',$compass)->get();;
        //dd($location);
        for ($i=0;$i<count($location);$i++){ 
            $result[] = [
                'pole_id'=> $location[$i]->pole_id,
                'pole_name'=> $location[$i]->pole_name,
                'lat'=>$location[$i]->lat,
                'long'=>$location[$i]->long,
                'base_level'=> $location[$i]->base_level,
                'flood_level'=> $location[$i]->flood_level,
                'flood_max'=> $location[$i]->flood_max,
                'pix'=>$location[$i]->pix
            ];
        }
        $result = json_encode($result);

        echo $result;
    }
}
