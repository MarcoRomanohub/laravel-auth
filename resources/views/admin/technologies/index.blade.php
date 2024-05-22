@extends('layouts.admin')

@section('content')
    <h2>Tecnologie</h2>

    <div class=" d-flex my-4">
        <input type="search" class="form-control me-2 " placeholder="Nuova Categoria" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Invia</button>
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
                    <td>Otto</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
