<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        return "แสดงรายการ Post ทั้งหมด";
    }

    public function create()
    {
        return "สร้างรายการข้อมูลใหม่";
    }

    public function edit($id)
    {
        return "แก้ไขรายการข้อมูล {$id}";
    }

    public function destroy($id)
    {
        return "ลบรายการข้อมูล {$id}";
    }
}
