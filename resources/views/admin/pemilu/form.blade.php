<div class="card-body">
	<div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Pelaksanaan</label>
        <div class="col-sm-10">
           {{ Form::date('tanggal_pelaksanaan',null,['class'=>'form-control','placeholder'=>'Tahun Pelaksanaan'])}}
        </div>
    </div>
    
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Tahun Periode</label>
        <div class="col-sm-10">
           {{ Form::text('tahun_periode',null,['class'=>'form-control','placeholder'=>'Tahun Periode'])}}
        </div>
    </div>
</div>
<div class="card-footer">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Save Data</button>
            
            <a href="{{ route('adminzone.pemilu.index') }}" class="btn btn-danger"><i class="fas fa-backward"></i> Back</a>
        </div>
    </div>
</div>