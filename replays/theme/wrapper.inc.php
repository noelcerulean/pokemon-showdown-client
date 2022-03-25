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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5354600072567595" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.13170344351784102" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6099615341565616" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6044393960291203" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9446690042080563" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9822198823597932" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2642803532088833"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2703807344129543" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.21046545516827786">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8519107898470157">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.11869203372985093">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6360228539675479">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.13631589633083063"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.627735153082523"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5062737482616091"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.42322806149755654"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9283119441936973"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9465660395491164"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5702595180108874"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.35781326527505875"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6742077353367542"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7951921506620139"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.14524820547303463"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9400650402952206"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7373447908397321"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.12986748541222082"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6189612166639262"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4620668631989473"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9537066352065129"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.636020437229269"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8727714464075278"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
