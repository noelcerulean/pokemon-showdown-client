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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2209225498783276" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.430998163107045" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7968557612713478" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5807159175215515" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.47479285619073575" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5313688987561591" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.06670735804084149"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6499339637633736" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4886185873327358">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5617591537213036">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.09088312350841732">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2315666246228174">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7745854753461807"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.325672826882492"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8888001994279404"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.33842669727955976"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.17886490788263076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6783032225435826"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5708055581476446"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8075956037421117"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.052551903723504934"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5017000751787757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8739755538553748"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9111225264728842"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3963910732317548"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1159369432880113"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2877753011351951"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.14848571365051333"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2131283698384998"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7983019188126805"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9643453415723988"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
