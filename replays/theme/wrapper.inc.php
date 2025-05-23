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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7457648145037663" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3155757102929051" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.44453592595263913" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7482904934066514" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3324598797455296" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4072143447931915" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.42099813693074895"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3527629793226692" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.42792884820029853">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.25057547907589917">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8419371815983778">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7867510760048066">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6567735330972182"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.2764067833930075"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.11740814937881527"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.36676848174883325"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9025165610392865"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.46976730352104945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.1961534831182956"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5214814911784944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.990891849104854"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7126743563662128"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5695267739181522"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4860831926684126"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5562760102532069"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8016916807905201"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.040188346571722544"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3198136792876658"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4572875716374243"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.11249747500405838"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.052797960278326395"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
