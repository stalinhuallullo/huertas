@extends('admin.layouts.dashboard.index')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Clientreferred</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientreferreds.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Idclient:</strong>
                            {{ $clientreferred->idClient }}
                        </div>
                        <div class="form-group">
                            <strong>Idproperty:</strong>
                            {{ $clientreferred->idProperty }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $clientreferred->name }}
                        </div>
                        <div class="form-group">
                            <strong>Firstsurname:</strong>
                            {{ $clientreferred->firstSurname }}
                        </div>
                        <div class="form-group">
                            <strong>Lastsurname:</strong>
                            {{ $clientreferred->lastSurname }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $clientreferred->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $clientreferred->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
