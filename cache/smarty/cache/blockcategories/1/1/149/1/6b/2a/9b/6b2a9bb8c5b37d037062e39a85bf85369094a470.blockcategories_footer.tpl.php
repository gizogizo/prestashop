<?php /*%%SmartyHeaderCode:21875552a3137a84b49-62039466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b2a9bb8c5b37d037062e39a85bf85369094a470' => 
    array (
      0 => 'F:\\xampp\\htdocs\\prestashop\\themes\\default-bootstrap\\modules\\blockcategories\\blockcategories_footer.tpl',
      1 => 1425614960,
      2 => 'file',
    ),
    'b626dba1f8e02b9b4b62991ca0539e6883109fd0' => 
    array (
      0 => 'F:\\xampp\\htdocs\\prestashop\\themes\\default-bootstrap\\modules\\blockcategories\\category-tree-branch.tpl',
      1 => 1425614960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21875552a3137a84b49-62039466',
  'variables' => 
  array (
    'isDhtml' => 0,
    'blockCategTree' => 0,
    'child' => 0,
    'numberColumn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552a3137b153e3_14815455',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552a3137b153e3_14815455')) {function content_552a3137b153e3_14815455($_smarty_tpl) {?>
<!-- Block categories module -->
<section class="blockcategories_footer footer-block col-xs-12 col-sm-2">
	<h4>Categories</h4>
	<div class="category_footer toggle-footer">
		<div class="list">
			<ul class="tree dhtml">
												
<li >
	<a 
	href="http://202.21.111.163:7070/prestashop/12-parent" title="Test Category">
		Parent
	</a>
			<ul>
												
<li class="last">
	<a 
	href="http://202.21.111.163:7070/prestashop/14-child" title="">
		Child
	</a>
	</li>

									</ul>
	</li>

							
																
<li class="last">
	<a 
	href="http://202.21.111.163:7070/prestashop/13-parent2" title="">
		Parent 2
	</a>
	</li>

							
										</ul>
		</div>
	</div> <!-- .category_footer -->
</section>
<!-- /Block categories module -->
<?php }} ?>
