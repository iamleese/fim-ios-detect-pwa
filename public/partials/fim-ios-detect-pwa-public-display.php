<?php

/**
 * @link       https://faithinmarketing.com
 * @since      1.0.0
 *
 * @package    Fim_Ios_Detect_Pwa
 * @subpackage Fim_Ios_Detect_Pwa/public/partials
 */


function fim_ios_popup(){
  $option_name = 'fim_ios_detect_pwa';

  $message = get_option($option_name.'_message');
?>
    <div id="ios-pwa-cta">
      <?php echo $message; ?>
      <button id="ios-pwa-cta-close" class="ios-pwa-cta-close-button">Close</button>
    </div>
<?php }

?>
