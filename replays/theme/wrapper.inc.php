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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5547929629191577" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.31493638038871596" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.89899900217621" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.642103203972259" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7139851993483055" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.704645353727656" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.04728103370602632"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.22881120579083647" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3971842914543724">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.36168134383029926">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3061030467035888">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.1243588985491293">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8532345946378337"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8467685121538142"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6108543420136061"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7812336102868929"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.32205605969005413"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.0862733738520145"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.02212873185339692"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.36393920266561075"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.03693059923035169"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6454372337978209"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5065895532618119"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.49757198801028846"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5531473696834541"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.547817885305022"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9504823623939631"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8258906211752601"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8051590836287892"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9092391681344756"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9258614535652963"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
