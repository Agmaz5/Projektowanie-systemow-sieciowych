
function confirmLink(link,message) {
	if(confirm(message)) {
		window.location.href=link;
	}
}


function ajaxPostForm(id_form,url,id_to_reload)
{
    
    var form = document.getElementById(id_form);
    var formData = new FormData(form); 
    var xmlHttp = new XMLHttpRequest();
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			document.getElementById(id_to_reload).innerHTML = xmlHttp.responseText;
		}
	};
    xmlHttp.open("POST", url, true); 
    xmlHttp.send(formData); 
}


function ajaxPostFormEx(id_form,url,user_function)
{
    var form = document.getElementById(id_form);
    var formData = new FormData(form); 
    var xmlHttp = new XMLHttpRequest();
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			user_function();
		}
	}
    xmlHttp.open("POST", url, true); 
    xmlHttp.send(formData); 
}
 

function ajaxReloadElement(id_element,url,interval=0) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById(id_element).innerHTML = this.responseText;
			if (interval > 0) 
				setTimeout( function(){ ajaxReloadElement(id_element,url,interval) }, interval);
		}
	};
	xhttp.open("GET", url, true);
	xhttp.send();
}


function ajaxPostForm(id_form, url, id_to_reload) {
    const form = document.getElementById(id_form);
    if (!form) return;
    const formData = new FormData(form);
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById(id_to_reload).innerHTML = xhr.responseText;
        }
    };
    xhr.open("POST", url, true);
    xhr.send(formData);
}

