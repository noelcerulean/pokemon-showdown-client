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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4062024603155787" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6058534853375286" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.04657685339383799" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7354479044212994" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.1881887351762348" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8366477909834902" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8522497695791382"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2014646826149864" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16598865564530252">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3739397853342121">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4987695265660499">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.21931232148394542">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3332642404628514"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.23319892155778676"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.291371362497143"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1997182676663618"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.41825462255914814"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.963455639123225"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.003993345748772192"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3734584638044742"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3531379722847079"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.046160466118803756"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.200006888491558"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3047561007095416"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.957218829650953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3015664770411892"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5513077029570652"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.18985854859605156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.0025738166020952136"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8185038425641782"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6811053154476161"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
