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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9509664417836972" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.13611500116116715" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9073884756654922" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.16442678893014318" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.16681145546503195" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5361120149561553" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7116826873862225"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.37985305403781067" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.03380726262030498">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.007719922985878425">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7944197366039862">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6868300910328242">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.20454553553672028"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.1278404869143146"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5653241297079648"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6141598435260534"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4716610262371528"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6421335050363048"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.0388732949212276"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.12489756308851341"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.39232199750754515"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6846928395648744"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.01359948905170949"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8761082051709133"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.38417881793085695"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7451182887043113"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8623857499854288"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6396115728292016"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.17206267428394062"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7940212809287777"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7578185970353668"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
