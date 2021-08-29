@extends('admin.layouts.dashboard.index')

@section('content')


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Property</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('properties.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Idcategory:</strong>
                            {{ $property->idCategory }}
                        </div>
                        <div class="form-group">
                            <strong>Iduser:</strong>
                            {{ $property->idUser }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $property->name }}
                        </div>
                        <div class="form-group">
                            <strong>Slug:</strong>
                            {{ $property->slug }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $property->description }}
                        </div>
                        <div class="form-group">
                            <strong>Youtube:</strong>
                            {{ $property->youtube }}
                        </div>
                        <div class="form-group">
                            <strong>Idpicturecover:</strong>
                            {{ $property->idPictureCover }}
                        </div>
                        <div class="form-group">
                            <strong>Initialfeesoles:</strong>
                            {{ $property->initialFeeSoles }}
                        </div>
                        <div class="form-group">
                            <strong>Initialfeedollars:</strong>
                            {{ $property->initialFeeDollars }}
                        </div>
                        <div class="form-group">
                            <strong>Spotpricesoles:</strong>
                            {{ $property->spotPriceSoles }}
                        </div>
                        <div class="form-group">
                            <strong>Cashpricedollars:</strong>
                            {{ $property->cashPriceDollars }}
                        </div>
                        <div class="form-group">
                            <strong>Monthlyfees:</strong>
                            {{ $property->monthlyFees }}
                        </div>
                        <div class="form-group">
                            <strong>Idnovelty:</strong>
                            {{ $property->idNovelty }}
                        </div>
                        <div class="form-group">
                            <strong>Latitude:</strong>
                            {{ $property->latitude }}
                        </div>
                        <div class="form-group">
                            <strong>Longitude:</strong>
                            {{ $property->longitude }}
                        </div>
                        <div class="form-group">
                            <strong>Officeaddress:</strong>
                            {{ $property->officeAddress }}
                        </div>
                        <div class="form-group">
                            <strong>Projectaddress:</strong>
                            {{ $property->projectAddress }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $property->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Datecreate:</strong>
                            {{ $property->dateCreate }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $property->status }}
                        </div>
                        <div class="form-group">
                            <strong>Idcolor:</strong>
                            {{ $property->idColor }}
                        </div>
                        <div class="form-group">
                            <strong>Idpicturecoverpage:</strong>
                            {{ $property->idPictureCoverPage }}
                        </div>
                        <div class="form-group">
                            <strong>Idiconmap:</strong>
                            {{ $property->idIconMap }}
                        </div>
                        <div class="form-group">
                            <strong>Province:</strong>
                            {{ $property->province }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
