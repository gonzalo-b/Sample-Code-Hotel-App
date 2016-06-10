@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <h1> Create Hotel</h1>
            </div>
            <br>
            <div class="row">
                {!! Form::model($hotel = new \App\Hotel, ['url' => 'hotels']) !!}
                <div class="form-group">
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title', null, ['class' => 'form-control' ]) !!}
                    @if ($errors->has('title'))
                        <span class="help-block">
                             <strong class="danger">{{ $errors->first('title') }}</strong>
                         </span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop