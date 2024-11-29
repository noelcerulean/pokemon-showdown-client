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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5647405290774952" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.17738859832061826" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5556707623103248" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5789474505519465" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3529910147918085" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.12599634293533812" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.39477194802599325"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.24597519436535475" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.18001764541705123">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.050222052360896496">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3768667293274972">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4817080609209572">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7530089448815898"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9498669247808418"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4015938440016402"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.07183283918000316"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6144759552026366"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8144796340131095"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.28153717790885713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.0706035543702368"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.09542432540245183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.33966962832023784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.30547213585378596"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.0008728620573703605"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9179602437453587"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6028763579964416"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.20100799382647483"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2899991139391689"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3065558928982284"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7070918908664863"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.22263977095847376"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
