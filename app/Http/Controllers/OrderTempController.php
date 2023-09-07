<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Talent;
use App\Models\Client;
use App\Models\ServiceTalent;
use App\Models\OrderTemp;
use App\Models\OrderDetail;
use App\Models\OrderService;

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

class OrderTempController extends Controller
{
    //
    public function index()
    {
        $data  = OrderTemp::all();
        return view('production.order_temp.index',
        compact(
            'data',
        ));     
        // return "berhasil";
    }

    public function create()
    {
        $client = Client::all();
        $talent = Talent::all();
        $service = ServiceTalent::all();

        return view('production.order_temp.create',
        compact(
            'client',
            'talent',
            'service',
        ));
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'client_id' => 'required',
        //     'servicetalent_id' => 'required',
        //     'talent_id' => 'required',
        //     // 'price_service' => 'required|numeric',
        //     // 'qty_service' => 'required|integer',
        //     // 'start_service' => 'required|date',
        //     // 'end_service' => 'required|date',
        //     // 'subtotal_service' => 'required|numeric',
        // ]);

        OrderTemp::create([
            'client_id' => $request->client_id,
            'servicetalent_id' => $request->servicetalent_id,
            'talent_id' => $request->talent_id,
            'price_service' => 0,
            'qty_service' => 0,
            'start_service' => now(),
            'end_service' => now(),
            'subtotal_service' => 0,
        ]);
        
        // return "store";

        return Redirect::route('order.temp.index');
    }

    public function process()
    {
        $order_temp = OrderTemp::all();
        $order = OrderService::create([
            'invoice' => '1',
            'start_service' => now(),
            'end_service' => now(),
            'total_payment' => '0',
            'status_order' => '0',
        ]);

        foreach($order_temp as $order)
        {
            OrderDetail::create([
                'invoice' => '1',
                'client_id'=> '1',
                'servicetalent_id'=> '1',
                'talent_id'=> '1',
                'price_service'=> '1',
                'qty_service'=> '1',
                'start_service'=> now(),
                'end_service'=> now(),
                'subtotal_service'=> '1',
                'status_service'=> '1',
            ]);
        }
        
        OrderTemp::query()->truncate();
        return Redirect::route('order.temp.index');
    }
}
