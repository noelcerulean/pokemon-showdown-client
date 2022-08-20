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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.09411305915187373" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.07288524500708737" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8464700961723579" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.30255264389901204" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6329835913150546" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.32396790271895903" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.18093286394534958"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.0860938330662453" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.22853315009451514">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9972348007173168">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2338460674924825">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6096460039374467">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.34305929398123713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4365567732624236"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6270436759030498"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6778747303443793"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8924919261890134"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.09415284633207532"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.1615519324463357"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.219254498079136"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2922039459073156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.689828128765571"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5034335230958131"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.14290071508124846"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6519248497515868"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7394849356479316"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.06156791206838119"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5090300071817313"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9978050528975493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.0798266424396199"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5764254892988652"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
