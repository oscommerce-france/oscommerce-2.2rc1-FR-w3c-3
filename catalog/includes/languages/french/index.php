<?php
/*
  $Id: index.php,v 1.1 2003/06/11 17:38:00 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('TEXT_MAIN', 'C\'est une installation par défaut du projet osCommerce, les produits affichés ont un but démonstratif, <b>n\'importe quel produit acheté sera ni livré ni facturé au client</b>. N\'importe quelle information vue sur ces produits doit être traitée comme fictive.<br><br>
<table border="0" summary="" width="100%" cellspacing="5" cellpadding="2">
<tr>
<td class="main" valign="top">' . tep_image(DIR_WS_IMAGES . 'default/1.gif') . '</td>
<td class="main" valign="top"><b>Messages d\'erreur </b><br><br>S\'il y a une erreur ou des messages d\'avertissement affichés ci-dessus, corrigez-les d\'abord avant de poursuivre. <br><br>Les messages d\'erreur sont affichés en haut de la page avec un <span class="messageStackError">fond</span> de cette couleur.<br><br>Plusieurs contr&ocirc;les sont exécutés pour assurer une installation saine de votre magasin en ligne - Ces contr&ocirc;les peuvent être mis hors-service en éditant les paramètres appropriés dans le fichier includes/application_top.php. </td>
</tr>
<tr>
<td class="main" valign="top">' . tep_image(DIR_WS_IMAGES . 'default/2.gif') . '</td>
<td class="main" valign="top"><b>Rédaction du contenu de la page </b><br><br>Le texte affiché peut être modifié dans le fichier suivant, sur chaque base de langue :<br><br><span class="messageStackSuccess">[chemin du répertoire catalog]/includes/languages/' . $language . '/' . FILENAME_DEFAULT . '</span><br><br>Ce fichier peut être édité manuellement, ou via l\'outil d\'administration avec les modules  <span class="messageStackSuccess">Languages-&gt;' . ucfirst($language) . '-&gt;Define</span> ou <span class="messageStackSuccess">Tools-&gt;File Manager.<br><br>Le texte est affiché de la façon suivante:</span><br><br>define(\'TEXT_MAIN\', \'<span class="messageStackSuccess">C\'est une installation par défaut du projet osCommerce...</span>\');<br><br>Le texte mis en évidence en vert peut être modifié  - Il est important dans define() de définir le mot-clé TEXT_MAIN . Pour supprimer complètement le texte de TEXT_MAIN, L\'exemple suivant a employé seulement deux caractères de citation simples (Quotes) existant :<br><br>define(\'TEXT_MAIN\', \'\');<br><br>Plus d\'information concernant la fonction  PHP define() peut être lue <a href="http://www.php.net/manual/fr/function.define.php" target="_blank"><u>ici</u></a>.</td>
</tr>
<tr>
<td class="main" valign="top">' . tep_image(DIR_WS_IMAGES . 'default/3.gif') . '</td>
<td class="main" valign="top"><b>Sécurisation de l\'outil d\'administration</b><br><br>Il est important de sécuriser l\'outil d\'administration comme il n\'y a actuellement aucune protection sérieuse mise en &oelig;uvre .</td></tr><tr><td class="main" valign="top">' . tep_image(DIR_WS_IMAGES . 'default/4.gif') . '</td>
<td class="main" valign="top"><b>Documentation en ligne</b><br><br>La documentation en ligne peut être lue sur le site <a href="http://wiki.oscommerce.com" target="_blank"><u>osCommerce Wiki Documentation Effort</u></a>.
<br><br>Le forum support de la communauté internationale est disponible sur <a href="http://forums.oscommerce.com" target="_blank"><u>osCommerce Community Support Forums</u></a>.
<br><br>Le forum support de la communauté francophone est disponible sur <a href="http://www.oscommerce-fr.info/forum/index.php?showtopic=36121" target="_blank"><u>Forum osCommerce-fr</u></a>.
<br>La Foire Aux Questions de la communauté francophone est disponible sur <a href="http://www.oscommerce-fr.info/faq/" target="_blank"><u>FAQ osCommerce-fr</u></a>.
<br>Le guide d\'installation francophone est disponible sur <a href="http://www.oscommerce-fr.info/portail/index.php?option=com_content&amp;task=section&amp;id=3&amp;Itemid=157" target="_blank"><u>Guide d\'installation</u></a>.
</td>
</tr>
</table>
<br>Si vous voulez télécharger la solution qu\'utilise ce magasin, ou si vous voulez contribuer au projet osCommerce, visitez s\'il vous plaît le site francophone <a href="http://www.oscommerce-fr.info" target="_blank"><u>osCommerce-fr</u></a> ou le site communautaire générique <a href="http://www.oscommerce.com" target="_blank"><u>osCommerce</u></a>. Ce magasin utilise osCommerce version <font color=red><b>' . PROJECT_VERSION . '</b></font>.');
define('TABLE_HEADING_NEW_PRODUCTS', 'Nouveaux produits pour %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Prochains produits');
define('TABLE_HEADING_DATE_EXPECTED', 'Date prévu');

if ( ($category_depth == 'products') || (isset($HTTP_GET_VARS['manufacturers_id'])) ) {
  define('HEADING_TITLE', 'Voyons ce que nous avons ici');
  define('TABLE_HEADING_IMAGE', '');
  define('TABLE_HEADING_MODEL', 'Modèle');
  define('TABLE_HEADING_PRODUCTS', 'Nom du produit ');
  define('TABLE_HEADING_MANUFACTURER', 'Fabricant');
  define('TABLE_HEADING_QUANTITY', 'Quantité');
  define('TABLE_HEADING_PRICE', 'Prix');
  define('TABLE_HEADING_WEIGHT', 'Poids');
  define('TABLE_HEADING_BUY_NOW', 'Acheter maintenant');
  define('TEXT_NO_PRODUCTS', 'Il n\'y a aucun produit listé dans cette catégorie.');
  define('TEXT_NO_PRODUCTS2', 'Il n\'y a aucun produit disponible de ce fabricant.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Nombre de produits :');
  define('TEXT_SHOW', '<b>Afficher :</b>');
  define('TEXT_BUY', 'Acheter 1 \'');
  define('TEXT_NOW', '\' maintenant');
  define('TEXT_ALL_CATEGORIES', 'Toutes catégories');
  define('TEXT_ALL_MANUFACTURERS', 'Tous fabricants');
} elseif ($category_depth == 'top') {
  define('HEADING_TITLE', 'Nouveautés ?');
} elseif ($category_depth == 'nested') {
  define('HEADING_TITLE', 'Catégories');
}
?>
