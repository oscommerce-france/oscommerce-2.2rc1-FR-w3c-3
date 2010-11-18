<?php
/*
  $Id: login.php,v 1.14 2003/06/09 22:46:46 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Ouverture de session');
define('HEADING_TITLE', 'Bienvenue, veuillez ouvrir une session');

define('HEADING_NEW_CUSTOMER', 'Nouveau client');
define('TEXT_NEW_CUSTOMER', 'Je suis un nouveau client.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'En cr�ant votre compte sur ' . STORE_NAME . ' vous pourrez faire vos achats plus rapidement, garder votre panier d\'une visite � l\'autre et suivre vos commandes.');

define('HEADING_RETURNING_CUSTOMER', 'Client enregistr�');
define('TEXT_RETURNING_CUSTOMER', 'J\'ai d�j� command�.');

define('TEXT_PASSWORD_FORGOTTEN', 'Vous avez oubli� votre mot de passe ? Cliquez ici.');

define('TEXT_LOGIN_ERROR', 'Erreur : aucun r�sultat � cette adresse �lectronique et/ou mot de passe.');
define('TEXT_VISITORS_CART', '<font color="#ff0000"><b>REMARQUE :</b></font> Le contenu de votre &quot;panier visiteurs&quot; sera ajout� � celui de votre &quot;panier membres&quot; d�s que vous aurez ouvert une session. <a href="javascript:session_win();">[Plus d\'info]</a>');
?>