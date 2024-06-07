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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6723858583953808" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.32016405201982834" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4001675376896432" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4903337108002932" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3381072643566998" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7706283248539894" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7141434127034134"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6138094583136227" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.38927916080751035">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4443029832199914">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.20147563588758177">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8704062239211188">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.394212667674658"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9589960946349811"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.42352759699837583"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1464924497636484"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.748714323285324"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8898045392148599"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9527924878268286"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.04111768056230636"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.23082658764095032"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7182133823172199"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6318482370319216"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6482575777484176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7947649728763406"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.48383010428733275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.712041977272349"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7405859753548905"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4690554681208836"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.08851573763896758"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.010218551443207602"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
