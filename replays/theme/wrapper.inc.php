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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.23552562441860148" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7986952219917918" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8045624782309084" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.45404189347131396" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8698517565592185" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5280275557852931" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.10995808506471128"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9086895527239824" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.032620070910339916">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.10022842578252189">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4413539623160587">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.02829449550058416">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.11590831467547358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.899910567770126"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5560893367928663"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8682090893736376"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.053324027801188834"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9673205783009025"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.02974319346267995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3112450538079998"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5970631618583522"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7608614068946864"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5490748689316483"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.36410654493700645"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.23143350081486314"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6596853504456659"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.17935606753614008"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8970736715377303"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6019007351034631"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6638493343535585"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7004677656622094"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
