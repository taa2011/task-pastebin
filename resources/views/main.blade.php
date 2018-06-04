@extends('layout')

@section('main')

@include('navbar')

<div class="row">
    <div class="col-md-12">
        <form method="POST" action="/">
            @csrf
            <div class="form-group">
                <textarea name="code" id="textbox" class="form-control" rows="10"></textarea>
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

            <div class="card my-2">
                <div class="card-body">
                    <pre><code class="language-css">{{ $pasterec->code }}</pre></code>
                    <a href="\{{ $pasterec->hash }}" class="card-link">{{ $pasterec->hash }}</a>
                </div>
            </div>

            @endforeach
        </div>

    </div>
</div>


@stop


