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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.26702047220425795" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.32251446366893943" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.16518834070843957" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6853705456847718" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.04698747826231253" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6717640201309583" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.08977826732009708"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6286637922517981" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9629537167780948">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5878393352190174">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5373510017368839">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9762794850940555">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.12156074470116196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6315286491740641"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6421723490647158"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9248725068951531"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2851432563586196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6166044743200676"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9104057830825008"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.836069540471819"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.36368601117718136"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7449509155257945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.08975994090255823"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4534095359802712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5799223140890946"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.35905858667023827"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8662351455413626"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7754037681339336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.12483406285974197"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5190861660944714"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5680049706706927"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
