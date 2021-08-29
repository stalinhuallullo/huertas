@extends('admin.layouts.dashboard.index')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Novelty</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('novelties.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Idcategory:</strong>
                            {{ $novelty->idCategory }}
                        </div>
                        <div class="form-group">
                            <strong>Idcoverimagen:</strong>
                            {{ $novelty->idCoverImagen }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $novelty->title }}
                        </div>
                        <div class="form-group">
                            <strong>Slug:</strong>
                            {{ $novelty->slug }}
                        </div>
                        <div class="form-group">
                            <strong>Resume:</strong>
                            {{ $novelty->resume }}
                        </div>
                        <div class="form-group">
                            <strong>Youtube:</strong>
                            {{ $novelty->youtube }}
                        </div>
                        <div class="form-group">
                            <strong>Text:</strong>
                            {{ $novelty->text }}
                        </div>
                        <div class="form-group">
                            <strong>Datecreate:</strong>
                            {{ $novelty->dateCreate }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $novelty->status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
