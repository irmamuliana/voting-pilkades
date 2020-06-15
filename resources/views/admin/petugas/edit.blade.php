@extends('admin.layout')
@section('title','Edit Petugas')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
            </div>
            {{ Form::model($petugas,['url'=>route('adminzone.petugas.update',['id'=>$petugas->id]),'class'=>'form-horizontal','method'=>'PUT'])}}
            @include('validation')
            @include('admin.petugas.form')
            </form>
        </div>
    </div>
</section>
@endsection