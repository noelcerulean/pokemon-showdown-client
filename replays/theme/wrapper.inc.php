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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6116515245087955" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8543536422770701" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2811275729109397" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9491746945937218" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5929950637586936" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1331029269506463" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8554976502713383"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3772053241302149" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5038074531634626">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8049160458168318">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7443227695706902">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5075204304484244">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.16276682484793326"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.13906914548272864"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3826025034125491"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.46110715921357226"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6571341453833961"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.032625536624703466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.30827747962167407"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5306931442660436"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6746203179996695"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4926375548620887"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6504871194059643"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9245517496968623"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4347247059395576"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.17126723017480994"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7906165788732427"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.463566254391065"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3678599460505547"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8862759817324755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5492553935959308"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
