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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.15513504076030604" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.051680783577363165" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.732877918086017" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6539430701224931" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9305307803488083" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.15606587318388798" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.22284173256945072"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.20938338870087203" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6335936405907223">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3364993043024742">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3864485728442013">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7552968215052347">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7601073240573435"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7155424006642588"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.009588893415622746"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8439873966098612"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.32965070665605456"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9591513247701546"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3815800846903601"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4605996468096316"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2341834528880904"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5050586235321006"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5846542339191734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9442438955186272"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6691574823921955"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.03626410092084331"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9798976596789439"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5806199792749791"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9321100119994155"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8028531930080298"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5259747084917066"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
