<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://thresholdtestingsite.com/
 * @since      1.0.0
 *
 * @package    Booking_scraper
 * @subpackage Booking_scraper/admin/partials
 */
?>

<div class="wrap">

	<h2>Booking Availability Scraper</h2>
		 
		<div id="welcome-panel" class="welcome-panel">
			<div class="welcome-panel-content">
				<h3>Scraper Lists</h3>
			</div>
			<table class="wp-list-table widefat fixed striped">
				<thead>
					<tr>
						<th scope="col" id="id" class="manage-column column-id column-primary  asc"><span>ID</span></th>
						<th scope="col" id="name" class="manage-column column-name asc"><span>Name</span></th>
						<th scope="col" id="shortcode" class="manage-column column-shortcode">Shortcode</th>
						<th scope="col" id="phpcode" class="manage-column column-phpcode">PHP code</th>
					</tr>
				</thead>

				<tbody id="the-list">
					<tr>
						<td class="id column-id has-row-actions column-primary" data-colname="ID">1</td>
						<td class="name column-name" data-colname="Name">Hedonism</td>
						<td class="shortcode column-shortcode" data-colname="Shortcode"><code>[hedonism]</code></td>
						<td class="phpcode column-phpcode" data-colname="PHP code"><code>&lt;?php echo do_shortcode('[hedonism]'); ?&gt;</code></td>
					</tr>
					<tr>
					    <td class="id column-id has-row-actions column-primary" data-colname="ID">2</td>
						<td class="name column-name" data-colname="Name">Desire Riviera Maya</td>
						<td class="shortcode column-shortcode" data-colname="Shortcode"><code>[desire_riviera_maya]</code></td>
						<td class="phpcode column-phpcode" data-colname="PHP code"><code>&lt;?php echo do_shortcode('[desire_riviera_maya]'); ?&gt;</code></td>
					</tr>
					<tr>
					    <td class="id column-id has-row-actions column-primary" data-colname="ID">3</td>
						<td class="name column-name" data-colname="Name">Desire Pearl</td>
						<td class="shortcode column-shortcode" data-colname="Shortcode"><code>[desire_pearl]</code></td>
						<td class="phpcode column-phpcode" data-colname="PHP code"><code>&lt;?php echo do_shortcode('[desire_pearl]'); ?&gt;</code></td>
					</tr>
					<tr>
					    <td class="id column-id has-row-actions column-primary" data-colname="ID">4</td>
						<td class="name column-name" data-colname="Name">Temptation</td>
						<td class="shortcode column-shortcode" data-colname="Shortcode"><code>[temptation]</code></td>
						<td class="phpcode column-phpcode" data-colname="PHP code"><code>&lt;?php echo do_shortcode('[temptation]'); ?&gt;</code></td>
					</tr>
					<tr>
					    <td class="id column-id has-row-actions column-primary" data-colname="ID">4</td>
						<td class="name column-name" data-colname="Name">Temptation</td>
						<td class="shortcode column-shortcode" data-colname="Shortcode"><code>[hidden-beach]</code></td>
						<td class="phpcode column-phpcode" data-colname="PHP code"><code>&lt;?php echo do_shortcode('[hidden-beach]'); ?&gt;</code></td>
					</tr>
				</tbody>

				<tfoot>
					<tr>
						<th scope="col" id="id" class="manage-column column-id column-primary asc"><span>ID</span></th>
						<th scope="col" id="name" class="manage-column column-name sortable asc"><span>Name</span></th>
						<th scope="col" id="shortcode" class="manage-column column-shortcode">Shortcode</th>
						<th scope="col" id="phpcode" class="manage-column column-phpcode">PHP code</th>
					</tr>
				</tfoot>
			</table>
			<br/>
		</div>
		<div class="postbox-container">
		    <div id="features-sortables" class="meta-box-sortables ui-sortable">
		        <div id="overview_features" class="postbox">
    		        <h2 class="ui-sortable-handle"><span>How To Use?</span></h2>
    		<div class="inside">
    			<ul class="usage">
    				<li>Activate Plugin</li>
				    <li>Simply Copy Paste Provided Shortcode</li>
				    <li>For wordpress page use <code>[shortcode_code]</code></li>
				    <li>For Template Files use <code>&lt;?php echo do_shortcode('[shortcode_code]'); ?&gt;</code></li>
    			</ul>
    		</div>
    		</div>
    		</div>
		</div>
</div>