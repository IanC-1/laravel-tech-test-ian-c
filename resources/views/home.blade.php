@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 text-center">
            <div class="card">
                <div class="card-header" ><h2>{{ __('Home') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>{{ __('You are logged in!') }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
