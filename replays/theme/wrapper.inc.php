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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.0913026814644946" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.591933299912657" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8463578636251787" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.026557122324997184" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.594802293057026" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.576687103677723" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6084224656890767"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.717166990027311" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8549374297816263">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6125606231319116">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3537854089452499">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6727293033453934">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8731519175358624"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.14888946231208244"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6751641432284612"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5895042550466019"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.07864155532941153"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3121603490470093"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.10740461978745008"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7929108880552775"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5034941813910188"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.43981721743911883"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.565129444408798"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.36831554698088054"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.56456808670612"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6806421731318029"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.880975111967151"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3091958764095224"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2406904190963235"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4568222790419616"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7282575308356369"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
