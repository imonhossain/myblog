@extends('backend.layouts.app')

@section('content')
    <h2>Create New Category</h2>

    {{ Form::open(['url'=>'admin/categories']) }}
    <div class="form-group">
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class'=>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('slug', 'Slug:') }}
        {{ Form::text('slug', null, ['class'=>'form-control']) }}
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Create</button>
        <a href="{{url('admin/categories')}}" class="btn btn-warning" role="button">Cancel</a>
    </div>
    {{ Form::close() }}

@endsection