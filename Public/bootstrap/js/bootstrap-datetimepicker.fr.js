/**
 * French translation for bootstrap-datetimepicker
 * Nico Mollet <nico.mollet@gmail.com>
 */
;(function($){
	$.fn.datetimepicker.dates['fr'] = {
		days: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"],
		// daysShort: ["日", "一", "二", "三", "四", "五", "六", "日"],
		daysShort: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam", "Dim"],
		daysMin: ["D", "L", "Ma", "Me", "J", "V", "S", "D"],
		// daysMin: ["日", "一", "二", "三", "四", "五", "六", "日"],
		months: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
		// months: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],

		monthsShort: ["Jan", "Fev", "Mar", "Avr", "Mai", "Jui", "Jul", "Aou", "Sep", "Oct", "Nov", "Dec"],
		// monthsShort: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
	    today: "Aujourd'hui",
		suffix: [],
		meridiem: ["am", "pm"],
		weekStart: 1,
		format: "yyyy-mm-dd"
	};
}(jQuery));

