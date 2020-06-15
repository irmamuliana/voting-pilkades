<div class="card-body">
	
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
           {{ Form::text('nama',null,['class'=>'form-control','placeholder'=>'Nama Petugas'])}}
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">No Telepon</label>
        <div class="col-sm-10">
           {{ Form::text('no_telephone',null,['class'=>'form-control','placeholder'=>'No Telepon'])}}
        </div>
    </div>
    
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">TPS</label>
        <div class="col-sm-10">
           {!! Form::select('tps_id', $tps, null,['class' => 'form-control']) !!}
        </div>
    </div>
    
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
           {{ Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>'Alamat Petugas'])}}
        </div>
    </div>

</div>

<div class="card-footer">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Save Data</button>
            
            <a href="{{ route('adminzone.petugas.index') }}" class="btn btn-danger"><i class="fas fa-backward"></i> Back</a>
        </div>
    </div>
</div>