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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5632642226558084" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3934350822013628" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5944091587470293" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3510322148474261" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.1517522219498253" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6354839641920242" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3602018171227841"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.07775496574865692" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0818305439960283">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.27381256271826526">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.027629653910210328">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7087114995303327">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.09480114757044333"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.316210864973256"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3106943402642408"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3898345812752284"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9054413789682438"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2976940610439893"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.16175300003371906"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.035947969384955814"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7095882398948905"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8402464890646915"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3178920987350504"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7459965015348751"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.20738981410937818"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4762471849204519"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9150303186677424"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5612476004637106"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.560609211255086"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3043321733153963"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.30374760165913584"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
