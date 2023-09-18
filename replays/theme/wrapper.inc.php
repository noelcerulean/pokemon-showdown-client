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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.44127810564086367" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8663906462706281" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7043365358611986" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.16621914647432834" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5942389997116195" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6295173259078399" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.43002323392667674"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.03777668186706151" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.014145659345588424">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.28504279386131404">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.26575029615116774">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.761329150800232">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4791892749529383"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.003954735251931796"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.702167723528808"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.34758578716962396"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7409158156206059"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6284480419531309"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8176760431932251"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.10872678943169345"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.640071798751541"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5604095717306325"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.22214818952873028"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9479582631111829"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3494400470650767"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9353489003457358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.31771074576459557"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5915572835772882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6123179620582"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.41104404746643186"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2858180686923071"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
