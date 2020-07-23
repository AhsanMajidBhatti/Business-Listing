@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Listing') }} <a href="/dashboard " class="btn btn-primary btn-sm float-right">Go Back</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="container">
                    {!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}
                        {{  Form::bsText('name', '', ['placeholder' => 'Company Name'] )  }}
                        {{  Form::bsText('website', '', ['placeholder' => 'Company Website'] )  }}
                        {{  Form::bsText('email', '', ['placeholder' => 'Contact Email'] )  }}
                        {{  Form::bsText('phone', '', ['placeholder' => 'Contact Phone'] )  }}
                        {{  Form::bsText('address', '', ['placeholder' => 'Business Address'] )  }}
                        {{  Form::bsTextArea('bio', '', ['placeholder' => 'About Your Business'] )  }}
                        {{  Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])  }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection