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
                        <div class="flex flex-row items-center space-x-2">
                            <a href="{{ route('post.edit',$p)}}" class="text-white bg-blue-400 px-2 py-1 rounded-xl">Edit</a>
                            <a href="{{ route('post.show',$p)}}" class="text-white bg-green-400 px-2 py-1 rounded-xl">Show</a>
                            <form action="{{ route('post.destroy', $p) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit"  class="text-white bg-red-400 px-2 py-1 rounded-xl">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}

@endsection