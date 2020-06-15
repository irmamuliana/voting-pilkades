@extends('admin.layout')
@section('title','Edit TPS')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
            </div>
            {{ Form::model($tps,['url'=>route('adminzone.tps.update',['id'=>$tps->id]),'class'=>'form-horizontal','method'=>'PUT'])}}
            @include('validation')
            @include('admin.tps.form')
            </form>
        </div>
    </div>
</section>
@endsection