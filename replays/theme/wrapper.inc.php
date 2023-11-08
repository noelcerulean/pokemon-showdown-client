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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.16903189943128316" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5678713087572682" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8565851903637796" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7492076111468404" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9495448579843242" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6042355105569557" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.18098727238140766"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6260302163316103" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.44818556153521505">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9980960104087224">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7226968054849252">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.17353360863672784">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9826407948858733"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8907386306199472"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8407078723858263"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1848410500360016"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.32255943630686623"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.917073796982725"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4078149572902403"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5764486869769874"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.0657614372347235"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.24330732089352947"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.04439248412660124"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.377873222184427"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4516334647768703"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.277920046835346"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7880958306982049"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8251846273677377"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.34475889929668235"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4447079871996946"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7426836005086594"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
