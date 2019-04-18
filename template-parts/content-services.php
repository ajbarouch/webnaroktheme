<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content services">
	<div class="service-content"><?php the_content(); ?></div>
	<script type="text/javascript">

function buttoncheck() {
if(document.getElementById('devrad').checked) {
	$('#dev').show();
	$('#des').hide();
	$('#ana').hide();
    $('html, body').animate({
      scrollTop: $("#dev").offset().top -150
    }, 1000)
	$("#devrad").parent().addClass("radioactive");
	$("#desrad").parent().removeClass("radioactive");
	$("#anarad").parent().removeClass("radioactive");

}else if(document.getElementById('desrad').checked) {
	$('#des').show();
	$('#dev').hide();
	$('#ana').hide();
    $('html, body').animate({
      scrollTop: $("#des").offset().top -150
    }, 1000)
	$("#desrad").parent().addClass("radioactive");
	$("#devrad").parent().removeClass("radioactive");
	$("#anarad").parent().removeClass("radioactive");
	
}else if (document.getElementById('anarad').checked) {
	$('#ana').show();
	$('#dev').hide();
	$('#des').hide();
    $('html, body').animate({
      scrollTop: $("#ana").offset().top -150
    }, 1000)
	$("#anarad").parent().addClass("radioactive");
	$("#desrad").parent().removeClass("radioactive");
	$("#devrad").parent().removeClass("radioactive");
}
}
</script>
<form>
  <fieldset id="service-buttons">
  <label><input type="radio" onclick="buttoncheck()" id="devrad" value="Web Development" name="radios">Web Development</label>
  <label><input type="radio" onclick="buttoncheck()" id="desrad" value="Web Design" name="radios">Web Design</label>
  <label><input type="radio" onclick="buttoncheck()" id="anarad" value="Analytics" name="radios">Analytics</label>
  </fieldset>
</form>
<div id="dev" class="service-toggle"  style="display:none">
<h3><?php the_field('dev_title') ?></h3>
<div class="service-line"></div>
<?php the_field('dev_content') ?>
</div>
<div id="des" class="service-toggle" style="display:none">
<h3><?php the_field('design_title') ?></h3>
<div class="service-line"></div>
<?php the_field('design_content') ?>
</div>
<div id="ana" class="service-toggle" style="display:none">
<h3><?php the_field('analytics_title') ?></h3>
<div class="service-line"></div>
<?php the_field('analytics_content') ?>
</div>


		<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
	</div>
</article>
