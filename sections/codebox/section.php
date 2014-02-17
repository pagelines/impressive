<?php
/*
	Section: CodeBox
	Description: An unformatted textbox perfect for adding your own custom HTML.
	Class Name: jg_codeBox
*/

class jg_codeBox extends PageLinesSection{

	function section_template(){

		$content = $this->opt('jg_codebox_full_width') ? '' : 'class="pl-content"';
		printf('<div %s data-sync="jg_codebox_text">%s</div>',$content,$this->opt('jg_codebox_text'));
	}

	function welcome(){

		ob_start();
		?>
			<div style="color:#282828;">
				<p style="border-bottom:1px solid #ccc;margin:0 0 0.75em;"><strong><?php _e('Instructions','codebox');?></strong></p>
				<ul class="unstyled" style="font-size:12px;line-height:14px;">
					<li style="margin-bottom:7px;"><?php _e('Perfect for coding in what you need with no extras. Embed text, images, HTML, whatever you need.','codebox');?></li>
					<li style="margin-bottom:7px;"><?php _e('This box will not accept LESS or JS, please use the custom scripts area for that.','codebox');?></li>
				</ul>
			</div>
		<?php
		return ob_get_clean();
	}

	function section_opts(){
		$options = array();

		$options[] = array(
			'title'           => __( 'CodeBox Instructions', 'codebox' ),
			'type' 			  => 'template',
			'template' 	      => $this->welcome(),
		);

		$options[] = array(
			'title'			=> __('Text','codebox'),
			'type'			=> 'multi',
			'opts'			=> array(
				array(
					'key'	=> 'jg_codebox_text',
					'type'	=> 'textarea',
					'label'	=> __('Text','codebox')
				),
			),
		);

		return $options;
	}

}