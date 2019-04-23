@extends('data.layout2')

@section('title','Data Diri')

@section('content')

<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="overview-wrap">
						<h2 class="title-1">Tambah Data</h2>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">Tambah Data</div>
					<div class="card-body">
						<div class="card-title">
							<h3 class="text-center title-2">Data Diri</h3>
						</div>
						<hr>
						<form action="/data" method="post">
							@csrf
							<div class="form-group">
								<label for="nama" class="control-label mb-1">Nama</label>
								<input id="nama" name="nama" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Masukkan Nama Lengkap">
							</div>
							<div class="form-group">
								<label for="alamat" class="control-label mb-1">Alamat</label>
								<input id="alamat" name="alamat" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Masukkan Alamat">
							</div>
							<div>
								<button id="submit" type="submit" class="btn btn-lg btn-info btn-block">
									<span id="payment-button-amount">Simpan</span>
									<span id="payment-button-sending" style="display:none;">Mengirim…</span>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop