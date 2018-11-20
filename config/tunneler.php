<?php
return [

	'verify_process' => env('TUNNELER_VERIFY_PROCESS', 'nc'),

	'nc_path'    => env('TUNNELER_NC_PATH', 'nc'),
	'bash_path'  => env('TUNNELER_BASH_PATH', 'bash'),
	'ssh_path'   => env('TUNNELER_SSH_PATH', 'ssh'),
	'nohup_path' => env('TUNNELER_NOHUP_PATH', 'nohup'),

	'local_address' => env('TUNNELER_LOCAL_ADDRESS', '127.0.0.1'),
	'local_port'    => env('TUNNELER_LOCAL_PORT', 3307),
	'identity_file' => env('TUNNELER_IDENTITY_FILE', '/home/vagrant/.ssh/id_rsa'),

	'bind_address' => env('TUNNELER_BIND_ADDRESS', 'cleartrust.thebackoffice.io'),
	'bind_port'    => env('TUNNELER_BIND_PORT', 3306),

	'user'     => env('TUNNELER_USER', 'forge'),
	'hostname' => env('TUNNELER_HOSTNAME', 'cleartrust.thebackoffice.io'),
	'port'     => env('TUNNELER_PORT', 22),
	'wait'     => env('TUNNELER_CONN_WAIT', '500000'),
	'tries'    => env('TUNNELER_CONN_TRIES', 1),

	'on_boot'       => filter_var(env('TUNNELER_ON_BOOT', false), FILTER_VALIDATE_BOOLEAN),
	'ssh_verbosity' => env('SSH_VERBOSITY', ''),
	'ssh_options'   => env('TUNNELER_SSH_OPTIONS', ''),
	'nohup_log'     => env('NOHUP_LOG', '/dev/null'),

];
