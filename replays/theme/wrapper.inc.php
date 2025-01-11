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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2277326069245602" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6643814233448606" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.19594748431993558" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.41445743392402834" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.24590008275685027" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.29542066123796507" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8151690540784031"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.696908970084611" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.33234229302996865">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5740770648881683">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5354906688287271">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6043948537459203">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5957226209233928"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8728113012772849"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5276040736951364"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7742150567125425"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.27661884201305087"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.22606166882523926"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2505792673520839"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5695017465336192"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.32539981726248235"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.07912121283620022"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.09504084258621193"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.17663218133761904"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9580865801079863"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1785913658289371"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.48669679667595256"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8886878130163274"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8187301524469675"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6732619545723251"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6114623403597979"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
