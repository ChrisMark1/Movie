function clickMe(){
	
	document.getElementById('starss').style.visibility = 'visible';
	
}




function see_movie(id){
	
	if(id=="1"){
		document.getElementById('a_movie1').style.display="block";
	}
	else if(id=="2"){
		document.getElementById('a_movie2').style.display="block";
	}
	else if(id=="3"){
		document.getElementById('a_movie3').style.display="block";
	}
	else if(id=="4"){
		document.getElementById('d_movie1').style.display="block";
	}
	else if(id=="5"){
		document.getElementById('d_movie2').style.display="block";
	}
	else if(id=="6"){
		document.getElementById('d_movie3').style.display="block";
	}
	else if(id=="7"){
		document.getElementById('h_movie1').style.display="block";
	}
	else if(id=="8"){
		document.getElementById('h_movie2').style.display="block";
	}
	else if(id=="9"){
		document.getElementById('h_movie3').style.display="block";
	}
	else if(id=="10"){
		document.getElementById('h_movie4').style.display="block";
	}
	
}


  function full(id)
   {
      var names=document.getElementById(id).className;
      var num=document.getElementById(id+"_hidden").value;
      document.getElementById(names+"rating").innerHTML=num;

      for(var i=num;i>=0;i--)
      {
         document.getElementById(names+i).src="full_star.jpg";
      }
     
      for(var j=num;j>=8;j++)
      {
         document.getElementById(names+j).src="empty_star.jpg";
      }
   }
   
   function put_num(id){
	   
	   document.getElementById('actionrating').value = id;
	   
	   
   }
   
     function put_num1(id){
	   document.getElementById('1_stars').checked=true;
	   document.getElementById('actionnrating').value = id;
	   
	   
   }
    function put_num2(id){
	   
	   document.getElementById('actionnnrating').value = id;
	   
	   
   }
     function put_num3(id){
	   
	   document.getElementById('dramarating').value = id;
	   
	   
   }
   
    function put_num4(id){
	   
	   document.getElementById('dramaarating').value = id;
	   
	   
   }
   function put_num5(id){
	   
	   document.getElementById('dramaaarating').value = id;
	   
	   
   }
   function put_num6(id){
	   
	   document.getElementById('horrorrating').value = id;
	   
	   
   }
   function put_num7(id){
	   
	   document.getElementById('horrorrrating').value = id;
	   
	   
   }
   function put_num8(id){
	   
	   document.getElementById('horrorrrrating').value = id;
	   
	   
   }
   function put_num9(id){
	   
	   document.getElementById('horrorrrrrating').value = id;
	   
	   
   }
   
   
   
   
   
   
   
   
   
  
   
   
   
   
   
   
   
   
   
   
   
   