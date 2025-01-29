@extends('dashboard.layout')

@section('content')

    <a href="{{ route('category.create' )}}" class=" text-white text-2xl p-4 bg-blue-400">Create</a>

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
                    Slug
                </th>
                <th>
                    Options
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $c)
                <tr>
                    <td>
                        {{ $c->id }}
                    </td>
                    <td>
                        {{ $c->title }}
                    </td>
                    <td>
                        {{ $c->slug }}
                    </td>
                    <td>
                        <div class="flex flex-row items-center space-x-2">
                            <a href="{{ route('category.edit',$c)}}" class="text-white bg-blue-400 px-2 py-1 rounded-xl">Edit</a>
                            <a href="{{ route('category.show',$c)}}" class="text-white bg-green-400 px-2 py-1 rounded-xl">Show</a>
                            <form action="{{ route('category.destroy', $c) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="text-white bg-red-400 px-2 py-1 rounded-xl">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}

@endsection