jQuery(document).ready(function($) {

  $(".signup-input-text").focus(function(){
    $(this).parent().addClass("signup-input-active");

   }).blur(function(){
        $(this).parent().removeClass("signup-input-active");
   })

   $(".list-item").click(function(){
    //  alert('aa')
      var ele =$('.list-item-active').removeClass('list-item-active');
      ele.removeClass('list-item-active');
      $('#' + $(ele).attr('data-tab')).css('display', 'none');
      $('#' + $(this).attr('data-tab')).css('display','unset');
      $(this).addClass('list-item-active');
   })

   $(".category").click(function(){
      var ele =$('.category-active').removeClass('category-active');
      ele.removeClass('category-active');
      $('#' + $(ele).attr('data-tab')).css('display', 'none');
      $('#' + $(this).attr('data-tab')).css('display','unset');
      $(this).addClass('category-active');
   })
 });
