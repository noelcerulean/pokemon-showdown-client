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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.38477336381804217" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.12451753908253371" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5986244549852489" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.34873186033141645" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.320632406709773" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8732708491663923" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3986158275833107"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.21631354787142043" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.05799083397807281">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.33767741163721343">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6032907678074197">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9239571246059144">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3714122967465756"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7839408494411744"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9617662884168361"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7104526215228926"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2505115289092008"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.47180063138905104"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2335882201623991"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.12807040091596145"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7881881980064727"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5864056940505489"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3667967329935675"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9489765432818968"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5361861169029505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6308955970184544"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9527399368379719"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.27028871669075105"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.32007359301391003"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.16303518297597397"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.022942243877518642"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
