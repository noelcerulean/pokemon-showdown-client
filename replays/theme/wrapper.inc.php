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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4746877124154485" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6437217958532389" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.14612006775792463" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8884637815953087" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.39023180584646355" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8180616283650257" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.022670235149532925"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7027551416656714" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7238918614945398">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.14584328973934624">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6015768079191179">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4486734632101861">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6060008350725141"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8594447625700623"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5781720667827879"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.16546599676866802"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4035605010995904"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.651740780005825"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.15268515353450085"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2136793991045749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.772634724356108"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.16883121070019746"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9876051033500153"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9207182211674629"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.953967557901223"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.04153705627166748"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7993326420918603"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7484542697674039"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7781809214744035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.15848711889486355"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6814751931544731"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
