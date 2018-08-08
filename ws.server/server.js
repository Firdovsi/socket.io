var io = require('socket.io')(6001);

io.on('connection', function(socket){
    console.log('New Connection:', socket.id);

  socket.on('message', function(data){
    socket.broadcast.send(data)
  })
});
