$(document).ready(function() {
	$("#userLogin_Confirm").submit(function() {
		$("p", "userEmailInput", "userPasswordInput").hide();
	});
});