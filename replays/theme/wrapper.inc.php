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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.035108931759075146" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6017531470419026" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.21955855692099147" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5175742089184932" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4547947385116269" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8632149905479563" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.768188169315944"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.32091036927056416" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2902474239476236">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8936536296623596">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.128449267899712">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9558803069240198">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.42228683470608597"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.08745414707895982"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.14497487218744642"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3873935119815335"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.1596894780239051"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5196730861284637"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5755943351875026"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.26745919239205507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7619423960219467"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9298749461206044"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8461862754145362"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.46334591510490064"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7258260360933118"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7834477460747076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6847374281305676"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8390341629569282"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.022993860946050493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.05358134146073956"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5665457962828409"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
