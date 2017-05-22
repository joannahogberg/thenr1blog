//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*                                            AJAX-updateform                                                               */
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

let updateForm = document.getElementById('editPostForm');

updateForm.addEventListener('submit', function(event){
  
  //Prevent form from submitting
  event.preventDefault();

  //Do post request to php
  fetch('../includes/admin.php?action=editPost', {
    method: 'UPDATE',
    body: new FormData(this)//format input-fields
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

  
// $(document).ready(function(){
//   $(".like").click(function(){
//     if($(this).attr('title') == 'Like'){
//       $that = $(this);
//       $.post('../includes/getLikes.php', {postId:$(this).attr('id'), action:'like'},function(data){
//         $that.text('Unlike');
//         $that.attr('title','Unlike');
//       });
//     }else{
//       if($(this).attr('title') == 'Unlike'){
//         $that = $(this);
//         $.post('../includes/getLikes.php', {postId:$(this).attr('id'), action:'unlike'},function(){
//           $that.text('Like');
//           $that.attr('title','Like');
//         });
//       }
//     }
//   });
// });

// (function titleScroller(text) {
//   document.title = text;
//   setTimeout(function () {
//     titleScroller(text.substr(1) + text.substr(0, 1));
//   }, 100);
// }(" THE NR 1 BLOG | By Owen, Joanna & Samir |"));