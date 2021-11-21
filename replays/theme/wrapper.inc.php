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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5380328984778726" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.090913367369444" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6346137805610117" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6461114959527083" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.10472966631289005" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3970804037804816" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.09789793491557153"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5662223009186884" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7029923470894184">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1252286448331148">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5636059062990277">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.06497211795952218">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7490830715575021"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4113715617824678"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.13320075933978082"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.32132912849978323"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.591343152907329"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5352306720531161"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.18424858958364698"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8115784423094055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4709975237388715"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9948882208563301"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.02310496745078816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.12295972003084854"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4918654446857238"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.41330707602698347"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.09343886552787817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7025223737534574"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.41670069779441254"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2895781487855196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8094648046902306"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
