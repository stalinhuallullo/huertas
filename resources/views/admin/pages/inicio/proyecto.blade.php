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
									<th class="pt-0" style="width:70px">#</th>
									<th class="pt-0">PROJECTOS</th>
									<th class="pt-0" style="width:100px">Editar</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
								  <tr>
									<td>1</td>
									<td>Condominio Falcon</td>
									<td>
									<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil-square-o"></i></a>
									</td>
								  </tr>
								  
								  <tr>
									<td>2</td>
									<td>Condominio Falcon</td>
									<td>
									<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil-square-o"></i></a>
									</td>
								  </tr>

								  <tr>
									<td>3</td>
									<td>Condominio Falcon</td>
									<td>
									<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil-square-o"></i></a>
									</td>
								  </tr>

								  <tr>
									<td>4</td>
									<td>Condominio Falcon</td>
									<td>
									<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil-square-o"></i></a>
									</td>
								  </tr>

								</tbody>
							  </table>
							</div>
						  </div>
                  
                    <button type="button" class="btn btn-primary submit">Submit form</button>
            </div>
        </div>
    </div>
</div>



@endsection
