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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2902764070162098" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.08801834175070034" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7597300553358515" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.24068390271152462" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.22961756827242108" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.31935147502421524" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.43343878071185826"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2317377349389258" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5094717553773012">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7658552514346715">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9243168433960065">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6430839952338576">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3761990258054779"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5417399770825122"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.64286664801228"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.56474015055443"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2087466723466047"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.0684016590825316"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5481302331335787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8479185424548097"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.005923072238984695"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6993467116791601"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.21801334864663668"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9235419522349799"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6561208350274426"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3677494627159481"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5156033608031183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3662230372918107"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.45832105512584786"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.19558490557666763"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9430009975003317"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
