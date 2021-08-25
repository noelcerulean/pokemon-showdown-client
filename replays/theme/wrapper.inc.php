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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4059365093562637" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.07995154232229007" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.07856445363760534" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.38526182006896503" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7381969440139844" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3426627562770168" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.18919466211398017"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5927565025219836" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.18994672198077955">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2073893035005654">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9516228391633006">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3184506404493461">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.425864077692113"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5982088621908561"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.46154660080864485"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9617895005294335"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.1072607764018314"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6542686569682075"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3050321275906953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.026192419165994574"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5930386630122642"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8132841891324918"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5368753441481386"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.009259862412784203"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7940019669140399"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.22599648720631227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.25069161630468706"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5461147959461352"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5894749597733828"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.46710758411367137"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.30446084426305875"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
