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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4553301421692382" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8652140296841901" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6415457789883185" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.09191422852290199" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6715753191818774" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6335576914050647" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6453008264923139"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.58452994498927" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.19655704626374915">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6005416206591765">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5230279183196411">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.611305177281346">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5121010069312213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.05517400124631067"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.015548295800389633"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.32302086024062815"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.540122491800223"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.885698584041628"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9319874674235715"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.01598394300548911"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8897388024572896"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.16421387244908403"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.43954571769144524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8990627213628299"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4912601613570664"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2354974335212463"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7208888498257524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6479206239378548"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.006236447390073119"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.13445574332846855"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8907866217077844"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
