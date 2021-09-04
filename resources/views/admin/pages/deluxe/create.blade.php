@extends('admin.layouts.dashboard.index')

{{--@extends('layouts.app')--}}

{{--@section('template_title')--}}
{{--    Create Deluxe--}}
{{--@endsection--}}

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Deluxe</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('deluxes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.pages.deluxe.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
