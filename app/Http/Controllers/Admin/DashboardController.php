<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Models\Car;
use App\Models\Reservations;
use App\Models\User;

class DashboardController extends Controller
{

    public function index()
    {
        $cars = Car::all();
        $users = auth()->user();

        return view('Admin.pages.dashboard', compact('cars', 'users'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'images' => 'required|image|mimes:jpeg,jpg,png',
            'brand_name' => 'required|string',
            'price_per_day' => 'required|integer',
            'stock' => 'required|integer',
        ]);

        $nameImages = $request->images;
        $getNameImages = Str::random(10).$nameImages->getClientOriginalName();
        $nameImages->storeAs('public/carsImages', $getNameImages);

        $data = $request->except('_token');
        $data['images'] = $getNameImages;

        Car::create($data);

        return redirect()->route('admin.dashboard')->with(['success' => 'Succes Create New Data']);
    }


    public function edit($id)
    {
        $cars = Car::find($id);
        return view('Admin.pages.edit', compact('cars'));

    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'images' => 'required|image|mimes:jpeg,jpg,png',
            'brand_name' => 'required|string',
            'price_per_day' => 'required|integer',
            'stock' => 'required|integer',
        ]); 

        $data = $request->except('_token');

        $cars = Car::find($id);

        if($request->images) {
            $nameImages = $request->images;
            $getNameImages = Str::random(10).$nameImages->getClientOriginalName();
            $nameImages->storeAs('public/carsImages', $getNameImages);
            $data['images'] = $getNameImages;

            // hapus images lama
            Storage::delete('public/carsImages/' . $cars->images);
        }

        $cars->update($data);

        return redirect()->route('admin.dashboard')->with(['success' => 'Succes Update Data']);
    }


    public function destroy($id)
    {
        Car::find($id)->delete();

        return redirect()->route('admin.dashboard')->with(['success' => 'Data Succes Delete']);
    }

    public function trx() {
        $res = Reservations::with(['car'])->get();
        $users = auth()->user();

        return view('Admin.pages.transaction', compact('res', 'users'));
    }


    public function updatedData(Request $request, $id)
    {
        $res = Reservations::find($id);
        $res->payment_status = "success";
        $res->status = "completed";
        $res->update();
        return redirect()->route('admin.transaction')->with(['success' => 'Succes Update Data']);
    }

}
