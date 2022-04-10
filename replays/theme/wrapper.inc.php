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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.03979220115412474" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2694368734349608" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8717077458242712" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.23030157440492705" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.97882784869798" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5467466467935926" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9917886911535243"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5802600246854259" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12047880502666874">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.20409783646003254">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9619451596707855">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.46123763380093874">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14796467390420998"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4956087083896217"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.642969846537564"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3470523965690808"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7313523625349507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.04206191429220141"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5515965506352802"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4923386545712809"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8432175092783201"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9272786698830651"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6088052547521334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.11777966125827088"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8243420528964531"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8225482850034131"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6708004074807918"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7552426720444361"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.24900654950914558"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.453785960916091"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2996087107580392"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
