<?php /* Smarty version Smarty-3.1.8, created on 2012-07-19 12:51:44
         compiled from "/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157647726050044b1e246360-37709342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0d6fef9c4da8e1be0e0c3803afd633392fec7a8' => 
    array (
      0 => '/Users/pixeloid/Sites/homepage-eu/homepage-eu/application/modules/default/views/artist-eu/index/calendar.tpl',
      1 => 1342695103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157647726050044b1e246360-37709342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50044b1e301e89_02431136',
  'variables' => 
  array (
    'prevDate' => 0,
    'monthHeader' => 0,
    'nextDate' => 0,
    'calWeekdays' => 0,
    'arr' => 0,
    'calMonthDays' => 0,
    'weekArr' => 0,
    'dayArr' => 0,
    'events' => 0,
    'event' => 0,
    'numEvents' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50044b1e301e89_02431136')) {function content_50044b1e301e89_02431136($_smarty_tpl) {?><?php if (!is_callable('smarty_function_zend_url')) include '/Users/pixeloid/Sites/homepage-eu/homepage-eu/library/Smarty/plugins/function.zend_url.php';
?>

<div class="calendarWrapper">
	
	
	<div class="calendarHeader">
		<a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'calendar','year'=>$_smarty_tpl->tpl_vars['prevDate']->value->get('YYYY'),'month'=>$_smarty_tpl->tpl_vars['prevDate']->value->get('MM')),$_smarty_tpl);?>
" class="prev">Előző</a>
		<?php echo $_smarty_tpl->tpl_vars['monthHeader']->value;?>

		<a href="<?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'calendar','year'=>$_smarty_tpl->tpl_vars['nextDate']->value->get('YYYY'),'month'=>$_smarty_tpl->tpl_vars['nextDate']->value->get('MM')),$_smarty_tpl);?>
" class="next">Következő</a>
	</div>
    <div class="calendarBody">
    	<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">

        	<tr class="weekdays">

            <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['calWeekdays']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>

            	<td class="<?php echo $_smarty_tpl->tpl_vars['arr']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['arr']->value['dayShortStr'];?>
</td>

			<?php } ?>

            </tr>
            


			<?php  $_smarty_tpl->tpl_vars['weekArr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['weekArr']->_loop = false;
 $_smarty_tpl->tpl_vars['weekNum'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['calMonthDays']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['weekArr']->key => $_smarty_tpl->tpl_vars['weekArr']->value){
$_smarty_tpl->tpl_vars['weekArr']->_loop = true;
 $_smarty_tpl->tpl_vars['weekNum']->value = $_smarty_tpl->tpl_vars['weekArr']->key;
?>
            
			<tr class="days">
            
				<?php  $_smarty_tpl->tpl_vars['dayArr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dayArr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['weekArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dayArr']->key => $_smarty_tpl->tpl_vars['dayArr']->value){
$_smarty_tpl->tpl_vars['dayArr']->_loop = true;
?>
				
				
            		<td class="<?php echo $_smarty_tpl->tpl_vars['dayArr']->value['class'];?>
">
                		<?php if (isset($_smarty_tpl->tpl_vars['dayArr']->value['num'])){?>
							
							<?php $_smarty_tpl->tpl_vars['numEvents'] = new Smarty_variable(0, null, 0);?>
							
							<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
								<?php if (date('Y-m-d',strtotime($_smarty_tpl->tpl_vars['event']->value->date))==date('Y-m-d',$_smarty_tpl->tpl_vars['dayArr']->value['date'])){?>
									<?php $_smarty_tpl->tpl_vars["numEvents"] = new Smarty_variable($_smarty_tpl->tpl_vars['numEvents']->value+1, null, 0);?>
								<?php }?>
							<?php } ?>
                			<span class="dayNum"><a href="<?php if ($_smarty_tpl->tpl_vars['numEvents']->value){?><?php echo smarty_function_zend_url(array('controller'=>'index','action'=>'show-events','year'=>date('Y',$_smarty_tpl->tpl_vars['dayArr']->value['date']),'month'=>date('m',$_smarty_tpl->tpl_vars['dayArr']->value['date']),'day'=>date('d',$_smarty_tpl->tpl_vars['dayArr']->value['date'])),$_smarty_tpl);?>
<?php }else{ ?>javascript:void(0);<?php }?>"><?php echo date('j',$_smarty_tpl->tpl_vars['dayArr']->value['date']);?>
<?php if ($_smarty_tpl->tpl_vars['numEvents']->value){?>
								<i><?php if ($_smarty_tpl->tpl_vars['numEvents']->value<10){?><strong class="green">&bull;</strong><?php }elseif($_smarty_tpl->tpl_vars['numEvents']->value>=10){?><strong class="green">&bull;</strong><strong class="blue">&bull;</strong><?php }?></i>
							<?php }?></a>
							
							</span>
						<?php }?>
                	</td>
                <?php } ?>
			
			</tr>
            
			<?php } ?>
		</table>
	</div>
</div>

<?php }} ?>