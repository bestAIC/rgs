"use strict";

if (!window.console){window.console = {};}
if (!window.console.log){window.console.log = function () { };}

var cookie = getCookie('site_viewType');
if(navigator.cookieEnabled){
	if(device.tablet() && ($(window).width() < $(window).height())){
		if(cookie !== 'isTablePort'){
			setCookie('site_viewType', 'isTablePort', {path: '/'});
			window.location.reload();
		}
	}else if(device.tablet() && ($(window).width() > $(window).height())){
		if(cookie !== 'isTableLand'){
			setCookie('site_viewType', 'isTableLand', {path: '/'});
			window.location.reload();
		}
	}else if(device.mobile()){
		if(cookie !== 'isMobile'){
			setCookie('site_viewType', 'isMobile', {path: '/'});
			window.location.reload();
		}
	}else if(cookie !== 'isDesktop'){
		setCookie('site_viewType', 'isDesktop', {path: '/'});
		window.location.reload();
	}
}


window.addEventListener("orientationchange", function() {
	if(!device.mobile()){
		window.location.reload();
	}
}, false); 