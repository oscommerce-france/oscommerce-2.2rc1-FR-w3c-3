<?php
/*
  $Id: shopping_cart.php,v 1.13 2002/04/05 20:24:02 project3000 Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Contenu du panier');
define('HEADING_TITLE', 'Qu\'y a t\'il dans mon panier ?');
define('TABLE_HEADING_REMOVE', 'Supprimer');
define('TABLE_HEADING_QUANTITY', 'Qt�.');
define('TABLE_HEADING_MODEL', 'Mod�le');
define('TABLE_HEADING_PRODUCTS', 'Produit(s)');
define('TABLE_HEADING_TOTAL', 'Total');
define('TEXT_CART_EMPTY', 'Votre panier est vide ');
define('SUB_TITLE_SUB_TOTAL', 'Sous-Total :');
define('SUB_TITLE_TOTAL', 'Total :');

define('OUT_OF_STOCK_CANT_CHECKOUT', 'Les produits marqu�s ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' ne sont pas en stock dans la quantit� d�sir�e.<br>Merci de corriger la quantit� des articles marqu�s (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '), Merci');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Les produits marqu�s avec ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' ne sont pas en stock dans la quantit� d�sir�e.<br>Vous pouvez n�anmoins les acheter ils vous seront d�livr�s d�s disponibilit�.');
?>