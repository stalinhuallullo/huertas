@extends('admin.layouts.dashboard.index')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">INICIO</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.home.update', ['id' => $home->id ]) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PUT') }}
                            @csrf

                            @include('admin.pages.home.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
