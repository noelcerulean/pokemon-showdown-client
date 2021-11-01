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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7427698893373231" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5117695619964362" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.15376426022061285" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3622004952762097" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.0436467457482248" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.48864748075253694" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6916765901949178"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4215178079344264" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7756549252228495">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6785448793317383">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4778466305875897">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.21746777011624396">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.38331177079681766"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.571625325765899"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6910909715181737"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2131886576221853"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.32982371099898145"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9876700184160814"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3279974438761786"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6048877490573625"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.07840166857211672"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.23905190265403897"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9278405628397322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.23171495455192814"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7755351142810489"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6064903021804176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7868253684842372"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3114812511821936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.742540505145812"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9860622946961446"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8284008011314956"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
