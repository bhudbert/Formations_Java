@extends('layouts.base')

@section('content')
<h3> Suivi d'apprentissage</h3>



<table class="table">
    <thead class="thead btn-warning">
    <tr>
        <th scope="col">Tache</th>
        <th scope="col">Description</th>
        <th scope="col">Avancement</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Creation Base Board/Task</td>
        <td>10%</td>
        <td><a class="btn btn-outline-secondary" href="{{asset('kanban-board')}}">Voir</a></td>
    </tr>

    </tbody>
</table>


@endsection
