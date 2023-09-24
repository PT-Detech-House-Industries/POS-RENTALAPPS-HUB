<?php

namespace App\Http\Controllers;

// model
use App\Models\User;
use App\Models\Talent;
use App\Models\Client;
use App\Models\AppVersion;
use App\Mail\NamaEmailAnda;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
// lib time
use Carbon\Carbon;
// lib compress image
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
// lib find location ip
use Stevebauman\Location\Facades\Location;

class DashboardController extends Controller
{
    //
    public function index()
    {
        if (Auth::user()->hasRole('owner'))
        {
            // $version = AppVersion::latest()->first();
            // $dataVersion = $version->version;
            // $dataYear = $version->created_at->format('Y');
            $sumUser = User::count();
            $sumTalent = Talent::count();
            $sumClient = Client::count();

            // waktu
            $milliseconds = Carbon::now()->timestamp * 1000;
            // $milliseconds = 1694935315687;
            $carbon = Carbon::createFromTimestamp($milliseconds / 1000, 'Asia/Jakarta'); // Bagi dengan 1000 karena timestamp dalam milidetik

            $dataTime = $carbon->format('M-d-Y H:i:s');

            return view('dashboard',
            compact(
                'sumUser',
                'sumTalent',
                'sumClient',
                'dataTime',
            ));
        }

        if (Auth::user()->hasRole('admin'))
        {
            return view('dashboard');
        }

        if (Auth::user()->hasRole('talent'))
        {
            return view('dashboard');
        }

        if (Auth::user()->hasRole('client'))
        {
            $talentData = Talent::all();
        
            return view('dashboard',
                compact(
                    'talentData',
            ));
        }
        
    }
}
