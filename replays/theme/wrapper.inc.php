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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9883778609230591" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7015671662331424" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.58426318832393" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.08877446534891265" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9887357345835477" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.029411902716394822" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2510442411845808"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.270203830179194" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.18550564818216841">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.16280344314158368">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.09489943022236624">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5690574200335663">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7302032946758301"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5490676946001534"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2994802569947892"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2034318392133252"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.84530933240724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3492725738827984"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6622364709761037"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6308848044726272"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7029893081614891"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6337262020922028"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.36043170724896534"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.06462346714027256"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.35198439230936907"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.68100999517993"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6670599423978794"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.45732622663773226"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.0456582104798855"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5186903450736076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5531622184879534"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
