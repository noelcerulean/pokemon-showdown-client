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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.897466168498561" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6721889172131275" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7607417755845682" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2256461788941695" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7189481572432508" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.46159064392397675" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.07061956645755063"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3519817880107481" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3262028822451404">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2934723211082404">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7122826198958851">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7761017362786562">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2213772872249531"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5573328066085923"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9659678047910618"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3923950332988011"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.405004853651056"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.710268820661961"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6680192320953848"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4828732485383971"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.16656958788189224"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5324643670872156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6067183286548739"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8209395116272156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9640870987036436"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.48478106828031287"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4026834879822685"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.34119251944632656"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4805971734573822"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2548251661576222"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3188808465318087"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
