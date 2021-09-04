@extends('admin.layouts.dashboard.index')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Deluxe</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('deluxes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $deluxe->title }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $deluxe->description }}
                        </div>
                        <div class="form-group">
                            <strong>Location:</strong>
                            {{ $deluxe->location }}
                        </div>
                        <div class="form-group">
                            <strong>Cover Image:</strong>
                            {{ $deluxe->cover_image }}
                        </div>
                        <div class="form-group">
                            <strong>From:</strong>
                            {{ $deluxe->from }}
                        </div>
                        <div class="form-group">
                            <strong>Until:</strong>
                            {{ $deluxe->until }}
                        </div>
                        <div class="form-group">
                            <strong>Images Ready:</strong>
                            {{ $deluxe->images_ready }}
                        </div>
                        <div class="form-group">
                            <strong>Condo Title:</strong>
                            {{ $deluxe->condo_title }}
                        </div>
                        <div class="form-group">
                            <strong>Condo Description:</strong>
                            {{ $deluxe->condo_description }}
                        </div>
                        <div class="form-group">
                            <strong>Youtube:</strong>
                            {{ $deluxe->youtube }}
                        </div>
                        <div class="form-group">
                            <strong>Youtube Image:</strong>
                            {{ $deluxe->youtube_image }}
                        </div>
                        <div class="form-group">
                            <strong>Form Image:</strong>
                            {{ $deluxe->form_image }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
