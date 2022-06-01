//Section-1
$(document).ready(function() {
    $('#btn-next').click(function(event) {
       var slide_next = $('.active').next();
       if(slide_next.length!=0){
          $('.active').addClass('remove-left').one('webkitAnimationEnd', function(event) {
             $('.remove-left').removeClass('remove-left').removeClass('active');
          });
          slide_next.addClass('active').addClass('move-right').one('webkitAnimationEnd', function(event) {
             $('.move-right').removeClass('move-right');
          });
       }else{
          $('.active').addClass('remove-left').one('webkitAnimationEnd', function(event) {
             $('.remove-left').removeClass('remove-left').removeClass('active');
          });
          $('.slide:first-child').addClass('active').addClass('move-right').one('webkitAnimationEnd', function(event) {
             $('.move-right').removeClass('move-right');
          });
       }
    });
});

$(document).ready(function() {
    $('#btn-prev').click(function(event) {
       var slide_prev = $('.active').next();
       if(slide_prev.length!=0){
          $('.active').addClass('remove-right').one('webkitAnimationEnd', function(event) {
             $('.remove-right').removeClass('remove-right').removeClass('active');
          });
          slide_prev.addClass('active').addClass('move-left').one('webkitAnimationEnd', function(event) {
             $('.move-left').removeClass('move-left');
          });
       }else{
          $('.active').addClass('remove-right').one('webkitAnimationEnd', function(event) {
             $('.remove-right').removeClass('remove-right').removeClass('active');
          });
          $('.slide:first-child').addClass('active').addClass('move-left').one('webkitAnimationEnd', function(event) {
             $('.move-left').removeClass('move-left');
          });
       }
    });
});

