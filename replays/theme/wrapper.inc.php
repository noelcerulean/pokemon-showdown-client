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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.09289079615068419" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7455997861069805" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.930389318247268" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.06363847885389529" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9492578568852901" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9090199526362217" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8948807710002176"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.22169413668526805" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6864176329389378">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3073156894344369">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5526556281539219">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.29694218180325804">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.19658862947369848"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7709908164258554"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8964718666162739"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8381490664041178"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4831601718319305"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.06520697361290595"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.77998741561249"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.39679809777728514"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.07632371116855796"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.067223835345116"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.06402338429996357"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.32733980687550623"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.16199522225356278"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.03124016397380447"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7105470427225125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.14164860097389287"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3177181188671998"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9756712377188788"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3694801284109772"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
