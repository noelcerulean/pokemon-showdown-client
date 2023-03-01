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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.40317442641135104" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9975211921065585" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3529810617752067" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.10765108398877676" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.10436038458384633" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4337847746007635" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4166304017774718"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4242932094397742" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8966804611171295">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.04713493819132464">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.18703469936035">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.723983717453665">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9161393028901954"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.33179092741656335"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.1404281396155289"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2625502591056148"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.17865852149003358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6167602480439196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6126015393752138"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.40733342313532583"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5924463734238408"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.024480459123354503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.517342696719566"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3508342336368693"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.17987417600763478"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2564298168165908"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.19668511950404577"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5247024249661847"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8608643302774341"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9365691793822"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6872183812355914"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
