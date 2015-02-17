<div id="sidebar-right">
    <h2 ><?php _e('Categories'); ?></h2>
    <ul >
        <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
    </ul>
    <h2 ><?php _e('Archives'); ?></h2>
    <ul>
        <?php wp_get_archives('type=monthly'); ?>
    </ul>
    <p>From wp-includes/functions.php:</p>
    <ol>
    	<li>
    		21345876.34 converted to local format, using number_format_i18n(21345876.34, 2)...
    		<?php echo number_format_i18n(21345876.34, 2)?>
    	</li>
    	<li>
    		Are we using SSL? Using is_ssl()...<br/>
    		<?php echo is_ssl() ? 'yes' : 'no' ?>
    	</li>
</div>
