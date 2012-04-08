jQuery(function($){
	$("#tweets").tweet({
		avatar_size: 32,
		count: 10,
		query: "#BCBos",
		loading_text: "searching twitter...",
		refresh_interval: 30
	});
});