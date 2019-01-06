@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">{{ $tool->item }}</p>
        </div>
    </div>
    <div class="row">
        <div class="">
            <p class="quote" style="color:lawngreen">${{ $tool->price }}</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <h4 class="post-title">Description:</h4>
        <div class="col-md-12">
            <p>{{ $tool->description }}</p>
        </div>
    </div>
@endsection