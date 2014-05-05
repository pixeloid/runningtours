<?php /* Smarty version Smarty-3.1.8, created on 2012-10-27 23:09:17
         compiled from "/Users/Pixeloid/Sites/fvneralapparel/application/modules/admin/views/index/pending-photos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:484676703508ba4088f04c0-49215612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0d37ce45f1e8b63e93289348c05e9de4cb3142c' => 
    array (
      0 => '/Users/Pixeloid/Sites/fvneralapparel/application/modules/admin/views/index/pending-photos.tpl',
      1 => 1351372156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '484676703508ba4088f04c0-49215612',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_508ba408999658_92769842',
  'variables' => 
  array (
    'pendingPhotos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508ba408999658_92769842')) {function content_508ba408999658_92769842($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('./photos-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('photos'=>$_smarty_tpl->tpl_vars['pendingPhotos']->value), 0);?>
<?php }} ?>