<div class="card-body">
	
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
           {{ Form::text('nama',null,['class'=>'form-control','placeholder'=>'Nama Pemilih'])}}
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
        <div class="col-sm-10">
           {{ Form::text('nik',null,['class'=>'form-control','placeholder'=>'Nomor Induk Kependudukan'])}}
        </div>
    </div>
    
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">TPS</label>
        <div class="col-sm-10">
           {!! Form::select('tps_id', $tps, null,['class' => 'form-control']) !!}
        </div>
    </div>
    
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
           {{ Form::select('jenis_kelamin', ['Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'], null, ['class'=>'form-control']) }}
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-10">
           {{ Form::text('tempat_lahir',null,['class'=>'form-control','placeholder'=>'Tempat Lahir'])}}
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
           {{ Form::date('tanggal_lahir',null,['class'=>'form-control','placeholder'=>'Tanggal Lahir'])}}
        </div>
    </div>
    
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
           {{ Form::text('alamat',null,['class'=>'form-control','placeholder'=>'Alamat'])}}
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
           {{ Form::select('status', ['Belum Memilih' => 'Belum Memilih', 'Sudah Memilih' => 'Sudah Memilih'], null, ['class'=>'form-control']) }}
        </div>
    </div>

</div>
<div class="card-footer">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Save Data</button>
            
            <a href="{{ route('adminzone.pemilih.index') }}" class="btn btn-danger"><i class="fas fa-backward"></i> Back</a>
        </div>
    </div>
</div>