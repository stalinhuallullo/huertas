@extends('admin.layouts.dashboard.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Inbox') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('inboxes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                            <table  class="display" id="myTable">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Typepage</th>
										<th>Name</th>
										<th>Lastname</th>
										<th>Email</th>
										<th>Movil</th>
										<th>Message</th>

                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inboxes as $inbox)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $inbox->typepage }}</td>
											<td>{{ $inbox->name }}</td>
											<td>{{ $inbox->lastname }}</td>
											<td>{{ $inbox->email }}</td>
											<td>{{ $inbox->movil }}</td>
											<td>{{ $inbox->message }}</td>

                                            <td>
                                                <form action="{{ route('inboxes.destroy',$inbox->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('inboxes.show',$inbox->id) }}"><i class="fa fa-fw fa-eye"></i></a>
{{--                                                    <a class="btn btn-sm btn-success" href="{{ route('inboxes.edit',$inbox->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>--}}
{{--                                                    @csrf--}}
{{--                                                    @method('DELETE')--}}
{{--                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>--}}
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                    </div>
                </div>
                {!! $inboxes->links() !!}
            </div>
        </div>
    </div>
@endsection
