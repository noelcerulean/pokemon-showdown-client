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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4662441102999959" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.11449778964178248" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5302227650115925" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.21579214083156706" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.731349712112993" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.34076128678132145" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9270257956022454"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.471850843472305" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5934408914496552">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6489036424290093">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5645453489617083">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.06636239886163464">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.0710963691966815"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9841251341311048"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.18270990583306124"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7584473001779541"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9651249777481454"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.23980904015444549"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6214669148582723"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7721931225723282"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4840973770986159"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8146498719270838"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.050156075373652076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4189260859951731"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8764937555105003"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8757935070518466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.49840396631500417"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9281560714453789"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9310832602640591"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8982655881925441"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4841872976911945"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
