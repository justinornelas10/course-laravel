@extends('dashboard.layout')

@section('content')

    <a href="{{ route('post.create' )}}" class=" text-white text-2xl p-4 bg-blue-400">Create</a>


    <table class="table">
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Title
                </th>
                <th>
                    Posted
                </th>
                <th>
                    Category
                </th>
                <th>
                    Options
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $p)
                <tr>
                    <td>
                        {{ $p->id }}
                    </td>
                    <td>
                        {{ $p->title }}
                    </td>
                    <td>
                        {{ $p->posted }}
                    </td>
                    <td>
                        {{ $p->category->title }}
                    </td>
                    <td>
                        <a href="{{ route('post.show',$p)}}">show</a>
                        <a href="{{ route('post.edit',$p)}}">Edit</a>
                        <a href="{{ route('post.show',$p)}}">Show</a>
                        <form action="{{ route('post.destroy', $p) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}

@endsection