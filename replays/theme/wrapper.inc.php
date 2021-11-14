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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.1416569304739026" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3161955722190759" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.35521342529488864" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.015253548500995029" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.06929687071113011" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.561439349259079" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.19147797628092045"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4200110236329706" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5841092835351431">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.13662193573714387">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7406275323157239">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.22146125501879133">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9054065211104287"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.552768626707395"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.14613310207330676"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.49839506646868803"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.42144777677099077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.888330932290927"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3274928160743844"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9711298086414821"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.21455819794297426"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1707070943769886"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6449031495838904"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3643355164358182"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5185925348765612"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.10058340440596836"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.04037387257279268"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9385491477713443"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5283603059721367"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9092359094753109"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.20131902211985064"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
