$(document).ready(function() {
	$("#hideLogin").click(function() {
		$("#registerForm").show();
		$("#loginForm").hide();
	});

	console.log("Hi");

	$("#hideRegister").click(function() {
			$("#registerForm").hide();
			$("#loginForm").show();
	});
});