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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.162738857142267" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2829652967368499" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.1451986157092433" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6071760608829218" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.23149115081288163" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7052447892026437" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6907359655555791"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6861847247768154" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7700357261871817">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5767496792489792">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6306724510928261">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9223971213001283">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.48068347125033495"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.556439053905055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.1774990372581544"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.06140979227078924"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9438978226012733"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.989362837450882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5914700755660707"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9792853075163288"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4904617147225627"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.33521173285540673"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.018954297769012918"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5735622364419368"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.32920464979590824"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.31340558392004736"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1982889430338084"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.14880553114999429"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5025565123588625"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.1785264662688617"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6292575653700583"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
