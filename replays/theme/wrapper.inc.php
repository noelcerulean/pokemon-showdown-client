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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6385317641784558" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8693905636078474" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.29423453971044977" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7506224317077499" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.06788439774144073" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7949156883258086" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3748411563769678"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8779213969631989" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.30690013703813857">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.338162299594728">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.08100760576083199">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.10606960628210715">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5744775070551806"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5471150894744434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8564417083407894"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9636888064053111"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5982132799383304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.04921107135647418"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8627790554360635"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9464903036338654"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3834483980819898"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3025870160536448"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8748798298910534"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5716547969968329"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.12141326942072572"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6127638898857848"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9282625235650073"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.02693670596987774"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7308720724501341"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.08238144633936728"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8289249512466057"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
