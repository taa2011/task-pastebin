@extends('layout')

@section('main')
    <div>
        <div>
            last 10 recs
        </div>

    @foreach ($last10 as $pasterec)
        <div>
            {{ $pasterec->hash }}
        </div>
        <div>
            {{ $pasterec->code }}
        </div>

    @endforeach
    </div>

@stop


