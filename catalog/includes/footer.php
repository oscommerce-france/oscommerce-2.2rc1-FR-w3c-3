<?php
/*
  $Id: footer.php,v 1.26 2003/02/10 22:30:54 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

  require(DIR_WS_INCLUDES . 'counter.php');
?>
<table border="0" summary="" width="100%" cellspacing="0" cellpadding="1">
  <tr class="footer">
    <td class="footer">&nbsp;&nbsp;<?php echo strftime(DATE_FORMAT_LONG); ?>&nbsp;&nbsp;</td>
    <td align="right" class="footer">&nbsp;&nbsp;<?php echo $counter_now . ' ' . FOOTER_TEXT_REQUESTS_SINCE . ' ' . $counter_startdate_formatted; ?>&nbsp;&nbsp;</td>
  </tr>
</table>
<br>
<?php // Boutons de validation W3C BOF
 if ($request_type == 'NONSSL') {
?>
<table border="0" summary="" width="100%" cellspacing="0" cellpadding="0">
<tr>
<td align="center" class="smallText"><?php echo '<a href="http://jigsaw.w3.org/css-validator/validator?uri=' . curPageURL() . '" target="_blank">
<img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-css2-blue" alt="CSS Valide !"></a>&nbsp;&nbsp;
<a href="http://validator.w3.org/check?uri=' . curPageURL() . '" target="_blank">
<img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-html401-blue" alt="Valid HTML 4.01 Transitional"></a>'; ?></td>
</tr>
</table>
<?php
  }
  // Boutons de validation W3C EOF
?><table border="0" summary="" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" class="smallText"><?php echo FOOTER_TEXT_BODY; ?></td>
  </tr>
</table>
<?php
  if ($banner = tep_banner_exists('dynamic', '468x50')) {
?>
<br>
<table border="0" summary="" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><?php echo tep_display_banner('static', $banner); ?></td>
  </tr>
</table>
<?php
  }
?>
