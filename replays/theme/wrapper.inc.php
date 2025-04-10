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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.48192977375364787" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9922109441560916" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7511725747366187" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.09159602655490029" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3570916114044731" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.23914068244807885" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2713470622643015"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9884973192843602" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9071482793727619">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.05983783043749624">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8625337163178366">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3940925260501218">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8235545656500118"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4856559980634003"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2522022640761161"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.37005774793150414"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.0439667801496042"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9468838756941078"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.31068512363504386"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.12097509349328206"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5803270069324149"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2862977698150384"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6649116836147762"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3882889152082496"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.07090531078572515"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.13722006342297766"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2701076809969254"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6861725792626798"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9518530485803902"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.25827027769181843"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8890886689362985"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
