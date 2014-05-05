<?php /* Smarty version Smarty-3.1.8, created on 2013-09-23 23:03:08
         compiled from "/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/about/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4811760155240ac8c0b8518-80038723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6da427a1cb405a3ff6a5fe3a74504a084deae557' => 
    array (
      0 => '/Users/pixeloid/Sites/runningtours/application/modules/default/views/scripts/about/index.tpl',
      1 => 1371636873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4811760155240ac8c0b8518-80038723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
    'isAdmin' => 0,
    'teamMembers' => 0,
    'index' => 0,
    'member' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5240ac8c273ff5_42246134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5240ac8c273ff5_42246134')) {function content_5240ac8c273ff5_42246134($_smarty_tpl) {?>
<div class="container">
	
	<h2>About us</h2>
	<div class="well">
	<p>City running is a unique and exciting way to see a city. Whether you are trying to squeeze in some marathon training on a business trip or simply would like some unique tourist fun, Running Tours Budapest offers an experience like no other. The convenience of combining a sightseeing tour with a regular workout is attractive for many ambitious runners who are on vacation or travelling on business. </p>
	<p>Bound through the streets of one of Europe’s crown jewel cities with an experienced runner and guide. </p>
	<p>Each tour features incredible architectural sights, breath-taking vistas of Buda and Pest, and some offers an optional restaurant or ruin pub experience at the end of the running tour. Each restaurant experience gives visitors a chance to try the famous Hungarian and Romani cuisine from the some of the best eating establishments in the city. </p>
	<p>Learn some of the rich myths and stories of Budapest—Jewish tales of the 8th district, Hungarian heroes of centuries past, artists and musicians who haunted the many fine coffee houses, and the wonders of hilly Buda—all while getting a terrific workout and burning off those calories! </p>
	<p>For more details on the running tours provided, <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'tours'));?>
">please go to our Tours.</a> </p>
	<p><strong>Running Tours Budapest</strong> was founded by young and enthusiastic Hungarian locals who have a passion for running and would like to share it. They wanted to develop a tourist experience that gets visitors out of the traffic jams and large tour groups and into the streets to see a more intimate and thriving Budapest. Who needs a beastly tour bus that can barely fit through narrow streets when we have our legs for transportation? And you do not even have to mind CO emission either! <strong>So put on your sneakers and let’s go for a run!</strong></p>
	</div>	
	
	<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'add'));?>
" class="">Add new member</a><?php }?>
	
	
	<div class="well">


		<?php  $_smarty_tpl->tpl_vars['member'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['teamMembers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['member']->key => $_smarty_tpl->tpl_vars['member']->value){
$_smarty_tpl->tpl_vars['member']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['member']->key;
?>
		
		<div class="leader row">
			<?php if ($_smarty_tpl->tpl_vars['index']->value%2!=0){?><div class="span3"><span class="thumbnail"><img src="<?php echo $_smarty_tpl->tpl_vars['member']->value->photos[0]->file->filename;?>
"  alt="Agi"></a></div><?php }?>
			<div class="span8">
				
				<h3<?php if ($_smarty_tpl->tpl_vars['index']->value%2==0){?> class="text-right"<?php }?>><?php echo $_smarty_tpl->tpl_vars['member']->value->name;?>
</h3>
				<hr />
				<p class="text-right"><?php echo nl2br($_smarty_tpl->tpl_vars['member']->value->description);?>
</p>
		
				<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'edit','id'=>$_smarty_tpl->tpl_vars['member']->value->id));?>
" class="">EDIT</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('action'=>'delete','id'=>$_smarty_tpl->tpl_vars['member']->value->id));?>
" class="">REMOVE</a><?php }?>
		
			</div>
			<?php if ($_smarty_tpl->tpl_vars['index']->value%2==0){?><div class="span3"><span class="thumbnail"><img src="<?php echo $_smarty_tpl->tpl_vars['member']->value->photos[0]->file->filename;?>
" alt="Agi"></a></div><?php }?>
		</div>

	<?php } ?>

	
</div>

</div><?php }} ?>