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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9235193322994579" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8051733936423986" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.619553892376763" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2023003563756316" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.29759989748202176" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8820826551934846" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.62980080245572"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.12102298348685103" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4980613888498109">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.768283921217281">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7352515492086509">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.1968638053852323">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7023542214044749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7249371075266451"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8604184194052964"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9048144232670126"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.07846178857202246"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6928122355232347"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.18782169622035005"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.08781094439420767"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6992580394386472"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2843221340760016"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2738657881703437"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.06462563498290219"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.42672303117214816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.0437524870605186"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5805094179569641"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.525553118972246"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8816856088247469"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5552687538341248"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.49906719491056584"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
