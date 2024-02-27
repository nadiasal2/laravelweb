<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;

class EkstrakurikulerController extends Controller
{
    // Fungsi baru bernama index
    public function index()
    {
        return view('ekstrakurikuler', [
            "title" => "Ekstrakurikuler",
            "ekstrakurikuler" => Ekstrakurikuler::all() //mengambil seluruh data ekstrakurikuler dari model ekstrakurikuler dan mengembalikannya
        ]);
    }
}
