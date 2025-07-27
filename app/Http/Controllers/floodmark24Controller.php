<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FloodMark; 
use App\Models\ImageFloodmark; 
use DataTables;

class floodmark24Controller extends Controller
{
    public function getTable() {
        $data = FloodMark::select('*')->get();
        // $data = FloodMark::select('*')->get();
        // dd($pole[0]->pole_id);
        return view('floodmark24.table',compact('data'));      
    }

    public function getTabletest() {
        $data = FloodMark::select('*')->get();
        return view('floodmark24.test',compact('data'));      
    }
    public function getDataTable(Request $request)
    {
        $data = FloodMark::select('*');
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('coordinate', function($row){
                return number_format($row->latitude, 4) . ',' . number_format($row->longitude, 4);
            })
            ->addColumn('image', function($row){
                return '<a href="'.url('/flood24/image/'.$row->code).'" class="btn btn-linkedin" target="_blank"><i class="feather icon-image"></i>ภาพประกอบ</a>';
            })
            ->addColumn('map', function($row){
                return '<a href="https://maps.google.com/?q='.$row->latitude.','.$row->longitude.'" class="btn btn-instagram" target="_blank"><i class="feather icon-map-pin"></i>เส้นทาง</a>';
            })
            ->rawColumns(['image', 'map'])
            ->make(true); // ← ต้องมีบรรทัดนี้
    }

    public function getDataTableVer1(Request $request)
    {
        $data = FloodMark::select('*');
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('coordinate', function($row){
                return number_format($row->latitude, 4) . ',' . number_format($row->longitude, 4);
            })
            ->addColumn('image', function($row){
                return '<a href="'.url('/flood24/image/'.$row->code).'" class="btn btn-linkedin" target="_blank"><i class="feather icon-image"></i>ภาพประกอบ</a>';
            })
            ->addColumn('map', function($row){
                return '<a href="https://maps.google.com/?q='.$row->latitude.','.$row->longitude.'" class="btn btn-instagram" target="_blank"><i class="feather icon-map-pin"></i>เส้นทาง</a>';
            })
            ->rawColumns(['image', 'map'])
            ->make(true); // ← ต้องมีบรรทัดนี้
    }

    // public function getDataSurveyLevel($level=0) {
    //     header('Access-Control-Allow-Origin: *');
    //     $lower=[0,0,50,100,150,200];
    //     $upper=[0,50,100,150,200,400];
    //     $location = FloodMark::select('*')->where('water_level', '>', $lower[$level])->where('water_level', '<=', $upper[$level])->get();
    //     //dd($location);
    //     $result = $location->map(function($loc) {
    //     return [
    //         'code' => $loc->code,
    //         'date_survey' => $loc->date_survey,
    //         'affected_area' => $loc->affected_area,
    //         'other_detail' => $loc->other_detail,
    //         'place_detail' => $loc->place_detail,
    //         'latitude' => $loc->latitude,
    //         'longitude' => $loc->longitude,
    //         'place_around' => $loc->place_around,
    //         'water_level' => $loc->water_level,
    //         'tool' => $loc->tool,
    //         'tool_detail' => $loc->tool_detail,
    //         'note' => $loc->note,
    //         'image' => $loc->images,  // images มาจากความสัมพันธ์
    //     ];
    // });

    //     $result = json_encode($result);
    //     echo $result;
    // }

    public function getDataSurveyLevel($level = 0)
    {
        header('Access-Control-Allow-Origin: *');

        // ถ้า level = 0 ให้ไม่กรอง class
        if ($level == 0) {
            $location = FloodMark::all();
        } else {
            $location = FloodMark::where('class', $level)->get();
        }

        $result = $location->map(function ($loc) {
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
                'image' => $loc->images,  // ความสัมพันธ์กับ images
            ];
        });

        echo json_encode($result);
    }

    public function getDataSurveyLevelVer1($level = 0)
    {
        header('Access-Control-Allow-Origin: *');

        // ถ้า level = 0 ให้ไม่กรอง class
        if ($level == 0) {
            $location = FloodMark::all();
        } else {
            $location = FloodMark::where('class', $level)->get();
        }

        $result = $location->map(function ($loc) {
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
                'image' => $loc->images,  // ความสัมพันธ์กับ images
            ];
        });

        echo json_encode($result);
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

    public function updateFloodmarkClass()
{
    $ranges = [
        [0, 50, 1],
        [50, 100, 2],
        [100, 150, 3],
        [150, 200, 4],
        [200, 400, 5],
    ];

    foreach ($ranges as $range) {
        [$lower, $upper, $class] = $range;

        FloodMark::where('water_level', '>', $lower)
                 ->where('water_level', '<=', $upper)
                 ->update(['class' => $class]);
    }

    return response()->json(['message' => 'Floodmark class updated successfully']);
}
}

