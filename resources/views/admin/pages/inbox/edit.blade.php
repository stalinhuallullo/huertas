@extends('admin.layouts.dashboard.index')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Inbox</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('inboxes.update', $inbox->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.pages.inbox.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection