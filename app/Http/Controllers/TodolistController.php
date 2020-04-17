<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodolistController extends Controller
{
    //
    public function index()
    {
        return "리스트 컨트롤러";
    }

    public function store()
    {
        return "글저장 컨트롤러";
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
