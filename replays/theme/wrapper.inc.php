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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.020660523169229617" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8212606357500007" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6675034154137223" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.36129214085346373" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9167270791713222" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4722332722578295" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9929832725293313"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.999358352749943" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6964766623816523">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.31725717926448227">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2925719812592549">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9149813586518678">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.07253881650194316"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.23316356684739015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.351336293301334"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.27860285578027866"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6125914465836566"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.47329326097972957"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.556173851528786"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.03575086520569859"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.22758611897877712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6330455026668325"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8730291459701991"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5756575978301084"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5287327521868757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3983787828935912"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.32837721273215914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6452449060788883"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.02425324499801529"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.537287612708149"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5450892468004744"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
