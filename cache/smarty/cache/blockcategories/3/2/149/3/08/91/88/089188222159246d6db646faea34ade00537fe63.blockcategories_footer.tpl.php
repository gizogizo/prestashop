<?php /*%%SmartyHeaderCode:60455523b2c8daf4a9-35769444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '089188222159246d6db646faea34ade00537fe63' => 
    array (
      0 => 'G:\\xampp\\htdocs\\prestashop\\themes\\default-bootstrap\\modules\\blockcategories\\blockcategories_footer.tpl',
      1 => 1425614960,
      2 => 'file',
    ),
    'e3adc9378e063c360a3063b1aec96981c2131815' => 
    array (
      0 => 'G:\\xampp\\htdocs\\prestashop\\themes\\default-bootstrap\\modules\\blockcategories\\category-tree-branch.tpl',
      1 => 1425614960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60455523b2c8daf4a9-35769444',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5528aafb0edf67_54402500',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5528aafb0edf67_54402500')) {function content_5528aafb0edf67_54402500($_smarty_tpl) {?>
<!-- Block categories module -->
<section class="blockcategories_footer footer-block col-xs-12 col-sm-2">
	<h4>Categories</h4>
	<div class="category_footer toggle-footer">
		<div class="list">
			<ul class="tree dhtml">
												
<li >
	<a 
	href="http://localhost/prestashop/12-parent" title="Test Category">
		Parent
	</a>
			<ul>
												
<li class="last">
	<a 
	href="http://localhost/prestashop/14-child" title="">
		Child
	</a>
	</li>

									</ul>
	</li>

							
																
<li class="last">
	<a 
	href="http://localhost/prestashop/13-parent2" title="">
		Parent 2
	</a>
	</li>

							
										</ul>
		</div>
	</div> <!-- .category_footer -->
</section>
<!-- /Block categories module -->
<?php }} ?>
