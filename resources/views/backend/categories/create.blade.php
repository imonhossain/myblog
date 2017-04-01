@extends('layouts.backend')

@section('backend-content')
    <h2>Create New Category</h2>

    {{ Form::open() }}
    {{ Form::close() }}

    <a href="{{url('dashboard/categories')}}" class="btn btn-warning" role="button">Cancel</a>
@endsection