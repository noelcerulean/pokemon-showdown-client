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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.03579075446887248" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9169910433009894" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.44874889471837176" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6775059947678819" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.23301659720649592" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8892919372285075" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.45068879957830377"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6262969004970076" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.19863687545351105">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.34027418753498306">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5390692873728211">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7291058784949498">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4054550339590275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9509055828742317"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.14603599243808651"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6995918029352379"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.38395606921464287"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6511505208384809"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7556037928809427"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5846692260572499"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.19020061402164412"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6323939584997165"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6167267620147097"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5689279649523187"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.504361814516076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5939858596391698"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1979494298547233"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.14755982877530727"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5847765816602926"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9011032985790497"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4741249133315224"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
