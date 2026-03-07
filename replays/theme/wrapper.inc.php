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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.24901091978366652" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5209009344547744" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5125446588800999" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.838146545457034" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.04054526974485051" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.22488771629965254" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.41400091072317613"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8284576556110206" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2453510179788514">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9495278717052524">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.10631332868830357">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.10471546041263768">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1163768899625135"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.27474013032244815"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7298492050194243"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9913449293427246"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.17501740708120384"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.634499245985088"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5177093791638139"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6903880342638795"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7985887491477894"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7860233438948958"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.08985007660695143"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.409845198888968"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6806629681162022"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2077314797678611"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9601876059834431"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7429270142805502"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5542572467188938"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.17106426884399561"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.14307469247759474"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
