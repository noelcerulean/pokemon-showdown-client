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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4170050758043966" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8670658132228537" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.1970360899730461" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.013382664367891817" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7976446138628264" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.39711232993821644" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.17735737794344741"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.13057892473414423" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.20131042577082536">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.27256039862191606">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3504106029780141">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9369126500888088">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.051821080577594714"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6931888255804173"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5382948173157269"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2557751507320365"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5908818691744273"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.15518044751660343"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3607269435400364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5208125108378292"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5661777602399813"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8228233787348675"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.908302863512541"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8993359636969578"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.10441649892781601"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5430543979237628"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3543672315009989"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4226374316564032"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5399540349541125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.012969004619711955"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7192489138314242"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
