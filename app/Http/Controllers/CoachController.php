<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\Squad;
use App\Swimmer;
use App\Model\Profile;
use Auth;

class CoachController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:coach');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $group = Squad::select('swimmer_id')->where('coach_id', Auth::user()->id)->get();
        $group = $group->toArray();

        $group_list = DB::table('swimmers')->whereIn('id', $group)->get();

        $data = [
          'group_list' => $group_list,
        ];

        return view('coach', $data);
    }

    public function getProfile(Swimmer $swimmer)
    {
        $profile = DB::table('profiles')->where('swimmer_id', '1')->get();

        $data = [
          'swimmer' => $swimmer,
          'profile' => $profile,
        ];

        return view('profile', $data);
    }
}
