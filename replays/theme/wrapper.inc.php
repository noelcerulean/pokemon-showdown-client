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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2884001126138507" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2900796250340245" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7390107804566302" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9092012791306157" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.594803309845759" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7937466780252769" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6432870588498683"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.39623868975354104" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6870871103110676">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7023025123661122">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4604535595548125">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.22534501534032936">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7637247516889549"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.19946346112412772"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.24408624271638724"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9306163654268818"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.050846441308052936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4366946876758886"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.48408235290048585"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9802703777479491"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5787870982695256"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4663462758686914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2599234142166642"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.20916295069674762"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.1959289634428263"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8210024636044222"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6544701194188434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3491605728718348"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7988046643290958"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6450119242129722"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.15870252333383017"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
