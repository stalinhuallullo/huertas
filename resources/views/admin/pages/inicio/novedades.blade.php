@extends('admin.layouts.dashboard.index')

@section('content')

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Numero de Proyectos</h6>
				<form>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<select class="form-control" id="exampleFormControlSelect1">
									<option selected="" disabled="">Proyectos</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
								</select>
							</div>
						</div><!-- Col -->
					</div><!-- Row -->
				</form>
			</div>
		</div>
	</div>
</div>


<div class="row">
    <div class="col-md-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">PROYECTOS</h6>

						<div class="row">
							<div class="table-responsive">
							  <table class="table table-hover mb-0">
								<thead>
								  <tr>
									<th class="pt-0">#</th>
									<th class="pt-0">Project Name</th>
									<th class="pt-0">Start Date</th>
									<th class="pt-0">Due Date</th>
									<th class="pt-0">Status</th>
									<th class="pt-0">Assign</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>1</td>
									<td>NobleUI jQuery</td>
									<td>01/01/2021</td>
									<td>26/04/2021</td>
									<td><span class="badge badge-danger">Released</span></td>
									<td>Leonardo Payne</td>
								  </tr>
								  <tr>
									<td>2</td>
									<td>NobleUI Angular</td>
									<td>01/01/2021</td>
									<td>26/04/2021</td>
									<td><span class="badge badge-success">Review</span></td>
									<td>Carl Henson</td>
								  </tr>
								  <tr>
									<td>3</td>
									<td>NobleUI ReactJs</td>
									<td>01/05/2021</td>
									<td>10/09/2021</td>
									<td><span class="badge badge-info-muted">Pending</span></td>
									<td>Jensen Combs</td>
								  </tr>
								  <tr>
									<td>4</td>
									<td>NobleUI VueJs</td>
									<td>01/01/2021</td>
									<td>31/11/2021</td>
									<td><span class="badge badge-warning">Work in Progress</span>
									</td>
									<td>Amiah Burton</td>
								  </tr>
								  <tr>
									<td>5</td>
									<td>NobleUI Laravel</td>
									<td>01/01/2021</td>
									<td>31/12/2021</td>
									<td><span class="badge badge-danger-muted text-white">Coming soon</span></td>
									<td>Yaretzi Mayo</td>
								  </tr>
								  <tr>
									<td>6</td>
									<td>NobleUI NodeJs</td>
									<td>01/01/2021</td>
									<td>31/12/2021</td>
									<td><span class="badge badge-primary">Coming soon</span></td>
									<td>Carl Henson</td>
								  </tr>
								  <tr>
									<td class="border-bottom">3</td>
									<td class="border-bottom">NobleUI EmberJs</td>
									<td class="border-bottom">01/05/2021</td>
									<td class="border-bottom">10/11/2021</td>
									<td class="border-bottom"><span class="badge badge-info-muted">Pending</span></td>
									<td class="border-bottom">Jensen Combs</td>
								  </tr>
								</tbody>
							  </table>
							</div>
						  </div>
                  
                    {{-- <button type="button" class="btn btn-primary submit">Submit form</button> --}}
            </div>
        </div>
    </div>
</div>



@endsection
