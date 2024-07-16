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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.07335718428581717" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4145342108189143" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5980539181097349" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.41957516615702173" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6965126098322636" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.20583473778623906" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.20946165331445799"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.33223513706535734" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8479059606369708">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9112174982888857">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9219884706301831">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6020028141178586">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8587896440916221"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.06466046780552448"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.10822043608645471"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7691250815344617"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.566314495941066"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.27439893136708116"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.19214378668175414"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5848700863814971"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6321744943784067"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.03248265210443191"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8884895196872558"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6445985204206426"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6465600598397916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.09143282096324223"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.15704925118354862"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.885180099764419"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8344332125021185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.579209165300806"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.009698422454442746"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
