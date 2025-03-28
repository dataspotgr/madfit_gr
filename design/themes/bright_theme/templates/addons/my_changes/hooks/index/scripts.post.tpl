<script>
$(document).ready(function() {
    // Attach a click event handler to the button
    $('.ty-menu__item.ty-menu__menu-btn.visible-phone').click(function() {
        // Find the closest parent with class 'span3' or 'span16'
        var $parent = $(this).closest('.span8, .span16');

        // Toggle the class between 'span3' and 'span16'
        if ($parent.hasClass('span8')) {
            $parent.removeClass('span8').addClass('span16');
            $('.white-logo-mobile img').css('left', '8px');
            $('.wrapper-header-up-mob .span8:has(.ty-logo-container)').css('display', 'none');
        } else if ($parent.hasClass('span16')) {
            $parent.removeClass('span16').addClass('span8');
            $('.wrapper-header-up-mob .span8:has(.ty-logo-container)').css('display', 'block');
        }
    });
});
</script>

<script>
$(document).ready(function() {
  $('.grid-list .ty-grid-list__item .ty-grid-list__control button').html("<img src='/madfit_gr/images/design_images/addtocart.png'>")

    $('.blog-wrapper').removeClass('span16')

    $('.ty-product-bigpicture__right .ty-product-bigpicture__sidebar-bottom .ty-product-block__button .ty-add-to-wish').html("<img src='/madfit_gr/images/design_images/favourites.png'>")

    $('.ty-grid-list__item .button-container > div > a.ty-btn__primary').html("<img src='/madfit_gr/images/design_images/addtocart.png'>")

})
</script>


{if $runtime.controller == 'products' && $runtime.mode == 'view'}
<script>
$(document).ready(function() {

 $(".ty-accordion__item").each(function () {
    var tabId = $(this).attr("id"); 
    var correspondingContent = $("#content_" + tabId).html(); 
    if (correspondingContent) {
      $(this).find(".ty-accordion__content").html(correspondingContent); 
    }
  });

  
   $('.ty-accordion__item.active .ty-accordion__content').show();

  $('.ty-accordion__header').on('click', function() {
      var $content = $(this).next('.ty-accordion__content');
      var $item = $(this).closest('.ty-accordion__item');
      
      $content.slideToggle();
      $item.toggleClass('active');

      // Toggle the content for the ::before pseudo-element based on active class
      if ($item.hasClass('active')) {
          $(this).find('.ty-accordion__header::before').text('-');
      } else {
          $(this).find('.ty-accordion__header::before').text('+');
      }
  });
})
 
</script>
{/if}