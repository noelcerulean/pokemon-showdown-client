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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8745866983364317" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3433825846173426" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.37278209227568126" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7275422451957589" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7151892568077103" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.793554994483179" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.059715682395959924"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3221342070481543" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.13860207715634743">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.22565499357132368">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2806348043528253">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3086370458218064">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.39118998355202783"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.43555942394431013"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.23101045960778754"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8106748588235995"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.301072326358808"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6506083179655584"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.769064090906344"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.16856447294433607"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.88215888201959"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.17681859791944987"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.298929631739274"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6163040380987876"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.23460291945634726"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.18929321399835364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.07916952308568859"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7093556605572513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.49766360164096857"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8627293213012721"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.08480199707435832"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
