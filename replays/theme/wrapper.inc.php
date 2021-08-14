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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4353841656773443" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2863885283477703" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7429576628346566" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3875325416876598" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.44107647888655666" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7919297038549202" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.656194700709831"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3927362010834732" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9478283160474199">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.23742183060922195">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9632603195406124">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5097762685604765">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7581600798556964"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7159134111430803"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.811944929205278"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5114598248378361"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.488824270707769"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7091609585467962"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2831023339258929"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4004518517586624"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3634592834693797"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3501635054924801"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7702039189242518"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5471999722599823"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7978358888204018"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.41482605510395376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.847784697552546"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.25970279483926273"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.30797610694619304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.1539503539773388"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.718440278588393"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
