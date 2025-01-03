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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6746390326655509" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3250072853761963" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.675852813994928" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.46604210579593475" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4574629884848478" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.09834481566192665" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.30210639601777123"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5698886837925259" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4580390052588319">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3291594613793616">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7129945268518407">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5811343742540054">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.017419952066607403"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.34676465785971833"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.16795807625625137"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9608958399760565"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.27709062114638106"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4241924134651789"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7943701600369508"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.0038846317671561437"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6521506818653471"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6909090386815575"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.49701576356952937"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.44495829848830515"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.31238845045313"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9351379654641878"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.05727239614626023"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.35016533378856285"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.27746570857355546"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5874587934234583"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7423025888341461"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
