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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.588920070311945" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9505785259630772" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.29815687695800963" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8777457921509197" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.27418290583500093" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8731861678140318" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.24081833852676837"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5976503467255179" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4562080882379189">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8431394379042212">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4462371846334021">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.27481137388030397">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9322298591725366"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.03731484778421246"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.47332473006160813"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4500324742763566"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.49450283708781306"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7075028087638864"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4767011038496425"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6140358830578032"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.04104100806895605"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6264581940759426"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.07325932016729197"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.29755914150521545"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9549706776543923"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8323077472275768"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8311239432922752"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8651188447529017"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7004134333450038"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5185351271805285"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.19984257446780473"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
