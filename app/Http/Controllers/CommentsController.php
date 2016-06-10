<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Hotel;
use Illuminate\Http\Request;

use App\Http\Requests;

class CommentsController extends Controller
{
    /*
     * Show Every comment on the Hotel
     */
    public function index(Hotel $hotel){

        $data['hotel'] = $hotel;
        return view('hotels.comments', $data);
    }

    /*
     * Store Hotel Comment
     */
    public function store(Hotel $hotel, Request $request)
    {
        Comment::create([
            'hotel_id' => $hotel->id,
            'user_id' => auth()->user()->id,
            'body' => $request->content
        ]);

        session()->put('success', 'Hotel was successfully created.');
        return back();
    }
}
