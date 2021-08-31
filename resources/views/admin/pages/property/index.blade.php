@extends('admin.layouts.dashboard.index')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Property') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('properties.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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


                                            <table class="display" id="myTable">
                                                <thead>
                                                <tr>
                                                    <th># </th>
                                                    <th>Nombre</th>
                                                    <th>Descripción </th>
                                                    <th>Acción </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($properties as $property)
                                                    <tr>
                                                        <td>{{ ++$i }}</td>

                                                        <td>{{ $property->name }}</td>
                                                        <td>{{ $property->description }}</td>

                                                        <td>
                                                            <form action="{{ route('properties.destroy',$property->id) }}" method="POST">
{{--                                                                <a class="btn btn-sm btn-primary " href="{{ route('properties.show',$property->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>--}}
                                                                <a class="btn btn-sm btn-success" href="{{ route('properties.edit',$property->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-remove"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>



                                    </div>
                                </div>
                            </div>

                            <div id="navpills-2" class="tab-pane">
                                <div class="row">
                                    <div class="col-md-12">

                                        <form method="POST" action="{{ route('admin.properties.parameter', ['id' => $seoPage->id ]) }}"  role="form" enctype="multipart/form-data">
                                            {{ method_field('PUT') }}
                                            @csrf

                                            @include('admin.pages.property.fromParameter')

                                        </form>

                                    </div>
                                </div>
                            </div>

                        </div>




                    </div>
                </div>
                {!! $properties->links() !!}
            </div>
        </div>
    </div>


@endsection
