'use strict';
document.addEventListener('DOMContentLoaded', function () {
	
	document.querySelector('#eingabeFormular')
	.addEventListener('submit', submitverarbeitung);
	
	function submitverarbeitung() {
		event.preventDefault();
		console.log("test123");
		
		let eingabe = document.querySelector("#inputZahl").value;
		
		console.log(eingabe);
		if( eingabe%2 == 0 )
		{
			document.querySelector("#eingabeFormular").submit();
		}
		else
		{
			alert("ungerade");
		}
		
	}

	
});
