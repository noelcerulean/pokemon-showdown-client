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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8237186596059587" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6189413442665777" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3271931556209977" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.49118872734643326" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.29607098070707627" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.16475821861290796" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6415813890494881"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9552049015678419" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8442451397835955">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.16340637462630192">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6355477959264795">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6307373242998962">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4058839549020514"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9402973904056298"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5791176572057792"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.36048712988584164"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9606411745282635"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.04056354042857624"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5984974385820876"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5738369234382787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4777198366828648"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8044669802127009"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6873694771447663"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.45964158683976186"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9925882985231267"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.09661001853689744"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9176987466909603"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5785551547476819"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8205239386290573"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6239993393822025"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.537485571656714"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
