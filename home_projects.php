var canvas=document.getElementById("bats");
   var pencil=canvas.getContext("2d");
   var bubbles=[];
   var colors=["cyan","violet","red","indigo","pink"];
   var count=5;
   var linkWidth;
   var linkText="GIT handle";
   var linkStatus=0;
   var textStatus=0;
   var linkX=120;
   var linkY=75;
   var zeroImage=new Image();zeroImage.src="http://ak5.picdn.net/shutterstock/videos/11666915/thumb/1.jpg";
   var oneImage=new Image();oneImage.src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBL_eXIT5puBsSKk8hZuBuIN6x6S7tkl2H5KXu-hK2JrBi92k0";
   var zeroArray=[];
   var oneArray=[];
   var totalcount=4;
   for(var i=0;i<totalcount;i++)
   {
      zeroArray[i]={x:Math.random()*canvas.width,y:-10,status:0,xspeed:0,yspeed:0.1,size:25};
      oneArray[i]={x:Math.random()*canvas.width,y:-30,status:0,xspeed:0,yspeed:0.09,size:25};
   }
   for(var i=0;i<count;i++)
   	    bubbles[i]={x:(Math.random()*canvas.width-50)+30,y:(Math.random()*canvas.height-50)+30,rad:10,xspeed:0.5,yspeed:0.4,color:colors[i],touchStatus:0};
   function drawBubbles()
   {
        for(var i=0;i<count;i++)
        {
        	bubbles[i].x+=bubbles[i].xspeed;
        	bubbles[i].y+=bubbles[i].yspeed;
        	if(bubbles[i].touchStatus==0)
        	{
        		pencil.beginPath();
	        	pencil.arc(bubbles[i].x,bubbles[i].y,bubbles[i].rad,0,2*Math.PI);
	        	pencil.fillStyle=bubbles[i].color;
	        	pencil.fill();
	        	pencil.closePath();
        	}
        	
        }
   } 
   function distance(x1,y1,x2,y2)
   {
   	 return Math.sqrt(Math.pow(x1-x2,2)+Math.pow(y1-y2,2));
   }
   function intersect(a,b)
   {
   	    var d=distance(a.x,a.y,b.x,b.y);
   	    if(d<a.rad+b.rad)
   	    	return true;
   	    else
   	    	return false;
   }
   function gitText()
   {
        pencil.font="10px Arial";
        pencil.fillStyle="red";
        pencil.fillText(linkText,linkX,linkY);
        linkWidth=pencil.measureText(linkText).width;

   }
   function textFill()
   {
       var pencil2=canvas.getContext("2d");
       pencil2.font="10px Arial";
       pencil2.font="white";
       pencil2.fillText("Check my ",70,75);
       pencil2.fillText("for my projects ",175,75);
   }
   function onhit(e)
   {
   	   /*var mouseX=e.clientX;
   	   var mouseY=e.clientY;
   	   var rect=canvas.getBoundingClientRect();
       //console.log(Math.round(rect.left),Math.round(rect.top),e.clientX,e.clientY,e.clientX-Math.round(rect.left),e.clientY-Math.round(rect.top));
   	   //var canvasOffset=$("canvas").offset();
   	   //var offsetX=canvas.left;
   	   //var offsetY=canvas.top;
   	   for(var i=0;i<count;i++)
   	   {
   	   	  console.log(bubbles[i].x,bubbles[i].y,e.clientX-Math.round(rect.left),e.clientY-Math.round(rect.top));
   	   	  var d=distance(bubbles[i].x,bubbles[i].y,mouseX-285,mouseY-345);
   	   	 // console.log(d,bubbles[i].rad);
   	   	  if(d<=bubbles[i].rad)
   	   	  {
   	   	  	bubbles[i].touchStatus=1;
   	   	  }
   	   }*/
       for(var i=0;i<count;i++)
             bubbles[i].touchStatus=1;
       textStatus=1;
       console.log(e.clientX,e.clientY,linkWidth);
       if(e.clientX>=700 && e.clientX <=1100 && e.clientY >=500 && e.clientY <=530)
             linkStatus=1;

   }console.log(canvas.width,canvas.height);
   function binaryPattern()
   {
          for(var i=0;i<totalcount;i++)
          {
            
            if(zeroArray[i].status==0)
            {
              zeroArray[i].x+=zeroArray[i].xspeed*(i+1);
              zeroArray[i].y+=zeroArray[i].yspeed*(i+1);
              
              pencil.drawImage(zeroImage,zeroArray[i].x,zeroArray[i].y,zeroArray[i].size,zeroArray[i].size);
            }
            else
            {
              zeroArray[i].x=Math.random()*canvas.width;zeroArray[i].y=0;zeroArray[i].status=0;
              zeroArray[i].size=Math.round(Math.random()*10)+15;
            }
          }
          for(var i=0;i<totalcount;i++)
          {
            if(oneArray[i].status==0)
            {
             // oneArray[i].x+=oneArray[i].xspeed*(i+2);
              oneArray[i].y+=oneArray[i].yspeed*(i+1);
              pencil.drawImage(oneImage,oneArray[i].x,oneArray[i].y,oneArray[i].size,oneArray[i].size);
            }
            else
            {
              oneArray[i].x=Math.random()*canvas.width;oneArray[i].y=0;oneArray[i].status=0;
              oneArray[i].size=Math.round(Math.random()*8)+15;
            }
          }
   }
   function checkStatus()
   {
       for(var i=0;i<totalcount;i++)
       {
           if(zeroArray[i].x>=canvas.width || zeroArray[i].x<0 || zeroArray[i].y>=canvas.height || zeroArray[i].y<0)
           {
                zeroArray[i].status=1;
           }
           if(oneArray[i].x>=canvas.width || oneArray[i].x<0 || oneArray[i].y>=canvas.height || oneArray[i].y<0)
           {
                oneArray[i].status=1;
           }
       }
   }
   function draw()
   {

   	   pencil.clearRect(0,0,canvas.width,canvas.height);
   	   drawBubbles();
   	   for(var i=0;i<count;i++)
   	   {
   	   	  if(bubbles[i].x+bubbles[i].rad>canvas.width||bubbles[i].x<bubbles[i].rad)
   	   	  	   bubbles[i].xspeed=-bubbles[i].xspeed;
   	   	  if(bubbles[i].y+bubbles[i].rad>canvas.height||bubbles[i].y<bubbles[i].rad)
   	   	  	   bubbles[i].yspeed=-bubbles[i].yspeed;
   	   	 // console.log(bubbles[i].xspeed,bubbles[i].yspeed);
   	   }
       for(var i=0;i<count;i++)
       {
       	   for(var j=0;j<count;j++)
       	   {
       	   	    if(intersect(bubbles[i],bubbles[j])&&i!=j)
       	   	  	{   
       	   	  		// console.log("called");
       	   	  		// console.log(bubbles[i].xspeed,bubbles[i].yspeed);
       	   	  		 bubbles[i].xspeed= -bubbles[i].xspeed;
       	   	  		 bubbles[i].yspeed= -bubbles[i].yspeed;
       	   	  		 //bubbles[j].xspeed= 0//-bubbles[j].xspeed;
       	   	  		 //bubbles[j].yspeed= 0//-bubbles[j].yspeed;
       	   	  		// console.log(bubbles[i].xspeed,bubbles[i].yspeed);
       	   	  	}
       	   }
       }
       canvas.addEventListener("click",onhit,false);
       if(linkStatus)
       {
        window.location="https://github.com/sirbrucewayne";
       }
       if(textStatus)
       {
        
        binaryPattern();
        checkStatus();
        textFill();
        gitText();
       }
        
   }
   setInterval(draw,10);