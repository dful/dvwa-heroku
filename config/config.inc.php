<?php

# Database management system to use
$DBMS = 'MySQL';

# Database variables
$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$_DVWA = array();
$_DVWA[ 'db_server' ]   = $dbparts['host'];
$_DVWA[ 'db_database' ] = ltrim($dbparts['path'],'/');
$_DVWA[ 'db_user' ]     = $dbparts['user'];
$_DVWA[ 'db_password' ] = $dbparts['pass'];
$_DVWA[ 'db_port'] = '3306';


# Default security level
#   Default value for the secuirty level with each session.
#   The default is 'impossible'. You may wish to set this to either 'low', 'medium', 'high' or impossible'.
$_DVWA[ 'default_security_level' ] = 'low';

# Default PHPIDS status
#   PHPIDS status with each session.
#   The default is 'disabled'. You can set this to be either 'enabled' or 'disabled'.
$_DVWA[ 'default_phpids_level' ] = 'disabled';

# Verbose PHPIDS messages
#   Enabling this will show why the WAF blocked the request on the blocked request.
#   The default is 'disabled'. You can set this to be either 'true' or 'false'.
$_DVWA[ 'default_phpids_verbose' ] = 'false';

define ("MYSQL", "mysql");
define ("SQLITE", "sqlite");

# SQLi DB Backend
#   Use this to switch the backend database used in the SQLi and Blind SQLi labs.
#   This does not affect the backend for any other services, just these two labs.
#   If you do not understand what this means, do not change it.
$_DVWA["SQLI_DB"] = MYSQL;
?>