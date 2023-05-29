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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3610749347881099" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.01739681160640183" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.44948675252597337" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.259064460740273" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9013532213804263" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.22262401695599499" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9252273079931388"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.34547919609650823" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10108741246658592">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.26636266970665545">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4108902462188677">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.28216831629920724">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8554825755068389"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5146026688189571"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.339965946837379"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4368475356028867"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6327380655097568"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.431046560623743"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.05266270174095822"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.957857201844124"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8558206722846147"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8226869091063072"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.0787135500761269"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9827651070283201"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8919212873523725"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5807502919024659"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.561728596319317"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.767024621008721"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4503181245506893"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5310755003729228"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7599401726467221"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
