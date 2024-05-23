@extends('layouts.admin')

@section('content')
    <h1>Progetti</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Data</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->updated_at }}</td>
                    <td>Otto</td>
                </tr>
            @empty
            @endforelse
        </tbody>
    </table>

    {{ $projects->links('pagination::bootstrap-5') }}
@endsection
