@extends('layouts.master')

@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.update') }}" method="post">
                <div class="form-group">
                    <label for="item">Item</label>
                    <input
                            type="text"
                            class="form-control"
                            id="item"
                            name="item"
                            value="{{ $tool->item }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input
                            type="text"
                            class="form-control"
                            id="description"
                            name="description"
                            value="{{ $tool->description }}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input
                            type="text"
                            class="form-control"
                            id="price"
                            name="price"
                            value="{{ $tool->price }}">
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $toolId }}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection