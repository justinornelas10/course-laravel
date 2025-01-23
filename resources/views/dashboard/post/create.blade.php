@extends('dashboard.layout')

@section('content')

    @include('dashboard/fragment/_errors-form')

    <form action="{{ route('post.store') }}" method="POST">
        @csrf

        <div>
            <label for="">Title</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">Slug</label>
            <input type="text" name="slug">
        </div>
        <div>
            <label for="">Content</label>
            <textarea name="content"></textarea>

            <label for="">Description</label>
            <textarea name="description"></textarea>
        </div>

        <div>
            <label for="">Category</label>
            <select name="category_id" id="">
               @foreach ($categories as $title => $id)
                   <option value="{{ $id }}">{{ $title }}</option>
               @endforeach
            </select>

            <label for="">Posted</label>
            <select name="posted">
                <option value="not">No</option>
                <option value="yes">Yes</option>
            </select>
        </div>

        <button type="submit">Send</button>


    </form>
@endsection