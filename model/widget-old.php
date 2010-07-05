<?php

class TwitterTracker_Widget extends Widget_TwitterTracker
{
	protected $title;
	protected $twitter_search;
	protected $preamble;
	protected $max_tweets;
	
	function has_config () { 
		return true; 
	}
	
	function args()
	{
		return array(
				'classname' => 'twitter-tracker',
				'description' => 'Displays the results of a Twitter search.',
			);
	}

	function load( $config )
	{
		if ( isset( $config[ 'title' ] ) ) $this->title = stripslashes( $config['title'] );
		if ( isset( $config[ 'twitter_search' ] ) ) $this->twitter_search = stripslashes( $config[ 'twitter_search' ] );
		if ( isset( $config[ 'preamble' ] ) ) $this->preamble = stripslashes( $config[ 'preamble' ] );
		if ( isset( $config[ 'max_tweets' ] ) ) $this->max_tweets = $config[ 'max_tweets' ];
	}

	function config( $config, $pos )
	{
		?>
		<table>
			<tr>
				<th>Title:</th>
				<td>
					<input 
						type="text" 
						name="<?php echo $this->config_name( 'title', $pos ) ?>" 
						value="<?php echo htmlspecialchars( stripslashes( $config[ 'title' ] ) ); ?>" />
				</td>
			</tr>
			<tr>
				<th>Preamble:</th>
				<td>
					<input 
						type="text" 
						name="<?php echo $this->config_name( 'preamble', $pos ) ?>" 
						value="<?php echo htmlspecialchars( $config[ 'preamble' ] ); ?>" />
				</td>
			</tr>
			<tr>
				<th>Twitter Search:</th>
				<td>
					<input 
						type="text" 
						name="<?php echo $this->config_name( 'twitter_search', $pos ) ?>" 
						value="<?php echo htmlspecialchars( stripslashes( $config[ 'twitter_search' ] ) ); ?>" />
				</td>
			</tr>
			<tr>
				<th>Max Tweets:</th>
				<td>
					<input 
						type="text" 
						name="<?php echo $this->config_name( 'max_tweets', $pos ) ?>" 
						value="<?php echo htmlspecialchars( stripslashes( $config[ 'max_tweets' ] ) ); ?>" />
				</td>
			</tr>
		</table>
		<?php
	}

	function description ()
	{
		return 'A widget which displays results from <a href="http://search.twitter.com/">Twitter Search</a>.';
	}

	function display ($args)
	{
		extract ($args);
		
		echo $before_widget;

		if ( $this->title ) echo $before_title . $this->title . $after_title;

		twitter_tracker( $this->twitter_search, $this->preamble, $this->max_tweets );

		echo $after_widget;
	}

	function save( $data )
	{
		return array( 
			'title' => $data[ 'title' ], 
			'preamble' => $data[ 'preamble' ],
			'twitter_search' => $data[ 'twitter_search' ],
			'max_tweets' => $data[ 'max_tweets' ],
		);
	}
}

?>