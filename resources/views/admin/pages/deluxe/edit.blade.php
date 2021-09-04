@extends('admin.layouts.dashboard.index')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Deluxe</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.deluxes.update') }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PUT') }}
                            @csrf

                            @include('admin.pages.deluxe.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
