<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FloodMark; 
use App\Models\ImageFloodmark; 

class FormaddfloodmarkController extends Controller
{
    //
    public function addFloodmark(Request $request){
        // dd($request);
        $count = FloodMark::count();
         do {
            $generatedCode = 'CM24_' . str_pad($count + 1, 4, '0', STR_PAD_LEFT);
            $exists = FloodMark::where('code', $generatedCode)->exists(); // ตรวจสอบว่ามีรหัสนี้อยู่หรือไม่
            $count++;
        } while ($exists);

        // $generatedCode = 'CM24_' . str_pad($count + 1, 4, '0', STR_PAD_LEFT);
        // สร้างข้อมูลใหม่ในตาราง Flood_Mark
        $floodMark = new FloodMark;
        $floodMark->code = $generatedCode;
        $floodMark->affected_area = $request->affected_area;
        $floodMark->other_detail = $request->other_detail;
        $floodMark->place_detail = $request->house_number;
        $floodMark->latitude = $request->latitude;
        $floodMark->longitude = $request->longitude;
        $floodMark->place_around = $request->place;
        $floodMark->water_level = $request->water_level;
        $floodMark->tool = $request->tool;
        $floodMark->tool_detail = $request->tool_detail;
        $floodMark->note = $request->note;
        $floodMark->created_at = now(); // ใช้เวลาปัจจุบัน
        $floodMark->updated_at = now(); // ใช้เวลาปัจจุบัน

        // บันทึกข้อมูลลงในตาราง
        $floodMark->save();

        // บันทึกรูปภาพที่อัปโหลด
        if($request->hasFile('image')) {
            $imageFiles = $request->file('image');
            $uploadPath = public_path('flood_mark_2024');
            
            // Loop ผ่านรูปภาพแต่ละไฟล์
            foreach($imageFiles as $index => $image) {
                $imageNumber = $index + 1; // ลำดับรูปภาพ (เริ่มที่ 1)
                $imageName = $generatedCode . '_' . $imageNumber . '.' . $image->getClientOriginalExtension(); // ชื่อรูป

                // ย้ายไฟล์รูปภาพไปยังโฟลเดอร์ /public/flood_mark_2024
                $image->move($uploadPath, $imageName);

                // บันทึกข้อมูลรูปภาพลงในตาราง ImageFloodmark
                $imageFloodmark = new ImageFloodmark;
                $imageFloodmark->code_mark = $generatedCode; // บันทึก code เดียวกันกับ FloodMark
                $imageFloodmark->image_path = 'flood_mark_2024/' . $imageName; // เก็บ path ของไฟล์
                $imageFloodmark->created_at = now();
                $imageFloodmark->updated_at = now();
                $imageFloodmark->save();
            }
        }


        // ส่งกลับหรือ redirect ไปยังหน้าที่ต้องการ
        // return redirect()->back()->with('success', 'ข้อมูลน้ำท่วมถูกบันทึกเรียบร้อยแล้ว');
        return view("form.result"); 
        // return redirect()->route("form.result");          
    }

    public function getTable() {
        $data = FloodMark::select('*')->get();
        // $data = FloodMark::select('*')->get();
        // dd($pole[0]->pole_id);
        return view('form.table',compact('data'));      
    }

    public function getImage($code=0) {
        $image = ImageFloodmark::select('*')->where('code_mark',$code)->get();
        $data = FloodMark::select('*')->where('code',$code)->get();
        // dd($image[0]['image_path']);
        return view('form.image',compact('data','image'));      
    }

    public function getDataSurvey($compass=0) {
        header('Access-Control-Allow-Origin: *');
        $location = FloodMark::select('*')->get();;
        //dd($location);
        for ($i=0;$i<count($location);$i++){ 
            $image = ImageFloodmark::select('*')->where('code_mark',$location[$i]->code)->get();
            $result[] = [
                'code'=> $location[$i]->code,
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

    public function editDataSurvey($code=0) {
        $image = ImageFloodmark::select('*')->where('code_mark',$code)->get();
        $data = FloodMark::select('*')->where('code',$code)->get();
        // dd($image[0]['image_path']);
        return view('form.edit',compact('data','image'));      
    }


    public function destroyImage($id=0)
    {
        // dd($id);
        $image = ImageFloodmark::findOrFail($id);
        // ลบไฟล์จากโฟลเดอร์
        if (file_exists(public_path($image->image_path))) {
            unlink(public_path($image->image_path));
        }

        // ลบข้อมูลจากฐานข้อมูล
        $image->delete();

        return redirect()->back()->with('success', 'ลบรูปภาพเรียบร้อยแล้ว');
    }

    public function update(Request $request)
    {
        // อัปเดตข้อมูล
        // dd( $request);
        $floodMark= FloodMark::where('code',$request->code)->update(
            [ 
            'affected_area'=>$request->affected_area,
            'other_detail'=>$request->other_detail,
            'place_detail'=>  $request->place_detail,
            'latitude'=> $request->latitude,
            'longitude' => $request->longitude,
            'place_around' =>  $request->place_around,
            'water_level' =>  $request->water_level,
            'tool' => $request->tool,
            'tool_detail'=>$request->tool_detail,
            'note' =>  $request->note,
            ]
        );
        // บันทึกรูปภาพที่อัปโหลด
        $generatedCode=$request->code;
        if($request->hasFile('image')) {
            $imageFiles = $request->file('image');
            $uploadPath = public_path('flood_mark_2024');

            // นับจำนวนรูปภาพที่มีอยู่ใน ImageFloodmark โดยใช้ code_mark
            $existingImageCount = ImageFloodmark::where('code_mark', $generatedCode)->count();

            // Loop ผ่านรูปภาพแต่ละไฟล์
            foreach($imageFiles as $index => $image) {
                $imageNumber = $existingImageCount + $index + 1; // ลำดับรูปภาพ (เริ่มที่ 1)
                $imageName = $generatedCode . '_' . $imageNumber . '.' . $image->getClientOriginalExtension(); // ชื่อรูป

                // ย้ายไฟล์รูปภาพไปยังโฟลเดอร์ /public/flood_mark_2024
                $image->move($uploadPath, $imageName);

                // บันทึกข้อมูลรูปภาพลงในตาราง ImageFloodmark
                $imageFloodmark = new ImageFloodmark;
                $imageFloodmark->code_mark = $generatedCode; // บันทึก code เดียวกันกับ FloodMark
                $imageFloodmark->image_path = 'flood_mark_2024/' . $imageName; // เก็บ path ของไฟล์
                $imageFloodmark->created_at = now();
                $imageFloodmark->updated_at = now();
                $imageFloodmark->save();
            }
        }

        return view("form.result"); 
    }

    public function remove($code=0)
    {
        $floodMark= FloodMark::where('code',$code)->delete();
         $image = ImageFloodmark::where('code_mark',$code)->delete();
        return view("form.result"); 
        
    }

}
