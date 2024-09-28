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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8352654533586745" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.49427027336828977" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7855080823879967" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4262184922182375" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.03057725906559594" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4088094245685707" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.429667950860412"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6334896867436439" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3284023533352902">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8158432426374504">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6722699593821593">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5701802881477784">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6712351544860584"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7299005393790223"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5804520275348433"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7582592872769482"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.41827228552945317"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.19658846937346675"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5885618701207311"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.1474333411424733"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2104224594289268"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.26922074917024896"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.14581803436514562"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.13649991308632758"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.11519481001704257"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5559475058076662"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4540712717311035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.28045567760839396"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6828755872066123"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7708448377916051"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.21787373547043498"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
