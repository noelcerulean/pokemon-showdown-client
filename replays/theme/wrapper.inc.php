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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4652088353010604" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6907258454713487" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8624012596022959" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.694973572151433" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.052420541769194084" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6241433784692096" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.09560186175376995"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5896840176051985" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.603593477996643">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.262068785447614">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4043874433671779">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.587140166604263">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3664798345905176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7892973430285783"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.49492906472934317"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6060152275590964"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4744256273333771"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.26015515662188493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6106886452698235"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.1749080354515702"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6455332142379628"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1402862865632417"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4134800357023207"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.49671473591395365"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.13958683111306924"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5335246119766162"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8693758797050506"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2751846389888921"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.19524522545943013"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8085680871581487"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.061860792723809066"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
