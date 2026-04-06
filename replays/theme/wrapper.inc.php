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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.18252517887319453" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.26043780978534947" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.48390139264885357" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8658095472080036" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.12982541670710623" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9978510159614338" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8857560439784067"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3144148950499499" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7121033691540193">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5476201074228686">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9125879797574923">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.20775190764198626">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.009109958491641423"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8642560142430358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5745548366040754"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5637602650010063"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.22759928974735155"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4967313805700071"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.909182033345574"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.12857302604888554"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4899572978169804"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7883938049562711"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.722185975101739"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.15176848691674505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3876909003676612"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5081737972549702"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2747957294075969"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6652229344522322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.45127101222719923"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6792574469760662"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8341980035979819"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
