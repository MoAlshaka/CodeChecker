<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Code;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CodeController extends Controller
{

    public function index()
    {
        return view('admin.code.index');
    }

    public function create()
    {
        return view('admin.code.create');
    }


    public function store(Request $request)
    {
        $nums = $request->input('nums');
        $createdCodes = [];

        while (count($createdCodes) < $nums) {
            $newCode = Str::random(8) . rand(10000000, 99999999);

            if (!in_array($newCode, $createdCodes) && !DB::table('codes')->where('code', $newCode)->exists()) {
                $createdCodes[] = $newCode;
            }
        }

        foreach ($createdCodes as $code) {
            Code::create([
                'code' => $code,
            ]);
        }
    }
}
