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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9678027757178118" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8955896099750742" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4645634165082826" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7067827169212471" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.36382968683306105" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8048844522579357" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.42626416598970107"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7294854045259318" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5286347050948348">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.16211319920565193">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.018950422318786186">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4913573640226434">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9105855897294663"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9052739679281756"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.281579527439505"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.06469902362342528"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5637346249227457"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2707115139599887"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.17518984981307595"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9397441861351832"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9290380708974959"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.28796784067196324"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8434875549349672"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.25340364805344184"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.1691093130415855"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.015299488090362079"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3441077995656989"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8238287610502424"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7713022602353456"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9841904548839981"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7526627770447032"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
