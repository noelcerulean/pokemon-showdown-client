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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.40913788003268725" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5135769433060189" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9496921416647848" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4563748858381975" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.03562385534517065" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.43848550950305243" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9282243945600797"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2093026230361279" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5156959724555237">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.33614944276228287">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.09552023303183388">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.49340762952886763">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8688180112824107"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.44969222844971"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4963847186420183"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8382695739069679"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5561778731248286"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4650259241218888"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.08858739574413743"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7781394303643487"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9933127387491409"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.47727218425101414"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7616470188881015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8280730746501668"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.10308147007220447"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.022958373883579686"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8001806528113342"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6771811714349976"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.006673976877772603"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7575048715905028"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9422300092031177"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
