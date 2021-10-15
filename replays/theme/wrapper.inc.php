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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4623167453456192" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6194488808032546" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4710374550701115" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.952087174042999" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3179111305158746" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5976792852610555" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3671266537266644"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9817641077843808" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9708725652375172">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6094961910713306">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5102119325054428">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8988062108454102">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.24314872675287047"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7700958387062782"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8387116406489483"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6865911168654923"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5374046493721232"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.22569312134899389"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5128363608914241"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.020623654028797844"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8808072095025552"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7207609846822944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6198601458751594"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6240266235195935"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9313098113148306"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2593773844652256"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7495519015613719"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9277966097002273"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9193107752097125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3823271278303422"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.34020660707074946"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
