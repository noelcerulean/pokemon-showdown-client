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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.00751996188177162" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3884066547274514" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4022048732524368" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7027233496734757" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.747572829226208" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8688691644555351" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.32336630848074055"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.23230060556372867" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16585877713375896">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4853694947897915">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3115538479564848">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4830347635595562">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.562351791012645"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8087165631988398"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7364524586414567"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6473327680569823"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.03283227297654001"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.14183956832838218"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8776533363959422"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6238087840974234"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4859775320896098"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.23371766137361005"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.16413574559739685"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.0012724481117321051"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.49159125590689334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.13148717402250232"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.20860724574355727"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5789710883856642"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.09698351915632597"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.35720775629519363"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.04396716174109039"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
