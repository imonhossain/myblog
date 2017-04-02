@extends('layouts.backend')

@section('backend-content')
    <h2>Articles
        &nbsp;
        <a class="btn btn-primary" role="button" href="{{url('dashboard/articles/create')}}">
            <i class="glyphicon glyphicon-plus"></i> Add New Article
        </a>
    </h2>
@endsection