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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7745983171029003" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.31265994500392336" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9131171105039604" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.16744382078050823" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.21468424327481506" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6800664300986461" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9511077905024052"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.08154812898170616" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.001495350141498264">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08616137623732167">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.12493384330618729">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.30095961922542624">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8436008119134255"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.24759347998688597"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3722197673592931"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3756484985373314"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2252049477617446"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4196182726332056"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6681117982414326"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.09594295589080715"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5154276119822176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6263566292546032"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.836939687801106"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4384481935546394"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.37368309210872885"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5937279129449231"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8049134045606259"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.44226088038781963"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5012682971529161"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.20714244452424557"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8928499602586579"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
