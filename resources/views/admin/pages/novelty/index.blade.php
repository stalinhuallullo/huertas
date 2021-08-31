@extends('admin.layouts.dashboard.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Novelty') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('novelties.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">

                        <ul class="nav nav-tabs mb-4 light">
                            <li class=" nav-item">
                                <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Parametros</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="navpills-1" class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-12">


                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead class="thead">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>Datecreate</th>
                                                    <th>Status</th>

                                                    <th>Acción</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($novelties as $novelty)
                                                    <tr>
                                                        <td>{{ ++$i }}</td>

                                                        <td>{{ $novelty->title }}</td>
                                                        <td>{{ $novelty->dateCreate }}</td>
                                                        <td>{{ $novelty->status }}</td>

                                                        <td>
                                                            <form action="{{ route('novelties.destroy',$novelty->id) }}" method="POST">
{{--                                                                <a class="btn btn-sm btn-primary " href="{{ route('novelties.show',$novelty->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>--}}
                                                                <a class="btn btn-sm btn-success" href="{{ route('novelties.edit',$novelty->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-remove"></i> Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div id="navpills-2" class="tab-pane">
                                <div class="row">
                                    <div class="col-md-12">

                                        <form method="POST" action="{{ route('admin.novelties.parameter', ['id' => $seoPage->id ]) }}"  role="form" enctype="multipart/form-data">
                                            {{ method_field('PUT') }}
                                            @csrf

                                            @include('admin.pages.novelty.fromParameter')

                                        </form>


                                    </div>
                                </div>
                            </div>

                        </div>





                    </div>
                </div>
                {!! $novelties->links() !!}
            </div>
        </div>
    </div>
@endsection
