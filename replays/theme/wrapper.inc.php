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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7574442640993511" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8920567285132914" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5060069133536711" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2860549897571594" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.455928532415002" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9588043433494733" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.1827107290844865"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.43161233784549635" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8829240364710471">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5767439752168149">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.13143519313545338">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8616093912041072">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4445584476802209"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8462590528520451"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.977863588952316"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7207942728214378"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8163566077930962"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4657594111148464"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9444811744786696"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5694252360556218"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3003201693894011"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4591599296254403"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.29125350150163776"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9546326153918421"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3228658345948494"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.29909109060270755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1367744492413825"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.10972135677747397"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.493801505066227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6122089618711237"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9830858826090463"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
