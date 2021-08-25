@extends('admin.layouts.dashboard.index')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Detalles de pagina</h6>
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Titulo</label>
                                    <input type="text" class="form-control" placeholder="Titulo">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Descripcion</label>
                                    <input type="text" class="form-control" placeholder="Descripción">
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->

                    </form>
                    {{-- <button type="button" class="btn btn-primary submit">Actualizar</button> --}}
                </div>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Carrusel de Imagenes</h6>
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <form method="post" enctype="multipart/form-data">
                                        <input type="file" name="file[]" multiple id="file" />
                                    </form>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Numero de Proyectos</h6>
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option selected="" disabled="">Proyectos</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                    </select>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                    </form>
                </div>
            </div>
        </div>
    </div>




    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Subir bannes publicidad</h6>
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <form action="/action_page.php">
                                        <input type="file" id="myFile" name="filename">
                                    </form>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Imagen de contactemos</h6>
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <form action="/action_page.php">
                                        <input type="file" id="myFile" name="filename">
                                    </form>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
