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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.482502021492782" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9945408535562001" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7050349942329943" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.40778376279143735" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.13841593240613137" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.09076659205290505" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8367358308297004"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5419059152228793" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4617611368810044">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.029110668219966884">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2601734641297311">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8293073855532946">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5821604746742259"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.31660223765718953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6888864582253891"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.27034945990438786"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7218779687023555"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9935824887988005"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2134906575972979"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.24888646197245712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5469196462413386"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7355390861520945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4256813957905168"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.35437304249609225"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.18668855426139896"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5128029539297676"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9180850123704487"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.649387932613414"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2416062880658476"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7020381877067252"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3213869166338559"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
