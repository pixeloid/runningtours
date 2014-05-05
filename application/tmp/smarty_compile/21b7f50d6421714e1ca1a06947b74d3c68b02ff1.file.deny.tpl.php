<?php /* Smarty version Smarty-3.1.8, created on 2012-07-17 08:50:02
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/common/error/deny.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47844399950050b1a9663e0-94109554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21b7f50d6421714e1ca1a06947b74d3c68b02ff1' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/common/error/deny.tpl',
      1 => 1342507801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47844399950050b1a9663e0-94109554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50050b1a99e5b5_93936628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50050b1a99e5b5_93936628')) {function content_50050b1a99e5b5_93936628($_smarty_tpl) {?><h1>Acces denied!</h1>


<h3>
  Request Parameters:
</h3>

<pre><?php echo var_export($_smarty_tpl->tpl_vars['this']->value->request->getParams(),true);?>
  </pre>
<?php }} ?>