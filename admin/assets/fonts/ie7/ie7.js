/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'SaiService\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-indian-rupee': '&#xe900;',
		'icon-phone-call': '&#xe901;',
		'icon-location': '&#xe902;',
		'icon-mark': '&#xe903;',
		'icon-down-arrow-o': '&#xe904;',
		'icon-down-arrow': '&#xe905;',
		'icon-right-arrow': '&#xe906;',
		'icon-right-arrow-o': '&#xe907;',
		'icon-left-dir': '&#xe908;',
		'icon-right-dir': '&#xe909;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
