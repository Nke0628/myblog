$(function(){
  $('button').click(function(){
    $('#result').load('test.html',function(){
      $('#message').css('color','red');
    });
  });
});
