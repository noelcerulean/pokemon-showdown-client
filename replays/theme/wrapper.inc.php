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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6614905966482445" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.777775552503728" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.704815131680862" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4262514256050054" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.13990807283241824" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6629776840401533" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.1139084805049182"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.12009092149652623" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.55614680693724">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.584342959086229">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.18387177067432048">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6993418976452916">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.23092754511973412"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.22060497870522666"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.1696198173080301"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9194244110454495"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.40148552086055234"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4910427258220944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7948038354724549"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.04467019328763233"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5923033169066405"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5142029670172523"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.31985298073066004"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9209212332538921"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.103362515723735"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.17171822220786015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.058583289150236695"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.11919095904470978"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.47676472852132346"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.71410820738303"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.630748442247465"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
