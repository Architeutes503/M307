'use strict';
document.addEventListener('DOMContentLoaded', function () {
	
	document.querySelector('#eingabeFormular')
	.addEventListener('submit', submitverarbeitung);
	
	function submitverarbeitung() {
		event.preventDefault();
		console.log("test123");
		
		let eingabeVname = document.querySelector("#inputVname").value;
		let eingabeName = document.querySelector("#inputName").value;
		let eingabeAge = document.querySelector("#inputAge").value;
		let eingabeDate = document.querySelector("#inputDate").value;
		let eingabeGeschlecht = document.querySelector("#inputGeschlecht").value;
		let eingabeText = document.querySelector("#inputText").value;
		
		
		console.log(eingabeVname);
		console.log(eingabeName);
		console.log(eingabeAge);
		console.log(eingabeDate);
		console.log(eingabeGeschlecht);
		console.log(eingabeText);

		
		if (eingabeAge < 18)
		{
			alert("Du musst mindestens 18 Jahre alt sein!");
		}
		else
		{
			document.querySelector("#eingabeFormular").submit();
		}
	}

	
});
