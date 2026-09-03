(function () {
	'use strict';

	var header = document.getElementById('site-header');
	var menuBtn = document.getElementById('menuBtn');
	var drawer = document.getElementById('drawer');
	var overlay = document.getElementById('drawer-overlay');
	var closeBtn = document.querySelector('.drawer-close');

	function openDrawer() {
		if (!drawer) return;
		drawer.classList.add('open');
		overlay.classList.add('open');
		menuBtn.classList.add('open');
		menuBtn.setAttribute('aria-expanded', 'true');
		document.body.style.overflow = 'hidden';
	}
	function closeDrawer() {
		if (!drawer) return;
		drawer.classList.remove('open');
		overlay.classList.remove('open');
		menuBtn.classList.remove('open');
		menuBtn.setAttribute('aria-expanded', 'false');
		document.body.style.overflow = '';
	}
	if (menuBtn) {
		menuBtn.addEventListener('click', function () {
			drawer.classList.contains('open') ? closeDrawer() : openDrawer();
		});
	}
	if (overlay) overlay.addEventListener('click', closeDrawer);
	if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
	document.addEventListener('keydown', function (e) {
		if (e.key === 'Escape') { closeDrawer(); closeSubs(); }
	});

	function closeSubs() {
		document.querySelectorAll('#primary-menu > li.has-sub.open').forEach(function (li) {
			li.classList.remove('open');
			var b = li.querySelector('button');
			if (b) b.setAttribute('aria-expanded', 'false');
		});
	}
	document.querySelectorAll('#primary-menu > li.has-sub > button').forEach(function (b) {
		b.addEventListener('click', function (e) {
			e.stopPropagation();
			var li = b.parentNode;
			var open = li.classList.contains('open');
			closeSubs();
			if (!open) { li.classList.add('open'); b.setAttribute('aria-expanded', 'true'); }
		});
	});
	document.addEventListener('click', closeSubs);
	document.querySelectorAll('#primary-menu .sub-menu a').forEach(function (a) {
		a.addEventListener('click', closeSubs);
	});

	function onScroll() {
		if (header) header.classList.toggle('scrolled', window.scrollY > 24);
	}
	window.addEventListener('scroll', onScroll, { passive: true });
	onScroll();

	var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	var io = ('IntersectionObserver' in window) && !reduce ? new IntersectionObserver(function (entries) {
		entries.forEach(function (en) {
			if (en.isIntersecting) { en.target.classList.add('visible'); io.unobserve(en.target); }
		});
	}, { threshold: 0.08 }) : null;

	function prepareFades() {
		if (!io) return;
		var vh = window.innerHeight;
		document.querySelectorAll('.fade-up').forEach(function (el) {
			if (el.classList.contains('visible') || el.classList.contains('will')) return;
			var top = el.getBoundingClientRect().top;
			if (top > vh) { el.classList.add('will'); io.observe(el); } else { el.classList.add('visible'); }
		});
	}
	document.addEventListener('DOMContentLoaded', prepareFades);
})();
