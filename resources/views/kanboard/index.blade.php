@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-lg-4"  style="padding-left:30px;">
        <h3 class="text-center float-left">
            Vos Tableaux

        </h3>
    </div>
    <div class="col-lg-4 text-center ">
        <a class="btn btn-warning " style="padding:3px;font-size:14px;" href="{{ url('/kanboard/example') }}">
            >>&nbsp;&nbsp;&nbsp;&nbsp;Voir un example de tableau Kanban &nbsp;&nbsp;&nbsp;&nbsp;<<
        </a>

    </div>

    <div class="col-lg-4"  style="padding-right:30px;">
         <a class="btn btn-success float-right" style="padding-right:30px;padding-left:30px;" href=""> Ajouter </a>
    </div>

</div>
<table class="table">
    <thead class="bg-light" style="color:#333333;font-weight:bold">
    <tr>
        <td>Id</td>
        <td>Description</td>

        <td class="w-25 text-center"></td>
        <td ></td>
        <td ></td>
        <td ></td>
    </tr>
    </thead>
    <tbody>

        <tr>

            <td>1</td>
            <td class="w-50">Mon premier Bord</td>

            <td class="w-25 text-center">
                -

            </td>
            <td class="text-center"><a class="btn btn-primary" href="{{url('kanboard/show/1')}}"> Voir</a></td>
            <td class="text-center"><a class="btn btn-secondary" href="{{url('kanboard/edit/1')}}"> Editer</a></td>
            <td class="text-center"><a class="btn btn-danger" href="{{url('kanboard/delete/1')}}"> Supprimer</a></td>
        </tr>



    </tbody>
</table>



@endsection
