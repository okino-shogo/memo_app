<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;

class MemoController extends Controller

{
    public function show($id) 
    {
        $memo = Memo::find($id);
        return view('memos.show',['memo'=> $memo]);
    }
}
