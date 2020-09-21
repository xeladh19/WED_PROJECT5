<?php
/*
Pour le slug du post

  ./noyau/functions.php
  Fonctions bien utiles pour notre framework
 */
namespace Noyau\Functions;

/**
 * Fonction de slugification à la volée
 * @param  string $str [description]
 * @return string      [description]
 */
 function slugify(string $str) :string {
    return trim(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), strtolower($str)), '-');
  }
