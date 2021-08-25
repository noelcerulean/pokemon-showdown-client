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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8350814106823554" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9339296127912846" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5785303929795582" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.08224015590007339" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4199391503757457" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9285279005865692" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9761615394688417"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7401659084320087" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9826804097081712">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.0835084112106852">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.38182920930517894">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.578870878059391">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5823418351852678"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9427648710510703"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.34104456892932933"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3219791597126789"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.48930257204011673"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8640603954496515"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9748381795349108"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8148795311100432"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.866939658755385"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6537116366336295"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7848715420606045"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3535998115280683"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.786467475462733"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6416269799547749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2552092281422782"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9015066641688396"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.40440484886312444"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.30604956256721483"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4493008082993435"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
