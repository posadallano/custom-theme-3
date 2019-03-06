<?php
/**
 * The template used for displaying a Download Report block.
 *
 * @package US Law Shield
 */

// Set up fields.
$image = get_sub_field( 'image' );
$title_h2 = get_sub_field( 'title_h2' );
$title_h3 = get_sub_field( 'title_h3' );
$title_h4 = get_sub_field( 'title_h4' );
?>

<section class="report">
	<div class="report-content">
		<?php if ($image): ?>
			<div class="image">
				<img clas="newsletter-page" src="<?php echo $image; ?>">
			</div>
		<?php endif ?>
		<div class="cont-textform">
			<div class="titles">
				<div class="cont-title">
					<?php if ($title_h2): ?>
						<h2> <?php echo ( $title_h2 ); ?> </h2>	
					<?php endif ?>
					<?php if ($title_h4): ?>
						<h4> <?php echo ( $title_h4 ); ?> </h4>	
					<?php endif ?>
					<?php if ($title_h3): ?>
						<h3> <?php echo ( $title_h3 ); ?> </h3>	
					<?php endif ?>
				</div>
			</div>
			<div class="form">
				<form accept-charset="UTF-8" method="post" action="https://go.pardot.com/l/219422/2018-03-08/33x3k" class="form" id="pardot-form" onsubmit="return readyToSubmit();">
					
					<input type="text" name="219422_26532pi_219422_26532" id="219422_26532pi_219422_26532" value="" class="text" size="30" maxlength="40" placeholder="First Name" onblur="validate_name(inputId_first_name,missingErrorId_first_name,'required');" required />
					
					<div id="error_for_219422_26532pi_219422_26532"></div>
				
					<input type="text" name="219422_26534pi_219422_26534" id="219422_26534pi_219422_26534" value="" class="text" size="30" maxlength="80" placeholder="Last Name" onblur="validate_name(inputId_last_name,missingErrorId_last_name,'required');" required />
					<div id="error_for_219422_26534pi_219422_26534"></div>
					<input type="text" name="219422_26536pi_219422_26536" id="219422_26536pi_219422_26536" value="" class="text" size="30" maxlength="255" onblur="validate_email(inputId_Email,missingErrorId_Email,'required');" autocomplete="off" placeholder="Email" required />
					<div id="error_for_219422_26536pi_219422_26536"></div>
					<select name="219422_26538pi_219422_26538" id="219422_26538pi_219422_26538" class="select pardot-uslsi" required>
						<option value="" selected="selected">CHOOSE YOUR STATE</option>
						<option id="alabama" value="167508">Alabama</option>
						<option id="alaska" value="167510">Alaska</option>
						<option id="arizona" value="167512">Arizona</option>
						<option id="arkansas" value="167514">Arkansas</option>
						<option id="california" value="167516">California</option>
						<option id="colorado" value="167518">Colorado</option>
						<option id="connecticut" value="167520">Connecticut</option>
						<option id="delaware" value="167522">Delaware</option>
						<option id="columbia" value="167524">District Of Columbia</option>
						<option id="florida" value="167526">Florida</option>
						<option id="georgia" value="167528">Georgia</option>
						<option id="hawaii" value="167530">Hawaii</option>
						<option id="idaho" value="167532">Idaho</option>
						<option id="illinois" value="167534">Illinois</option>
						<option id="indiana" value="167536">Indiana</option>
						<option id="iowa" value="167538">Iowa</option>
						<option id="kansas" value="167540">Kansas</option>
						<option id="kentucky" value="167542">Kentucky</option>
						<option id="louisiana" value="167544">Louisiana</option>
						<option id="maine" value="167546">Maine</option>
						<option id="maryland" value="167548">Maryland</option>
						<option id="massachusetts" value="167550">Massachusetts</option>
						<option id="michigan" value="167552">Michigan</option>
						<option id="minnesota" value="167554">Minnesota</option>
						<option id="mississippi" value="167556">Mississippi</option>
						<option id="missouri" value="167558">Missouri</option>
						<option id="montana" value="167560">Montana</option>
						<option id="nebraska" value="167562">Nebraska</option>
						<option id="nevada" value="167564">Nevada</option>
						<option id="new-hampshire" value="167566">New Hampshire</option>
						<option id="new-jersey" value="167568">New Jersey</option>
						<option id="new-mexico" value="167570">New Mexico</option>
						<option id="new-york" value="167572">New York</option>
						<option id="north-carolina" value="167574">North Carolina</option>
						<option id="north-dakota" value="167576">North Dakota</option>
						<option id="ohio" value="167578">Ohio</option>
						<option id="Oklahoma" value="167580">Oklahoma</option>
						<option id="oregon" value="167582">Oregon</option>
						<option id="pennsylvania" value="167584">Pennsylvania</option>
						<option id="rhode-island" value="167586">Rhode Island</option>
						<option id="south-carolina" value="167588">South Carolina</option>
						<option id="south-dakota" value="167590">South Dakota</option>
						<option id="tennessee" value="167592">Tennessee</option>
						<option id="texas" value="167594">Texas</option>
						<option id="utah" value="167596">Utah</option>
						<option id="vermont" value="167598">Vermont</option>
						<option id="virginia" value="167600">Virginia</option>
						<option id="washington" value="167602">Washington</option>
						<option id="west-virginia" value="167604">West Virginia</option>
						<option id="wisconsin" value="167606">Wisconsin</option>
						<option id="wyoming" value="167608">Wyoming</option>
					</select>
					<div id="error_for_219422_26538pi_219422_26538"></div>
					<p style="position:absolute; width:190px; left:-9999px; top: -9999px;visibility:hidden;">
						<label for="pi_extra_field">Comments</label>
						<input type="text" name="pi_extra_field" id="pi_extra_field"/>
					</p>
					<!-- forces IE5-8 to correctly submit UTF8 content  -->
					<input name="_utf8" type="hidden" value="&#9731;" />
					
					<input id="submit" type="submit" accesskey="s" value="SIGN ME UP!" />
					<input type="hidden" name="hiddenDependentFields" id="hiddenDependentFields" value="" />
				</form>
			</div>
		</div>
	</div>
</section><!-- .generic-content -->