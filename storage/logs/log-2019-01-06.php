<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-01-06 20:57:01 --> Query error: Table 'easyapp.ea_settings' doesn't exist - Invalid query: SELECT *
FROM `ea_settings`
WHERE `name` = 'company_name'
ERROR - 2019-01-06 20:59:42 --> Email could not been sent. Mailer Error (Line 179): Could not instantiate mail function.
ERROR - 2019-01-06 20:59:42 --> #0 C:\wamp64\www\easyappointment\application\controllers\Appointments.php(575): EA\Engine\Notifications\Email->sendAppointmentDetails(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text))
#1 [internal function]: Appointments->ajax_register_appointment()
#2 C:\wamp64\www\easyappointment\system\core\CodeIgniter.php(532): call_user_func_array(Array, Array)
#3 C:\wamp64\www\easyappointment\index.php(353): require_once('C:\\wamp64\\www\\e...')
#4 {main}
