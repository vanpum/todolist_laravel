<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodolistController extends Controller
{
    //
    public function index()
    {
        return "리스트 컨트롤러";
    }

    public function store(Request $request)
    {
        $value_array = $request->toArray();
        DB::insert('insert into todolists (title, contents, writer, status, progress, created_at) values (?, ?, ?, ?, ?, ?)', 
        [$value_array['title'],
        $value_array['contents'],
        $value_array['writer'],
        $value_array['status'],
        $value_array['progress'],
        $value_array['created_at']]);
        
        return ['result'=>true];
    }

    public function remove()
    {
        return "글 삭제 컨트롤러";
    }

    public function update()
    {
        return "글 수정 컨트롤러";
    }

    public function show()
    {
        return "글 상세 보기 컨트롤러";
    }

}
