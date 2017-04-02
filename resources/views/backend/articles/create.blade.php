@extends('layouts.backend')

@section('backend-content')
    <h2>Create New Category</h2>

    {{ Form::open(['url'=>'dashboard/articles']) }}
    <div class="form-group">
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, ['class'=>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('subtitle', 'Subtitle:') }}
        {{ Form::text('subtitle', null, ['class'=>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('slug', 'Slug:') }}
        {{ Form::text('slug', null, ['class'=>'form-control']) }}
    </div>
    <div class="form-group">
        <label for="category_id">Category:</label>
        <select name="category_id" id="category_id" class="form-control">
            <option value="">Select Category</option>
            @if(isset($categories))
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="author_id">Author:</label>
        <select name="author_id" id="author_id" class="form-control">
            <option value="">Select Author</option>
            @if(isset($users))
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->first_name." ".$user->last_name }}</option>
                @endforeach
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="tag">Tag:</label>
        <select name="tag" id="tag" class="form-control" multiple>
            <option value="">Select Tag</option>
            @if(isset($tags))
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            @endif
        </select>
    </div>
    <div class="form-group">
        {{ Form::label('content', 'Content:') }}
        {{ Form::textarea('content', null, ['class'=>'form-control']) }}
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Create</button>
        <a href="{{url('dashboard/articles')}}" class="btn btn-warning" role="button">Cancel</a>
    </div>
    {{ Form::close() }}


@endsection