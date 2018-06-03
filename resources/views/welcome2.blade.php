@extends('layout')

@section('main')

<form method="POST" action="/">
    @csrf
    <div class="form-group">
        <textarea name="code" class="form-control" rows="10"></textarea>
    </div>
    <div class="form-group">
        <button class='btn btn-primary'>Create paste</button>
    </div>

</form>
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


