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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7032750568808537" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6629445489358874" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3464720570719071" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2802666084520138" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7389357845077256" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.27509233214623086" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3814832693570389"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.285131267844686" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9877531330781222">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5909543202354619">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.27873816192547696">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7290648718776311">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.748417527590681"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6691410161863993"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.28575722777885293"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.951290615797979"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7124906837802734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7942174145500045"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4554629370924894"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5601504075724972"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.1938899505721865"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5163814103962985"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2779725728218587"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.23611974689005377"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4603663750491309"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5506652320337126"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.040878766837613156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.48851418285700876"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7700780268563308"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.13816578474165553"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.1667369365790632"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
