@extends('admin.layouts.dashboard.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Deluxe') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('deluxes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Title</th>
										<th>Description</th>
										<th>Location</th>
										<th>Cover Image</th>
										<th>From</th>
										<th>Until</th>
										<th>Images Ready</th>
										<th>Condo Title</th>
										<th>Condo Description</th>
										<th>Youtube</th>
										<th>Youtube Image</th>
										<th>Form Image</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($deluxes as $deluxe)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $deluxe->title }}</td>
											<td>{{ $deluxe->description }}</td>
											<td>{{ $deluxe->location }}</td>
											<td>{{ $deluxe->cover_image }}</td>
											<td>{{ $deluxe->from }}</td>
											<td>{{ $deluxe->until }}</td>
											<td>{{ $deluxe->images_ready }}</td>
											<td>{{ $deluxe->condo_title }}</td>
											<td>{{ $deluxe->condo_description }}</td>
											<td>{{ $deluxe->youtube }}</td>
											<td>{{ $deluxe->youtube_image }}</td>
											<td>{{ $deluxe->form_image }}</td>

                                            <td>
                                                <form action="{{ route('deluxes.destroy',$deluxe->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('deluxes.show',$deluxe->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('deluxes.edit',$deluxe->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $deluxes->links() !!}
            </div>
        </div>
    </div>
@endsection
