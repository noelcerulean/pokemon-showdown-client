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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6280835366904844" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6853679686068682" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.032468918684959824" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5531195600684221" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9513189151752818" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8583107766078425" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7312433212086139"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6141813982727625" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.40763799023053604">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5338903059263856">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5007898066038264">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2719053388670488">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14287518022184542"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5948803393453242"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.29990612721234977"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.543464943614431"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.671733310476983"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8580828884104492"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9256209864554424"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9666690529150717"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.618427577347861"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.555035341152958"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6323949925775142"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.0009300931388560585"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3287050677427332"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6875644792433234"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5186143372586746"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.14738274434997867"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5473724814833222"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.24611575464109392"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.11588641188252569"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
