
@extends('layout')

@section('main')

@include('navbar')

<div class="row">
    <div class="col-md-12">

        <div>
            My recs
        </div>


        @foreach ($myrecs as $pasterec)
            @include('card')
        @endforeach

    </div>
</div>


@stop


