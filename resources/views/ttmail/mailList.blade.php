<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TTMail</title>
  </head>
  <body>
    <div>
      <table border="1">
        <caption>已发送邮件</caption>
        <thead>
          <tr>
            <th>邮件id</th>
            <th width="200">邮件地址</th>
            <th width="150">创建时间</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($mailList as $ttmail)
            <tr>
              <td> {{ $ttmail->id }} </td>
              <td> {{ $ttmail->mail_address }} </td>
              <td> {{ $ttmail->created_at }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div>
      <table border="1">
        <caption>已被打开</caption>
        <thead>
          <tr>
            <th>邮件id</th>
            <th width="100">访问ip</th>
            <th width="150">访问时间</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($historyList as $history)
            <tr>
              <td> {{ $history->ttmail_id }} </td>
              <td> {{ $history->visited_ip }} </td>
              <td> {{ $history->created_at }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
</html>
