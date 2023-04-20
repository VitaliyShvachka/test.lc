@extends('layouts.layout')

@section('title')
    @parent:: {{$title}}
@endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <form class="mt-5" method="POST" action="{{ route('posts.store') }}">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title" name="title">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" rows="5" name="content" placeholder="Content...."></textarea>
            </div>

            <div class="form-group">
                <label for="rubric_id">Rubric</label>
                <select class="form-control" id="rubric_id" name="rubric_id">
                    <option value ='1'>Rubric 1</option>

                </select>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

@endsection
