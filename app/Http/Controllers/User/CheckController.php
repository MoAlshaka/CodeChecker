<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function check(Request $request)
    {
        $code = $request->input('code');
        $exists = DB::table('codes')->where('code', $code)->exists();

        if ($exists && DB::table('codes')->where('code', $code)->value('status') == '1') {
            DB::table('codes')->where('code', $code)->update(['status' => '0']);
            return redirect()->back()->with([
                'success' => 'The code is valid.'
            ]);
        } elseif ($exists && DB::table('codes')->where('code', $code)->value('status') == '0') {
            return redirect()->back()->with([
                'error' => 'The code has already been used before.'
            ]);
        } else {
            return redirect()->back()->with([
                'error' => 'The code is not found.'
            ]);
        }
    }
}
