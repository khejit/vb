<header>

</header>

<main class="cd-main-content">
	<section class="center">
		<img class="img-responsive" src="<?php echo(base_url()) ?>assets/img/mini-logo_vb.png" >
		<h1>Oczekuj nieoczekiwanego</h1>
		<a href="#0" class="btn btn-1 btn-1e" id="modal-trigger" data-type="cd-modal-trigger">Newsletter</a>
	</section>
</main> <!-- .cd-main-content -->

<div class="cd-modal" data-modal="modal-trigger">
	<div class="cd-svg-bg"
	     data-step1="M-59.9,540.5l-0.9-1.4c-0.1-0.1,0-0.3,0.1-0.3L864.8-41c0.1-0.1,0.3,0,0.3,0.1l0.9,1.4c0.1,0.1,0,0.3-0.1,0.3L-59.5,540.6 C-59.6,540.7-59.8,540.7-59.9,540.5z"
	     data-step2="M33.8,690l-188.2-300.3c-0.1-0.1,0-0.3,0.1-0.3l925.4-579.8c0.1-0.1,0.3,0,0.3,0.1L959.6,110c0.1,0.1,0,0.3-0.1,0.3 L34.1,690.1C34,690.2,33.9,690.1,33.8,690z"
	     data-step3="M-465.1,287.5l-0.9-1.4c-0.1-0.1,0-0.3,0.1-0.3L459.5-294c0.1-0.1,0.3,0,0.3,0.1l0.9,1.4c0.1,0.1,0,0.3-0.1,0.3 l-925.4,579.8C-464.9,287.7-465,287.7-465.1,287.5z"
	     data-step4="M-329.3,504.3l-272.5-435c-0.1-0.1,0-0.3,0.1-0.3l925.4-579.8c0.1-0.1,0.3,0,0.3,0.1l272.5,435c0.1,0.1,0,0.3-0.1,0.3 l-925.4,579.8C-329,504.5-329.2,504.5-329.3,504.3z"
	     data-step5="M341.1,797.5l-0.9-1.4c-0.1-0.1,0-0.3,0.1-0.3L1265.8,216c0.1-0.1,0.3,0,0.3,0.1l0.9,1.4c0.1,0.1,0,0.3-0.1,0.3L341.5,797.6 C341.4,797.7,341.2,797.7,341.1,797.5z"
	     data-step6="M476.4,1013.4L205,580.3c-0.1-0.1,0-0.3,0.1-0.3L1130.5,0.2c0.1-0.1,0.3,0,0.3,0.1l271.4,433.1c0.1,0.1,0,0.3-0.1,0.3 l-925.4,579.8C476.6,1013.6,476.5,1013.5,476.4,1013.4z">
		<svg height="100%" width="100%" preserveAspectRatio="none" viewBox="0 0 800 500">
			<title>SVG Modal background</title>
			<path id="cd-changing-path-1" d="M-59.9,540.5l-0.9-1.4c-0.1-0.1,0-0.3,0.1-0.3L864.8-41c0.1-0.1,0.3,0,0.3,0.1l0.9,1.4c0.1,0.1,0,0.3-0.1,0.3L-59.5,540.6 C-59.6,540.7-59.8,540.7-59.9,540.5z"/>
			<path id="cd-changing-path-2" d="M-465.1,287.5l-0.9-1.4c-0.1-0.1,0-0.3,0.1-0.3L459.5-294c0.1-0.1,0.3,0,0.3,0.1l0.9,1.4c0.1,0.1,0,0.3-0.1,0.3 l-925.4,579.8C-464.9,287.7-465,287.7-465.1,287.5z"/>
			<path id="cd-changing-path-3" d="M341.1,797.5l-0.9-1.4c-0.1-0.1,0-0.3,0.1-0.3L1265.8,216c0.1-0.1,0.3,0,0.3,0.1l0.9,1.4c0.1,0.1,0,0.3-0.1,0.3L341.5,797.6 C341.4,797.7,341.2,797.7,341.1,797.5z"/>
		</svg>
	</div>

	<div class="cd-modal-content">
		<h3 class="main-text">
			Chcesz wiedzieć <span>pierwszy</span> co się dzieje?
		</h3>

		<form id="newsletter-signup" action="?action=signup" method="post">
			<fieldset>
				<label class='tooltip-idle response-success' id="signup-response">Wpisz adres!</label>
				<input type="text" name="signup-email" id="signup-email" placeholder="Twój e-mail" />
				<button type="submit" class="btn btn-1 btn-1e" id="signup-button" value="Zapisz mnie!">Zapisz mnie</button>
				<div class="clearfix"></div>
				<div class="signup-loading"></div>
			</fieldset>
		</form>

	</div> <!-- cd-modal-content -->

	<a href="#0" class="modal-close">Close</a>
</div> <!-- cd-modal -->

<div class="cd-cover-layer"></div> <!-- .cd-cover-layer -->