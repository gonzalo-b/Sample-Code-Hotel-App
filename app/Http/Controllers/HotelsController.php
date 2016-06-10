<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Http\Requests\HotelRequest;
use Illuminate\Http\Request;

use App\Http\Requests;

class HotelsController extends Controller
{
    /*
     * Middleware
     */
    public function __construct()
    {
        $this->middleware('admin', ['only' => ['create', 'store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['hotels'] =  Hotel::all();
        return view('hotels.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param HotelRequest $request
     * @return \Illuminate\Http\Response
     * @internal param $HotelRequest
     */
    public function store(HotelRequest $request)
    {
        $hotel = new Hotel($request->all());
        $hotel->save();

        session()->put('success', 'Hotel was successfully created.');
        return redirect('hotels');
    }
}
