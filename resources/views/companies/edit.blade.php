@extends('layouts.master')

@section('pageTitle', 'Edit Company Details')

@section('content')

    <h1 class="display-6">Edit Company</h1>

    <hr/>
    <!-- if validation in the controller fails, show the errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Open the form with the store function route. -->
    {{ Form::open(['action' => ['App\Http\Controllers\CompanyController@update', $company->id], 'method' => 'put']) }}
    <!-- Include the CRSF token -->
    {{Form::token()}}
    <!-- build our form inputs -->
    <div class="form-group">
        {{Form::label('name', 'Company Name')}}
        {{Form::text('name', $company->name, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', $company->email, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('logo', 'Logo')}}
        {{Form::text('logo', $company->logo, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('website', 'Website')}}
        {{Form::text('website', $company->website, ['class' => 'form-control'])}}
    </div>
    {{Form::submit('Update!', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}
    
@endsection