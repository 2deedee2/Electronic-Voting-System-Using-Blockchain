@extends('layouts.default')
@section('title',"Electronic Blockchain Voting")

@section('content')
<div class="jumbotron">
    <h1 class="display-7">2020 Student Union Election @if(($status == 0))<span class="badge badge-secondary">CLOSED</span>@else <span class="badge badge-success">IN PROGRESS</span> @endif</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum provident omnis hic placeat ad dolore quibusdam minima ipsum rem eos? Esse ducimus unde tempora cupiditate ea reiciendis consequatur recusandae facere.</p>
    <hr class="my-4">

     @if (Auth::check())
        @if(($status == 1 && Auth::user()->name != 'Admin'))
            <a class="btn btn-primary btn-lg" href="{{ route('election') }}" role="button">Join</a>
        @endif
        @if (Auth::user()->name == 'Admin')
            @if($status == 0)
                <a class="btn btn-success btn-lg" href="{{ route('start_voting') }}" role="button">Start Voting</a>
            @elseif($status == 1)
                <a class="btn btn-danger btn-lg" href="{{ route('close_voting') }}" role="button">Close Voting</a>
                <a class="btn btn-info btn-lg" href="{{ route('gen_result') }}" role="button">Generate Result</a>
            @endif

        @endif
     @endif
</div>

@stop
