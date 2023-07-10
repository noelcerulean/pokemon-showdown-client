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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.43081688848374355" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2295926875036589" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.24284522731549507" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.11638892868021244" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9463206313715822" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.962787640252915" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7258288552779446"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2885347634653974" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3638811918020237">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.255044619408491">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4791088582917744">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.48241558697908027">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9011344795176899"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6680209891856916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4192933025282961"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.31453604289104353"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6473752997878794"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6621839239880107"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.19116189927714644"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6534898570395029"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5230981196753663"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3887001579334257"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9467591141413267"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4140613042413259"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.39342522578758055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.21529283855671189"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.29758585966978335"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5171159502687048"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7488576732473942"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.42115489394248895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.35499805888072067"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
