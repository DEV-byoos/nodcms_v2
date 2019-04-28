<?php
/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 9/15/2015
 * Time: 8:35 PM
 * Project: NodCMS
 * Website: http://www.nodcms.com
 * modifications  2019/04/23  update PHP7.3  codeignter 3.1.10  BCRYPT and sessions helpers, test on DEBAIN 9.8
 * BYOOS solutions ltd.  France - Cameroun  gbobard@gmail.com  http://byoos.net   http://byoos.eu
 */
$config['NodCMS_general_templateFolderName'] = 'nodcms_general';
$config['NodCMS_general_admin_templateFolderName'] = 'nodcms_general_admin';
$config['max_upload_size'] = 20000; // KG
$config['backend_models'] = array('NodCMS_general_admin_model', 'NodCMS_general_model');
$config['backend_helpers'] = array('admin_page_type','nodcms_form');
$config['frontend_models'] = array('NodCMS_general_model');
$config['frontend_helpers'] = array();


/*
|--------------------------------------------------------------------------
| codeigniter 3.1.10  nodCMS  Version  1904b2a
|--------------------------------------------------------------------------
|
*/
$config['version'] = array (
  // Manual numbering
  "major" => '19',
  "minor" => '04',
  "patch" => '0',
  
  "build" => '2c', // build "b" date 2019/04/28  12:00  gbobard@gmail.com
);

/*
|--------------------------------------------------------------------------
| show or hidden session value into  footer view
|--------------------------------------------------------------------------
|
*/
$config['show_session_footer'] = true;

$config['enable_health_activity'] = true;
