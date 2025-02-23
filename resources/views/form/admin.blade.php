
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('รายการข้อมูล') }}</div>
                <a href="{{ url('/flood24/table')}}" target="_blank">แผนที่ตำแหน่ง Flood Mark</a>
                <a href="{{ url('/flood24/form')}}" target="_blank">กรอกข้อมูล Flood Mark ใหม่</a>
                <a href="{{ url('/flood24/tableonly')}}" target="_blank">ตารางข้อมูล Flood Mark</a>
          

                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
