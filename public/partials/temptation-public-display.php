<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://thresholdtestingsite.com/
 * @since      1.0.0
 *
 * @package    Booking_scraper
 * @subpackage Booking_scraper/public/partials
 */
?>
<?php
    if( isset( $_GET['aff_id'] ) && (int) $_GET['aff_id'] > 0 ) {
 
        $aff_id = $_GET['aff_id'];
        
    }else{
        $aff_id = AFF_ID;
    }
    
    if( isset($_GET['date'] ) ){
        $date = $_GET['date'];
    }else{
        $date = DATE;
    }
     
    if( isset($_GET['nights'] ) ){
        $nights = $_GET['nights'];
    }else{
        $nights = NIGHTS;
    }
    
    if( isset($_GET['adults'] ) ){
        $adults = $_GET['adults'];
    }else{
        $adults = ADULTS;
    }
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<form action="" id="temptation" method="post" >
		<div class="row" >
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align:center; font-weight:600">RESERVATIONS</div>
        </div>
        <input type="hidden" name="aff_id" value="<?php echo $aff_id; ?>">
		<div class="row" >
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            	<div class="form-group">
				<label>Arrival Date:</label>
                <input type="text" name="booking_date" id="booking_date" value="<?php echo $date; ?>" class="form-control"  style="width:94%;" />
                </div>
			</div>
		</div> 

        <div class="row" >
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin:auto;">
				<label class="text-center">Nights:</label>
				<select class="form-control" name="nights" id="nights" style="width:100%;">
					<option value="1" <?php echo $nights == "1" ? "selected" : '';?> >1</option>
					<option value="2" <?php echo $nights == "2" ? "selected" : '';?>>2</option>
					<option value="3" <?php echo $nights == "3" ? "selected" : '';?>>3</option>
					<option value="4" <?php echo $nights == "4" ? "selected" : '';?>>4</option>
					<option value="5" <?php echo $nights == "5" ? "selected" : '';?>>5</option>
					<option value="6" <?php echo $nights == "6" ? "selected" : '';?>>6</option>
					<option value="7" <?php echo $nights == "7" ? "selected" : '';?>>7</option>
					<option value="8" <?php echo $nights == "8" ? "selected" : '';?>>8</option>
					<option value="9" <?php echo $nights == "9" ? "selected" : '';?>>9</option>
					<option value="10" <?php echo $nights == "10" ? "selected" : '';?>>10</option>
					<option value="11" <?php echo $nights == "11" ? "selected" : '';?>>11</option>
					<option value="12" <?php echo $nights == "12" ? "selected" : '';?>>12</option>
					<option value="13" <?php echo $nights == "13" ? "selected" : '';?>>13</option>
					<option value="14" <?php echo $nights == "14" ? "selected" : '';?>>14</option>
				</select>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
            	<div class="">
				<label>Adults:</label>
				<select class="" name="adults" id="adults">
					<option value="1" <?php echo $adults == "1" ? "selected" : '';?> >1</option>
					<option value="2" <?php echo $adults == "2" ? "selected" : '';?> >2</option>
				</select>
                </div>
			</div>
		</div>
        <div class="row" style="">
			<div style="" >
				<button type="button" id="btn-submit-reservations" form-id="temptation" class="btn-flat" >Submit<span></span></button> 
			</div>
        </div>
	</form>
	<div id="available-content"></div>