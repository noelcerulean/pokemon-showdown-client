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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.20938609520055107" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.052649075262719336" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8354519517161731" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4900277433486906" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.06773599692162469" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.12962321054438553" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.19459307271082937"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2049492767721448" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5434413620854424">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6114354300918912">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3870997971407799">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5970409397416723">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9601404732182883"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.008055738674888735"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8508755183260452"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4199212419963645"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.36013530875156374"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7916195382889479"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2637866535543405"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6149209832276836"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6559589472607295"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3290731230402273"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9582682878311022"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6524174243308232"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.0431349693663754"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2303072917185145"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8787941713948213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9661925050127558"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.41297084004461415"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.17727824463921604"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5156598989124495"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
