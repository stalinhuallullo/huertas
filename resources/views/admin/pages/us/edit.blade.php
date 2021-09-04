@extends('admin.layouts.dashboard.index')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Us</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.us.update', $us->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PUT') }}
                            @csrf

                            @include('admin.pages.us.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
