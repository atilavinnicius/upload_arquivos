<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $req)
    {
        $req->file('arquivo')->store('Pasta');
        var_dump($req->file('arquivo'));
    }
}
