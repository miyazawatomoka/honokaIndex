<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TTMail</title>
  </head>
  <body>
    <h2>TTMail测试系统</h2>
    <div>
      <div>生成回执代码块</div>
      <form action = "/ttmail/createTtmail" method="post">
        <div>
          <label for = "mail_address"> 电子邮件账号</label>
          <input name = "mail_address" type="input" value="{{ isset($mail_address) ? $mail_address : '' }}"/>
          <label for = "uname">你的用户名</label>
          <input name = "uname" type="input" value="{{ isset($uname) ? $uname : '' }}" />
          <input type="submit" value="获取img地址" />
        </div>
        @if (isset($img))
          <div>
            <textarea rows="3" cols="100">{{$img}}</textarea>
          </div>
        @endif
      </form>
    </div>
    <div style="margin-top: 100px;">
      <div>已发邮件查询</div>
      <form action = "/ttmail/list" method="get" target="_blank">
        <label for="uname">你的用户名</label>
        <input type="text" name="uname" value="" />
        <input type="submit" />
      </form>
    </div>
  </body>
</html>
