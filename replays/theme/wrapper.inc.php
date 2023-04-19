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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.43317724133235" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7621847716115804" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.670491221534067" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6968630379386926" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3235648028019531" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6465931261044053" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6944380135188273"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.11034632124609867" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.33384513508566416">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8536757918830946">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7962085326011388">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.08619273049156972">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.22503493929870655"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8876464128107213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7167693888067665"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1619294272803109"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7213871659016418"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.18618902491787304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5373615168901757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.898097904318085"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.0464194303406944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.697054786829113"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7126787974889945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.29324869023260236"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.30502470743909704"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6363688297229979"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6908255052522829"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4474827501668557"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.39005108250017906"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6787993593927288"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.0056593191933167475"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
