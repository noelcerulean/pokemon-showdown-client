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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8352775185362513" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.1763699502235112" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8092500231456761" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.02072476188880268" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.30573982192737215" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.43811562430844564" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2805817694034305"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3214847322972618" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8307485288005649">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9173912313951349">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6768969982964099">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9609250661091371">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1427887064561506"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7652185049807303"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3492484977482073"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6470897491870207"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.16947863608488145"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.53890920020226"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6950348706352039"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9259630241791657"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.06630436150472963"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6419682920292009"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3480074320505333"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4298771113446447"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5683780492296089"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9210583066002416"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4721099150325221"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5741302976024778"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9954300024309297"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.40253186744455194"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4931644087639384"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
