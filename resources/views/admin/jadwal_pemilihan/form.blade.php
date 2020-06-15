<div class="card-body">
	<div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-10">
           {{ Form::date('tanggal',null,['class'=>'form-control','placeholder'=>'Tahun Pelaksanaan'])}}
        </div>
    </div>
    
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Jam Mulai</label>
        <div class="col-sm-10">
           {{ Form::time('jam_mulai',null,['class'=>'form-control','placeholder'=>'Tahun Periode'])}}
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Jam Akhir</label>
        <div class="col-sm-10">
           {{ Form::time('jam_akhir',null,['class'=>'form-control','placeholder'=>'Tahun Periode'])}}
        </div>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-save"></i> Save Data</button>
    <a href="{{ route('adminzone.jadwal_pemilihan.index') }}" class="btn btn-danger btn-sm"><i class="fas fa-backward"></i> Back</a>
</div>