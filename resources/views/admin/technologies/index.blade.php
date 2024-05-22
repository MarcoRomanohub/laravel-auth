@extends('layouts.admin')

@section('content')
    <h2>Tecnologie</h2>
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class=" my-4">
        <form class="d-flex" action="{{ route('admin.technologies.store') }}" method="POST">
            @csrf
            <input type="search" class="form-control me-2 " placeholder="Nuova Categoria" name="name">
            <button class="btn btn-outline-success" type="submit">Invia</button>
        </form>
    </div>

    <table class="table crud-table">
        <thead>
            <tr>
                <th scope="col">Tecnologia</th>
                <th scope="col">Azioni</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($technologies as $technology)
                <tr>
                    <td>
                        <input type="text" value="{{ $technology->name }}">
                    </td>
                    <td>
                        <button class="btn btn-warning ">
                            <i class="fa-solid fa-pencil"></i>
                        </button>
                        <button class="btn btn-danger ">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
