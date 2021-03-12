<?php

namespace App\Http\Controllers;
use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profile(){

        $data = profile::paginate(10);
        $header = profile::where('profile_id', 21)->first();
        return view('profile', ['profile' => $data], ['header' => $header]);
        }
}
