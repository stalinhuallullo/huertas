@extends('admin.layouts.dashboard.index')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Novelty</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('novelties.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.pages.novelty.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
