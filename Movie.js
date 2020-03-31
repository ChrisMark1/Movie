function clickOn(showhide){
	
	if(showhide == "show"){
         document.getElementById('login1').style.visibility="visible";
   }else if(showhide == "hide"){
    document.getElementById('login1').style.visibility="hidden"; 
	document.getElementById("page2").style.visibility="hidden";
   }
}
function clickOnn(showhide){
	
	if(showhide == "show"){
         document.getElementById('login2').style.visibility="visible";
   }else if(showhide == "hide"){
    document.getElementById('login2').style.visibility="hidden"; 
   }
}

	
	
	function toNextPage(){
		if(document.getElementById("submit1").click){
		document.getElementById("page2").style.visibility="visible";
		
	 
		  
		
		}
	}

   function click1(showhide){
	   if(showhide == "show"){
         document.getElementById('login').style.visibility="visible";
		 document.getElementById('signup').style.visibility="hidden";
       }else if(showhide == "hide"){
    document.getElementById('login').style.visibility="hidden"; 
	document.getElementById('signup').style.visibility="visible";
	
   }
   }