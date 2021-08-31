@extends('admin.layouts.dashboard.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Clientreferred') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('clientreferreds.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                            <table class="display" id="myTable">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Idclient</th>
										<th>Idproperty</th>
										<th>Name</th>
										<th>Firstsurname</th>
										<th>Lastsurname</th>
										<th>Phone</th>
										<th>Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientreferreds as $clientreferred)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $clientreferred->idClient }}</td>
											<td>{{ $clientreferred->idProperty }}</td>
											<td>{{ $clientreferred->name }}</td>
											<td>{{ $clientreferred->firstSurname }}</td>
											<td>{{ $clientreferred->lastSurname }}</td>
											<td>{{ $clientreferred->phone }}</td>
											<td>{{ $clientreferred->email }}</td>

                                            <td>
                                                <form action="{{ route('clientreferreds.destroy',$clientreferred->id) }}" method="POST">
{{--                                                    <a class="btn btn-sm btn-primary " href="{{ route('clientreferreds.show',$clientreferred->id) }}"><i class="fa fa-fw fa-eye"></i></a>--}}
                                                    <a class="btn btn-sm btn-success" href="{{ route('clientreferreds.edit',$clientreferred->id) }}"><i class="fa fa-fw fa-edit"></i></a>
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
                {!! $clientreferreds->links() !!}
            </div>
        </div>
    </div>
@endsection
