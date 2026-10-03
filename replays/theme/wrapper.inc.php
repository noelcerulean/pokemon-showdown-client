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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8594017495814597" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.21189096485851722" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.827145364834037" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.737881582877977" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5894216269923667" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6350927988914878" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9494240020800182"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7292431496162501" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3036944885317798">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.16796348892715662">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5168648823459552">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3202056881678952">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7508393626755407"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4123123848166368"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.44913266378035144"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3517465896348666"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3270378686986508"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3750261560587831"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.39554385420924576"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9729540330889337"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2519479823208213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4064546606407422"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3107004649805627"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.0011232084634040795"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.05039134768203635"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.26458636628380816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3043890011936954"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4392883172889366"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.29055505617097843"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.09318735348619578"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2335197210726152"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
