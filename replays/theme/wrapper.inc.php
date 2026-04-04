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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6026397064692846" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.03976327173106897" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6708479206273255" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.29354964695651886" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4227483927460076" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8760680888567607" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.06835479895238206"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8299368793605764" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.007705064929910188">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6028622760696833">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.16228290747455887">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5918694903865167">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6593281136710525"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3944125602526991"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8173924821626786"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9228909434647563"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.21150422615582531"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.33110088791882575"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.826217614763529"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.21738680494140206"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.1291471445800707"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.21162797534665811"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.977054229476803"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8615169602007846"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.18083787378997251"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5286077808517269"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5316569958873321"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.42716614998562297"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5299872620619437"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3459723826493659"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8399469890758853"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
