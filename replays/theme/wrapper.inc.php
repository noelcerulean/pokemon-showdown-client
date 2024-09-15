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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6959100958841218" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7341098428338044" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8954673916831235" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.06997827404473922" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6083474678081582" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2680293092478565" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4263517493458666"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.43370941595539625" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7817342030999543">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2824572247179835">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4546884243437972">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.881203039432787">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9256123867895978"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6208519430698152"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.15512601551499716"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7816812327845337"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.022850622633842965"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8555476771444004"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7090633415389678"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.39952183178530376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.27187306729896976"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.46329383052230644"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5393905309437301"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9038664232587588"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6917171312431696"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.045389695982678724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6629698365919579"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5007038274938926"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5106623969851813"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.40192477611787103"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.1587255955601008"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
