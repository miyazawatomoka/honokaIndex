@extends('layouts.app')
@section('content')
<div class="container">
  <div class="auth-container animated zoomIn">
    <div class="form-logo">
      <h2>登陆</h2>
    </div>
    <form class="ui form" action="{{ url('/login') }}" method="post">
      {{ csrf_field() }}
       <div class="ui input">
         <input placeholder="请输入邮箱地址" type="email" name="email" value="{{ old('email') }}" required autofocus>
       </div>
       <div class="ui input">
         <input placeholder="请输入密码" type="password" name="password" required>
       </div>
       <div class="ui input">
         <div class="ui checkbox">
           <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}>
           <label>记住我</label>
         </div>
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
