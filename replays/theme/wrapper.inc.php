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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8992140090588925" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5378500208504688" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4110161097378844" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9546331264618111" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.12620589001339355" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5226436042690061" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.979303046695744"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7900198350087133" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.565034344870873">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8260477231512646">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9756394299082201">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6116414918228685">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4079573216019876"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4732084934933456"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.822651715866529"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.0861003090240191"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.1347532155571931"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6798507694605695"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6430883597725676"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7032495432721317"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.42100935961586305"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.0823563089840027"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.40108908363606743"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8497227031036743"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.49749419113723015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5758326303716628"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7820199895650404"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.36209488283543356"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.57301211645347"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5212831848477584"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2385778626508499"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
