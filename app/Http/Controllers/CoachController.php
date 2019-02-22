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
        // Gets the Profile of Swimmer Number 1 - Need to Change this so it depends on what swimmer is clicked
        $profile = DB::table('profiles')->where('swimmer_id', '1')->get();

        // Gets the Swim Data for Swimmer Number 1 - Need to change so that it depends upon the swimmer that is clicked.
        // Need to set this up with the date range as well!!!
        $swim_data = DB::table('swim_datas')->where('swimmer_id', '1')->get();

        // Gets the Stress Data for Swimmer Number 1 - Need to change so that it depends upon the swimmer that is clicked.
        // Need to set this up with the date range as well!!!
        $stress_data = DB::table('stress_datas')->where('swimmer_id', '1')->get();

        $data = [
          'swimmer' => $swimmer,
          'profile' => $profile,
          'swim_data' => $swim_data,
          'stress_data' => $stress_data,
        ];

        return view('profile', $data);
    }
}
