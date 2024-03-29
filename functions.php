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
       <div style="font-size:14px;line-height:14px;color:#444;">
        <p><?php _e('Welcome to Impressive Theme! If you have questions about how to install or need priority support, please check out the support site (listed below) for options.','impressive');?></p>
      </div>
      <div class="row">
        <div class="span4 zmb" style="text-align:center;">
          <a href="http://jamesgiroux.co" target="_blank" class="btn btn-info"><i class="icon icon-globe"></i>  <?php _e('Website','impressive');?></a>
        </div>
        <div class="span4 zmb" style="text-align:center;">
          <a href="http://jamesgiroux.co/pagelines-theme-support/" target="_blank" class="btn btn-info"><i class="icon icon-ambulance"></i>  <?php _e('Support','impressive');?></a>
        </div>
        <div class="span4 zmb" style="text-align:center;">
          <a href="http://pagelinesacademy.com" target="_blank" class="btn btn-info"><i class="icon icon-pagelines"></i>  <?php _e('Learn PageLines','impressive');?></a>
        </div>
      </div>
      </div>
      <div style="margin-top:20px;color:#444;">
        <p style="border-bottom:1px solid #ccc;margin:0 0 0.75em;"><strong><?php _e('Overview','impressive');?></strong></p>
        <p style="font-size:12px;line-height:14px;"><?php _e('Impressive Theme is designed to work with core PageLines DMS sections. To edit sections, click the pencil icon in the top left corner.','impressive');?></p>
      </div>
      <div style="margin-top:20px;color:#444;">
        <p style="border-bottom:1px solid #ccc;margin:0 0 0.75em;"><strong><?php _e('Instructions','impressive');?></strong></p>
        <p style="font-size:12px;line-height:14px;"><?php _e('In depth instructions are available in the theme folder, or by <a href="/wp-content/themes/impressive/README.md" target="_blank">clicking here.</a></p>','impressive');?>
        <ul class="unstyled" style="font-size:12px;line-height:14px;">
          <li style="margin-bottom:7px;"><strong><?php _e('1.','impressive');?> </strong><?php _e('Activate the theme in Appearance > Themes. Well done!','impressive');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('2.','impressive');?> </strong><?php _e('Import <a href="/wp-content/themes/impressive/content.xml" target="_blank">content.xml</a> using the WordPress Importer.','impressive');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('3.','impressive');?> </strong><?php _e('Click <a href="/wp-admin/options-reading.php">here</a> and set your front page to the home page, and the posts page to the blog page.','impressive');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('4.','impressive');?> </strong><?php _e('In the Global Options panel, locate the Import/Export area and click on it.','impressive');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('5.','impressive');?> </strong><?php _e('To recreate the demo, click the Child Theme Config Import button.','impressive');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('6.','impressive');?> </strong><?php _e('That\'s it! Templates and look will all be loaded.  If you want to create more pages, in your Templates area you can apply any of the templates from the demo to new pages.','impressive');?></li>
          <li style="margin-bottom:7px;"><strong><?php _e('7.','impressive');?> </strong><?php _e('To edit the main color of the theme, change the Link Color in Global Options and your entire theme will change to match.','impressive');?></li>
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