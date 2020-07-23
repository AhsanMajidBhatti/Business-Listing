@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">{{ __('Latest Business Listings') }}</div>

                <div class="card-body">
                    <h1>Your Listings</h1>
                    @if (count($listing))
                        <ul class="list-group">
                            @foreach ($listing as $list)
                                <li class="list-group-item"><a href="listings/{{$list->id}}">{{$list->name}}</a></li>
                            @endforeach
                            </ul>
                        @else
                            <h2>No Listing Content.</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
