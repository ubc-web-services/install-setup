<?php

$DIR = getcwd();
$CD_CMD = 'cd '.$DIR.';';

#Download Some Standard Modules
$cmd = ' drush dl features field_group module_filter google_analytics xmlsitemap entityreference date link admin_menu ds fences picture nodequeue breakpoints adminimal_theme views ctools jquery_update ckeditor ckeditor_link imce menu_block pathauto token ds fences link -y;';
exec($CD_CMD.$cmd);

#Enabled Those Modules
$cmd = ' drush en admin_menu module_filter ctools link ds ds_extras ds_forms ds_ui features fences field_group imce nodequeue breakpoints pathauto token picture ckeditor jquery_update views views_ui -y;';
exec($CD_CMD.$cmd);

#Disable Some Infrequently Used Modules
$cmd = ' drush dis overlay toolbar dashboard rdf comment color -y;';
exec($CD_CMD.$cmd);

#Enabled Themes
$cmd = ' drush en adminimal megatron -y;';
exec($CD_CMD.$cmd);

#Set Admin Theme to Adminimal
$cmd = ' drush vset admin_theme adminimal -y;';
exec($CD_CMD.$cmd);

#Set Base Theme to Megatron
$cmd = ' drush vset theme_default megatron -y;';
exec($CD_CMD.$cmd);

#Disable Seven Theme
$cmd = ' drush pm-disable seven -y';
exec($CD_CMD.$cmd);

#Cleanup
$cmd = ' drush cron';
exec($CD_CMD.$cmd);
$cmd = ' drush cc all';
exec($CD_CMD.$cmd);

?>