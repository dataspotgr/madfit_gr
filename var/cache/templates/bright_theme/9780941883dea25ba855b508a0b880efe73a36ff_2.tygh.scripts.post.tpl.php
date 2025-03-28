<?php
/* Smarty version 4.3.0, created on 2025-03-26 03:58:51
  from 'C:\xampp\htdocs\madfit_gr\design\themes\bright_theme\templates\addons\my_changes\hooks\index\scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_67e3ddeb805a98_34005071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9780941883dea25ba855b508a0b880efe73a36ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\themes\\bright_theme\\templates\\addons\\my_changes\\hooks\\index\\scripts.post.tpl',
      1 => 1742986715,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e3ddeb805a98_34005071 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\madfit_gr\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
$(document).ready(function() {
  $('.grid-list .ty-grid-list__item .ty-grid-list__control button').html("<img src='/madfit_gr/images/design_images/addtocart.png'>")

    $('.blog-wrapper').removeClass('span16')

    $('.ty-product-bigpicture__right .ty-product-bigpicture__sidebar-bottom .ty-product-block__button .ty-add-to-wish').html("<img src='/madfit_gr/images/design_images/favourites.png'>")

    $('.ty-grid-list__item .button-container > div > a.ty-btn__primary').html("<img src='/madfit_gr/images/design_images/addtocart.png'>")

})
<?php echo '</script'; ?>
>


<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == 'products' && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == 'view') {
echo '<script'; ?>
>
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
 
<?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/my_changes/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/my_changes/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
$(document).ready(function() {
  $('.grid-list .ty-grid-list__item .ty-grid-list__control button').html("<img src='/madfit_gr/images/design_images/addtocart.png'>")

    $('.blog-wrapper').removeClass('span16')

    $('.ty-product-bigpicture__right .ty-product-bigpicture__sidebar-bottom .ty-product-block__button .ty-add-to-wish').html("<img src='/madfit_gr/images/design_images/favourites.png'>")

    $('.ty-grid-list__item .button-container > div > a.ty-btn__primary').html("<img src='/madfit_gr/images/design_images/addtocart.png'>")

})
<?php echo '</script'; ?>
>


<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == 'products' && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == 'view') {
echo '<script'; ?>
>
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
 
<?php echo '</script'; ?>
>
<?php }
}
}
}
