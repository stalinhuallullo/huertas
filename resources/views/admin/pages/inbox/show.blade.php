@extends('admin.layouts.dashboard.index')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Inbox</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inboxes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Typepage:</strong>
                            {{ $inbox->typepage }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $inbox->name }}
                        </div>
                        <div class="form-group">
                            <strong>Lastname:</strong>
                            {{ $inbox->lastname }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $inbox->email }}
                        </div>
                        <div class="form-group">
                            <strong>Movil:</strong>
                            {{ $inbox->movil }}
                        </div>
                        <div class="form-group">
                            <strong>Message:</strong>
                            {{ $inbox->message }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
