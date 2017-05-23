$(document).ready(function(){

 /**
  * jQuery.post() functions for all AJAx calls to load data from the server using a HTTP POST request.
  *
  */


 /**
  * Ajax call for when new registration is made
  * DOM manipulation to display message to user
  */

$("#regForm").submit(function(event){ //on submit form

      event.preventDefault();

$.post( 'postLogReg.php', $("#regForm").serialize())
  .done(function( data ) {
        console.log(data);
        //Check if returned data is success
        if(data == "success"){
       $('#messReg').html('<div class"col"><p class="text-xs-center">Successfully registered, you may login now <span class="glyphicon glyphicon-thumbs-up"></span></p></div>');
}
    else{
          $('#messReg').html('<div class"col"><p class="text-xs-center">'+data+'&nbsp; <span class="glyphicon glyphicon-thumbs-down"></span></p></div>');
    }
  } )
  .fail(function(response) {
        $('#messReg').html('<div class"col"><p class="text-xs-center"><span class="glyphicon glyphicon-info-sign"> Something went wrong, try again later...</p></div>');
        console.log(response);
  })
  .always(function() {
   console.log( "finished" );
    //clear form values
    $('#email').val('');
    $('#username2').val('');
    $('#pass2').val('');
  });

   }
  );


  /**
  * Ajax call for when new blogpost is made
  * DOM manipulation to display message to user when post is posted or if session failed
  */

 $("#blogFormId").submit(function(event){ //on submit form

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

/**
  * Ajax call for when new registration is made
  * DOM manipulation to display message to user when post is updated or if session failed
  */
  
    $(".updatePost").click(function(event){ //on click at button
     event.preventDefault();
    if($(this).attr('value')== 'save'){
    $.post('editPost.php', $("#editForm").serialize(), function() { 
    })
  .done(function(data) {

   console.log( "second success" );
 $('#message').html('<div class"col"><h5 class="text-xs-center">BlogPost was successfully updated <span class="glyphicon glyphicon-ok"></span></h5><p class="text-xs-center"><a href="login.php">  Go back to BlogPost list <span class="glyphicon glyphicon-list-alt"></span></a> Or continue editing <span class="glyphicon glyphicon-pencil"></span></p></div>');
  })
  .fail(function(response) {
         $('#message').html('<div class"col"><h5 class="text-xs-center">BlogPost did not get updated <span class="glyphicon glyphicon-thumbs-down"></span></h5><p class="text-xs-center"><a href="login.php">  Go back to BlogPost list <span class="glyphicon glyphicon-list-alt"></span></a> Please try again <span class="glyphicon glyphicon-pencil"></span></p></div>');
   console.log( response );
  })
  .always(function() {
   console.log( "finished" );
  });
    }else{
        $('#message').html('<div class"col"><h5 class="text-xs-center">Editing session was cancelled</h5><p class="text-xs-center"><a href="login.php">  Go back to BlogPost list <span class="glyphicon glyphicon-list-alt"></span></a> Or continue editing <span class="glyphicon glyphicon-pencil"></span></p></div>');
        return false;
    }
   }
  );
 
/**
  * Ajax call for when link is clicked to sort posts
  * DOM manipulation to display returned data
  */
$("#topPosts").click(function(){ //on clicked link

    $.post('postSortBy.php', {action:'topPosts'},function(data) {
   console.log( "success" );
      $('#header2').text("sorted by most likes");
    let html="";
    data = JSON.parse(data)
    console.log(data);
     for (prop in data) {
         html+=`<article class='col-sm-10 col-md-10 col-lg-8 p-1 thumbnail'><h4 class='title mb-1'> ${data[prop].title}</h4><h6 class='text-muted'> Posted by <span class='username'>${data[prop].username}</span> |  ${data[prop].datePosted}  | <span class='glyphicon glyphicon-heart'></span> ${data[prop].likes}</h6><p> <a href='admin.php?action=readPost&amp;postId=${data[prop].id}'> Read BlogPost<span class='glyphicon glyphicon-eye-open'></span></a></p>
    </article>`;
     }

      $('#articles').html(html);
})
  .done(function() {
    console.log( "second success" );
  })
  .fail(function() {
    console.log( "error" );
  })
  .always(function() {
    console.log( "finished" );
  });
 });

/**
  * Ajax call for when link is clicked to sort posts
  * DOM manipulation to display returned data
  */
  $("#lastPosted").click(function(){ //on clicked link

    $.post('postSortBy.php', {action:'lastPosted'},function(data) {
  console.log( "success" );
//    $('#articles').html(data);
   $('#header2').text("sorted by date posted");
      let html="";
    data = JSON.parse(data)
    console.log(data);
     for (prop in data) {
         html+=`<article class='col-sm-10 col-md-10 col-lg-8 p-1 thumbnail'><h4 class='title mb-1'> ${data[prop].title}</h4><h6 class='text-muted'> Posted by <span class='username'>${data[prop].username}</span> |  ${data[prop].datePosted}  | <span class='glyphicon glyphicon-heart'></span> ${data[prop].likes}</h6><p> <a href='admin.php?action=readPost&amp;postId=${data[prop].id}'> Read BlogPost<span class='glyphicon glyphicon-eye-open'></span></a></p>
    </article>`;
     }

      $('#articles').html(html);
})
  .done(function() {
    console.log( "second success");
  })
  .fail(function() {
    console.log( "error" );
  })
  .always(function() {
    console.log( "finished" );
  });
 });

/**
  * Ajax call for when link is clicked to sort posts
  * DOM manipulation to display returned data
  */
 $("#postedByA").click(function(){ //on clicked link

    $.post('postSortBy.php', {action:'postedByA'},function(data) {
   console.log( "success" );
//    $('#articles').html(data);
    $('#header2').text("sorted by publisher a-ö");
       let html="";
    data = JSON.parse(data)
    console.log(data);
     for (prop in data) {
         html+=`<article class='col-sm-10 col-md-10 col-lg-8 p-1 thumbnail'><h4 class='title mb-1'> ${data[prop].title}</h4><h6 class='text-muted'> Posted by <span class='username'>${data[prop].username}</span> |  ${data[prop].datePosted}  | <span class='glyphicon glyphicon-heart'></span> ${data[prop].likes}</h6><p> <a href='admin.php?action=readPost&amp;postId=${data[prop].id}'> Read BlogPost<span class='glyphicon glyphicon-eye-open'></span></a></p>
    </article>`;
     }

      $('#articles').html(html);
})
  .done(function() {
    console.log( "second success" );
  })
  .fail(function() {
    console.log( "error" );
  })
  .always(function() {
    console.log( "finished" );
  });
 });
/**
  * Ajax call for when link is clicked to sort posts
  * DOM manipulation to display returned data
  */
  $("#postedByZ").click(function(){ //on clicked link

    $.post('postSortBy.php', {action:'postedByZ'},function(data) {
   console.log( "success" );
    $('#header2').text("sorted by publisher ö-a");
       let html="";
    data = JSON.parse(data)
    console.log(data);
     for (prop in data) {
         html+=`<article class='col-sm-10 col-md-10 col-lg-8 p-1 thumbnail'><h4 class='title mb-1'> ${data[prop].title}</h4><h6 class='text-muted'> Posted by <span class='username'>${data[prop].username}</span> |  ${data[prop].datePosted}  | <span class='glyphicon glyphicon-heart'></span> ${data[prop].likes}</h6><p> <a href='admin.php?action=readPost&amp;postId=${data[prop].id}'> Read BlogPost<span class='glyphicon glyphicon-eye-open'></span></a></p>
    </article>`;
     }

      $('#articles').html(html);
})
  .done(function() {
    console.log( "second success" );
  })
  .fail(function() {
    console.log( "error" );
  })
  .always(function() {
    console.log( "finished" );
    
  });
 });

/**
  * Ajax call for when heart icon is clicked to like/unlike post
  * DOM manipulation to update icon style and attribute
  */

$(".like").click(function(){ //on clicked heart icon
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
 });
});

   (function titleScroller(text) {
      document.title = text;
      setTimeout(function () {
        titleScroller(text.substr(1) + text.substr(0, 1));
      }, 100);
    }(" THE NR 1 BLOG | By Owen, Joanna & Samir |"));