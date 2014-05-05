<?php /* Smarty version Smarty-3.1.8, created on 2012-09-11 18:58:00
         compiled from "/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:930900405504f6d984ecaa4-75663554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9838b4ceae135d182f012e4296a799329201e3d1' => 
    array (
      0 => '/Users/Pixeloid/Sites/emlekmentes/application/modules/admin/views/index/index.tpl',
      1 => 1342598756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '930900405504f6d984ecaa4-75663554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504f6d985fc092_41427557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504f6d985fc092_41427557')) {function content_504f6d985fc092_41427557($_smarty_tpl) {?><table class="table table-striped table-bordered table-condensed">
	<tr>
		<th>ID</th>
		<th>Név</th>
		<th>Esemény</th>
		<th>Artist</th>
		<th>Utolsó belépés</th>
		<th>Létrehozás dátuma</th>
		<th>Site</th>
		<th>Státusz</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
	<tr style="<?php if ($_smarty_tpl->tpl_vars['user']->value->banned){?>color:#bbb;<?php }elseif($_smarty_tpl->tpl_vars['user']->value->deleted){?>color: red;<?php }?>">
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->meta->firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->meta->lastname;?>
</td>

		<td><?php echo count($_smarty_tpl->tpl_vars['user']->value->event);?>
 db<br>(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value->event->name)===null||$tmp==='' ? '' : $tmp);?>
)</td>
		<td><?php echo count($_smarty_tpl->tpl_vars['user']->value->artist);?>
 db<br>(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value->artist->name)===null||$tmp==='' ? '' : $tmp);?>
)</td>
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->lastlogin;?>
</td>

		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->created->format('Y-m-s-H:i:s');?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->site;?>
</td>
		<td><?php if ($_smarty_tpl->tpl_vars['user']->value->status){?>
			<a href="admin/index/index/enable/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="btn btn-success">Engedélyezés</a>
			<?php }else{ ?>
			<a href="admin/index/index/disable/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="btn btn-danger">Tiltás</a>
			<?php }?>
		</td>
	</tr>
	<?php } ?>
</table>

<?php }} ?>