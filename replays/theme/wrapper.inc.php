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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.0018898076098530225" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9692630887337743" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.18416784307847123" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8577855883986703" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.40088886864138096" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5621263025399077" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5237947028658219"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5388116241072209" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8272672725127685">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4391362863886441">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6007759842920017">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7432976178533612">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4762400828448785"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6977093765734224"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.005690430296925175"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7519639075782465"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.32078690264312537"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6036808528392508"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3721920958821303"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.18864273537416043"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.10782354538876593"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.12834203757599716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.665258594350536"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.33005057224921974"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7289917788859348"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7217258616046021"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6985811817176302"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.15286590774312492"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6115527197161856"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4101651695896755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6291834509984096"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
