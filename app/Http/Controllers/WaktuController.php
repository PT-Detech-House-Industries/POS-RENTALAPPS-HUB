<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Stevebauman\Location\Facades\Location;

class WaktuController extends Controller
{
    public function tombol() {
        return view('production.test.tombol-waktu');
    }

    public function berhasil(Request $request)
    {
        // Jadi, di Indonesia terdapat tiga zona waktu utama: WIB (Western Indonesia Time) yang digunakan di Asia/Jakarta, WITA (Central Indonesia Time) yang digunakan di Asia/Makassar, dan WIT (Eastern Indonesia Time) yang digunakan di Asia/Jayapura. Perbedaan antara zona waktu-zona ini biasanya adalah beberapa jam.
        $ipAddress  = $request->ip();
        // return $ipAddress;
        if ($position = Location::get($ipAddress)) {
            // Successfully retrieved position.
            // $dataTimezone = $position->timezone;

            // return dd($position);

            $locationData = [
                'countryName' => $position->countryName,
                'regionName' => $position->regionName,
                'city' => $position->cityName,
                'zip' => $position->zipCode,
                'latitude' => $position->latitude,
                'longitude' => $position->longitude,
                // 37.422,-122.084 cari disearch google
                // 'isp' => $position->isp, // layanan internet
                // 'org' => $position->org, // nama perusahaan  
                'timezone' => $position->timezone,
                'countryCode' => $position->countryCode,
            ];
        }
        
        return $locationData;
        
        $milliseconds = Carbon::now()->timestamp * 1000;
        // $milliseconds = 1694935315687;
        $carbon = Carbon::createFromTimestamp($milliseconds / 1000, $dataTimezone); // Bagi dengan 1000 karena timestamp dalam milidetik

        $formattedDateTime = $carbon->format('M-d-Y H:i:s');

        return $formattedDateTime;
    }
    //
    public function timeToUnix()
    {
        // $time = Carbon::today();
        $time = "2022-01-01";
        $timeStamp = strtotime($time);
        
        $waktu = "2018-01-11 13:31:59";
        $a = date(strtotime($waktu));
        $b = strtotime("2022-02-11 15:00");
        
        $hasil = floor($b * 1000);

        $d = Carbon::createFromFormat('U.v', number_format($hasil/1000, 3, '.', ''));
        // return print $d->format("M-d-Y H:i:s.u");
        // return print $hasil;
        // $date = Carbon::createFromTimestamp($waktu);
        // return "$date";
        // untuk mengambil waktu hari ini
        // $milliseconds = floor(microtime(true) * 1000);
        $milliseconds = Carbon::now()->timestamp * 1000;

        // $milliseconds = 1694935315687;
        $carbon = Carbon::createFromTimestamp($milliseconds / 1000, 'Asia/Jakarta'); // Bagi dengan 1000 karena timestamp dalam milidetik

        // $formattedDateTime = $carbon->format('M-d-Y H:i:s');
        $formattedDateTime = $carbon->format('M-d-Y H:i:s');

        return $formattedDateTime;

        $milliseconds = 1694935315687;
        // return dd($timeStamp);

        //untuk unix apoch
        $converted = Carbon::createFromTimestamp($milliseconds,'Asia/Jakarta')->toDateTimeString();
        return print $converted;
        
        $d = Carbon::createFromFormat('U.v', number_format($milliseconds/1000, 3, '.', ''));
        // $d = Carbon::createFromFormat('U.v', number_format($hasil/1000, 3, '.', ''));
        return print $d->format("M-d-Y H:i:s.u");
        
        $hasil = $data->date_send;
		$date = DateTime::createFromFormat('U.v', number_format($hasil/1000, 3, '.', ''));
        // return dd(Carbon::now()->timestamp);
        
    }
}
