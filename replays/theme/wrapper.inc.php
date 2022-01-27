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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8719069365124963" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7212670816654048" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.12845793713327636" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4151420528079999" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4964075338513416" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9455674771499001" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4116587510326668"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5538661585753994" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10025787214242432">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2862145738422608">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3258358256552336">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.12582447850335243">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9407985822907023"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5853464925731493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.11896270301995915"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6964408428841995"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.22555978107945118"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7702256808306358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.12613592895243952"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9064874711476811"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5981719872875793"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8666500658485128"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5828432821583509"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7406219194830417"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7526403553807759"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.894419264886861"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8806485855741177"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.16753330054406557"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7595896766966064"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7272919801629638"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.23931017755401895"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
