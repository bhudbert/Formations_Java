@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-lg-6"  style="padding-left:30px;">
            <h3 class="text-center float-left"> Tableau N°  </h3>

        </div>
        <div class="col-lg-6"  style="padding-right:30px;">
            <a class="btn btn-dark float-right" style="padding-right:30px;padding-left:30px;" href="{{ url('/kanboard') }}"> Retour </a>
        </div>

    </div>
    <hr>
    <div class="container-fluid pt-3">
        <div class="row flex-row flex-sm-nowrap py-3">
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="card bg-light" style="">
                    <div class="card-body text-center" style="background-color: #f3e7df;padding:4px; ">
                        <h6 class="card-title py-2">A faire</h6>
                        <div class="items">



                                <div class="card draggable shadow-sm" id="cd1" onclick="location.href = 'http://www.google.fr';" draggable="true" ondragstart="drag(event)">
                                <div class="card-body p-2 text-left ">
                                    <div class="card-title ">
                                        <div>
                                            <span class="badge badge-primary" style="font-size: 9px; padding-left: 15px;padding-right: 15px;">
                                                &nbsp;
                                            </span>
                                            <span class="badge badge-success" style="font-size: 9px; padding-left: 15px;padding-right: 15px;">
                                                &nbsp;
                                            </span>
                                        </div>
                                        <a href="" class="lead ">Faire le CRUD</a><br>
                                    </div>
                                    <p>
                                        doloribus eos error fuga incidunt magni quo rem. Dolor
                                    </p>

                                </div>
                                </div>



                            <div class="dropzone rounded" ondrop="drop(event)" ondragover="allowDrop(event)" ondragleave="clearDrop(event)"> &nbsp; </div>
                            <div class="card draggable shadow-sm" id="cd2" draggable="true" ondragstart="drag(event)">
                                <div class="card-body p-2 text-left ">
                                    <div class="card-title text-left ">
                                        <div>
                                            <span class="badge badge-danger" style="font-size: 9px; padding-left: 15px;padding-right: 15px;">
                                                &nbsp;
                                            </span>

                                        </div>
                                        <a href="" class="lead ">Faire le un beau Kanban</a><br>
                                    </div>
                                    <p>
                                        orem ipsum dolor sit amet, consectetur adipisicing elit. Enim id impedit
                                    </p>

                                </div>
                            </div>
                            <div class="dropzone rounded" ondrop="drop(event)" ondragover="allowDrop(event)" ondragleave="clearDrop(event)"> &nbsp; </div>
                            <div class="card draggable shadow-sm" id="cd3" draggable="true" ondragstart="drag(event)">
                                <div class="card-body p-2 text-left ">
                                    <div class="card-title text-left ">
                                        <div>
                                            <span class="badge badge-secondary" style="font-size: 9px; padding-left: 15px;padding-right: 15px;">
                                                &nbsp;
                                            </span>
                                            <span class="badge badge-success" style="font-size: 9px; padding-left: 15px;padding-right: 15px;">
                                                &nbsp;
                                            </span>

                                        </div>
                                        <a href="" class="lead ">Mise en place de a securite</a><br>
                                    </div>
                                    <p>
                                        quidem tempore. At doloribus eos error fuga incidunt magni quo rem. Dolor
                                    </p>

                                </div>
                            </div>
                            <div class="dropzone rounded" ondrop="drop(event)" ondragover="allowDrop(event)" ondragleave="clearDrop(event)"> &nbsp; </div>
                        </div>

                        <button class="btn btn-dark" style="background-color: #7e62c2">Ajouter une tache</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="card bg-light">
                    <div class="card-body text-center" style="background-color: #f3e7df;padding:4px; ">
                        <h6 class="card-title  py-2">En cours</h6>
                        <div class="items">
                            <div class="card draggable shadow-sm" id="cd1" draggable="true" ondragstart="drag(event)">
                                <div class="card-body p-2 text-left ">
                                    <div class="card-title text-left ">
                                        <div>
                                            <span class="badge badge-primary" style="font-size: 9px; padding-left: 15px;padding-right: 15px;">
                                                &nbsp;
                                            </span>

                                        </div>
                                        <a href="" class="lead ">Faire le CRUD des membres</a><br>
                                    </div>
                                    <p>
                                        Lor minus molestias pariaturem illo maxime quis sequi.
                                    </p>

                                </div>
                            </div>
                            <div class="dropzone rounded" ondrop="drop(event)" ondragover="allowDrop(event)" ondragleave="clearDrop(event)"> &nbsp; </div>
                            <div class="card draggable shadow-sm" id="cd2" draggable="true" ondragstart="drag(event)">
                                <div class="card-body p-2 text-left ">
                                    <div class="card-title text-left ">
                                        <div>
                                            <span class="badge badge-dark" style="font-size: 9px; padding-left: 15px;padding-right: 15px;">
                                                &nbsp;
                                            </span>

                                        </div>
                                        <a href="" class="lead ">Creer les fonctions des taches</a><br>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consecteestias  Culpa deserunt
                                    </p>

                                </div>
                            </div>
                            <div class="dropzone rounded" ondrop="drop(event)" ondragover="allowDrop(event)" ondragleave="clearDrop(event)"> &nbsp; </div>
                        </div>

                        <button class="btn btn-dark" style="background-color: #7e62c2">Ajouter une tache</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="card bg-light">
                    <div class="card-body text-center" style="background-color: #f3e7df;padding:4px; ">
                        <h6 class="card-title py-2">A Valider</h6>
                        <div class="items">
                            <div class="card draggable shadow-sm" id="cd9" draggable="true" ondragstart="drag(event)">
                                <div class="card-body p-2 text-left ">
                                    <div class="card-title text-left ">
                                        <div>
                                            <span class="badge badge-info" style="font-size: 9px; padding-left: 15px;padding-right: 15px;">
                                                &nbsp;
                                            </span>
                                            <span class="badge badge-warning" style="font-size: 9px; padding-left: 15px;padding-right: 15px;">
                                                &nbsp;
                                            </span>

                                        </div>
                                        <a href="" class="lead ">Mise en place BDD Scallable</a><br>
                                    </div>

                                    <p>
                                        et nihil recusandae sapiente sed sit tempora veritatis!
                                    </p>

                                </div>
                            </div>
                            <div class="dropzone rounded" ondrop="drop(event)" ondragover="allowDrop(event)"
                                 ondragleave="clearDrop(event)"> &nbsp; </div>
                        </div>

                        <button class="btn btn-dark" style="background-color: #7e62c2">Ajouter une tache</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="card">
                    <div class="card-body text-center" style="background-color: #f3e7df;padding:4px; ">
                        <h6 class="card-title py-2">Terminé</h6>
                        <div class="items">
                            <div class="card draggable shadow-sm" id="cd11" draggable="true" ondragstart="drag(event)">
                                <div class="card-body p-2 text-left ">
                                    <div class="card-title text-left ">
                                        <div>
                                            <span class="badge badge-success" style="font-size: 9px; padding-left: 15px;padding-right: 15px;">
                                                &nbsp;
                                            </span>

                                        </div>
                                        <a href="" class="lead ">Trouver des Stagiaires</a><br>
                                    </div>
                                    <p>
                                        nulla quisquam quo repellendus reprehenderit vitae.
                                    </p>

                                </div>
                            </div>
                            <div class="dropzone rounded" ondrop="drop(event)" ondragover="allowDrop(event)" ondragleave="clearDrop(event)"> &nbsp; </div>
                            <div class="card draggable shadow-sm" id="cd12" draggable="true" ondragstart="drag(event)">
                                <div class="card-body p-2 text-left ">
                                    <div class="card-title text-left ">
                                        <div>
                                            <span class="badge badge-success" style="font-size: 9px; padding-left: 15px;padding-right: 15px;">
                                                &nbsp;
                                            </span>

                                        </div>
                                        <a href="" class="lead ">Réparer mon PC</a><br>
                                    </div>
                                    <p>
                                        sicing elit. Ad aperiam est eveniet, facilis molestias nulla quisquam quo
                                    </p>

                                </div>
                            </div>
                            <div class="dropzone rounded" ondrop="drop(event)" ondragover="allowDrop(event)" ondragleave="clearDrop(event)"> &nbsp; </div>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button"  class="btn btn-dark" style="background-color: #7e62c2" data-toggle="modal" data-target="#exampleModalCenter">
                            Ajouter une tache
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Titre de la tache :</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="titre de la tache">
                         </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="button"  class="btn btn-dark" style="background-color: #7e62c2">Ajouter</button>
                </div>
            </div>
        </div>
    </div>
@endsection
