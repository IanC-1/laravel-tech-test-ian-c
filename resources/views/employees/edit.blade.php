@extends('layouts.master')

@section('pageTitle', 'Edit Employee Details')

@section('content')

    <h1 class="display-6">Edit Employee</h1>

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
    {{ Form::open(['action' => ['App\Http\Controllers\EmployeeController@update', $employee->id], 'method' => 'put']) }}
    <!-- Include the CRSF token -->
    {{Form::token()}}
    <!-- build our form inputs -->
    <div class="form-group">
        {{Form::label('first_name', 'First Name')}}
        {{Form::text('first_name', $employee->first_name, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('last_name', 'Last Name')}}
        {{Form::text('last_name', $employee->last_name, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('company_id', 'Company Id')}}
        {{Form::number('company_id', $employee->company_id, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', $employee->email, ['class' => 'form-control'])}}
    
    <div class="form-group">
        {{Form::label('phone', 'Phone Number')}}
        {{Form::text('phone', $employee->phone, ['class' => 'form-control'])}}
    </div>

    {{Form::submit('Update!', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}
    
@endsection