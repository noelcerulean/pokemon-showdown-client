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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9961776092602941" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.11165958168748324" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.39382416347711136" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8502282658239622" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9629538413089187" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7693458701822184" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.15270544093857819"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5652827561466642" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.591967001634824">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5794723720268153">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.38649229758131587">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.06596981281924297">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8254376209180609"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8855312024803166"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9737738113415753"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4028949126932482"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9705098150847713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.19247039317765036"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.27137727118399435"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9804267355944156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.23273414562922978"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8107091257762327"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.29284807988500683"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.11715252350997907"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.603656268468955"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9114088332987074"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6080145726406219"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.46436584185782936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9974647844789306"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.1654164362144821"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8008265607130898"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
