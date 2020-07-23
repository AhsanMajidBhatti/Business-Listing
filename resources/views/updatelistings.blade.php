@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Listing') }} <a href="/dashboard " class="btn btn-primary btn-sm float-right">Go Back</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="container">
                    {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'POST']) !!}
                        {{  Form::bsText('name', $listing->name )  }}
                        {{  Form::bsText('website', $listing->website )  }}
                        {{  Form::bsText('email', $listing->email )  }}
                        {{  Form::bsText('phone', $listing->phone )  }}
                        {{  Form::bsText('address', $listing->address )  }}
                        {{  Form::bsTextArea('bio', $listing->bio )  }}
                        {{  Form::hidden('_method', 'PUT')  }}
                        {{  Form::bsSubmit('Update', ['class' => 'btn btn-primary'])  }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection