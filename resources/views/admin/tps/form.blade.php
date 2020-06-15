<div class="card-body">
	<div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama TPS</label>
        <div class="col-sm-10">
           {{ Form::text('nama',null,['class'=>'form-control','placeholder'=>'Nama TPS'])}}
        </div>
    </div>
    
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat TPS</label>
        <div class="col-sm-10">
           {{ Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>'Alamat TPS'])}}
        </div>
    </div>
</div>
<div class="card-footer">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Save Data</button>
            
            <a href="{{ route('adminzone.tps.index') }}" class="btn btn-danger"><i class="fas fa-backward"></i> Back</a>
        </div>
    </div>
</div>