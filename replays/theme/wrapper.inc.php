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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.32574193559378606" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9681819349810121" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9625869183025584" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2022043701535332" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.23573362546240095" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2999610022245265" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4262313980408341"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.26169733850331434" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.42424979967595955">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09403755817030657">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.995813911032952">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.20684657341354007">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.023913836108691244"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.2924274765833681"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.02042118179410246"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5125745296807482"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.47815227341592825"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.47872895182398034"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6106086507007664"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.11846017490863758"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3112084631150389"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4636695567953153"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5983700306215667"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.2616735312052876"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.10742971316199412"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9579960909952463"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.48348970221232834"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3499692489514439"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8602298490777276"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6347021049951207"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3448680816412302"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
