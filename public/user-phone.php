<?php
project_css_js($fw);
$fw->include_css('user-phone');
$fw->include_js('user-phone');
$fw->add_js('/vendor/intl-tel-input-17.0.0/build/js/intlTelInput.min.js');
$fw->add_css('../vendor/intl-tel-input-17.0.0/build/css/intlTelInput.min.css');
$fw->set_canonical('/user-phone');
$fw->smarty->display('user-phone.tpl');
$fw->go();
?>