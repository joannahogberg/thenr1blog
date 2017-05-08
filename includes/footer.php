<script>
    $(document).ready(function(){
    $(".like").click(function(){
  if($(this).attr('title') == 'Like'){
   $that = $(this);
   $.post('getLikes.php', {postId:$(this).attr('id'), action:'like'},function(data){
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

   (function titleScroller(text) {
      document.title = text;
      setTimeout(function () {
        titleScroller(text.substr(1) + text.substr(0, 1));
      }, 100);
    }(" THE NR 1 BLOG | By Owen, Joanna & Samir |"));

</script>
</body>
</html>