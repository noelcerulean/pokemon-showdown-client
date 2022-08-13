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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.05217470153234327" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.05362312253172741" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.11847628592859927" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.05778778956561759" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4495364891108873" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.49502504030206773" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.21675351020538236"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.13986246755482257" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.00715912384847317">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.0870031362263688">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.895298951601464">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.10423623483957445">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6157296161354482"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.029068529835112766"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6362152360637825"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2475118166525243"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9037567949257796"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3512722858811441"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5663236595185657"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3334186804948216"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9780330954826713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7974006399029472"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.27452450246566173"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8424330194479503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5595337296024256"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9991633479315682"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.03501623496842221"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5708679431625463"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1353277826968764"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.03676637723660647"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2052924778605234"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
