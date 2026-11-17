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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8624894088339923" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9301123300431342" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.13639152806236932" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5722177468958562" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.11718495814761565" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9436302772129385" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2327214293141111"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.08735535869880018" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.689313008321831">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1303710376188768">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.655920531024199">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.24847444573573352">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9294007372138093"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8392236254403866"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6622827736158031"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5524341995777412"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9741549331323196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7983593607479597"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.31098073470460397"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5150090456787269"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9349696799500201"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7093391237331697"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6097864838516869"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6782681365423843"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5943713977770608"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5486933859018832"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.25442365812785195"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.0772096955091034"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2969863558583822"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6820410421812366"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8038326722362036"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
