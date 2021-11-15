@extends('layouts.master')

@section('pageTitle', 'Company Details')

@section('content')
    <h1 class="display-6">Company Details</h1>

    <hr/>

    <dl>
        <dt>Name</dt>
        <dd>{{$company->first_name}}</dd>

        <dt>Email</dt>
        <dd>{{$company->email}}</dd>

        <dt>Logo</dt>
        <dd>{{$company->logo}}</dd>

        <dt>Website</dt>
        <dd>{{$company->website}}</dd>
    </dl>

    <div class="d-flex">
        <a href="{{route('companies.edit', $company->id)}}" class="btn btn-primary m-1">Edit</a>

        <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete Company</button>
        </form>
    </div>
@endsection