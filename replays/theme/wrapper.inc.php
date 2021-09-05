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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5494375678670289" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8645012238832763" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8343636414227886" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6234396208575512" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5237172600229101" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6324308777349836" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9183333874159318"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.432593124131599" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6720513299265269">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5269391854835694">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8397456389347329">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.29518772454623465">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3728615949428964"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.2324058039163186"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4385846947735528"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.004007135633155023"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4533075118856975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.023425512456745956"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.37698698857048063"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.032882979645767696"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9337226785164283"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5727214170599004"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7766692318370507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.22574847075993398"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9876410978888412"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.21595131714341798"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.40051873637748847"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7182198642360158"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5849285446614416"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5655392048204049"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.024570824201031183"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
