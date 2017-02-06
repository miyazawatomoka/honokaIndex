@extends('layouts.app')
@section('content')
<div class="container">
  <div class="auth-container animated zoomIn">
    <div class="form-logo">
      <h2>注册</h2>
    </div>
    <form class="ui form" action="{{ url('/register') }}" method="post" >
      {{ csrf_field() }}
       <div class="ui input">
         <input placeholder="请输用户名" type="name" name="name" value="{{ old('name') }}" required autofocus>
       </div>
       <div class="ui input">
         <input placeholder="请输入邮箱地址" type="email" name="email" value="{{ old('email') }}" required>
       </div>
       <div class="ui input">
         <input placeholder="请输入密码" type="password" name="password" required>
       </div>
       <div class="ui input">
         <input placeholder="请再次输入密码" type="password" name="password_confirmation" required>
       </div>
       <div class="auth-button actions">
         <input class="ui primary button" type="submit">
       </div>
    </form>
    @if ($errors)
        <span class="help-block">
            <strong>{{ $errors->first() }}</strong>
        </span>
    @endif
  </div>
</div>
@endsection
