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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3178507861127051" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5204449735839167" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8302456144881125" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5240846684234481" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.30111314342771944" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3384792346503156" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6413972077457806"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.49241167893842586" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.30493623957598204">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.49944952864649883">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6217625955476653">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6189718835607421">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.22812488452701518"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.16449076591896672"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.447574542337432"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.361582757950057"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.854710216071568"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6934498808610994"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.15792706755469887"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9295442645067664"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.42459579238739154"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.05547077183978"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6705339891654389"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.44532702472481667"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5062750988649629"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9882694554481681"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9069046477359068"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6876412205685238"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.17862313501556093"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5346417526843179"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7541611662392185"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
