<?php
<<<<<<< HEAD
/* Smarty version 4.3.0, created on 2025-05-29 16:44:00
=======
/* Smarty version 4.3.0, created on 2025-05-23 13:44:32
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  from 'C:\xampp\htdocs\madfit_gr\design\backend\templates\addons\help_center\templates\help_center_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
<<<<<<< HEAD
  'unifunc' => 'content_683864a0e32b00_30709548',
=======
  'unifunc' => 'content_68305190ca7e45_71566418',
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28d43fa7a8f1d8fce68819145833c11901ba569b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\madfit_gr\\design\\backend\\templates\\addons\\help_center\\templates\\help_center_block.tpl',
<<<<<<< HEAD
      1 => 1743766598,
=======
      1 => 1747996593,
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_683864a0e32b00_30709548 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_68305190ca7e45_71566418 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 4d1d75c7270f947ea01f970e617d3b3455d7b862
?>
    <?php echo '<script'; ?>
 type="text/template" data-ca-help-center="block" data-no-defer="true" data-no-execute="§"
        ><article class="help-center-block" ${data.id ? `id="help_center_${data.section_id}_${data.id}_${data.suffix}"` : ''}>
            ${data.url
                ? `<a href="${data.url}" ${data.new_tab ? 'target="_blank"' : ''} class="help-center-block__inner help-center-block__inner--link
                    ${data.youtube_id || data.image_url || data.status_text ? '' : 'help-center-icon help-center-block__inner--open-icon'}
                    ${data.external_click_id ? 'cm-external-click' : ''}
                    ${data.class ? data.class : ''}"
                    ${data.external_click_id ? 'data-ca-external-click-id="' + data.external_click_id + '"' : ''}
                >`
                : `<div class="help-center-block__inner ${data.class ? data.class : ''}">`
            }
                ${data.youtube_id
                    ? `<div class="help-center-block__video-wrapper">
                        <img src="${data.youtube_thumbnail_url}" class="help-center-block__video" alt="${data.name}"/>
                    </div>`
                    : ''
                }
                ${data.image_url
                    ? `<div class="help-center-block__image-wrapper">
                        <img src="${data.image_url}" class="help-center-block__image" alt="${data.name}"/>
                    </div>`
                    : ''
                }
                ${data.preheader ? `<div class="help-center-block__preheader">${data.preheader}</div>` : ''}
                ${data.name || data.status_text ? '<div class="help-center-block__title-wrapper">' : ''}
                    ${data.name ? `<h3 class="help-center-block__title ${data.new ? 'help-center-icon-before help-center-block__title--new' : ''} ${data.class ? data.class : ''}">${data.name}</h3>` : ''}
                    ${data.status_text ? `<div class="help-center-block__status help-center-block__status--${data.status}">${data.status_text}</div>` : ''}
                ${data.name || data.status_text ? '</div>' : ''}
                ${data.description ? `<div class="help-center-block__description">${data.description}</div>` : ''}
                ${data.html ? `<div class="help-center-block__html">${data.html}</div>` : ''}
                ${data.read_more ? `<div class="help-center-block__read-more">${data.read_more}</div>` : ''}
                ${data.action_url || data.action_secondary_url ? `<div class="help-center-block__actions">
                    ${data.action_url ? `<a href="${data.action_url}" class="help-center-btn help-center-btn--primary" target="_blank">${data.action_name}</a>`
                        : ''
                    }
                    ${data.action_secondary_url ? `<a href="${data.action_secondary_url}" class="help-center-btn" target="_blank">${data.action_secondary_name}</a>`
                        : ''
                    }
                </div>`
                    : ''
                }
            ${data.url
                ? `</a>`
                : '</div>'
            }
    </article><?php echo '</script'; ?>
>

<?php }
}
