@extends('layouts.master')

@section('content')
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{ Session::get('info') }}</p>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.create') }}" class="btn btn-success">New Tool</a>
        </div>
    </div>
    <hr>
    @foreach($tools as $tool)
        <div class="row">
            <div class="col-md-12">
                <p><strong>{{ $tool->item }}</strong>
                    <a href="{{ route('admin.edit', ['id' => $tool->id]) }}">Edit</a>
                    <a href="{{ route('admin.delete', ['id' => $tool->id]) }}" style="color:red">Delete</a>
                </p>
            </div>
        </div>
    @endforeach
@endsection