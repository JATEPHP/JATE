<?php
  session_start();
  $DEBUG = false;

  //JATE SUFF
  require_once     (end($GLOBALS["JATEPath"])."jate/functions/requirer.php");
  requireComponent ("functions/folder.php");
  requireComponent ("modules/JConfig/JConfig.php");
  requireComponents("functions");
  requireModules   ("modules");

  //USER STUFF
  // requireModulesList("config/modules.json");
  // requireComponents ("bundles/models", false);
  // requireComponents ("bundles/controllers", false);
?>
