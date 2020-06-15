@extends('admin.layout')
@section('title','Edit Jadwal Pemilihan')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
            </div>
            {{ Form::model($jadwal_pemilihan,['url'=>route('adminzone.jadwal_pemilihan.update',['id'=>$jadwal_pemilihan->id]),'class'=>'form-horizontal','method'=>'PUT'])}}
            @include('validation')
            @include('admin.jadwal_pemilihan.form')
            </form>
        </div>
    </div>
</section>
@endsection