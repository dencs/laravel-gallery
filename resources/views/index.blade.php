@extends('layouts.master')

@section('gallery')
    @foreach ($gallery as $item)
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <a href="{{ asset('/img/' . $item['img']) }}" data-gallery="example-gallery">
                    <img src="{{ asset('/img/' . $item['img']) }}" class="card-img-top">
                </a>
                <div class="card-body">
                    <p class="card-text text-center">{{ $item['title'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
@endsection
