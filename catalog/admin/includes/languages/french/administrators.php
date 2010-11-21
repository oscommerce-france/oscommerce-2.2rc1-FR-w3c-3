<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Administrateurs');

define('TABLE_HEADING_ADMINISTRATORS', 'Administrateurs');
define('TABLE_HEADING_HTPASSWD', 'Prot�g� par htpasswd');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_INFO_INSERT_INTRO', 'Entrez les informations du nouvel administrateur');
define('TEXT_INFO_EDIT_INTRO', 'Faites les changements n�cessaires');
define('TEXT_INFO_DELETE_INTRO', 'Etes vous certain de vouloir supprimer cet Administrateur ?');
define('TEXT_INFO_HEADING_NEW_ADMINISTRATOR', 'Nouvel Administrateur');
define('TEXT_INFO_USERNAME', 'Nom d\'utilisateur :');
define('TEXT_INFO_NEW_PASSWORD', 'Nouveau Mot de Passe :');
define('TEXT_INFO_PASSWORD', 'Mot de Passe :');

define('ERROR_ADMINISTRATOR_EXISTS', 'Erreur : Administrateur d�j� existant.');
define('HTPASSWD_INFO', '<strong>S�curisation via htaccess/htpasswd</strong><p>Cette installation de l\'outil d\'administration de boutique osCommerce n\'utilise pas de s�curisation via htaccess/htpasswd.</p><p>Activer la s�curisation via htaccess/htpasswd stockera automatiquement le nom d\'utilisateur et le mot de passe de l\'administrateur dans un fichier htpasswd lors de la mise � jour du mot de passe de l\'administrateur.</p><p><strong>Veuillez noter</strong>, si cette protection est activ�e et que vous ne pouvez plus acc�der � l\'outil d\'administration, veuillez apporter les modifications suivantes et consultez votre h�bergeur pour permettre l\'utilisation de la s�curisation via htaccess/htpasswd:</p><p><u><strong>1. Modifier ce fichier:</strong></u><br /><br />' . DIR_FS_ADMIN . '.htaccess</p><p>Supprimer les lignes suivantes si elles existent:</p><p><i>%s</i></p><p><u><strong>2. Supprimer ce fichier:</strong></u><br /><br />' . DIR_FS_ADMIN . '.htpasswd_oscommerce</p>');
define('HTPASSWD_SECURED', '<strong>S�curisation via htaccess/htpasswd</strong><p>Cette installation de l\'outil d\'administration de boutique osCommerce utilise la s�curisation via htaccess/htpasswd.</p>');
define('HTPASSWD_PERMISSIONS', '<strong>S�curisation via htaccess/htpasswd</strong><p>Cette installation de l\'outil d\'administration de boutique osCommerce n\'utilise pas de s�curisation via htaccess/htpasswd.</p><p>Les fichiers doivent �tre accessibles en �criture pour le serveur web pour activer la s�curisation via htaccess/htpasswd:</p><ul><li>' . DIR_FS_ADMIN . '.htaccess</li><li>' . DIR_FS_ADMIN . '.htpasswd_oscommerce</li></ul><p>Rafraichissez la page pour verifier si les droits sur les fichiers ont �t� correctement param�tr�s.</p>');

?>