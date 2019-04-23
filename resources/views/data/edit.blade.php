@extends('data.layout2')
@section('title','Data Diri')

@section('content')

<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="row">
			<div class="col-md-12">
				<div class="overview-wrap">
					<h2 class="title-1">Edit Data</h2>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<div class="card-title">
					<h3 class="text-center title-2">Data Diri</h3>
				</div>
				<hr>
				<form action="/data/{{ $data->id }}" method="post">
					{{ csrf_field() }}
					{{ method_field('PATCH') }}
					<div class="form-group">
						<label for="nama" class="control-label mb-1">Nama</label>
						<input id="nama" name="nama" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ $data->nama }}">
					</div>
					<div class="form-group">
						<label for="alamat" class="control-label mb-1">Alamat</label>
						<input id="alamat" name="alamat" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ $data->alamat }}">
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
@endsection