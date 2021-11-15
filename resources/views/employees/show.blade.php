@extends('layouts.master')

@section('pageTitle', 'Employee Details')

@section('content')
    <h1 class="display-6">Employee Details</h1>

    <hr/>

    <dl>
        <dt>First Name</dt>
        <dd>{{$employee->first_name}}</dd>

        <dt>Last Name</dt>
        <dd>{{$employee->last_name}}</dd>

        <dt>Company Id</dt>
        <dd>{{$employee->company_id}}</dd>

        <dt>Email</dt>
        <dd>{{$employee->email}}</dd>

        <dt>Phone</dt>
        <dd>{{$employee->phone}}</dd>
    </dl>

    <div class="d-flex">
        <a href="{{route('employees.edit', $employee->id)}}" class="btn btn-primary m-1">Edit</a>

        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete Employee</button>
        </form>
    </div>
@endsection