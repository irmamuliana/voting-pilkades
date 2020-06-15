@extends('admin.layout')
@section('title','Tambah Data TPS')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
            </div>
            {{ Form::open(['url'=>route('adminzone.tps.store'),'class'=>'form-horizontal'])}}
            @include('validation')
            @include('admin.tps.form')
            </form>
        </div>
    </div>
</section>
@endsection