<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.29253115861827594" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7866320704427918" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6998781192389587" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.689051960678674" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.18466093206997503" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.23369725279121023" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9389480225664399"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7144967901482993" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.38065912191339657">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7230223932060065">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3941152973599169">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.10915109795040778">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.27642181228706186"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6767119094985543"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.21323035536875046"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5869112078019298"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.41310796579763753"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.631217642879426"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.0860537133738899"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6232134290518629"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.06937844693307382"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4393311730535012"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.04651098434053469"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7010858994513387"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.19960016549676274"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8760459870799087"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.19186686084541904"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7413328199713154"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3219451749235622"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.27768512476754337"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.23281385698119617"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
