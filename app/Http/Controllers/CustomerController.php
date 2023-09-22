<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Admin;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('Oda_No')->get();

        return view('index', ['customers' => $customers]);
    }

    public function create()
    {
        return view('create');
    }

    public function save(Request $request)
{
    $odaDoluMu = Customer::where('Oda_No', $request->Oda_No)->first();

    if ($odaDoluMu) {
        return redirect()->back()->with('error', 'Bu odada zaten bir müşteri var.');
    }

    Customer::create([
        'Ad' => $request->Ad,
        'Soyad' => $request->Soyad,
        'Giris_Tarihi' => $request->Giris_Tarihi,
        'Oda_No' => $request->Oda_No,
        'Ek_Bilgiler' => $request->Ek_Bilgiler,
    ]);

    return redirect()->route('index')->with('success', 'Müşteri kaydedildi.');
}

public function search(Request $request)
{
    $ad = $request->input('ad');
    $soyad = $request->input('soyad');
    $girisTarihi = $request->input('giris_tarihi');
    $odaNo = $request->input('oda_no');

    $query = Customer::query();

    if (!empty($ad)) {
        $query->where('Ad', 'LIKE', "$ad%");
    }

    if (!empty($soyad)) {
        $query->where('Soyad', 'LIKE', "$soyad%");
    }

    if (!empty($girisTarihi)) {
        $query->where('Giris_Tarihi', '=', $girisTarihi);
    }

    if (!empty($odaNo)) {
        $query->where('Oda_No', 'LIKE', "$odaNo%");
    }

    $customers = $query->get();

    return view('search_results', compact('customers'));
}
}
