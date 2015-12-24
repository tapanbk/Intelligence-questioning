
var CounterId;
var CountPass = 0;
var CountActive = true;
var DisplayFormat = "%%S%%";


function CountBack()
	{
		if (secs<0)
		{
			CountActive = false;
			alert("Time Up!");
			
	  	}
		
		 if (secs < 10)
	  	{
	  		secs="0" + secs;
		}
		
		if (CountActive)
		  {
			 document.getElementById("cntdwn").value = secs;
			secs--;
			CounterId =  setTimeout("CountBack()", 1000);
		  }	
		
		
	 		
}



function Start()
{
	clearTimeout(CounterId);
	CounterId= setTimeout("CountBack()",500);

}

	

function resume()
{ 
	but = document.getElementById("pr").value;
	if(but == "Start")
		{ 

		document.getElementById("pr").value = "Pause";
		clearTimeout(CounterId);  
		CounterId =  setTimeout("CountBack()", 500);
		}
             else if(but == "Pause")
		{
		document.getElementById("pr").value= "Resume";
		clearTimeout(CounterId);
		}
            if(but == "Resume")
		{
		document.getElementById("pr").value = "Pause";
		clearTimeout(CounterId);  
		CounterId =  setTimeout("CountBack()", 500);
		}         
}


function restore()
{
	
	CountPass = 0;
	document.getElementById("Times").innerHTML = "0 Times" ;
	document.getElementById("cntdwn").value = secs;
	clearTimeout(CounterId);
}






function warn()
	{
		var conf = confirm("this action deletes all the database along with the question!!\nDo you want to proceed ?");
	if(!conf)

		  document.getElementById("FactoryDD").value = "Dont Proceed"

	}

function AnswerWarn()
	{
		var conf = confirm("You are about to display the answer!!\nDo you want to proceed ?");
	if(!conf)

		  document.getElementById("AnswerShow").value = "Dont Proceed"
	}



function AudienceWarn()
	{
		alert("Any answer from audience");

	}
