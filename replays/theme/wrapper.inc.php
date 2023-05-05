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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7158791608087474" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4857724544500075" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.48357208856631106" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3258541026077315" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.38061991790908034" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5322717103873511" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.24534414335369759"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5364847480584694" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9779057864827552">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3372503692974864">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7572337900424351">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4022544554726899">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9637983225313183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.1277203191772729"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.10452494621032793"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9145418184036087"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4304028297553182"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5366813006443785"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.03315138034301035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.30179474333501455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.07732514616013741"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.862651528032838"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8943628277224764"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.08043315108276605"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.33387036859367525"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8553251750298951"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3266773057098944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.24660297784171337"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.04630475088713348"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.973057008293198"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6595745506228547"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
