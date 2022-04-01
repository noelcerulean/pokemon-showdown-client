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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.20857774251924388" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9545586840609563" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.343681167235796" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.021556454773194345" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.48882653534440834" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.09792570849562021" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7158844263578112"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6843770748939333" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5444317549273063">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8284306453872632">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3873895687870512">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7725991546006197">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.926931774086919"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5295865158851094"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.10550861892116625"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3591073488321148"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.16194801479586718"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.13796154493015478"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4115424619499468"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6820008627184158"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7949593124491574"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5685125536398665"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.736082422735685"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7546859890406035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8234227521299418"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.31924203143192487"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8890858147814007"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.16572470604716005"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.809685948625422"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7094409841645672"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8290687421824479"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
