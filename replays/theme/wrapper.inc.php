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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.21862793538984282" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.33004412271276573" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.36265662281019373" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.34041707197186377" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5381103168240184" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8030767531346668" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9111100050673313"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6858544998045346" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.24185579794136736">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.15377220005711734">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.29439000129598303">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2501042094197281">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8694202703366536"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6239106660583824"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3367428887252628"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08628307264477009"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3381430016357261"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9150541623947857"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.17965752686382097"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7048404756041808"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6213448078458237"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2899357533773903"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.12913107320423212"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6663115926290943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7034737167619052"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8975276924937772"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4941882115412213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7711328706645493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.35626100043076914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9672486082541281"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6158616771121721"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
