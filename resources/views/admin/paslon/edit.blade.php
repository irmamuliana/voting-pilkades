@extends('admin.layout')
@section('title','Edit Paslon')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
            </div>
            {{ Form::model($paslon,['url'=>route('adminzone.paslon.update',['id'=>$paslon->id]),'class'=>'form-horizontal','files'=>true,'method'=>'PUT'])}}
            @include('validation')
            @include('admin.paslon.form')
            </form>
        </div>
    </div>
</section>
@endsection