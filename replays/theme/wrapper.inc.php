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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7401149168857204" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9085335580329461" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.019872941534700317" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7245403923894815" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7304214269709497" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2764355266770604" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6963853009486631"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7029124831030695" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.699304067853145">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.510548533065579">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.33173077057755274">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6356827564949306">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.588735267940975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3855013059136114"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9580471521576501"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4422922016981845"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.005920830177038816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.31216707794396026"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7086620307615137"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.37737472080912804"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7443326020102243"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7286885253198394"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4844920001931481"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6951917966153724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8006558423077392"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4661115456200824"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.31296848306772085"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.13262522534578003"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9057418807415305"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.009799095189659823"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2650287926737551"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
