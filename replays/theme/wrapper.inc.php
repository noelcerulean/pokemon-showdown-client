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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.010609069919399916" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2855719732521238" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.12802093262444503" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8884485413721956" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4179982732551468" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.88778059706488" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.447218057802931"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.44013927950760756" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7043159858405528">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.022063702940495755">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.040366141006966005">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5799610146947047">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.780943197093789"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3122352494341971"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.14625330896136113"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5093154800055681"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5618378113839344"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2876770813379035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.32098657841175426"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.465881040688932"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4989415830157775"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.40705125071303017"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.35197309291972934"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5382979791094595"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7368433994536259"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.53506430871086"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.32436471028216385"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2717908166306513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6677552147003767"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9888845767162164"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.624352786690374"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
