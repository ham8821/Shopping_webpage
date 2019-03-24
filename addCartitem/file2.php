
$('#cart-popover').popover({
  html : true,
        container: 'body',
        content:function(){
         return $('#popover_content_wrapper').html();
        }
});
