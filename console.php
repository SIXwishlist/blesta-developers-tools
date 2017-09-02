#!/usr/bin/env php

<?php

require_once('console_helpers/cp.php');

$ds = DIRECTORY_SEPARATOR;

$options = getopt('t:n:');

function __helper () {
  die("Usage: ".$argv[0]." -t <type> -n <name>
  
  -t <type>: Type of component to create (plugins)
  -n <name>: Name to be given to this (must not already exist in appropriate folder)\n");
}

if (!$options) {
  __helper();
}

$type = $options['t'];
$templateType = "templates".$ds.$type;
$name = $options['n'];

echo ">> Checking if .$ds$templateType is a valid project type and a name was provided\n";

if (!file_exists('.'.$templateType) || !$name) {
  __helper();
}

echo ">> Checking that ..$ds$type$ds$name does not exist already\n";

if (file_exists('..'.$ds.$type.$ds.$name)) {
  __helper();
}

$projectDestination = "..$ds$type$ds$name";
echo ">> Project destination: ".$projectDestination."\n";

if (!cp($templateType, $projectDestination, $name)) {
  die(">> Unable to construct new project directory.  Please verify write access to ".$projectDestination."\n");
}

echo ("\n\n$type $projectName has been created successfully!\n");
?>
