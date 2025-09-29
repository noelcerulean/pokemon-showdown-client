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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.15128657085278796" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3771547350218045" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.45966484565583987" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.18818725880679787" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.942951048208766" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.06334290723209857" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.0021730521040810302"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9588650342801794" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6601200537036109">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.45661344070911825">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6991900722047015">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8258128266072298">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1731843118388423"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6134907464446817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3468364372718682"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3010553758766359"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.00983489648059832"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.26931274467816646"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.18476777208337403"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.26886286559119754"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6099822482778785"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.517665071627841"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6458788802740709"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6531445416213162"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.075135358289524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.32939599471041636"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1209069907722049"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9424951951513187"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6400949118718324"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.58078620126674"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8285434112919268"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
