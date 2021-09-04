@extends('admin.layouts.dashboard.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Us') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('us.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Longitude</th>
										<th>Latitude</th>
										<th>Description</th>
										<th>Trust Year</th>
										<th>Trust Dev</th>
										<th>Trust Benefits</th>
										<th>Trust Areas</th>
										<th>Contact Mission</th>
										<th>Contact Mission Img</th>
										<th>Contact Vision</th>
										<th>Contact Vision Img</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($us as $us)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $us->longitude }}</td>
											<td>{{ $us->latitude }}</td>
											<td>{{ $us->description }}</td>
											<td>{{ $us->trust_year }}</td>
											<td>{{ $us->trust_dev }}</td>
											<td>{{ $us->trust_benefits }}</td>
											<td>{{ $us->trust_areas }}</td>
											<td>{{ $us->contact_mission }}</td>
											<td>{{ $us->contact_mission_img }}</td>
											<td>{{ $us->contact_vision }}</td>
											<td>{{ $us->contact_vision_img }}</td>

                                            <td>
                                                <form action="{{ route('us.destroy',$us->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('us.show',$us->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('us.edit',$us->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $us->links() !!}
            </div>
        </div>
    </div>
@endsection
