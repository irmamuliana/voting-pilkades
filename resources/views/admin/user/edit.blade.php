@extends('admin.layout')
@section('title','Edit User')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
            </div>
            {{ Form::model($user,['url'=>route('adminzone.user.update',['id'=>$user->id]),'class'=>'form-horizontal','method'=>'PUT','files'=>true])}}
            @include('validation')
            @include('admin.user.form')
            </form>
        </div>
    </div>
</section>
@endsection