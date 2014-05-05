<?php /* Smarty version Smarty-3.1.8, created on 2012-07-26 17:50:05
         compiled from "/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/common/error/deny.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8266550555011672d9c54c8-06422471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dea8083377e4d875821e56d3fe2df579e274a40' => 
    array (
      0 => '/Users/Pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/common/error/deny.tpl',
      1 => 1342507800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8266550555011672d9c54c8-06422471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5011672dbc1896_60006391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5011672dbc1896_60006391')) {function content_5011672dbc1896_60006391($_smarty_tpl) {?><h1>Acces denied!</h1>


<h3>
  Request Parameters:
</h3>

<pre><?php echo var_export($_smarty_tpl->tpl_vars['this']->value->request->getParams(),true);?>
  </pre>
<?php }} ?>