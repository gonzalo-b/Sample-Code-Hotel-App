@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <h1> Hotels</h1>
            </div>
            <br>
            <div class="row">
                @forelse($hotels as $hotel)
                    <a href="{{url('hotels/'.$hotel->id.'/comments')}}"> <h3> {{ $hotel->title  }} </h3></a>
                @empty
                    <h3>No Hotels Were Found</h3>
                @endforelse
            </div>
        </div>
    </div>
@stop