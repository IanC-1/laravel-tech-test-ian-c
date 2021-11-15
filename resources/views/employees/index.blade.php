@extends('layouts.master')

@section('pageTitle', 'Employees Index')

@section('content')
    <h1 class="display-6">Employees</h1>
    <a href="{{route('employees.create')}}">Create A New Employee</a>
    <hr/>


    <table class="table">
        <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Company Id</th>
        <th>Email</th>
        <th>Phone</th>
        <th colspan="3">Actions</th>
        </thead>

        @foreach($employees as $employee)
            <tr>
                <td>{{$employee->first_name}}</td>
                <td>{{$employee->last_name}}</td>
                <td>{{$employee->company_id}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->phone}}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{route('employees.show', $employee->id)}}" class="btn btn-info m-1">Details</a>
                        <a href="{{route('employees.edit', $employee->id)}}" class="btn btn-primary m-1">Edit</a>

                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger m-1">Delete Employee</button>
                        </form>
                    </div>

                </td>
            </tr>
        @endforeach
    </table>

@endsection