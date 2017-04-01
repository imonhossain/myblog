@extends('layouts.backend')

@section('backend-content')
    <h2>Categories
        &nbsp;
        <a class="btn btn-primary" href="{{url('dashboard/categories/create')}}">
            <i class="glyphicon glyphicon-plus"></i> Add New Category
        </a>
    </h2>

    <div>
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Number of Articles</th>
                <th>Created at</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($categories))
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>{{ $category->articles_count }}</td>
                        <td>{{ $category->created_at->format('d M Y') }}</td>
                        <td>
                            <a href="{{url('dashboard/categories/'.$category->id.'/edit')}}" id="edit-category-{{$category->id}}"  class="btn btn-primary"><i class="edit icon"></i> Edit</a>
                            @if(Auth::user()->hasRole('admin'))
                                <form class="form-inline" method="POST" action="/dashboard/categories/{{$category->id}}">
                                    {{csrf_field()}}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger" id="delete-category-{{$category->id}}" type="submit"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection