
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
			erreur ="Veuillez renseigner votre nom"
			if (erreur) {
				e.preventDefault();
				document.getElementById('erreur').innerHTML = erreur;
				return false;
			} 
		}else{

				if (!addtomailemail.value) {
					erreur ="Veuillez renseigner un email" 
					if (erreur) {
						e.preventDefault();
						document.getElementById('erreur').innerHTML = erreur;
						return false;
					}
				}else{
					if (!addtomailsubject.value) {
						erreur ="Veuillez renseigner un object" 
						if (erreur) {
							e.preventDefault();
							document.getElementById('erreur').innerHTML = erreur;
							return false;
							}
					}else{
						if (!addtomailmsg.value) {
							erreur ="Veuillez renseigner votre message"
							if (erreur) {
								e.preventDefault();
								document.getElementById('erreur').innerHTML = erreur;
								return false;
							} 
						} else{

							var data = new FormData(this);
						 
							var xhr = new XMLHttpRequest();
							xhr.onreadystatechange = function() { 
								if (this.readyState == 4 && this.status == 200) {
									var res = this.response;
									if (res.success) {
										console.log('message bien envoyé !');
										addtomailemail.value = "";
										addtomailsubject.value = "";
										addtomailname.value = "";
										addtomailmsg.value = "";
										addtomailbtn.className = "btn btn-success py-3 px-5 addtomailbtn"
										addtomailbtn.value = "Send another"
										alert('Votre message a bien été envoyer');
									}
									else
									{
										alert('Veuillez remplir tous les champs!');
										addtomailbtn.className = "btn btn-danger py-3 px-5 addtomailbtn"
										addtomailbtn.value = "Send again"
									}
								}else if (this.readyState == 4) {
									
									alert('une erreurr est survenue...');
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
	
