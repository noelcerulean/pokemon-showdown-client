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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6067361791401005" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.19398105125194998" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.02303334284514036" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.30951386477937914" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2103821630634013" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5562685674530499" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.11385090956366373"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6156512568010377" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.44380544924113097">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3567800183444698">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.796010002987815">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7255522204489075">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6425519986168322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.09615886461383538"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5763683539974631"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.17446728410249568"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3393394844528028"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.23709348159358412"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.029328874281352446"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3926839082100986"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.43489552117824726"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3271303588652179"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4737745847720891"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.2483948568719927"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9137932877965553"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.984311363432725"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.24696960168671755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.28500253530954067"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7245405682911976"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.708891662287022"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.676344708143876"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
