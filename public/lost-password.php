<?php
project_css_js($fw);
$fw->include_css('label-placeholder');
$fw->include_css('lost-password');
$fw->include_js('lost-password');
$fw->set_canonical('/lost-password');
$fw->smarty->display('lost-password.tpl');
$fw->go();
?>