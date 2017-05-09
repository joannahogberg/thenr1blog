//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*                                            AJAX-updatefrom                                                               */
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

let updateForm = document.getElementById('blogFormId');

updateForm.addEventListener('submit', function(event){
  
  //Prevent form from submitting
  event.preventDefault();

  //Do post request to php
  fetch('admin.php', {
    method: 'POST',
    body: new FormData(this) //format input-fields
  })
  .then(data => data.text())
  .then(text => console.log(text));
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*                                            AJAX-post                                                                   */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


let form = document.getElementById('blogFormId');

form.addEventListener('submit', function(event){
  
  //Prevent form from submitting
  event.preventDefault();

  //Do post request to php
  fetch('admin.php', {
    method: 'POST',
    body: new FormData(this) //format input-fields
  })
  .then(data => data.text())
  .then(text => console.log(text));
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*                                                                                                                          */
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  
    $(document).ready(function(){
 $(document).on('click', '.like', function(){
  if($(this).attr('title') == 'Like'){
   $that = $(this);
   $.post('getLikes.php', {postId:$(this).attr('id'), action:'like'},function(){
    $that.text('Unlike');
    $that.attr('title','Unlike');
   });
  }else{
   if($(this).attr('title') == 'Unlike'){
    $that = $(this);
    $.post('getLikes.php', {postId:$(this).attr('id'), action:'unlike'},function(){
     $that.text('Like');
     $that.attr('title','Like');
    });
   }
  }
 });
});