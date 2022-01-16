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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.22027219491493844" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.618617461576151" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.11293944476300566" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9852901094410957" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.009459601121989847" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9683338448899974" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2569695358541839"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.05176326419401556" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.35828269607889096">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.0948824056871207">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3946582260435818">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6463552528108767">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6315849282840926"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8723201581894422"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.865646796018918"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2195531404576898"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.23382817136733758"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2064975757194556"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6503017737905241"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.10367578648786457"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9980366544611508"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7055493972361258"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.23761099167587263"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.23821767638106217"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4343640129622859"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9684795905627723"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5958435536982005"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5623828026565796"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.06683934034126304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.20861478686080592"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3205549076452989"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
