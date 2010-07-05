<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?>
<?php if ( ! empty( $preamble ) ) { ?><p class="tt-preamble"><?php echo $preamble; ?></p><?php } ?>
<ol class="tweets">
<?php foreach( $tweets AS $tweet ) { ?>
	<li class="<?php echo $tweet->twit_uid; ?>">
		<div class="avatar">
			<a target="_blank" href="<?php esc_attr_e( $tweet->twit_link ); ?>"><img src="<?php esc_attr_e( $tweet->twit_pic ); ?>" alt="<?php esc_attr_e( $tweet->twit_name ); ?>"/></a>
		</div>
		<div class="msg">
			<span class="twit"><a target="_blank" href="<?php esc_attr_e( $tweet->twit_link ); ?>"><?php echo $tweet->twit_name; ?></a>:</span>
			<span class="msgtxt"><?php echo $tweet->content; ?></span>
		</div>
	    <div class="info">
			<a target="_blank" class="tweet-link" href="<?php esc_attr_e( $tweet->link ); ?>" alt="<?php __( 'View tweet', 'twitter-tracker' ); ?>"><?php echo $tweet->time_since();  ?></a>
		</div>
	    <p class="clearleft"/>
	</li>
<?php } ?>
</ol>
<?php echo $html_after; ?>