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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9292066174992419" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6145463969829636" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.56634770348049" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4459293482480746" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.0007365806458319302" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.12263195844729258" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.30689803593186626"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5783006874839536" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3553534151929032">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5349860517440945">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.03170762679881345">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.08488042155633746">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1197499050770452"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.09518040123098004"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3445355141469255"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.28768349149917083"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.42320388451074487"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.09188106025817722"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5549035025115401"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.049363682586703206"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.21975371005232258"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.11706127649357567"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2646580219567283"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5600160143403641"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9600769548458845"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.14838223131472783"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.10064241754322212"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6288207307327982"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5898137315080181"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5203483939148663"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6429135461193565"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
