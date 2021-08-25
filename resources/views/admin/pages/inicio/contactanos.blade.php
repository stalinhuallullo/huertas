@extends('admin.layouts.dashboard.index')

@section('content')

<div class="row">
    <div class="col-md-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">INICIO</h6>
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Titulo</label>
                                    <input type="text" class="form-control" placeholder="Enter first name">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Descripcion</label>
                                    <input type="text" class="form-control" placeholder="Enter last name">
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">City</label>
                                    <input type="text" class="form-control" placeholder="Enter city">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">State</label>
                                    <input type="text" class="form-control" placeholder="Enter state">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Zip</label>
                                    <input type="text" class="form-control" placeholder="Enter zip code">
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Email address</label>
                                    <input type="email" class="form-control" placeholder="Enter email">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Password</label>
                                    <input type="password" class="form-control" autocomplete="off" placeholder="Password">
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                    </form>
                    <button type="button" class="btn btn-primary submit">Submit form</button>
            </div>
        </div>
    </div>
</div>



@endsection
