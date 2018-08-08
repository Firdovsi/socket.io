<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Socket.io App</title>
  </head>
  <body>

    <form class="" action="index.html" method="post">
      <textarea name="name" style="width:100%;height:50px"></textarea>
      <input type="submit" name="" value="Отправить">
    </form>
    <ul class="messages">

    </ul>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>
    <script type="text/javascript">
      var socket = io(':6001');

      $('form').on('submit', function(){
        var text = $('textarea').val(),
            msg = {message : text};

        socket.send(msg);
        $('.messages').append('<li>'+text+'</li>');
        return false;
      });

      socket.on('message', function(data){
        $('.messages').append('<li>'+data.message+'</li>');
      })
    </script>
  </body>
</html>
