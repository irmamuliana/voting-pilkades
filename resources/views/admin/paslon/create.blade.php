@extends('admin.layout')
@section('title','Tambah Data Paslon')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
            </div>
            {{ Form::open(['url'=>route('adminzone.paslon.store'),'class'=>'form-horizontal','files'=>true])}}
            @include('validation')
            @include('admin.paslon.form')
            </form>
        </div>
    </div>
</section>
@endsection