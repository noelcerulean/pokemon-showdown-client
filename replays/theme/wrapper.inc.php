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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4727678850713293" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.25646437474170236" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5054608256415059" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.31697792648503853" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9733783199620532" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.42424711797688097" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.40244185304982927"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4648892267721809" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6024918007760225">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.00975786859833172">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.05590708090355001">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.14450432770293786">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8015724306498972"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.12044238629618054"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8560428660191501"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7959053582471338"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7358688919416285"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.08990435331782343"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.07637533216461168"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3614687137443955"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6070929562815051"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.0869363330463202"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6546925505148009"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4085588275039278"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.47299679652604043"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7528729221036317"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8919648369729072"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3421460927883806"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8276328296029434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7852644088234844"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5207560805299651"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
