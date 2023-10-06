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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.954023601181456" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.39565207023226456" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.35698017946712235" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.41853300717522757" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4953837760669415" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.44482951056454634" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5890101911363166"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.09034191818831272" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.203862155718449">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9735425534507749">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7935330896557418">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4299946259903906">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4319052452371581"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7708822218082714"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3287820815503735"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4570791593012946"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.12008085827553394"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7166280582503632"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6264151379393403"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.28449563681521295"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3745023865906032"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9648525566068393"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4541528060162765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.02396983158799615"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.06511168311892312"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9167560321389305"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9251469479890924"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5898538312872146"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.34557916393005783"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.07572148557907665"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.11921135595387145"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
