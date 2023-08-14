<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

class ServicesController extends Controller
{
    // ================================================================= USER & ROLES





    // ================================================================= CUSTOMERS
    function get_customers(Request $request)
    {
        $customers = DB::table('customers')->where(function ($customer) use ($request) {
            $customer->where('name', 'like', '%' . $request->search . '%')->orWhere('phone', 'like', '%' . $request->search . '%')
                ->orWhere('size', 'like', '%' . $request->search . '%')
                ->orWhere('minus', 'like', '%' . $request->search . '%')
                ->orWhere('shoe_brand', 'like', '%' . $request->search . '%');
        })->when($request->start_date && $request->end_date, function ($result) use ($request) {
            $result->where('created_at', '>', $request->start_date)->where('created_at', '<', $request->end_date);
        })->paginate(10);

        return view('pages.order_jasa', compact('customers'));
    }

    function post_customer(Request $request)
    {
        if ($request->customer_id != 0) {
            $customer = DB::table('customers')->where('id', $request->customer_id)->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'shoe_brand' => $request->shoe_brand,
                'size' => $request->size,
                'color' => $request->color,
                'minus' => $request->minus,
                'order_date' => $request->order_date,
            ]);

            return redirect('/dashboard');
        }

        $customer = DB::table('customers')->where('id', $request->customer_id)->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'shoe_brand' => $request->shoe_brand,
            'size' => $request->size,
            'color' => $request->color,
            'minus' => $request->minus,
            'order_date' => $request->order_date,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/dashboard');
    }


    function create_customer()
    {
        $customer = null;
        return view('pages.order_jasa_form', compact('customer'));
    }


    function edit_customer($id)
    {
        $customer = DB::table('customers')->where('id', $id)->first();
        return view('pages.order_jasa_form', compact('customer'));
    }

    function delete_customer($id)
    {
        DB::table('customers')->where('id', $id)->delete();
        return redirect('/dashboard');
    }


    // ================================================================= Pembayaran
    function get_pembayaran(Request $request)
    {
        $customers = DB::table('customers')->where(function ($customer) use ($request) {
            $customer->where('name', 'like', '%' . $request->search . '%')->orWhere('phone', 'like', '%' . $request->search . '%')
                ->orWhere('size', 'like', '%' . $request->search . '%')
                ->orWhere('minus', 'like', '%' . $request->search . '%')
                ->orWhere('shoe_brand', 'like', '%' . $request->search . '%');
        })->when($request->start_date && $request->end_date, function ($result) use ($request) {
            $result->where('created_at', '>', $request->start_date)->where('created_at', '<', $request->end_date);
        })->paginate(10);

        return view('pages.order_jasa', compact('customers'));
    }

    function post_pembayaran(Request $request)
    {
        if ($request->customer_id != 0) {
            $customer = DB::table('customers')->where('id', $request->customer_id)->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'shoe_brand' => $request->shoe_brand,
                'size' => $request->size,
                'color' => $request->color,
                'minus' => $request->minus,
                'order_date' => $request->order_date,
            ]);

            return redirect('/dashboard');
        }

        $customer = DB::table('customers')->where('id', $request->customer_id)->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'shoe_brand' => $request->shoe_brand,
            'size' => $request->size,
            'color' => $request->color,
            'minus' => $request->minus,
            'order_date' => $request->order_date,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/dashboard');
    }


    function create_pembayaran()
    {
        $customer = null;
        return view('pages.order_jasa_form', compact('customer'));
    }


    function edit_pembayaran($id)
    {
        $customer = DB::table('customers')->where('id', $id)->first();
        return view('pages.order_jasa_form', compact('customer'));
    }

    function delete_pembayaran($id)
    {
        DB::table('customers')->where('id', $id)->delete();
        return redirect('/dashboard');
    }



    // ================================================================= Penjemputan
    function get_penjemputan(Request $request)
    {
        $customers = DB::table('customers')->where(function ($customer) use ($request) {
            $customer->where('name', 'like', '%' . $request->search . '%')->orWhere('phone', 'like', '%' . $request->search . '%')
                ->orWhere('size', 'like', '%' . $request->search . '%')
                ->orWhere('minus', 'like', '%' . $request->search . '%')
                ->orWhere('shoe_brand', 'like', '%' . $request->search . '%');
        })->when($request->start_date && $request->end_date, function ($result) use ($request) {
            $result->where('created_at', '>', $request->start_date)->where('created_at', '<', $request->end_date);
        })->paginate(10);

        return view('pages.order_jasa', compact('customers'));
    }

    function post_penjemputan(Request $request)
    {
        if ($request->customer_id != 0) {
            $customer = DB::table('customers')->where('id', $request->customer_id)->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'shoe_brand' => $request->shoe_brand,
                'size' => $request->size,
                'color' => $request->color,
                'minus' => $request->minus,
                'order_date' => $request->order_date,
            ]);

            return redirect('/dashboard');
        }

        $customer = DB::table('customers')->where('id', $request->customer_id)->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'shoe_brand' => $request->shoe_brand,
            'size' => $request->size,
            'color' => $request->color,
            'minus' => $request->minus,
            'order_date' => $request->order_date,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/dashboard');
    }


    function create_penjemputan()
    {
        $customer = null;
        return view('pages.order_jasa_form', compact('customer'));
    }


    function edit_penjemputan($id)
    {
        $customer = DB::table('customers')->where('id', $id)->first();
        return view('pages.order_jasa_form', compact('customer'));
    }

    function delete_penjemputan($id)
    {
        DB::table('customers')->where('id', $id)->delete();
        return redirect('/dashboard');
    }



    // ================================================================= Pengembalian
    function get_pengembalian(Request $request)
    {
        $customers = DB::table('customers')->where(function ($customer) use ($request) {
            $customer->where('name', 'like', '%' . $request->search . '%')->orWhere('phone', 'like', '%' . $request->search . '%')
                ->orWhere('size', 'like', '%' . $request->search . '%')
                ->orWhere('minus', 'like', '%' . $request->search . '%')
                ->orWhere('shoe_brand', 'like', '%' . $request->search . '%');
        })->when($request->start_date && $request->end_date, function ($result) use ($request) {
            $result->where('created_at', '>', $request->start_date)->where('created_at', '<', $request->end_date);
        })->paginate(10);

        return view('pages.order_jasa', compact('customers'));
    }

    function post_pengembalian(Request $request)
    {
        if ($request->customer_id != 0) {
            $customer = DB::table('customers')->where('id', $request->customer_id)->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'shoe_brand' => $request->shoe_brand,
                'size' => $request->size,
                'color' => $request->color,
                'minus' => $request->minus,
                'order_date' => $request->order_date,
            ]);

            return redirect('/dashboard');
        }

        $customer = DB::table('customers')->where('id', $request->customer_id)->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'shoe_brand' => $request->shoe_brand,
            'size' => $request->size,
            'color' => $request->color,
            'minus' => $request->minus,
            'order_date' => $request->order_date,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/dashboard');
    }


    function create_pengembalian()
    {
        $customer = null;
        return view('pages.order_jasa_form', compact('customer'));
    }


    function edit_pengembalian($id)
    {
        $customer = DB::table('customers')->where('id', $id)->first();
        return view('pages.order_jasa_form', compact('customer'));
    }

    function delete_pengembalian($id)
    {
        DB::table('customers')->where('id', $id)->delete();
        return redirect('/dashboard');
    }



    // ================================================================= Pengerjaan
    function get_pengerjaan(Request $request)
    {
        $customers = DB::table('customers')->where(function ($customer) use ($request) {
            $customer->where('name', 'like', '%' . $request->search . '%')->orWhere('phone', 'like', '%' . $request->search . '%')
                ->orWhere('size', 'like', '%' . $request->search . '%')
                ->orWhere('minus', 'like', '%' . $request->search . '%')
                ->orWhere('shoe_brand', 'like', '%' . $request->search . '%');
        })->when($request->start_date && $request->end_date, function ($result) use ($request) {
            $result->where('created_at', '>', $request->start_date)->where('created_at', '<', $request->end_date);
        })->paginate(10);

        return view('pages.order_jasa', compact('customers'));
    }

    function post_pengerjaan(Request $request)
    {
        if ($request->customer_id != 0) {
            $customer = DB::table('customers')->where('id', $request->customer_id)->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'shoe_brand' => $request->shoe_brand,
                'size' => $request->size,
                'color' => $request->color,
                'minus' => $request->minus,
                'order_date' => $request->order_date,
            ]);

            return redirect('/dashboard');
        }

        $customer = DB::table('customers')->where('id', $request->customer_id)->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'shoe_brand' => $request->shoe_brand,
            'size' => $request->size,
            'color' => $request->color,
            'minus' => $request->minus,
            'order_date' => $request->order_date,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/dashboard');
    }


    function create_pengerjaan()
    {
        $customer = null;
        return view('pages.order_jasa_form', compact('customer'));
    }


    function edit_pengerjaan($id)
    {
        $customer = DB::table('customers')->where('id', $id)->first();
        return view('pages.order_jasa_form', compact('customer'));
    }

    function delete_pengerjaan($id)
    {
        DB::table('customers')->where('id', $id)->delete();
        return redirect('/dashboard');
    }


     // ================================================================= Laporan
     function get_laporan(Request $request)
     {
         $customers = DB::table('customers')->where(function ($customer) use ($request) {
             $customer->where('name', 'like', '%' . $request->search . '%')->orWhere('phone', 'like', '%' . $request->search . '%')
                 ->orWhere('size', 'like', '%' . $request->search . '%')
                 ->orWhere('minus', 'like', '%' . $request->search . '%')
                 ->orWhere('shoe_brand', 'like', '%' . $request->search . '%');
         })->when($request->start_date && $request->end_date, function ($result) use ($request) {
             $result->where('created_at', '>', $request->start_date)->where('created_at', '<', $request->end_date);
         })->paginate(10);

         return view('pages.order_jasa', compact('customers'));
     }


     function print_laporan(Request $request)
     {
        $pdf = PDF::loadView('', compact('pasiens', 'merchant'));
        $pdf->setPaper('A4', 'portrait');
        $pdf->setOption('margin-top', 0);
        $pdf->setOption('margin-right', 0);
        $pdf->setOption('margin-bottom', 0);
        $pdf->setOption('margin-left', 0);

        $loadPdf = $pdf->stream('data-pasien.pdf');

        return $loadPdf;
     }
}
