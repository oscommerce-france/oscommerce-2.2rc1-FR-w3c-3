<?php
/*
  $Id: define_language.php,v 1.3 2002/01/05 12:19:50 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'D�finissez une langue');

define('TABLE_HEADING_FILES', 'Fichiers');
define('TABLE_HEADING_WRITABLE', 'Accessible en �criture');
define('TABLE_HEADING_LAST_MODIFIED', 'Derni�re modification');

define('TEXT_EDIT_NOTE', '<strong>Mofifier les d�finitions</strong><br /><br />Chaque d�finition linguistique est d�finie en utilisant la fonction PHP <a href="http://www.php.net/define" target="_blank">define()</a> de la mani�re suivante:<br /><br /><nobr>define(\'TEXT_MAIN\', \'<span style="background-color: #FFFF99;">Ce texte peut �tre modifi�. C\\\'est vraiment tr�s simple � faire!</span>\');</nobr><br /><br />Le texte mis en �vidence peut �tre �dit�. Comme les d�finitions linguistique utilisent des guillemets pour contenir le texte, chaque guillemet dans le texte de d�finition doit �tre �chapp� avec un antislash (exemple, C\\\'est).');

define('TEXT_FILE_DOES_NOT_EXIST', 'Le fichier n\'existe pas.');

define('ERROR_FILE_NOT_WRITEABLE', 'Erreur : Impossible d\'�crire dans le fichier. Merci de v�rifier les droits d\'acc�s sur : %s');
?>