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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9151401054933184" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4917885994036377" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.10206705960830487" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5945686101647178" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.36465750602431823" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9072923870619911" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2747158945094035"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3214805109224368" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9925976889310832">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9302941870155246">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5429396157910293">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.45093680529953284">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4919368645084943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3944967288456427"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7594351598390074"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.82659440722643"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8000222282711189"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.22519125368100745"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6233633062741262"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8970686511975652"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4237668618028987"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5637461066004932"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.002193091738389885"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6682594100954575"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.09368690680864988"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4124604265663181"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7349595736207879"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.15781748194351852"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.13499542642912288"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.30087319386022227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5032151859987544"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
