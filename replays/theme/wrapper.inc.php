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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6485957870247374" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.039907261604059" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3900453820376031" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.11539655383929759" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6050493590084867" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7404370582137911" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.991551381884332"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.695688598912072" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3039575825076184">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4647153062967746">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4300034442914451">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.38239270124052727">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.605539868099005"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3453737062132076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6718478689737786"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7087618442697232"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.11206662759510655"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.866183692821199"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.77072072227705"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.48803620231818723"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.48911854838030067"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5428410224532074"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4409245881859811"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.0353065669158561"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4169381946958042"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4669574593410186"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.23042919104698534"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5047816989510301"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.12559158908458645"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7692699907077758"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9802305839115459"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
