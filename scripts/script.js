<script>
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
 })
});

</script>