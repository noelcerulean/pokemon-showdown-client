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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6062683130123849" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8541275101056519" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8259307830238362" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.37150708900885054" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.03140634502299111" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4254404585674958" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5600302125049321"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6714557746081395" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8719149807282546">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9063874021383924">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.671729756887887">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6150320612612632">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.21698212671795059"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9690535454668094"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.1589107397921381"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.14267014909243037"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.17095162343163717"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.37612002298575087"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2925791747043668"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5863036796089665"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7041118632501334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9054001297901034"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2835637457308917"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.28638707383482964"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7826676115435915"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2520383305556735"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5508866337474841"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2016273728200032"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8468802451794379"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.35243698275331636"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5704916794776755"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
