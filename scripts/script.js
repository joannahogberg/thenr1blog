$(document).ready(function(){




$("#regForm").submit(function(event){
event.preventDefault();

$.post( 'postLogReg.php', $("#regForm").serialize())
  .done(function( data ) {


 console.log(data);
    if(typeof(data)== "string"){
       
         $('#messReg').html('<div class"col"><p class="text-xs-center">'+data+'&nbsp; <span class="glyphicon glyphicon-thumbs-down"></span></p></div>');
    }

  } )
  .fail(function(response) {
        $('#messReg').html('<div class"col"><p class="text-xs-center"><span class="glyphicon glyphicon-info-sign"> Something went wrong, try again later...</p></div>');
        console.log(response);
  })
  .always(function(data) {
   console.log( "finished" );
    if((typeof $.parseJSON(data) === 'object') == true){
    $('#messReg').html('<div class"col"><p class="text-xs-center">Successfully registered, you may login now <span class="glyphicon glyphicon-thumbs-up"></span></p></div>');
    }
    $('#email').val('');
    $('#username2').val('');
    $('#pass2').val('');
  });

   }
  );

 $("#blogFormId").submit(function(event){

    event.preventDefault();
$.post('editPost.php', $("#blogFormId").serialize(), function() {
  console.log($("#blogFormId").serialize());
})
  .done(function() {
   console.log( "second success" );
   $('#message').html('<div class"col"><h5 class="text-xs-center">BlogPost was successfully added <span class="glyphicon glyphicon-ok"></span></h5><p class="text-xs-center"><a href="login.php">  Go back to BlogPost list <span class="glyphicon glyphicon-list-alt"></span></a> Or post another one <span class="glyphicon glyphicon-pencil"></span></p></div>');
     // Clear the form.
    $('#title').val('');
    $('#content').val('');
  })
  .fail(function(response) {
         $('#message').html('<div class"col"><h5 class="text-xs-center">BlogPost did not get posted <span class="glyphicon glyphicon-thumbs-down"></span></h5><p class="text-xs-center"><a href="login.php">  Go back to BlogPost list <span class="glyphicon glyphicon-list-alt"></span></a> Please try again <span class="glyphicon glyphicon-pencil"></span></p></div>');
   console.log( response );
  })
  .always(function() {
   console.log( "finished" );
  });
   }
  );





$(".like").click(function(){
  if($(this).attr('title') == 'Like'){
      console.log($(this).attr('id'));
   $that = $(this);
   $.post('getLikes.php', {postId:$(this).attr('id'), action:'like'},function(){
    $that.html('<span class="glyphicon glyphicon-heart"></span>');
    $that.attr('title','Unlike');
  
   });
  }else{
   if($(this).attr('title') == 'Unlike'){
    $that = $(this);
    $.post('getLikes.php', {postId:$(this).attr('id'), action:'unlike'},function(){
     $that.html('<span class="glyphicon glyphicon-heart-empty"></span>');
     $that.attr('title','Like');
    });
   }
  }
 })
});

   (function titleScroller(text) {
      document.title = text;
      setTimeout(function () {
        titleScroller(text.substr(1) + text.substr(0, 1));
      }, 100);
    }(" THE NR 1 BLOG | By Owen, Joanna & Samir |"));