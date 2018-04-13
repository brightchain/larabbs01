@extends('layouts.app')
@section('title',$user->name.' 个人资料更新')
@section('content')
    <div class="container">
        <div class="panel panel-default col-md-10 col-md-offset-1">
            <div class="panel-heading">
                <h4>
                    <i class="glyphicon glyphicon-edit"></i> 编辑个人资料
                </h4>
            </div>
            @include('common.errors')
            <div class="panel-body">
                <form action="{{ route('user.update',$user->id) }}" method="post" accept-charset="UTF-8">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="name-field">用户名</label>
                        <input class="form-control" type="text" id="name-field" name="name" value="{{ old('name',$user->name) }}">
                    </div>
                    <div class="form-group">
                        <label for="email-field">邮 箱</label>
                        <input class="form-control" type="text" id="email-field" name="email" value="{{ old('email',$user->email) }}">
                    </div>
                    <div class="form-group">
                        <label for="introduction-field">个人简介</label>
                        <input class="form-control" type="text" id="introduction-field" name="introduction" value="{{ old('introduction',$user->introduction) }}">
                    </div>
                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection