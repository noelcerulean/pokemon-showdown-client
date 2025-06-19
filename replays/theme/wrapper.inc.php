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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.26563668152735587" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3046350820249497" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.24868812707121823" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2458266377085554" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.601682735264329" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9292606455524848" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9067090302665499"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6314932873130639" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6089626337984777">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3703204861380778">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7594550881811974">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.26785216863083194">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5877910929328531"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.952668920644971"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5939810264762244"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6328502641689793"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5760896995049767"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.05288794494649185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6658498293361406"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8408732939207733"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.736610145140955"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4391340146432907"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2896215351605125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8551516386880833"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6140772169382451"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.025529295828452536"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5774629155238054"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7113123104305739"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.318234855650704"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6154606914531227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.539062890677789"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
