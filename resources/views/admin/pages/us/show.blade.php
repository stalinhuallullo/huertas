@extends('admin.layouts.dashboard.index')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Us</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('us.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Longitude:</strong>
                            {{ $us->longitude }}
                        </div>
                        <div class="form-group">
                            <strong>Latitude:</strong>
                            {{ $us->latitude }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $us->description }}
                        </div>
                        <div class="form-group">
                            <strong>Trust Year:</strong>
                            {{ $us->trust_year }}
                        </div>
                        <div class="form-group">
                            <strong>Trust Dev:</strong>
                            {{ $us->trust_dev }}
                        </div>
                        <div class="form-group">
                            <strong>Trust Benefits:</strong>
                            {{ $us->trust_benefits }}
                        </div>
                        <div class="form-group">
                            <strong>Trust Areas:</strong>
                            {{ $us->trust_areas }}
                        </div>
                        <div class="form-group">
                            <strong>Contact Mission:</strong>
                            {{ $us->contact_mission }}
                        </div>
                        <div class="form-group">
                            <strong>Contact Mission Img:</strong>
                            {{ $us->contact_mission_img }}
                        </div>
                        <div class="form-group">
                            <strong>Contact Vision:</strong>
                            {{ $us->contact_vision }}
                        </div>
                        <div class="form-group">
                            <strong>Contact Vision Img:</strong>
                            {{ $us->contact_vision_img }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
