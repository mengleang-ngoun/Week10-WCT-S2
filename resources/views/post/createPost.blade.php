@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Post</h1>
        <form action="{{ route('posts.store') }}" , method="post">
            @csrf
            <div class="form-group">
                <label for="title">Post Title</label>
                <input name="title" type="text" class="form-control" placeholder="Your Post Title">
            </div>
            <div class="form-group">
                <label for="category_id">Post Category</label>
                <select name="category_id" class="form-control" >
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="body">Post body</label>
                <textarea name="body" class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Post</button>
        </form>

    </div>
@endsection
