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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9967761401115931" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7472967351496718" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9210724437892381" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7681192830912997" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.047780053376013765" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8896422587128787" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6928936684958367"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.181225834752889" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8119327206499591">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.06156026501431744">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7406982767983943">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.41060577111991536">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7762839879032213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.08490308844849181"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.23558127101907922"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.34401112137527945"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4828212409121251"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.27624289935371693"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5258557478438419"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8594401013934152"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9996262367305027"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5957201399774716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.09115963438048369"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.14208443999953002"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.11224999265307911"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3158326634324713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4665996111383979"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9104403027958266"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.11828857667917614"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5603691899133718"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.19538684339366363"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
