<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function paymentTalentIndex() // membuat perfunction untuk route website
    {
        try {

            // $paymentTalent = paymentTalent::all();
            // return view('admin.payment_talent_index', compact('paymentTalent'));
            $paymentTalent = [];
            return view('production.admin.payment_talent_index', compact('paymentTalent'));
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function paymentClientIndex()
    {
        try {

            return "hello";

        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function paymentTalentCreate() //membuat form untuk pembayaran talent
    {
        try {

            $serviceTalent = [];

            return view('production.admin.payment_talent_create', compact('serviceTalent'));
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function paymentTalentStore(Request $request) // membuat proses pembayaran talent
    {
        try {

            $serviceOrder = OrderService::findOrFail($request->service);
            $detailOrder = OrderDetail::findOrFail($serviceOrder->invoice);

            $talentFee = $serviceOrder->total_payment * (80 / 100);
            $adminFee = $serviceOrder->total_payment * (20 / 100);
            // $endService = $serviceOrder->duration;

            PaymentTalent::create([
                // 'talent_name' => $request->talent,
                // 'service' => $service->service_name,
                // 'start_service' => $request->start_service,
                // 'end_service' => $endService,
                // 'proof_of_transfer' => 'proof_of_transfer',
                // 'client_name' => $request->client,
                // 'price_service' => $service->price_service,
                // 'talent_fee' => $talentFee,
                // 'admin_fee' => $adminFee,
                // 'status' => 'status',

                'kode_id' => 'PY01',
                'kode_nomor' => 'masih belum betul',
                'order_id' => $serviceOrder->idService, //sort dengan nama id order
                'talent_nama' => $detailOrder->talent->nama, // nama talent
                'client_nama' => $detailOrder->client->nama, // nama client
                'total_bayar' => $serviceOrder->total_payment,
                'talent_fee' => $talentFee,
                'admin_fee' => $adminFee,
                'bukti_bayar' => 'masih belum betul',
                'status_bayar' => 'sukses',
            ]);

            return redirect()->route('admin.tp.index');
            
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function serviceTalentIndex() // menampilkan service untuk talent yang diservice
    {
        try {

            $serviceTalent = ServiceTalent::all();
            return view('admin.service_talent_index', compact('serviceTalent'));
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function orderServiceIndex()
    {
        try {
            //
            $serviceTalent = [];
            $orderService = [];
            $orderTemp = [];
            $selectTalent = [];
            $selectClient = [];
            $total = 0;

            // $serviceTalent = ServiceTalent::all();
            // $orderService = OrderService::all();
            // $orderTemp = OrderTemp::all();
            // $selectTalent = Talent::all();
            // $selectClient = Client::all();

            return view(
                'production.admin.order_service_index',
                compact(
                    'orderService',
                    'orderTemp',
                    'serviceTalent',
                    'selectTalent',
                    'selectClient',
                    'total'
                )
            );
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function orderTempCreate(Request $request) //proses form temp order
    {
        try {
            //
            $service = ServiceTalent::findOrFail($request->service);

            OrderTemp::create([
                'client_id' => $request->client,
                'servicetalent_id' => $request->service,
                'talent_id' => $request->talent,
                'price_service' => $service->price_service,
                'qty_service' => $request->jumlah,
                'start_service' => $request->start_service,
                'end_service' => $request->start_service,
                'subtotal_service' => $service->price_service * $request->jumlah,
            ]);

            return redirect()->route('admin.os.index');
            // 
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function orderTempDelete($id)
    {
        try {
            //
            $idTemp = OrderTemp::find($id);
            // return dd($idTemp);

            $idTemp->delete();

            return redirect()->route('admin.os.index');
            //
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function orderServiceCreate(Request $request) // route('admin.os.create') proses form service order
    {
        try {
            //
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/' . $filename);

            $image->move(public_path('images'), $filename);

            $optimizerChain = OptimizerChainFactory::create();
            $optimizerChain->optimize($path); //menyimpan foto
            //
            $latest = OrderService::orderBy('id', 'DESC')->first();
            if (!$latest) {
                $invoice = '0001';
            } else {
                $invoice = sprintf('%04d', $latest->invoice + 1);
            }

            $temp_order = OrderTemp::all();
            $data_temporder = OrderTemp::latest()->first();

            $date = Carbon::now()->format('Ymd'); // format tanggal YYYYmmdd
            $lastId = PaymentTalent::orderBy('created_at', 'desc')->first();

            OrderService::create([
                'invoice' => $invoice,
                'start_service' => $date,
                'end_service' => $date,
                'total_payment' => $request->total,
                'status_order' => 'pending',
            ]);

            $order =  OrderService::orderBy('id', 'DESC')->first();

            foreach ($temp_order as $item) {
                OrderDetail::create([
                    'invoice' => $invoice,
                    'client_id' => $item->client_id,
                    'servicetalent_id' => 1,
                    'talent_id' => $item->talent_id,
                    'price_service' => $item->price_service,
                    'qty_service' => $item->qty_service,
                    'start_service' => $item->start_service,
                    'end_service' => $item->end_service,
                    'subtotal_service' => $item->subtotal_service,
                    'status_service' => 'undone',
                ]);
            }

            OrderTemp::query()->truncate(); //menghapus semua data yang ada

            $lastOrder = OrderService::latest()->first();
            $talentFee = $lastOrder->total_payment * (80 / 100);
            $adminFee = $lastOrder->total_payment * (20 / 100);

            //start_id
            $date = Carbon::now()->format('Ymd'); // format tanggal YYYYmmdd
            $lastId = PaymentTalent::orderBy('created_at', 'desc')->first();

            if (!$lastId) {
                $newIdNumber = $date.'00001';
            } else {
                $lastIdNumber = substr($lastId->kode_nomor, -13); // ambil tiga digit terakhir dari ID terakhir
                $newIdNumber = str_pad($lastIdNumber + 1, 13, '0', STR_PAD_LEFT); // tambahkan 1 dan tambahkan 0 di depan jika kurang dari 3 digit
            }

            $newId = $newIdNumber; //end id

            PaymentTalent::create([
                'kode_id' => 'PT11',
                'kode_nomor' => $newId,
                'order_id' => $order->id,
                'talent_nama' => $data_temporder->talent->nickname,
                'client_nama' => $data_temporder->client->user->name,
                'total_bayar' => $lastOrder->total_payment,
                'talent_fee' => $talentFee,
                'admin_fee' => $adminFee,
                'bukti_bayar' => null,
                'status_bayar'  => 'pending'
            ]);

            //start_id
            $date = Carbon::now()->format('Ymd'); // format tanggal YYYYmmdd
            $lastId = PaymentClient::orderBy('created_at', 'desc')->first();

            if (!$lastId) {
                $newIdNumber = $date.'00001';
            } else {
                $lastIdNumber = substr($lastId->kode_nomor, -13); // ambil tiga digit terakhir dari ID terakhir
                $newIdNumber = str_pad($lastIdNumber + 1, 13, '0', STR_PAD_LEFT); // tambahkan 1 dan tambahkan 0 di depan jika kurang dari 3 digit
            }

            $newId = $newIdNumber; //end id

            PaymentClient::create([ // proses membuat data didalam order
                'kode_id' => 'PC11',
                'kode_nomor' => $newId,
                'order_id' => $order->id,
                'client_id' => $data_temporder->client_id,
                'username_client'=> $data_temporder->client->nickname,
                'nama_client' => $data_temporder->client->user->name,
                'status_bayar' => 'pending',
            ]);

            return redirect()->route('admin.os.index');
            // 
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error;
        }
    }

    public function orderSeviceDetail($invoice) // menampilkan data di service tabel
    {
        try {
            //
            //mencari invoice dari payment
            $key = OrderService::where('invoice', $invoice)->get();
            //melakukan sort data
            $paymentTalent = PaymentTalent::where('order_id', $key[0]->id)->get();
            $paymentClient = PaymentClient::where('order_id', $key[0]->id)->get();
            $orderDetail = OrderDetail::where('invoice', $invoice)->get();
            //mengembalikan data
            return view('admin.order_service_detail', compact(
                'paymentTalent',
                'paymentClient',
                'orderDetail',
            ));
            //
        } catch (\Exception $e) {
            //
            $error = $e->getMessage();
            return $error;
            //
        }
    }

    public function paymentClientStore() //coming soon
    {

    }
}