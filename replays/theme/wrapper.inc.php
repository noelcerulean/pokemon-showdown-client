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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8094816345758395" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7140441886349633" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.742215845705338" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9359153394223341" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.16531866593052946" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2276009319140837" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.857407187769003"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.0832426494236469" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9537077220561305">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.84985032347124">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.1812014597432272">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.003447647696648737">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.24119413794727884"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5618066427078221"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9965445163865836"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6190162816654128"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9166328365719263"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.643280841616823"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.03255763944601897"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.30517183378893664"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6012151090600906"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.894201302487188"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9608332556568828"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9809087412715347"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6201682762014162"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1922786631158897"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.36276125309775575"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.855312194241014"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4523743344013287"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6520981862355206"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4392312342829001"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
