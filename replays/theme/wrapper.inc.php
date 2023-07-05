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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8683449747807688" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4519421326543107" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9962722449313737" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.35360119782141664" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9954213329430488" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.39512023396808993" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.409427159998907"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.33866099792945326" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7765140499319294">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.40096413663967656">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.1073161042682731">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7505865981707631">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.41040655333093623"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6823315655838837"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9349996041881836"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7102097217594365"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.41611232610390436"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4981481585725154"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.867794489093684"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4657277868115812"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9224171960921987"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6834116233189531"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7539003501445096"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9420433785462263"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.10847999624659166"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8157753023447925"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7353095371193308"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4491552254484714"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.049904079176571914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7911209709628635"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.27829963038427485"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
