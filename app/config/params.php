<?php
/*
  ./app/config/params.php
 */

  // 1. Initialiser les zones dynamiques du template
    $content = '';
    $title   = '';

  // 2. Définir les paramètres de connexion à lma db
    define('HOSTNAME', 'localhost:3306');
    define('DBNAME', 'wed_project');
    define('USERNAME', 'root');
    define('USERPWD' , 'root');
