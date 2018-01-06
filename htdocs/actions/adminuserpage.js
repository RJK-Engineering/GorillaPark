window.onload = function(){

	// buttons
	var clientAddBtn = document.getElementById('ClientAdd');
	var clientAddFormDiv = document.querySelector('.clientaddForm')
	var cancelBtn = document.getElementById('Cancel');
	var AddBtn = document.getElementById('Add');

	// formfields
	var username = document.getElementById('username');
	var password = document.getElementById('password');
	var role = document.getElementById('role');

	// addressbook display
	var clientListDiv = document.querySelector('.addclient');
	
	//event listeners
	clientAddBtn.addEventListener("click", function(){
	// display the form div
		clientAddFormDiv.style.display = "block";
		// to make the cancel button appear, it is gone for the edit function
		Cancel.style.display = "inline-block";
	});
	//cancels contact creation
	cancelBtn.addEventListener("click", function(){
		clientAddFormDiv.style.display = "none";
		clearForm();
	});

	// adds contact to the book
	//AddBtn.addEventListener("click", addToBook);
	// clear form for new use
	function clearForm(){
		var formFields = document.querySelectorAll('.formFields');
		for(var i in formFields){
			formFields[i].value = '';
		}
	}
	

}
