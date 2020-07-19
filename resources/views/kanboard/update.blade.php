@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col-lg-6"  style="padding-left:30px;">
        <h3 class="text-center float-left"> Vos Tableaux </h3>

    </div>
    <div class="col-lg-6"  style="padding-right:30px;">
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
    <c:forEach items="${artists}" var="artist" >
        <tr>

            <td>1</td>
            <td class="w-50">Mon premier Bord</td>

            <td class="w-25 text-center">
                -

            </td>
            <td class="text-center"><a class="btn btn-primary" href="{{asset('kanboard/show')}}"> Voir</a></td>
            <td class="text-center"><a class="btn btn-secondary" href="<%=request.getServletContext().getContextPath() %>/app/artist/edit?id=${artist.id}"> Editer</a></td>
            <td class="text-center"><a class="btn btn-danger" href="<%=request.getServletContext().getContextPath() %>/app/artist/delete?id=${artist.id}"> Supprimer</a></td>
        </tr>



    </tbody>
</table>



@endsection
