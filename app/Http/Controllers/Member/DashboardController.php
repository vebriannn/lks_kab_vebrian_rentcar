<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Models\Car;
use App\Models\User;
use App\Models\Reservations;

class DashboardController extends Controller
{

    public function index()
    {
        
        $cars = Car::all();
        return view('index', compact('cars'));
    }

 
    public function create(Request $request)
    {

        $request->validate([
            'user_id' => 'integer|required',
            'car_id' => 'integer|required',
            'start_date' => 'date|required',
            'end_date' => 'date|required',
        ]);

        $nameImagesTransfer = $request->images;
        $getNameImagesTransfer = Str::random(10).$nameImagesTransfer->getClientOriginalName();
        $nameImagesTransfer->storeAs('public/imagesTransfer', $getNameImagesTransfer);

        $data = $request->except('_token');
        $data['images'] = $getNameImagesTransfer;

        $data['payment_status'] = "success";
        $data['status'] = "pending";


        if($nameImagesTransfer != "") {
            $data['proof_of_payment'] = "success";
        }

        Reservations::create($data);

        return redirect()->route('member.succescars')->with(['success' => 'Succes Membayar, Tunggu Admin Konfirmasi!']);
    }


    public function store(Request $request)
    {
        //
    }

    public function showhome()
    {
        $cars = Car::all()->take(3);
        return view('index', compact('cars'));
    }


    public function showcars()
    {
        $cars = Car::all();
        return view('mobil', compact('cars'));
    }


    public function getcars(Request $request)
    {
        $cars = Car::where('brand_name','like', '%' . $request->input('searchcars') . '%')->get();


        if($cars->isEmpty()) {
            $message = "Sorry Cars Not Found";

            return view('mobil', compact('message'));
        }

        return view('mobil', compact('cars'));
    }


    public function sewa($id)
    {

        $users = auth()->user();
        $cars = Car::find($id);
        return view('Member.pages.proces', compact('cars', 'users'));
    }


    public function bayar(Request $request, string $id)
    {
    
    }

    public function destroy(string $id)
    {
        //
    }
}
