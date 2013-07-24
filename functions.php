<?php

// Load Framework //
require_once( dirname(__FILE__) . '/setup.php' );

class impressiveTheme {


  function __construct() {

    $this->init();
    $this->options();

  }

  function init() {


  }

  // Draw Welcome Panel
  function welcome(){

    ob_start();
    ?>
       <div style="font-size:12px;line-height:14px;color:#444;">
        <p><?php _e('Welcome to Impressive Theme! Please let me know if you have any questions or concerns, and enjoy your product.','impressive');?></p>
      </div>
      <div class="row">
        <div class="span6 zmb" style="text-align:center;">
          <a href="http://jamesgiroux.ca" target="_blank" class="btn btn-info btn-mini"><i class="icon icon-globe"></i>  <?php _e('Website','impressive');?></a>
        </div>
        <div class="span6 zmb" style="text-align:center;">
          <a href="http://www.pagelines.com/forum/forum/68-store-products/" target="_blank" class="btn btn-info btn-mini"><i class="icon icon-ambulance"></i>  <?php _e('Support','impressive');?></a>
        </div>
      </div>
      <div style="margin-top:20px;color:#444;">
        <p style="border-bottom:1px solid #ccc;margin:0 0 0.75em;"><strong><?php _e('Overview','impressive');?></strong></p>
        <p style="font-size:12px;line-height:14px;"><?php _e('Impressive Theme is designed to work with core PageLines sections. To edit sections, click the pencil icon in the top left corner.','impressive');?></p>
      </div>
      <div style="margin-top:20px;color:#444;">
        <p style="border-bottom:1px solid #ccc;margin:0 0 0.75em;"><strong><?php _e('Instructions','impressive');?></strong></p>
        <p style="font-size:12px;line-height:14px;"><?php _e('In depth instructions are available in the theme folder, or by <a href="/wp-content/themes/impressive/theme_installation_instructions.pdf" target="_blank">clicking here.</a></p>','impressive');?>
        <ul class="unstyled" style="font-size:12px;line-height:14px;">
          <li style="margin-bottom:7px;"><strong><?php _e('1.','impressive');?> </strong><?php _e('Activate the theme in Appearance > Themes. Well done!','impressive');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('2.','impressive');?> </strong><?php _e('Create a new page called Home.','impressive');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('3.','impressive');?> </strong><?php _e('Click <a href="/wp-admin/options-reading.php">here</a> and set your front page to the home page.','impressive');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('4.','impressive');?> </strong><?php _e('In the Global Options panel, locate the Import/Export area and click on it.','impressive');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('5.','impressive');?> </strong><?php _e('To recreate the demo, click the Child Theme Config Import button.','impressive');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('6.','impressive');?> </strong><?php _e('Click on the Templates tab.  Impressive is a one page theme so find the Home template and load it. That\'s it!','impressive');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('7.','impressive');?> </strong><?php _e('To edit the main color of the theme, simply change the Link Color in Global Options and your entire theme will change to match.','impressive');?></li>
        </ul>
      </div>
    <?php
    return ob_get_clean();
  }

  // Theme Options
  function options(){
    $theme_settings = array();

    $theme_settings['impressive_theme_config'] = array(
       'pos'                  => 50,
       'name'                 => __('Impressive Theme','impressive'),
       'icon'                 => 'icon-chevron-sign-up',
       'opts'                 => array(
          array(
                'type'          => 'template',
                'title'         => __('Welcome to Impressive Theme','impressive'),
                'template'      => $this->welcome()
            ),
       )
    );
    pl_add_theme_tab($theme_settings);
  }


}

new impressiveTheme;

add_filter( 'render_css_posix_', '__return_true' ); //Flywheel Support