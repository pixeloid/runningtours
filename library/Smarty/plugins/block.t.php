<?php
function smarty_block_t($params, $content, $smarty, &$r) {

  if( ! is_null($content) ) {

    $translate = Zend_Registry::get( 'Zend_Translate' );

    return stripslashes($translate->_($content));

  }

}
?>
