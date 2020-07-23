@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <a href="/listings/create" class="btn btn-success btn-sm float-right">Create Listing</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Your Listings</h1>
                    @if (count($listings))
                        <table class="table table-striped">
                            <tr>
                                <th><h3>Company</h3></th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($listings as $list)
                                <tr>
                                    <td>{{$list->name}}</td>
                                    <td><a href="/listings/{{$list->id}}/edit" class="float-right btn btn-sm btn-primary">Edit</a></td>
                                    <td>
                                    {!! Form::open(['action' => ['ListingsController@destroy', $list->id], 'method' => 'POST', 'onsubmit' => 'return confirm("Are you sure?")']) !!}
                                        {{  Form::hidden('_method', 'DELETE')  }}
                                        {{  Form::bsSubmit('Delete', ['class' => 'btn btn-sm btn-danger'])  }}
                                    {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
