<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-01-07 05:04:58 --> Severity: Warning --> mysqli::real_connect(): MySQL server has gone away C:\wamp64\www\easyappointment\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2019-01-07 06:33:37 --> Email could not been sent. Mailer Error (Line 179): Could not instantiate mail function.
ERROR - 2019-01-07 06:33:37 --> #0 C:\wamp64\www\easyappointment\application\controllers\Appointments.php(575): EA\Engine\Notifications\Email->sendAppointmentDetails(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text))
#1 [internal function]: Appointments->ajax_register_appointment()
#2 C:\wamp64\www\easyappointment\system\core\CodeIgniter.php(532): call_user_func_array(Array, Array)
#3 C:\wamp64\www\easyappointment\index.php(353): require_once('C:\\wamp64\\www\\e...')
#4 {main}
ERROR - 2019-01-07 06:39:51 --> Email could not been sent. Mailer Error (Line 179): Could not instantiate mail function.
ERROR - 2019-01-07 06:39:51 --> #0 C:\wamp64\www\easyappointment\application\controllers\Appointments.php(575): EA\Engine\Notifications\Email->sendAppointmentDetails(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text))
#1 [internal function]: Appointments->ajax_register_appointment()
#2 C:\wamp64\www\easyappointment\system\core\CodeIgniter.php(532): call_user_func_array(Array, Array)
#3 C:\wamp64\www\easyappointment\index.php(353): require_once('C:\\wamp64\\www\\e...')
#4 {main}
