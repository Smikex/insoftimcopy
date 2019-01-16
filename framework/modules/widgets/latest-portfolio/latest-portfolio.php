<?php

class QodeStartitLatestPortfolio extends QodeStartitWidget {
	protected $params;
	public function __construct() {
		parent::__construct(
			'qodef_latest_portfolio_widget', // Base ID
			'Select Latest Portfolio', // Name
			array( 'description' => esc_html__( 'Display portfolio from your blog', 'startit' ), ) // Args
		);

		$this->setParams();
	}

	protected function setParams() {
		$this->params = array(
			array(
				'name' => 'number_of_portfolio',
				'type' => 'textfield',
				'title' => 'Number of portfolio'
			),
			array(
				'name' => 'order_by',
				'type' => 'dropdown',
				'title' => 'Order By',
				'options' => array(
					'title' => 'Title',
					'date' => 'Date'
				)
			),
			array(
				'name' => 'order',
				'type' => 'dropdown',
				'title' => 'Order',
				'options' => array(
					'ASC' => 'ASC',
					'DESC' => 'DESC'
				)
			),
			array(
				'name' => 'category',
				'type' => 'textfield',
				'title' => 'Category Slug'
			),
			array(
				'name' => 'text_length',
				'type' => 'textfield',
				'title' => 'Number of characters'
			),
			array(
				'name' => 'title_tag',
				'type' => 'dropdown',
				'title' => 'Title Tag',
				'options' => array(
					""   => "",
					"h2" => "h2",
					"h3" => "h3",
					"h4" => "h4",
					"h5" => "h5",
					"h6" => "h6"
				)
			)			
		);
	}

	public function widget($args, $instance) {
		extract($args);

		//prepare variables
		$content        = '';
		$params         = array();
		$params['type'] = 'image_in_box';
		//is instance empty?
		if(is_array($instance) && count($instance)) {
			//generate shortcode params
			foreach($instance as $key => $value) {
				$params[$key] = $value;
			}
		}
		if(empty($params['title_tag'])){
			$params['title_tag'] = 'h4';
		} 
		$params['post_type'] = array('portfolio-item');
        
		echo '<div class="widget qodef-latest-portfolio-widget">';
		
		echo qode_startit_execute_shortcode('qodef_blog_list', $params);

		echo '</div>'; //close qodef-latest-portfolio-widget
	}
}
