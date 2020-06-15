@extends('admin.layout')
@section('title','Edit Pemilu')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
            </div>
            {{ Form::model($pemilu,['url'=>route('adminzone.pemilu.update',['id'=>$pemilu->id]),'class'=>'form-horizontal','method'=>'PUT'])}}
            @include('validation')
            @include('admin.pemilu.form')
            </form>
        </div>
    </div>
</section>
@endsection