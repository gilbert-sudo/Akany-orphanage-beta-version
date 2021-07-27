
var erreur;
var addtomail = document.querySelector(".addtomail");
var addtomailbtn = document.querySelector(".addtomailbtn");
var addtomailemail = document.querySelector(".addtomailemail");
var addtomailsubject = document.querySelector(".addtomailsubject");
var addtomailname = document.querySelector(".addtomailname");
var addtomailmsg = document.querySelector(".addtomailmsg");

	
	addtomail.addEventListener("submit", function(e) {
		e.preventDefault();
 		// validation email
 		
		if (!addtomailname.value) {
			erreur ="Please enter your name"
			if (erreur) {
				e.preventDefault();
				document.getElementById('erreur').innerHTML = erreur;
				addtomailbtn.className = "btn btn-danger py-3 px-5 addtomailbtn";
				addtomailbtn.value = "Send again";
				return false;
			} 
		}else{

				if (!addtomailemail.value) {
					erreur ="Please enter an email" 
					if (erreur) {
						e.preventDefault();
						document.getElementById('erreur').innerHTML = erreur;
						addtomailbtn.className = "btn btn-danger py-3 px-5 addtomailbtn";
						addtomailbtn.value = "Send again";
						return false;
					}
				}else{
					if (!addtomailsubject.value) {
						erreur ="Please enter an object" 
						if (erreur) {
							e.preventDefault();
							document.getElementById('erreur').innerHTML = erreur;
							addtomailbtn.className = "btn btn-danger py-3 px-5 addtomailbtn";
							addtomailbtn.value = "Send again";
							return false;
							}
					}else{
						if (!addtomailmsg.value) {
							erreur ="Please write your message"
							if (erreur) {
								e.preventDefault();
								document.getElementById('erreur').innerHTML = erreur;
								addtomailbtn.className = "btn btn-danger py-3 px-5 addtomailbtn";
								addtomailbtn.value = "Send again";
								return false;
							} 
						} else{

	

							var data = new FormData(this);
						 
							var xhr = new XMLHttpRequest();
							xhr.onreadystatechange = function() { 
								if (this.readyState == 4 && this.status == 200) {
									var res = this.response;
									if (res.success) {
										erreur = " ";
										if (erreur) {
											document.getElementById('erreur').innerHTML = erreur;
										} 
										console.log('message bien envoyé !');
										addtomailemail.value = "";
										addtomailsubject.value = "";
										addtomailname.value = "";
										addtomailmsg.value = "";
										addtomailbtn.className = "btn btn-success py-3 px-5 addtomailbtn"
										addtomailbtn.value = "Send another"
										alert('Your message has been sent');
									}
								
								}else if (this.readyState == 4) {
									
									alert('An error has occurred...');
								}
							};
							
						}
					}
				}
			
			}
		//fin validation email

		
	
		xhr.open("POST", "./Admin/php/mailbox.php", true);
		xhr.responseType = "json";
		xhr.send(data);
	
		return false;
	});
	
