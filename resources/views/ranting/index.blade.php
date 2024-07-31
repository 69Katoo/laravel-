@extends('layout')

@section('content')
    <h1>Ranting</h1>
    <a href="{{ route('ranting.create') }}">+ Tambah</a>
    <br>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ranting</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rantings as $ranting)
            <tr>
                <td>{{ $ranting->id }}</td>
                <td>{{ $ranting->ranting }}</td>
                <td>{{ $ranting->keterangan }}</td>
                <td>
                    <a href="{{ url("/ranting/{$ranting->id}") }}">Edit</a>
                    ||
                    <form action="{{ url("/ranting/{$ranting->id}") }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection