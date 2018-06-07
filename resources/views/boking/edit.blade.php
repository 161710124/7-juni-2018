@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Boking 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('glr.update',$gl->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('tanggal_boking') ? ' has-error' : '' }}">
			  			<label class="control-label">tanggal_boking</label>	
			  			<input type="text" name="tanggal_boking" class="form-control" value="{{ $gl->tanggal_boking }}"  required>
			  			@if ($errors->has('tanggal_boking'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_boking') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_mobil') ? ' has-error' : '' }}">
			  			<label class="control-label">id_mobil</label>	
			  			<input type="file" name="id_mobil" class="form-control"  value="{{ $gl->id_mobil }}"  required>
			  			@if ($errors->has('id_mobil'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_mobil') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_customer') ? ' has-error' : '' }}">
			  			<label class="control-label">id_customer</label>	
			  			<input type="file" name="id_customer" class="form-control"  value="{{ $gl->id_customer }}"  required>
			  			@if ($errors->has('id_customer'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_customer') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection