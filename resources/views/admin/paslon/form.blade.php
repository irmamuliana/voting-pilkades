<div class="card-body">
	
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Kepala</label>
        <div class="col-sm-10">
           {{ Form::text('nama_kepala',null,['class'=>'form-control','placeholder'=>'Nama Calon Kepala Desa'])}}
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Wakil</label>
        <div class="col-sm-10">
           {{ Form::text('nama_wakil',null,['class'=>'form-control','placeholder'=>'Nama Calon Wakil Kepala Desa'])}}
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Pemilu</label>
        <div class="col-sm-10">
           {!! Form::select('pemilu_id', $pemilu, null,['class' => 'form-control']) !!}
        </div>
    </div>
    
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Visi</label>
        <div class="col-sm-10">
           {{ Form::text('visi',null,['class'=>'form-control','placeholder'=>'Visi'])}}
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Misi</label>
        <div class="col-sm-10">
           {{ Form::textarea('misi',null,['class'=>'form-control','placeholder'=>'Misi'])}}
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-10">
           {{ Form::file('foto',null,['class'=>'form-control'])}}
        </div>
    </div>

</div>
<div class="card-footer">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Save Data</button>
            
            <a href="{{ route('adminzone.paslon.index') }}" class="btn btn-danger"><i class="fas fa-backward"></i> Back</a>
        </div>
    </div>
</div>