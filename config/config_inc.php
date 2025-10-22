<?php
$g_hostname                 = '127.0.0.1';
$g_db_type                  = 'mysqli';
$g_database_name            = 'mantis';
$g_db_username              = 'root';
$g_db_password              = 'p*28EIxrLomH%6ic6#Bn2SoNh';
$g_status_enum_string       = '10:new,20:feedback,30:acknowledged,40:confirmed,50:assigned,60:pending,80:resolved,90:closed';
$g_status_colors['pending'] = '#FFA930';
#$g_default_bug_description  = 'Tipologia utente (Ambassador/Non Ambassador): 
#Ragione Sociale Cliente/Ambassador: 
#Codice Commessa: 
#URL Pagina: 
#Descrizione Anomalia: ';

$g_default_language         = 'italian';

$g_default_timezone         = 'Europe/Rome';

$g_crypto_master_salt       = '7hTkuF6jZsN+AWsjhk/DVg5deGjG0aCT1ioM6VLDaJE=';
$g_reauthentication_expiry  = 60*60*24;
$g_bug_pending_status       = PENDING;
$g_public_config_names[]    = 'bug_pending_status';
$g_antispam_max_event_count = 100;

$g_phpMailer_method	        = PHPMAILER_METHOD_SMTP;          # or PHPMAILER_METHOD_SMTP, PHPMAILER_METHOD_SENDMAIL
$g_smtp_host		        = 'smtp.gmail.com';               # used with PHPMAILER_METHOD_SMTP
$g_smtp_username	        = 'sergiopingenti81@gmail.com';   # used with PHPMAILER_METHOD_SMTP
$g_smtp_password	        = 'kvwsllboimflkssn';             # used with PHPMAILER_METHOD_SMTP
$g_smtp_connection_mode     = '587';
$g_webmaster_email          = 'pingenti@vegaengineering.com';
$g_from_email               = 'mantis@vegaengineering.com';   #the "From: " field in emails
$g_return_path_email        = 'pingenti@vegaengineering.com'; #the return address for bounced mail*/
