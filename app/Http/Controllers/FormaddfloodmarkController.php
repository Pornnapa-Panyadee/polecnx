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
        $generatedCode = 'CM24_' . str_pad($count + 1, 4, '0', STR_PAD_LEFT);
        // สร้างข้อมูลใหม่ในตาราง Flood_Mark
        $floodMark = new FloodMark;
        $floodMark->code = $generatedCode;
        $floodMark->affected_area = $request->affected_area;
        $floodMark->place_detail = $request->house_number;
        $floodMark->latitude = $request->latitude;
        $floodMark->longitude = $request->longitude;
        $floodMark->place_around = $request->place;
        $floodMark->water_level = $request->water_level;
        $floodMark->tool = $request->tool;
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
}
