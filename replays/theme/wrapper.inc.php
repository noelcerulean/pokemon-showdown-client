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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.30022095355620526" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4985669975760314" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6489946345642141" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7668841024069322" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.07175581909655881" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.890895866842994" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7556635398578346"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5575905646487189" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.663784372679467">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.533353410592655">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4568243425282834">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8849543477254678">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.21828837768381115"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8903101936572686"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.46854277140096423"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2035260945616988"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8805372279655381"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.393324577133483"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6468911321151336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8676390793256958"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9745791568294104"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.22869206867493497"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9151059583265819"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3497669143940323"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.07142742049377615"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.48175194142004196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4076702600580808"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.22043695086821669"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9089136983332309"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5357944191958224"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7740902489416925"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
