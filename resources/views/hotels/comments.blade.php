@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <h1> Hotels Comments</h1>
            </div>
            <br>
            <div class="row">

                @forelse($hotel->comments as $comment)
                    <div class="panel panel-default" id="comment-{{ $comment->id }}">
                        <div class="panel-heading">
                            <strong>{{ $comment->user->full_name }}</strong>
                            <span class="text-muted" title="{{ $comment->created_at->format('d/m/Y g:i:s A') }}">{{ $comment->created_at }} </span>
                        </div>
                        <div class="panel-body">
                            {{$comment->body}}

                        </div>
                    </div>
                @empty
                    <h3>No Comments Were Found</h3>
                @endforelse
            </div>
            <br>
            <div class="row">
                {!! Form::open(array('url' => 'hotels/' . $hotel->id . '/comments'))  !!}
                <div class="input-group top-buffer">
                    {!! Form::textarea('content', null, ['class' => 'form-control comment-box', 'placeholder' => 'Add a comment']) !!}
                    <span class="input-group-addon">
                            <button type="submit" class="stylish">SAVE</button>
                        </span>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop