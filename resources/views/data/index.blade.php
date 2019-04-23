@extends('data.layout2')

@section('title','Data Diri')

@section('content')

<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<center>
				<h2 class="title-1">Data Diri</h2>
		

			<div class="row">
				<div class="col-lg-12">
					<div class="table-responsive table--no-card m-b-30">
						
						<table class="table table-borderless table-striped table-earning">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nama</th>
									<th>Alamat</th>
									<th>Edit</th>
									<th>Hapus</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $d)
								<tr>
									<td>{{ $d->id }}</td>
									<td>{{ $d->nama }}</td>
									<td>{{ $d->alamat }}</td>
									<td>
										<form action="/data/{{ $d->id }}/edit" method="GET">	
											<button type="submit" class="btn btn-outline-primary">
												<i class="fa fa-pencil-square-o"></i>
											</button>
										</form>
									</td>
									<td>
										<form action="/data/{{ $d->id }}" method="post">
											@csrf
											@method("DELETE")
											<button type="submit" class="btn btn-outline-danger">
												<i class="fa fa-times"></i>
											</button>
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<form action="/data/create">
				<button class="au-btn au-btn-icon au-btn--blue">Tambah Data</button>
			</form>
			</center>
		</div>
	</div>
</div>
@stop