<?php /* Smarty version Smarty-3.1.8, created on 2012-07-18 10:05:57
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/admin/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214422120550058ca4497ee8-93526427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c541d36e45cd4e9986582c4f0b9b517e84ad258d' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/admin/views/index/index.tpl',
      1 => 1342598756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214422120550058ca4497ee8-93526427',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50058ca4550264_99690406',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50058ca4550264_99690406')) {function content_50058ca4550264_99690406($_smarty_tpl) {?><table class="table table-striped table-bordered table-condensed">
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