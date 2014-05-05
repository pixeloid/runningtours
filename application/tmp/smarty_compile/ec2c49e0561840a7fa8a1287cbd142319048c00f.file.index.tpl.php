<?php /* Smarty version Smarty-3.1.8, created on 2012-07-17 17:45:04
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/admin/views/common/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:474103705500588804303b3-80472190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec2c49e0561840a7fa8a1287cbd142319048c00f' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/admin/views/common/index/index.tpl',
      1 => 1335602375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '474103705500588804303b3-80472190',
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
  'unifunc' => 'content_5005888053c3c4_23272541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5005888053c3c4_23272541')) {function content_5005888053c3c4_23272541($_smarty_tpl) {?><table class="table table-striped table-bordered table-condensed">
	<tr>
		<th>ID</th>
		<th>Facebook ID</th>
		<th>Név</th>
		<th>Feltöltött fotó</th>
		<th>Feltöltött videó</th>
		<th>Cím</th>
		<th>Leírás</th>
		<th>Város</th>
		<th>Intézmény</th>
		<th>Osztály</th>
		<th>Email</th>
		<th>Telefonszám</th>
		<th>Cím</th>
		<th>Létrehozás dátuma</th>
		<th>Moderáció</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
	<tr style="<?php if ($_smarty_tpl->tpl_vars['user']->value->banned){?>color:#bbb;<?php }elseif($_smarty_tpl->tpl_vars['user']->value->deleted){?>color: red;<?php }?>">
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->uid;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
</td>
		<td><?php if ($_smarty_tpl->tpl_vars['user']->value->image){?><a href="<?php echo $_smarty_tpl->tpl_vars['user']->value->image;?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->image;?>
" alt="" width="100"/></a><?php }?></td>
		<td><?php if ($_smarty_tpl->tpl_vars['user']->value->ytlink){?><a href="http://www.youtube.com/watch?v=<?php echo $_smarty_tpl->tpl_vars['user']->value->ytlink;?>
"><img src="https://img.youtube.com/vi/<?php echo $_smarty_tpl->tpl_vars['user']->value->ytlink;?>
/2.jpg" alt="" width="100"/></a><?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->title;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->description;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->city;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->school;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->class;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->phone;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->address;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['user']->value->created;?>
</td>
		<td><?php if ($_smarty_tpl->tpl_vars['user']->value->banned){?>
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