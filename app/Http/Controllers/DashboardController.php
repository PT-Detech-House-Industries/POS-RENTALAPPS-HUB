<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Talent;
use App\Models\Client;
use App\Models\AppVersion;

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
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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

            return view('dashboard',
            compact(
                'sumUser',
                'sumTalent',
                'sumClient',
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
