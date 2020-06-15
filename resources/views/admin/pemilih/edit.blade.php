@extends('admin.layout')
@section('title','Edit Pemilih')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
            </div>
            {{ Form::model($pemilih,['url'=>route('adminzone.pemilih.update',['id'=>$pemilih->id]),'class'=>'form-horizontal','method'=>'PUT'])}}
            @include('validation')
            @include('admin.pemilih.form')
            </form>
        </div>
    </div>
</section>
@endsection