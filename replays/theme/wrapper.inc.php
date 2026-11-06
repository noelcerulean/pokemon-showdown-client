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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.007011316264720402" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.39005354566355876" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.25295676421960145" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.13983333149966837" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3053336353763254" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6886883814214642" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.060781829947949784"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.45082733625110993" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.970406236379369">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6372444816657995">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6019479936650308">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6242194953228061">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4059887389802893"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4287483197990032"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.18061341534525366"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.05781952161440562"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.18551970252841488"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.20386136579901748"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.336566245836842"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3733921337696402"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3081308935620274"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6184309195496045"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8902424812955696"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.2929606695121688"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5892036258297744"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.512913271507064"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.029599198161335716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.05400187198901485"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.27093831408446456"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.14141147431752898"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.27012969752960236"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
