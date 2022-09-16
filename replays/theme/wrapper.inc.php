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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3383660351591977" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8755171191289508" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3790378382947144" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3108635911448616" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2757030017823021" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5629544971115259" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9547618789995109"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6068059201954592" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.19687871511715627">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.035890176894615156">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9040038419087459">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8763678139166724">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5716697673444682"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.46945059773227626"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5803382987585399"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2696829632429978"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6057733644472867"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3888120341931054"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.605351136245982"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5433416899348469"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.38633769146545704"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6291240793384847"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.1600983045447213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9668243520209023"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8845317648033189"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8996648730845154"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.04932165541795275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.523772648022176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6923458853425455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8988002320979596"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6999797691162661"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
