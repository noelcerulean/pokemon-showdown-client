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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.1693567952120898" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5678590188950188" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8286707914200739" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4738575500421778" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7492455330860122" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.33153946063170325" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.38522845951851203"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8297269205385247" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.25711965148436233">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.16071507177316557">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8622215633744299">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4079253216980576">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.39461133713873764"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.41819529533344"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.05428207103715321"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6640989542536753"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4383609108030406"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.965804478627571"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9031479806624996"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.17545774433624817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.229152672676056"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.021042236651727553"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3122951314875646"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.13216107118386788"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.49800122592370877"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4807888445149753"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5079386860047583"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.1700300958979446"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9492124744875867"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.341327614197912"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7974473730345837"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
