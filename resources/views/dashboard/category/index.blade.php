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
                        <a href="{{ route('category.show',$c)}}">show</a>
                        <a href="{{ route('category.edit',$c)}}">Edit</a>
                        <a href="{{ route('category.show',$c)}}">Show</a>
                        <form action="{{ route('category.destroy', $c) }}" method="post">
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

    {{ $categories->links() }}

@endsection