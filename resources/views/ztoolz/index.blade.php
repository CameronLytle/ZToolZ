@extends('layouts.master')

@section('content') <!-- This is just for holding the content of the page away from the nav bar. Also helps things look pretty -->
    <div class="row">
        <div class="col-md-12">
            <p class="quote">Zombie Survival Toolz!</p>
        </div>
    </div>
    @foreach($tools as $tool)
        <hr>
        <div class="row">
            <div class="col-md-12 text-center">
                {{--<h1 class="post-title">{{ $tool['item'] }}</h1>--}}
                {{--<p>{{ $tool['description'] }}</p>--}}
                <p><a href="{{ route('ztoolz.tool', ['id' => $tool->id]) }}" class="post-title"><h1>{{ $tool->item }}</h1></a></p>
                <p>Price: ${{ $tool->price }}</p>
            </div>
        </div>
    @endforeach
    <hr>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            {{ $tools->links() }}
        </div>
    </div>
@endsection
