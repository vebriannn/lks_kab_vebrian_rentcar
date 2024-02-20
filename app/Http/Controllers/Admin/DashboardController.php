<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Car;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        // $users = User::all();

        return view('Admin.pages.dashboard', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
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

        $nameImages->storeAs('public/carspicture', $getNameImages);

        $data = $request->except('_token');
        $data['images'] = $getNameImages;

        Car::create($data);

        return redirect()->route('admin.dashboard')->with(['success' => 'Succes Create New Data']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function viewcars(Request $request)
    {
        $cars = Car::all();

        return view('mobil', compact('cars'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Car::find($id)->delete();

        return redirect()->route('admin.dashboard')->with(['success' => 'Data Succes Delete']);
    }
}
