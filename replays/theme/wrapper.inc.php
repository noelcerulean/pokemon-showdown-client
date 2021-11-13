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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8998942981367377" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.12566449535987134" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2592927832549019" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.35939744035526733" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.49642352827851655" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3527585833118667" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5489004449324415"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.619790826167733" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.05220402751563413">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3379463876850426">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8208051370438436">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.13444395679340237">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.46938139590880734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7608785147518256"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.31290661309951906"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2985658490739249"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.73384614645547"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.19238993849208819"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9825122883058368"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5678645798951472"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6959817227644909"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7922093764543892"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.47924995531136094"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.20297461912632953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.18067293196274203"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.18143036391944256"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7352862041609267"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.24871309748129478"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.12568135733630914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5658335161232826"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.12900597692351656"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
