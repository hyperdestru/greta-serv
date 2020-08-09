document.getElementById('button-menu').onclick = function() {
	menuResponsive();
};

document.getElementById('menu-close').onclick = function () {
	menuResponsive();
};

function menuResponsive() {
	classie.toggle(document.body, 'menu-push-toleft');
	classie.toggle(document.getElementById('menu-responsive'), 'menu-open');
}