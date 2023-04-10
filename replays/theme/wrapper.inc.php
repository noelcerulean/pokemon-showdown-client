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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.11958149166182985" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7414917656069122" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3796345900653437" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8599861864163101" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.25561833217188323" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9411583457689658" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9467170554046853"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.007359863873000583" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7546884056889753">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5662675277119191">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.49643149172266265">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4371834397533978">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6456309211016156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.013789509023812485"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6209962629771717"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.023344110944025553"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2278338229869057"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.08762027778158177"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.33934420108981533"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.45969882101048043"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.42825130318011606"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.602396071993325"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.38149339996510423"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4568781328464899"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8011436277516792"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.11470134777304342"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8462004703076131"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4591831790474781"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.42746576679141746"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.06915283638123948"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6108956191346537"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
