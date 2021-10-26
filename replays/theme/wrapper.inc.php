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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.12514171893535586" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.029687515724382996" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.49993733708679855" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.03863268415731813" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4484570048919019" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9280536876632388" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7664800115794463"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6260796235477557" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8370934362560178">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.03409725367899141">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8790209591219493">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5010920064432347">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.925565189539975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.10697429991861362"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.05756318251851966"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8254213065667562"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9933247732558139"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6680619148579188"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7362917555458641"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.800094825987905"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.0891407013392238"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8480780139091626"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4167662437450752"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5714827933816107"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3377397873189383"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2255339610971625"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.382931000461165"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3751895705774069"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8582928002337749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8221608893000008"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.42646067073783533"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
