<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/
?>

<div class="mainBlock">
  <div class="stepsBox">
    <ol>
      <li>Serveur SQL</li>
      <li>Serveur Web</li>
      <li style="font-weight: bold;">Param�tres de la boutique</li>
      <li>Termin� !</li>
    </ol>
  </div>

  <h1>Nouvelle Installation</h1>

  <p>Le syst�me installera et configurera correctement votre boutique sur le serveur.</p>
  <p>Suivez les instructions � l'�cran qui vous sont donn�es pour le serveur SQL, le serveur Web et les param�tres de la boutique. Si vous avez besoin d'aide, veuillez consulter la documentation, la FAQ ou les espaces sp�cifiques sur le forum.</p>
</div>

<div class="contentBlock">
  <div class="infoPane">
    <h3>Etape 3: Param�tres de la boutique</h3>

    <div class="infoPaneContents">
      <p>Vous pouvez definir ici le nom de votre Boutique et l'Email de contact du propri�taire.</p>
      <p>Egalement, le Nom d'utilisateur et le Mot de passe utilis�s pour acc�der � l'Administration prot�g�e de votre boutique.</p>
    </div>
  </div>

  <div class="contentPane">
    <h2>Online Store Settings</h2>

    <form name="install" id="installForm" action="install.php?step=4" method="post">

    <table border="0" summary="" width="99%" cellspacing="0" cellpadding="5" class="inputForm">
      <tr>
        <td class="inputField"><?php echo 'Nom de la Boutique<br />' . osc_draw_input_field('CFG_STORE_NAME', null, 'class="text"'); ?></td>
        <td class="inputDescription">Le nom de la Boutique tel qu'il sera pr�sent� au public.</td>
      </tr>
      <tr>
        <td class="inputField"><?php echo 'Nom du Propri�taire<br />' . osc_draw_input_field('CFG_STORE_OWNER_NAME', null, 'class="text"'); ?></td>
        <td class="inputDescription">Le Nom du Propri�taire tel qu'il sera pr�sent� au public.</td>
      </tr>
      <tr>
        <td class="inputField"><?php echo 'Adresse mail du propri�taire de la boutique<br />' . osc_draw_input_field('CFG_STORE_OWNER_EMAIL_ADDRESS', null, 'class="text"'); ?></td>
        <td class="inputDescription">Email du Propri�taire tel qu'il sera pr�sent� au public.</td>
      </tr>
      <tr>
        <td class="inputField"><?php echo 'Nom d\'utilisateur de l\'Administrateur<br />' . osc_draw_input_field('CFG_ADMINISTRATOR_USERNAME', null, 'class="text"'); ?></td>
        <td class="inputDescription">Nom d'utilisateur de l'Administrateur de la boutique.</td>
      </tr>
      <tr>
        <td class="inputField"><?php echo 'Mot de Passe Administrateur<br />' . osc_draw_input_field('CFG_ADMINISTRATOR_PASSWORD', null, 'class="text"'); ?></td>
        <td class="inputDescription">Le Mot de Passe du compte Administrateur.</td>
      </tr>
    </table>

    <p align="right"><input type="image" src="images/button_continue.gif" border="0" alt="Continue" id="inputButton" />&nbsp;&nbsp;<a href="index.php"><img src="images/button_cancel.gif" border="0" alt="Annuler" /></a></p>

<?php
  reset($HTTP_POST_VARS);
  while (list($key, $value) = each($HTTP_POST_VARS)) {
    if (($key != 'x') && ($key != 'y')) {
      if (is_array($value)) {
        for ($i=0, $n=sizeof($value); $i<$n; $i++) {
          echo osc_draw_hidden_field($key . '[]', $value[$i]);
        }
      } else {
        echo osc_draw_hidden_field($key, $value);
      }
    }
  }
?>

    </form>
  </div>
</div>
