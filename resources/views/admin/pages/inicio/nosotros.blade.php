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
                    <h6 class="card-title">Ubicación</h6>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Titulo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Descripcion</h6>
                            <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                </div>
            </div>
    
        </div>
    </div>


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Misión</h6>
                    <form>
                            <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Descripción</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
    
                        <div class="col-sm-8">
                            <div class="form-group">
                                    <input type="file" id="myFile" name="filename">
                            </div>
                        </div><!-- Col -->
    
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
                    <h6 class="card-title">Visión</h6>
                    <form>
                            <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Descripción</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
    
                        <div class="col-sm-8">
                            <div class="form-group">
                                    <input type="file" id="myFile" name="filename">
                            </div>
                        </div><!-- Col -->
    
                    </form>
                    {{-- <button type="button" class="btn btn-primary submit">Actualizar</button> --}}
                </div>
            </div>
    
        </div>
    </div>


@endsection
