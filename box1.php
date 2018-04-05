<?php
$conn = mysqli_connect("localhost", "root", "","myDB");

$sql = "SELECT imageId FROM output_images ORDER BY imageId DESC"; 
$result = mysqli_query($conn,$sql);
$c=1;


 $dfiles = glob('upload/*'); // get all file names
                    foreach($dfiles as $dfile){ // iterate files
                    if(is_file($dfile))
                    unlink($dfile); // delete file
                    }





 

?>
<!DOCTYPE html>
<head>
  <title >LET'S PLAY</title>
  <link rel="icon" 
      type="image/png" 
      href="content/Icons/drop4.png" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link href="css/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href=" ">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="js/jquery-3.2.0.min.js"></script>
<script src="js/FileSaver.js"></script>
<script src="js/html2canvas.js"></script>
  
   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
   <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Tangerine">
          <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=crackle"> 
      <link rel="stylesheet" href="css/pannel/css/library/spectrum.css">
      <link rel="stylesheet" href="css/pannel/css/library/foundation.min.css" />
      <link rel="stylesheet" href="css/pannel/css/app.css" />
      <link rel="stylesheet" href="css/pannel/css/add-text-panel.css">
      <link rel="stylesheet" href="css/pannel/css/text-editor-panel.css">
      <link rel="stylesheet" href="css/pannel/css/clip-art-panel.css">
      <link rel="stylesheet" href="css/pannel/css/upload-image-panel.css">
     
      <link rel="stylesheet" href="css/TStyle.css">
     


      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
       <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css"  media="screen,projection"/>

      

<script src="js/uploadform.js"></script> 
 

<script> 



         $(document).ready(function() { 
            $("#btnSubmit").click(function(){
              $("#frmImageUpload").ajaxForm({target: '#LoadedImage'}).submit();
            });
        }); 
</script>
 
    


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <?php
      $name="";
      $location="";
        $GLOBALS['name'];
         $GLOBALS['location'];
      ?>

      


      <script >

    /*Right arrow show-hide*/

      $(document).ready(function() {
    $(".close1").click( function() {
        $("#right-arrow1").hide();
    });
});







   $(document).ready(function() {
    $("#textstyle").on("mouseover", function() {
        $("#right-arrow1").show();
    });
     $("#right-arrow1").on("mouseout", function() {
        $("#right-arrow1").hide();
    });

       $("#right-arrow1").on("mouseover", function() {
        $("#right-arrow1").show();
    });
   
});

  $(document).ready(function() {
    
     $("#tIcon").on("mouseover", function() {
        $("#ClipSide").hide();
    });

      $("#home").on("mouseover", function() {
        $("#ClipSide").hide();
    });

     $("#boy").on("mouseover", function() {
        $("#ClipSide").hide();
    });

     $("#upload").on("mouseover", function() {
        $("#tooltipUpload").hide();

    });

        
  
     $("#textstyle").on("mouseover", function() {
        $("#tooltipRight1").show();
    });
});

function myFunction(elt) {
 var urlString = 'url(' + elt.src + ')';
    document.getElementById("image5").style.backgroundImage=urlString;
}
  $(document).ready(function() {
    $("#tIcon").on("mouseover", function() {
       $("#ClipSide").hide();
          $("#tooltip5").hide();
        $("#tooltip2").hide();
          $("#tooltip3").hide();
           $("#tooltip4").hide();
            $("#tooltip").hide();
                    $("#tooltipUpload").hide();
        $("#tooltipProduct").show();
    });
   $("#boy").on("mouseover", function() {
        $("#tooltipProduct").hide();
    });
    $("#home").on("mouseover", function() {
        $("#tooltipProduct").hide();
    });
   
});

 $(document).ready(function() {
    $("#download").on("mouseover", function() {
       $("#ClipSide").hide();
          $("#tooltip5").hide();
        $("#tooltip2").hide();
          $("#tooltip3").hide();
           $("#tooltip4").hide();
            $("#tooltip").hide();
                    $("#tooltipUpload").hide();
        $("#tooltipProduct").hide();
    });
   
   
});



   $(document).ready(function() {
    $("#boy").on("mouseover", function() {
        $("#ClipSide").show();
    });
   
   
});






$(document).ready(function() {
    $("#Abstract").on("mouseover", function() {
        $("#tooltip").show();
         $("#tooltip2").hide();
          $("#tooltip3").hide();
           $("#tooltip4").hide();
            $("#tooltip5").hide();
    });
  

});


   $(document).ready(function() {
    $("#Animals").on("mouseover", function() {
        $("#tooltip2").show();
           $("#tooltip").hide();
          $("#tooltip3").hide();
           $("#tooltip4").hide();
            $("#tooltip5").hide();
    });
   
  


   
});
   $(document).ready(function() {
    $("#Designs").on("mouseover", function() {
        $("#tooltip3").show();
        $("#tooltip2").hide();
          $("#tooltip").hide();
           $("#tooltip4").hide();
            $("#tooltip5").hide();
    });
   
   
});
   $(document).ready(function() {
    $("#TvSeries").on("mouseover", function() {
        $("#tooltip4").show();
        $("#tooltip2").hide();
          $("#tooltip3").hide();
           $("#tooltip").hide();
            $("#tooltip5").hide();
    });

   
});
   $(document).ready(function() {
    $("#Funny").on("mouseover", function() {
        $("#tooltip5").show();
        $("#tooltip2").hide();
          $("#tooltip3").hide();
           $("#tooltip4").hide();
            $("#tooltip").hide();
    });
 
   
});


  


      $(document).ready(function() {
    $("#upload").on("mouseover", function() {
       $("#ClipSide").hide();
          $("#tooltip5").hide();
        $("#tooltip2").hide();
          $("#tooltip3").hide();
           $("#tooltip4").hide();
            $("#tooltip").hide();
              $("#tooltipProduct").hide();
        $("#tooltipUpload").show();


    });
     $("#boy").on("mouseover", function() {
        $("#tooltipUpload").hide();
    });
     $("#download").on("mouseover", function() {
        $("#tooltipUpload").hide();
    });
    
   
});
$(document).ready(function() {

    $("#container").on("mouseover", function() {
        $("#container").show();
         $("#container").on("mouseout", function() {
        $("#container").hide();

              });
         });
    });



   
</script>

    <script>
$(document).ready(function()
{
   $("button").click(function()
   {
     $(".para").toggle();
   });

});



</script>
     
        
    </script>
<script src="js/moveClipart.js"> </script>
<script>
  
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}



function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}

$(document).ready(function(){
  
  $("#c").hover(function()
  {

            $("#c").fadeOut("slow");      

 });
});







$(document).ready(function()
{
    $("#cancel").click(function()
    {

        $("#cancelimg").empty();
        $("#image5").empty();




  });

  });
      $(document).ready(function()
         {

      $("#cancel").mouseenter(function(){


           $("#cancelimg").fadeIn("slow");
            $("#checkimg").fadeOut("slow");


      });
      

    
    });

      $(document).ready(function()
         {

      $("#image5").mouseenter(function(){


           $("#top").fadeIn("slow");
            


      });
      

    
    });




    
    




    

      $(document).ready(function()
         {

      $("#image8").mouseleave(function(){


           $("#cancelimg").fadeOut("slow");
           $("#addimg").fadeOut("slow");
           $("#checkimg").fadeOut("slow");



      });
      

    
    });

    

      $(document).ready(function()
         {
    
      $("#image8").mouseenter(function(){

           $("#checkimg").fadeIn("slow");
          $("#cancelimg").fadeIn("slow");
          $("#addimg").fadeIn("slow");


      });


    });




      $(document).ready(function()
         {
    
      $("#cancel").mouseleave(function(){


          $("#cancelimg").fadeOut("slow");
          $("#checkimg").fadeOut("slow");


      });


    });



      $(document).ready(function()
         {

      $("#add").mouseenter(function(){


           $("#addimg").fadeIn("slow");
           $("#checkimg").fadeIn("slow");


      });
      

    
    });


      $(document).ready(function()
         {

      $("#submission").mouseenter(function(){


           
           $("#checkimg").fadeIn("slow");


      });
      

    
    });

      $(document).ready(function()
         {

      $("#submission").mouseleave(function(){


           
           $("#checkimg").fadeOut("slow");


      });
      

    
    });


      




      $(document).ready(function()
         {
    
      $("#add").mouseleave(function(){


          $("#addimg").fadeOut("slow");
           $("#checkimg").fadeIn("slow");


      });


    });

</script>

<script src="js/customiseControls.js">
</script>
</head>

<style>
@font-face { 
  font-family: newWaltDisneyUI ;
  src: url(font/newWaltDisneyUI.ttf);

}

/*Right SideBar Text Styling starts here*/

     #sidebar2{

        
    

        background:transparent;
        position: fixed;
        right:2px;
        top:2px;
        height: 750px;

    
    }
/*Text Styling*/
.TFont1 {
 

   background-color: #4CAF50;
    padding: 10px;
    font-size: 16px;
 
    color: white;
    position: relative;
    float: left;
    top:15px;
    display: inline-block;
    width:120px;
    border-radius: 7px;


}

.StyleDropdown1
{
  margin-left: 6px;

padding: 10px;
    font-size: 16px;
  background-color: #ff6666;
    color: white;
    position: relative;
    left:50px;
     right: 0px;
    top:0px;
    display: inline-block;
    width:120px;
    border-radius: 7px;
}



.TFont-content1 {
  
 
   
     display: none;
    position: relative;
    right: 30px;
     background-color: #f9f259;

    min-width: 100px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 7px;
    text-align: center;
}


.StyleDropdown-content1{
      display: none;
    position: absolute;
    left: 30px;
    background-color: #ff9966;
    min-width: 100px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 7px;


   }



.TFont-content1 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    
}

  .StyleDropdown-content1 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    
}

.TFont-content1 a:hover {background-color: #f1f1f1}

.StyleDropdown-content1 a:hover {background-color: #f1f1f1}

.TFont1:hover .TFont-content1 {
    display: block;
}
.StyleDropdown1:hover .StyleDropdown-content1 {
    display: block;
}

.TFont1:hover .TFont1 {
    background-color: #3e8e41;
}

.StyleDropdown1:hover .StyleDropdown1 {
    background-color: #3e8e41;
}


#tooltipRight1
{
  position: absolute;
   display: block;
  
top:200px;
  right:80px;

}
#right-arrow1 {
  display: none;
  position: relative;
  background-image: url('content/ClipArt/back1.jpg');
  padding: 0px;
  float:left;
  height: 400px;
  width:450px;
  border-radius: 10px;
box-shadow: #249e87;

 
    right: 30px;

}



#tooltipRight1:after {
  content: '';
  display: block;  
  position: absolute;
  right: 100%;
  top: 100px;
  left: 418px;
  margin-top: -10px;
  width: 0;
  height: 0; 
  border-top: 20px solid transparent;
  border-left: 20px solid #249e87;
  border-bottom: 20px solid transparent;
  z-index:999;

}

#scrollside21::-webkit-scrollbar {
    width: 10px;
    height:0px;
}
 
#scrollside21::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
   background: white;
   border-left: 3px solid #249e87;/*change bgcolour change this track also*/ 
    border-right: 3px solid #249e87;/*change bgcolour change this track also*/ 
    border-radius: 5px;
}


#scrollside21::-webkit-scrollbar-thumb {

     background: orange;
    border-left: 5px ;
    border-radius: 5px;
}

#scrollside21::-webkit-scrollbar-corner       { 
display: none;
 }












/* left arrow Text Styling starts here*/
#tooltipProduct
{
  position: absolute;
   display: none;
  
  
  left:90px;
  z-index: 999;
}
#tooltip
{
  position: absolute;
   display: none;
  
  
  left:100px;
  z-index: 999;
}
#tooltip2
{
  position: absolute;
   display: none;
  
  
  left:100px;
  top:55px;
  z-index: 999;
}
#tooltip3
{
  position: absolute;
   display: none;
  
  
  left:100px;
  top:90px;
  z-index: 999;
}
#tooltip4
{
  position: absolute;

   display: none;
  
   top:120px;
  left:100px;
  z-index: 999;
}
#tooltip5
{
  position: absolute;
   display: none;
  
   top:155px;
  left:100px;
  z-index: 999;
}
#left-arrow {
  display: inline-block;
  position: absolute;
  background-image: url('content/ClipArt/back1.jpg');
  padding: 0px;
  left:100px;
  height: 300px;
  width:450px;
  border-radius: 10px;
box-shadow: #249e87;


}

#left-arrow2 {
  display: inline-block;
  position: absolute;
  background-image: url('content/ClipArt/back1.jpg');
  padding: 0px;
  left:50px;
  height: 300px;
  width:450px;
  border-radius: 10px;
box-shadow: #249e87;
top:50px;


}
#tooltipProduct:after {
  content: '';
  display: block;  
  position: absolute;
  right: 100%;
  top: 100px;
  left: 30px;
  margin-left: 0px;
  margin-top: 65px;
  width: 0;
  height: 0;

  border-top: 20px solid transparent;
  border-right: 20px solid #1c7766;
  border-bottom: 20px solid transparent;
  z-index:999;

}


#tooltipUpload{

position: absolute;
   display: none;
  bottom:90px;
  
  left:120px;
  z-index: 999;




}


#tooltipUpload:after {
  content: '';
  display: block;  
  position: absolute;
  right: 100%;
  top: 100px;
 float: left;
  margin-left: 0px;
  margin-top: 45px;
  width: 0;
  height: 0;

  border-top: 20px solid transparent;
  border-right: 20px solid #1c7766;
  border-bottom: 20px solid transparent;
  z-index:999;

}


#tooltip:after {
  content: '';
  display: block;  
  position: absolute;
  right: 100%;
  top: 100px;
  left: 80px;
  margin-left: 0px;
  margin-top: 80px;
  width: 0;
  height: 0;

  border-top: 20px solid transparent;
  border-right: 20px solid #1c7766;
  border-bottom: 20px solid transparent;
  z-index:999;

}
#tooltip2:after {
  content: '';
  display: block;  
  position: absolute;
  right: 100%;
  top: 100px;
  left: 80px;
  margin-left: 0px;
  margin-top: 80px;
  width: 0;
  height: 0;

  border-top: 20px solid transparent;
  border-right: 20px solid #1c7766;
  border-bottom: 20px solid transparent;
  z-index:999;

}
#tooltip3:after {
  content: '';
  display: block;  
  position: absolute;
  right: 100%;
  top: 100px;
  left: 80px;
  margin-left: 0px;
  margin-top: 80px;
  width: 0;
  height: 0;

  border-top: 20px solid transparent;
  border-right: 20px solid #1c7766;
  border-bottom: 20px solid transparent;
  z-index:999;

}
#tooltip4:after {
  content: '';
  display: block;  
  position: absolute;
  right: 100%;
  top: 100px;
  left: 80px;
  margin-left: 0px;
  margin-top: 80px;
  width: 0;
  height: 0;

  border-top: 20px solid transparent;
  border-right: 20px solid #1c7766;
  border-bottom: 20px solid transparent;
  z-index:999;

}
#tooltip5:after {
  content: '';
  display: block;  
  position: absolute;
  right: 100%;
  top: 100px;
  left: 80px;
  margin-left: 0px;
  margin-top: 80px;
  width: 0;
  height: 0;

  border-top: 20px solid transparent;
  border-right: 20px solid #1c7766;
  border-bottom: 20px solid transparent;
  z-index:999;

}

#scrollside::-webkit-scrollbar {
    width: 10px;
    height:0px;
}
 
#scrollside::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
   background: white;
   border-left: 3px solid #249e87;/*change bgcolour change this track also*/ 
    border-right: 3px solid #249e87;/*change bgcolour change this track also*/ 
    border-radius: 5px;
}


#scrollside::-webkit-scrollbar-thumb {

     background: orange;
    border-left: 5px ;
    border-radius: 5px;
}

#scrollside::-webkit-scrollbar-corner       { 
display: none;
 }

 
  ul.nav-pills {
      top: 20px;
      position: fixed;
  }
  div.col-sm-9 div {
      height: 150px;
      font-size: 18px;
  }
  #section1 {color: #fff; background-color: transparent;}
  #section2 {color: #fff; background-color: transparent;}
  #section3 {color: #fff; background-color: transparent;}
  #section4 {color: #fff; background-color: transparent;}
  #section5 {color: #fff; background-color: transparent;}


  #section41 {color: #fff; background-color: #00bcd4;}
  #section42 {color: #fff; background-color: #009688;}
  
  @media screen and (max-width: 810px) {
    #section1, #section2, #section3, #section41, #section42  {
        margin-left: 25px;
    }
  }
    

#container::-webkit-scrollbar {
    width: 10px;
    height:10px;
}
 
/* Track */
#container::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    -webkit-border-radius: 10px;
    border-radius: 10px;

}
 
/* Handle */
#container::-webkit-scrollbar-thumb {
    -webkit-border-radius: 5px;
    border-radius: 5px;
    background: lightblue; 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
    height: 5px;
    -webkit-height:5px;

}


#container::-webkit-scrollbar-thumb:window-inactive {
  background: rgba(255,0,0,0.4); 
}

#containerClipArt::-webkit-scrollbar {
    width: 10px;
    height:10px;
}
 
/* Track */
#containerClipArt::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    -webkit-border-radius: 10px;
    border-radius: 10px;

}
 
/* Handle */
#containerClipArt::-webkit-scrollbar-thumb {
    -webkit-border-radius: 5px;
    border-radius: 5px;
    background: lightblue; 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
    height: 5px;
    -webkit-height:5px;

}


#containerClipArt::-webkit-scrollbar-thumb:window-inactive {
  background: rgba(255,0,0,0.4); 
}



/*Image Upload Pannel*/

/* Track */
#UploadPannel::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    -webkit-border-radius: 10px;
    border-radius: 10px;

}
 
/* Handle */
#UploadPannel::-webkit-scrollbar-thumb {
    -webkit-border-radius: 5px;
    border-radius: 5px;
    background: lightblue; 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
    height: 5px;
    -webkit-height:5px;

}


#UploadPannel::-webkit-scrollbar-thumb:window-inactive {
  background: rgba(255,0,0,0.4); 
}



 


#boy:hover {
        background: lightgreen;
           border-radius: 80px;
    }
    #tIcon:hover {
        background: lightgreen;
           border-radius: 150px;
    }
 #upload:hover {
        background: lightgreen;
           border-radius: 60px;
           left:2px;
    }


    #sidebar{

        background: transparent;

    }

     #home:hover{

       background: lightgreen;
       border-radius: 80px;

    }
     #download:hover{

       background: lightgreen;
          border-radius: 80px;

    }


    /*Image Upload*/



    #image8{
 width: 220px;
    height:120px;
 
  position:left;
  top:20px;

 
      
}
#drag4{
     
    position:relative;
    
    top:0px;
    border-radius: 10px;

}
  
#Uploadimg{


   position:fixed ;  
   top:600px ; 
   color:lightgreen;
   background:transparent; 
   border:0px ;
   font-family:cursive;
   font-size: 20px;
   left:150px;
}

#add
{
  position:absolute;
  bottom:120px;
  width:30px;
  height:30px;

  border :0px solid lightblue;
left:220px;

}
#cancel
{
  position:absolute;
  bottom:150px;
  width:30px;
  height:30px;

  border :0px solid lightblue;
left:200px;

  

}
#submission{

    position: absolute;
  bottom:130px;
  width:30px;
  height:30px;

  border :0px solid lightblue;
left:20px;
}

#fooupload{
position:absolute;
  top:10px;
   left:10px;
   width:1px;

}

#btnSubmit{

  position: fixed;
  top:50px;
   width:1px;


}

#submit1{
border :1px solid black;
position: absolute;
top :5px;
left:200px;
}

#cancelimg{

position: relative;
right:5px;
bottom:30px;

}
#addimg
{

  position: relative;
right:28px;
top:60px;
}
#checkimg{
    position: relative;
    left:170px;
top:12px;
}


/*Text Styling*/
.TFont1 {
 

   background-color: #4CAF50;
    padding: 10px;
    font-size: 16px;
 
    color: white;
    position: absolute;
    float: left;
    top:150px;
    display: inline-block;
    width:120px;
    border-radius: 7px;
    text-align: center;



}

.StyleDropdown1
{
  margin-left: 6px;

padding: 10px;
    font-size: 16px;
  background-color: #ff6666;
    color: white;
    position: relative;
    left:170px;
     right: 0px;
    top:30px;
    display: inline-block;
    width:120px;
    border-radius: 7px;
}



.TFont-content1 {
  
 
   
     display: none;
    position: absolute;
    right: 30px;
     background-color: #f9f259;

    min-width: 100px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 7px;
    text-align: center;
}


.StyleDropdown-content1{
      display: none;
    position: absolute;
    left: 30px;
    background-color: #ff9966;
    min-width: 100px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 7px;


   }



.TFont-content1 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    
}

  .StyleDropdown-content1 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    
}

.TFont-content1 a:hover {background-color: #f1f1f1}

.StyleDropdown-content1 a:hover {background-color: #f1f1f1}

.TFont1:hover .TFont-content1 {
    display: block;
}
.StyleDropdown1:hover .StyleDropdown-content1 {
    display: block;
}

.TFont1:hover .TFont1 {
    background-color: #3e8e41;
}

.StyleDropdown1:hover .StyleDropdown1 {
    background-color: #3e8e41;
}


#tooltipRight1
{
  position: absolute;
   display: block;
  
top:200px;
  right:80px;


}
#right-arrow1 {
  display: none;
    z-index: 999;
  position: relative;
  background-image: url('content/ClipArt/back1.jpg');
  padding: 0px;
  float:left;
  height: 400px;
  width:450px;
  border-radius: 10px;
box-shadow: #249e87;

 
    right: 30px;

}



#tooltipRight1:after {
  content: '';
  display: block;  
  position: absolute;
  right: 100%;
  top: 100px;
  left: 418px;
  margin-top: -10px;
  width: 0;
  height: 0; 
  border-top: 20px solid transparent;
  border-left: 20px solid #249e87;
  border-bottom: 20px solid transparent;
  z-index:999;

}

#scrollside21::-webkit-scrollbar {
    width: 10px;
    height:0px;
}
 
#scrollside21::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
   background: white;
   border-left: 3px solid #249e87;/*change bgcolour change this track also*/ 
    border-right: 3px solid #249e87;/*change bgcolour change this track also*/ 
    border-radius: 5px;
}


#scrollside21::-webkit-scrollbar-thumb {

     background: orange;
    border-left: 5px ;
    border-radius: 5px;
}

#scrollside21::-webkit-scrollbar-corner       { 
display: none;
 }


#choosecolor1
{ text-align: center;
  
  position: absolute;
    right: 130px;
 
    top:290px;
    font:"#ffffff";
    font-weight:30px;
    background-color: rgba(51, 119, 183, 0.63);
    box-shadow: 0px 8px 16px 0px rgba(133 ,233 ,133 ,0.89);
   height: 50px;
width:220px;
-moz-border-radius-bottom-right: 50px 25px;
border-bottom-right-radius: 150px 65px;
border-bottom-left-radius: 150px 65px;
}
#colorpick1{
    position: relative;
    right: 110px;
    width:30px;
    height:50px;
    top:50px;

   border:10px solid lightblue;
    margin-left: 40px;
    cursor: hand;
    cursor: pointer;
    background: transparent;
  }

  input[type="color"] {
  -webkit-appearance: none;
  border: none;
  width: 2px;
  height: 2px;
  border:4px pink;
  border-radius: 100%;

}
input[type="color"]::-webkit-color-swatch-wrapper {
  padding: 0px;

}
input[type="color"]::-webkit-color-swatch {
  border: 2px  pink;

}

#floatbtn {

        
        width:70px;
        height:70px;
        right:1px;
        margin-left: 2px;

}

#textstyle:hover {

   background: lightgreen;
   border-radius: 80px;

          
}


/*product scroll*/

#left-arrow2::-webkit-scrollbar {
    width: 10px;
    height:0px;
}
 
#left-arrow2::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
   background: white;
   border-left: 3px solid #249e87;/*change bgcolour change this track also*/ 
    border-right: 3px solid #249e87;/*change bgcolour change this track also*/ 
    border-radius: 5px;
}


#left-arrow2::-webkit-scrollbar-thumb {

     background: orange;
    border-left: 5px ;
    border-radius: 5px;
}

#left-arrow2::-webkit-scrollbar-corner       { 
display: none;
 }
 /*cross hover*/
#uploadC :hover{
  background-size: fixed;
 
border-radius: 15px;

  background: tomato;
}

#clipC :hover{
  background-size: fixed;
 
border-radius: 15px;

  background: tomato;
}
#abstractC :hover{
  background-size: fixed;
 
border-radius: 15px;

  background: tomato;
}
#batmanC :hover{
  background-size: fixed;
 
border-radius: 15px;

  background: tomato;
}
#humanC :hover{
  background-size: fixed;
 
border-radius: 15px;

  background: tomato;
}
#cartoonC :hover{
  background-size: fixed;
 
border-radius: 15px;

  background: tomato;
}
#animalC :hover{
  background-size: fixed;
 
border-radius: 15px;

  background: tomato;
}
#productC :hover{
  background-size: fixed;
 
border-radius: 15px;

  background: tomato;
}

/*Play*/





.overlay-content {
position: relative;
    top: 25px;

      width: 100%;

    text-align: center;
    margin-top: 30px;
    z-index: 999;

}
#closeP {
    position: absolute;
    top: 10px;
    right: 45px;
    font-size: 30px;
}



#carousel-caption1{
 bottom:1px;
z-index: 999;
}

#carousel-indicators1{

   bottom:0px;
z-index: 999;
}



.overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
      margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}





  </style>


<body style="background-image: url('content/Icons/abstract6.jpg'); background-repeat:no-repeat;   height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
 
    background-size: cover;"> 


  


  <!-- Product Pannel    -->
<div class="container" style="margin-left:70px; display: none; width:400px;  overflow-y:auto;" id="container" >
  <div class="row" style="width:400px;" >


      <div id="section1" ><p style="width:30px;text-align: center; font-size: 40px; font-family:appleberry">Our Product</p> 
      <div style=" height:80px; margin-top: 50px; margin-bottom: 50px;"><p style="width:300; height:15px; font-size: 20px; font-family: appleberry;">Polo T-Shirts</p>
      <img src="content/Products/blueT2.png" onclick="myFunction(this)" style="width:50px; height:50px;">
        <img src="content/Products/orangeT2.png" onclick="myFunction(this)" style="width:50px; height:50px;">
        <img src="content/Products/redT1.png" onclick="myFunction(this)" style="width:50px; height:50px;">
        <img src="content/Products/yellowT1.png" onclick="myFunction(this)" style="width:50px; height:50px;">
        <img src="content/Products/whiteT2.png" onclick="myFunction(this)" style="width:50px; height:50px;">
        <img src="content/Products/blackT.png" onclick="myFunction(this)" style="width:50px; height:50px;">
        </div>
         <div style=" height:80px; margin-bottom: 50px; margin-top: 50px;"><p  style="width:300; height:15px;  font-size: 20px; font-family: appleberry;">Round TShirt</p>
      <img src="content/Products/RoundBlue-T.png" onclick="myFunction(this)"  style="width:50px; height:50px;">
        <img src="content/Products/RoundRed-T.png" onclick="myFunction(this)"  style="width:50px; height:50px;">
        <img src="content/Products/RoundOrange-T.png" onclick="myFunction(this)"  style="width:50px; height:50px;">
        
        </div>

         <div style=" height:80px; margin-bottom: 50px; margin-top: 50px;"><p  style="width:300; height:15px;  font-size: 20px; font-family: apple;">Hoodies</p>
      <img src="content/Products/hoodies-black.png" onclick="myFunction(this)"  style="width:50px; height:50px;">
        <img src="content/Products/hoodies-maroon.png" onclick="myFunction(this)"  style="width:50px; height:50px;">
        <img src="content/Products/hoodies-white.png" onclick="myFunction(this)"  style="width:50px; height:50px;">
        
        </div>
      </div>


      </div>
    </div>
       





<div class="w3-sidebar w3-bar-block w3-xxlarge" style="width:90px; overflow:hidden; height:650px;" id="sidebar">
 
 <div id="home" style="height:80px; width:80px; text-align: center;"><img  src="content/Icons/home.png" style="height:70px; width:70px;margin-top: 5px; "></div>  <p style="font-size: 22px;  font-family: appleberry; color:white; text-align: center; "><a href="http://www.blackswanstores.com/" style="color:white;" >Home</a></p>
  
 
    <div id="tIcon" style="height:80px; width:80px; text-align: center;"><img  src="content/Products/product.png" style="height:70px; width:70px; margin-top: 5px; "></div> 
    <p style="font-size: 20px; font-family: appleberry; color:white;"> Products </p>
    
  <div id="boy" style="height:80px; width:80px;"><img src="content/Products/yellowSmall.png" style="height:70px; width:70px;margin-top: 8px; margin-left: 5px; "></div>
  <p style="font-size: 20px; text-align: center; font-family:appleberry; color:white;">  ClipArt </p>
   
   <div id="upload" style="height:80px; width:80px;  text-align: center;"><img src="content/Icons/upload.png" style="height:60px; width:60px; margin-top: 8px;"></div> 
<p style="font-size: 20px; text-align: center; font-family: appleberry; color:white;">  Upload </p>

   <div id="download" style="height:80px; width:80px;  text-align: center;"><img src="content/Icons/download.png" style="height:60px; width:60px; margin-top: 8px;" ></div> 
   <p style="font-size: 20px; margin-right: 2px; font-family: appleberry; color:white; ">  Download </p>
</div>

<script src="js/download.js"></script>


<script>


function convertCanvasToImage(canvas) {
          var image = new Image();
          image.src = canvas.toDataURL("image/png");
                //document.write(image);
                return image;
                
              }
                $(function() { 
                $("#download").click(function() { 
                    html2canvas($("#image5"), {
                        onrendered: function(canvas) {
                           theCanvas = canvas;
                           
                            var  uri = theCanvas.toDataURL();
                         download(uri);
                          }
                        });
                  });
              });
                            
    


</script>




  <!-- Product Pannel    -->

    <div id="tooltipProduct">
<div id="left-arrow2" style="overflow-y:scroll;" ><p style="width:35px; height:15px; font-size: 40px; font-family: newWaltDisneyUI;  margin-left: 60px;
margin-top: 1px; color:#ffccff;" >Products</p>
<div    id="productC" style="position: relative; 
 background-color:none; border-radius: 10px;  width: 30px; height:30px;left:400px; bottom:20px;  cursor:pointer; " >   <img src="content/Icons/cross2.png" style="height:20px;width:20px;background-repeat: no-repeat; position: absolute;right:1px; top:2px; margin-right: 4px; margin-top: 2px; margin-left: 5px; ">
   </div>

 
      <div id="section1" style="height:450px; "><p style="text-align:left; font-size: 40px; font-family:appleberry;"></p> 
     
      <div style=" height:80px; margin-top: 50px; margin-bottom: 50px;"><p style="width:300; height:15px; font-size: 20px; font-family: appleberry;">Polo T-Shirts</p>
      <img src="content/Products/blueT2.png" onclick="myFunction(this)" style="width:50px; height:50px;">
        <img src="content/Products/pinkT1.png" onclick="myFunction(this)" style="width:50px; height:50px;">
        <img src="content/Products/redT1.png" onclick="myFunction(this)" style="width:50px; height:50px;">
        <img src="content/Products/yellowT1.png" onclick="myFunction(this)" style="width:50px; height:50px;">
        <img src="content/Products/whiteT2.png" onclick="myFunction(this)" style="width:50px; height:50px;">
        <img src="content/Products/blackT.png" onclick="myFunction(this)" style="width:50px; height:50px;">
        </div>
             <div style=" height:80px; margin-bottom: 50px; margin-top: 50px;"><p  style="width:300; height:15px;  font-size: 20px; font-family: appleberry;">Round TShirt</p>
      <img src="content/Products/RoundBlue-T.png" onclick="myFunction(this)"  style="width:50px; height:50px;">
        <img src="content/Products/RoundRed-T.png" onclick="myFunction(this)"  style="width:50px; height:50px;">
        <img src="content/Products/RoundOrange-T.png" onclick="myFunction(this)"  style="width:50px; height:50px;">
        
        </div>

         <div style=" height:80px; margin-bottom: 50px; margin-top: 50px;"><p  style="width:300; height:15px;  font-size: 20px; font-family: apple;">Hoodies</p>
      <img src="content/Products/hoodies-black.png" onclick="myFunction(this)"  style="width:50px; height:50px;">
        <img src="content/Products/hoodies-maroon.png" onclick="myFunction(this)"  style="width:50px; height:50px;">
        <img src="content/Products/hoodies-white.png" onclick="myFunction(this)"  style="width:50px; height:50px;">
        
        </div>
</div>
</div>
</div>


     



    <!--ClipArt pannel-->



      <div  class="" id="ClipSide" style="height:500px;  width:820px; display: none; margin-left:70px; width:950px; overflow:none; background-image: url('content/Icons/sky1.jpg'); z-index: 999; border:1px solid white; border-radius: 7px;" >
      
      <div    id="clipC" style="position: relative; 
 background-color:none; border-radius: 10px;  width: 30px; height:30px;left:900px; bottom:1px;  cursor:pointer; " >   <img src="content/Icons/cross2.png" style="height:20px;width:20px;background-repeat: no-repeat; position: absolute;right:1px; top:2px; margin-right: 4px; margin-top: 2px; margin-left: 5px; ">
   </div>

  <div style="height:30px; width:100px; border: 1px #f44336; margin-bottom: 4px; margin-top: 150px;  background-color: #f44336;  border-image-width: 30px; border-image-repeat: no-repeat; border-radius: 10px;"; ><p style="font-size: 20px; text-align: center;color:black; font-family:appleberry; " id="Abstract">Abstract</p></div>
 <div style="height:30px; width:100px; border: 1px #f44336; margin-bottom: 4px; margin-top: 4px;  background-color: #f44336; border-radius: 10px;" ><p style="font-size: 20px; text-align: center;color:black; font-family: appleberry; "  id="Animals">Animals</p></div>
 <div style="height:30px; width:100px; border: 1px #f44336; margin-bottom: 4px; margin-top: 4px;  background-color: #f44336; border-radius: 10px;"; ><p style="font-size: 20px; text-align: center;color:black; font-family: appleberry; "  id="Designs">Designs</p></div>
 <div style="height:30px; width:100px; border: 1px #f44336; margin-bottom: 4px; margin-top: 4px;  background-color: #f44336; border-radius: 10px;"; ><p style="font-size: 20px; text-align: center;color:black;  font-family: appleberry;"  id="TvSeries">TvSeries</p></div>
 <div style="height:30px; width:100px; border: 1px #f44336; margin-bottom: 4px; margin-top: 4px;  background-color: #f44336; border-radius: 10px;"; ><p style="font-size: 20px; text-align: center;color:black; font-family: appleberry; "  id="Funny">Funny</p></div>
 <div style="height:30px; width:100px; border: 1px #f44336; margin-bottom: 4px; margin-top: 4px;  background-color: #f44336; border-radius: 10px;"; ><p style="font-size: 20px; text-align: center;color:black; font-family: appleberry; "  id="Quotes">Quotes</p></div>
 <div style="height:30px; width:100px; border: 1px #f44336; margin-bottom: 4px; margin-top: 4px;  background-color: #f44336; border-radius: 10px;"; ><p style="font-size: 20px; text-align: center;color:black;  font-family: appleberry;"  id="Dance">Dance</p></div>
 <div style="height:30px; width:100px; border: 1px #f44336; margin-bottom: 4px; margin-top: 4px;  background-color: #f44336; border-radius: 10px;"; ><p style="font-size: 20px; text-align: center;color:black;  font-family: appleberry;"  id="Love">Love</p></div>

 </div>

 <!-- Clip Art Pannel    -->


    <div id="tooltip">
<div id="left-arrow" ><p style="width:35px; height:15px; font-size: 50px; font-family: newWaltDisneyUI;  margin-left: 60px;
margin-top: 10px; color:#ffccff; ">Abstract</p>


      <div id="section1" style="height:200px;margin-top:50px; "><p style="text-align:left; font-size: 40px; font-family:appleberry"></p> <div    id="abstractC" style="position: relative; 
 background-color:none; border-radius: 10px;  width: 30px; height:30px;left:400px; bottom:20px;  cursor:pointer; " >   <img src="content/Icons/cross2.png" style="height:20px;width:20px;background-repeat: no-repeat; position: absolute;right:1px; top:2px; margin-right: 4px; margin-top: 2px; margin-left: 5px; ">
   </div>
      <div style=" height:80px; margin-top: 50px; margin-bottom: 70px;"><p style="width:300; height:15px; font-size: 25px; font-family: appleberry;"></p>
      <img src="content/ClipArt/Abstract/assassin1.png"  onclick="clipFunction(this)"  style="width:70px; height:60px; margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/Abstract/gangnam.png" onclick="clipFunction(this)"   style="width:50px; height:50px; margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/Abstract/devil1.png" onclick="clipFunction(this)"   style="width:50px; height:50px; margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
          <img src="content/ClipArt/Abstract/ghost1.png" onclick="clipFunction(this)"   style="width:50px; height:50px; margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/Abstract/horse.png" onclick="clipFunction(this)"   style="width:50px; height:50px; margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/Abstract/leaf2.png onclick="clipFunction(this)"  " style="width:50px; height:50px; margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <br>
        <img src="content/ClipArt/Abstract/heart1.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/Abstract/superman1.png" onclick="clipFunction(this)"   style="width:50px;height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/Abstract/butterfly1.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/Abstract/cat1.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/Abstract/bear1.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/Abstract/basketball.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        </div>
</div>
</div>
</div>


    <div id="tooltip2">
<div id="left-arrow" ><p style="width:35px; height:15px; font-size: 50px; font-family: newWaltDisneyUI;  margin-left: 60px;
margin-top: 10px; color:#ffccff; ">Animals</p>


      <div id="section2" style="height:450px; "><p style="text-align:left; font-size: 40px; font-family:appleberry"></p> <div    id="animalC" style="position: relative; 
 background-color:none; border-radius: 10px;  width: 30px; height:30px;left:400px; bottom:20px;  cursor:pointer; " >   <img src="content/Icons/cross2.png" style="height:20px;width:20px;background-repeat: no-repeat; position: absolute;right:1px; top:2px; margin-right: 4px; margin-top: 2px; margin-left: 5px; ">
   </div>
         <div style=" height:80px; margin-bottom: 50px; margin-top: 50px;"><p  style="width:300; height:15px;  font-size: 25px; font-family: appleberry;"></p>
        <img src="content/ClipArt/Animals/tiger/tiger1.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
      <img src="content/ClipArt/Animals/tiger/tiger2.png" onclick="clipFunction(this)"   style="width:50px; height:50px; margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/Animals/tiger/tiger3.png" onclick="clipFunction(this)"   style="width:50px; height:50px; margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/Animals/giraffe/giraffe1.png" onclick="clipFunction(this)"   style="width:50px; height:50px; margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
            <img src="content/ClipArt/Animals/elephant1.png" onclick="clipFunction(this)"   style="width:50px; height:50px; margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/Animals/elephant.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/Animals/pig1.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <br>
        <img src="content/ClipArt/Animals/puppy1.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/Animals/panda1.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/Animals/octopus1.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
         <img src="content/ClipArt/Animals/pig1.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/Animals/sheep1.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/Animals/squirrel2.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">

        </div>
        </div>
        </div>
        </div>


    <div id="tooltip3">
<div id="left-arrow" ><p style="width:35px; height:15px; font-size: 50px; font-family: newWaltDisneyUI;  margin-left: 60px;
margin-top: 10px; color:#ffccff; ">Humans</p>


      <div id="section3" style="height:450px; "><p style="text-align:left; font-size: 40px; font-family:appleberry"></p> <div    id="humanC" style="position: relative; 
 background-color:none; border-radius: 10px;  width: 30px; height:30px;left:400px; bottom:20px;  cursor:pointer; " >   <img src="content/Icons/cross2.png" style="height:20px;width:20px;background-repeat: no-repeat; position: absolute;right:1px; top:2px; margin-right: 4px; margin-top: 2px; margin-left: 5px; ">
   </div>
         <div style=" height:80px; margin-bottom: 50px; margin-top: 50px;"><p  style="width:300; height:15px;  font-size: 25px; font-family: appleberry;"></p>
      <img src="content/ClipArt/humans/girls/girl1.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
      <img src="content/ClipArt/humans/girls/girl2.png" onclick="clipFunction(this)"   style="width:50px; height:50px; margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/humans/girls/girl3.png" onclick="clipFunction(this)"   style="width:50px; height:50px; margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/humans/girls/girl4.png" onclick="clipFunction(this)"   style="width:50px; height:50px; margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
            <img src="content/ClipArt/humans/girls/girl5.png" onclick="clipFunction(this)"   style="width:50px; height:50px; margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/humans/girls/girl6.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/humans/girls/girl7.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <br>
        <img src="content/ClipArt/humans/girls/girl8.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/humans/girls/girl9.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/humans/girls/girl10.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
         <img src="content/ClipArt/humans/girls/girl11.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/humans/girls/girl12.png" onclick="clipFunction(this)"   style="width:50px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        
        </div>

</div>
</div>
</div>
          
<div id="tooltip4">
<div id="left-arrow" ><p style="width:35px; height:15px; font-size: 50px; font-family: newWaltDisneyUI;  margin-left: 60px;
margin-top: 10px; color:#ffccff; ">Cartoons</p>


      <div id="section4" style="height:450px; "><p style="text-align:left; font-size: 40px; font-family:appleberry"></p> <div    id="cartoonC" style="position: relative; 
 background-color:none; border-radius: 10px;  width: 30px; height:30px;left:400px; bottom:20px;  cursor:pointer; " >   <img src="content/Icons/cross2.png" style="height:20px;width:20px;background-repeat: no-repeat; position: absolute;right:1px; top:2px; margin-right: 4px; margin-top: 2px; margin-left: 5px; ">
   </div>

          <div style=" height:80px; margin-bottom: 50px; margin-top: 50px;"><p  style="width:30; height:15px;  font-size: 25px; font-family: appleberry;"></p>
    <img src="content/ClipArt/cartoons/angrybirds/angrybird2.png" onclick="clipFunction(this)"   style="width:60px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/cartoons/angrybirds/angrybird1.png" onclick="clipFunction(this)"   style="width:60px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/cartoons/jerry1.png" onclick="clipFunction(this)"   style="width:60px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
         <img src="content/ClipArt/cartoons/micky1.png" onclick="clipFunction(this)"   style="width:60px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/cartoons/pooh1.png" onclick="clipFunction(this)"   style="width:60px; height:50px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        </div>
        
</div>
</div>
</div>

<div id="tooltip5">
<div id="left-arrow" ><p style="width:35px; height:15px; font-size: 50px; font-family: newWaltDisneyUI;  margin-left: 60px;
margin-top: 10px; color:#ffccff; ">Batman</p>

      <div id="section5" style="height:250px; "><p style="text-align:left; font-size: 40px; font-family:appleberry"></p> 
<div    id="batmanC" style="position: relative; 
 background-color:none; border-radius: 10px;  width: 30px; height:30px;left:400px; bottom:20px;  cursor:pointer; " >   <img src="content/Icons/cross2.png" style="height:20px;width:20px;background-repeat: no-repeat; position: absolute;right:1px; top:2px; margin-right: 4px; margin-top: 2px; margin-left: 5px; ">
   </div>
          <div style=" height:80px; margin-bottom: 50px; margin-top: 50px;"><p  style="width:30; height:15px;  font-size: 25px; font-family: appleberry;"></p>
     <img src="content/ClipArt/cartoons/batman/batman1.png" onclick="clipFunction(this)"   style="width:60px; height:35px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/cartoons/batman/batman2.png" onclick="clipFunction(this)"   style="width:60px; height:35px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/cartoons/batman/batman3.png" onclick="clipFunction(this)"   style="width:60px; height:35px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
         <img src="content/ClipArt/cartoons/batman/batman4.png" onclick="clipFunction(this)"   style="width:60px; height:35px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        <img src="content/ClipArt/cartoons/batman/batman5.png" onclick="clipFunction(this)"   style="width:60px; height:35px;margin-left: 2px; margin-top: 2px; margin-right: 2px;margin-bottom: 2px;">
        </div>

</div>
</div>
</div>

<script>
$(document).ready(function()
{

     
      $("#productC").click( function() {
        $("#tooltipProduct").hide();
    });

       });
    </script>

    <script>
$(document).ready(function()
{

     
        $("#animalC").click( function() {
        $("#tooltip2").hide();
    });
    });

    
    </script>
    <script>
$(document).ready(function()
{

     
      $("#cartoonC").click(function() {
        $("#tooltip4").hide();
    });

       });
    </script>


    <script>
$(document).ready(function()
{

     
       $("#batmanC").click( function() {
        $("#tooltip5").hide();
    });

       });
    </script>
    <script>
    $(document).ready(function()
{

     
       $("#humanC").click( function() {
        $("#tooltip3").hide();
    });

       });
    </script>

     <script>
$(document).ready(function()
{

     
       $("#batmanC").click( function() {
        $("#tooltip5").hide();
    });

       });
    </script>

         <script>
$(document).ready(function()
{

     
       $("#uploadC").click( function() {
        $("#tooltipUpload").hide();
    });

       });
    </script>



     <script>
$(document).ready(function()
{

     
       $("#abstractC").click( function() {
        $("#tooltip").hide();
    });

       });
    </script>



     <script>
$(document).ready(function()
{

     
       $("#clipC").click( function() {
         
        $("#ClipSide").hide();

    });



       });
    </script>


    <script>

$(document).ready(function()
{

     $("#clipC").click( function() {
         
     $("#tooltip").hide();

          });

       });


            
    </script>
    
     <script>

$(document).ready(function()
{

     $("#clipC").click( function() {
         
     $("#tooltip2").hide();

          });

       });


            
    </script>
    
     <script>

$(document).ready(function()
{

     $("#clipC").click( function() {
         
     $("#tooltip3").hide();

          });

       });


            
    </script>

     <script>

$(document).ready(function()
{

     $("#clipC").click( function() {
         
     $("#tooltip4").hide();

          });

       });


            
    </script>

     <script>

$(document).ready(function()
{

     $("#clipC").click( function() {
         
     $("#tooltip5").hide();

          });

       });


            
    </script>
    
    
    
    

  
   








  

      <!-- Upload Pannel    -->
<div id="tooltipUpload" >
<div id="left-arrow3" >

      <div id="section1" style="height:280px;   background-image: url('content/ClipArt/back1.jpg'); border-radius: 7px;"><p style="width:500px; font-size: 40px; font-family:newWaltDisneyUI;  ">Upload Your Design</p> 
   
      <div    id="uploadC" style="position: relative; 
 background-color:none; border-radius: 10px;  width: 30px; height:30px;left:460px; bottom:50px;  cursor:pointer; " >   <img src="content/Icons/cross2.png" style="height:20px;width:20px;background-repeat: no-repeat; position: absolute;right:1px; top:2px; margin-right: 4px; margin-top: 2px; margin-left: 5px; ">
   </div>
    

          <div id="image8" style="margin-left: 30px;" >



  

            
          


      <div id="cancel"><img src="content/Icons/error.png" id="cancelimg" width="18px" heigth="18px"></div>
      
        <form action="imageuploadpro.php" enctype="multipart/form-data" id="frmImageUpload" method="post">
          
     <div id="add">
          <input id="fooupload" type="file" title=""   style="display:none"  name="image" type="button"/>

          <label for="fooupload"><img src="content/Icons/add.png" id="addimg"></label>
          </div>
      <div id="submission">
    <input  type="button" title="" style="display:none;" id="btnSubmit">
    <label for="btnSubmit"><img src="content/Icons/check.png"  width="20px" id="checkimg" height="20px"></label>
    </div>
    
  </form>
  <div id="LoadedImage" style="position:absolute; height:150px;width: 150px; border:1px solid lightblue; top:80px;  border-radius: 10px;">
  <div>
  
</div>
</div>
</div>

</div>
</div>
</div>

 
  
   


























<script src="js/fabric.min.js"></script>






          <div id="TShirtPanel" style="left:400px;" >
            
        <div class="row">
          <div id="image5" style="background-image:url('content/Products/blackT.png'); ">

         


                
      <canvas id="c" height="500px" width="280px" style="position:fixed; border:0px solid lightblue; user-select: none; border-radius: 7px;"></canvas>


            
          <script src="js/fabric.min.js"></script>
          <script>

 



          var canvas = new fabric.Canvas('c');
                  function clipFunction(elt) {
                
                

            fabric.Image.fromURL(elt.src, function(oImg) 
            {
                    oImg.setLeft(50);
                    oImg.set({width : canvas.width / 2,
                      height : canvas.height / 2});                  
                      oImg.setTop(150);
                      oImg.set('selectable', false);                                  
                                    


              img = new fabric.Group([oImg]);
              canvas.add(img);
              canvas.renderAll();


            });

}




      

      
                  var fcolor;

                     var textObj1 = new fabric.IText('Edit Your Text', {
                      left: 50,
                      top: 100,
                      fontSize: 30,
                        fill:"#ffffff"

                   });
                      textObj1.setTop(50);
                    
                      
                    canvas.add(textObj1);

                    $("#colorpick1").on("change",function(){
                      var tObj = canvas.getActiveObject();
                       fcolor=$("#colorpick1").val();

                      tObj.set("fill",fcolor);

                       canvas.add(tObj);
                  });

                $("#normal").hover(function() {
                    
                        var tObj = canvas.getActiveObject();
                    tObj.set("fontWeight","normal"); 
                      canvas.renderAll();
                   });


                $("#italic").hover(function() {
                   
                    var tObj = canvas.getActiveObject();
                        tObj.set("fontWeight","italic");
                    canvas.renderAll();
                   });

                $("#bold").hover(function() {
                   
                      var tObj = canvas.getActiveObject();
                        tObj.set("fontWeight","bold");
                        canvas.renderAll();
                        });

                $("#oblique").hover(function() {  
                    var tObj = canvas.getActiveObject();
                          tObj.set("fontWeight","oblique");
                    canvas.renderAll();
                   });  


                    $("#ar").hover(function() {
                    var mFont = $('#ar').text();
                    var tObj = canvas.getActiveObject();
                    tObj.set({
                      fontFamily: mFont
                    });
                    canvas.renderAll();
                  });                 

                 $("#an").hover(function() {
                    var mFont = $('#an').text();
                    var tObj = canvas.getActiveObject();
                    tObj.set({
                      fontFamily: mFont
                    });
                    canvas.renderAll();
                  });



                  $("#p").hover(function() {
                    var mFont = $('#p').text();
                    var tObj = canvas.getActiveObject();
                    tObj.set({
                      fontFamily: mFont
                    });
                    canvas.renderAll();
                  });



                  $("#g").hover(function() {
                    var mFont = $('#g').text();
                    
                   var tObj = canvas.getActiveObject();
                    tObj.set({
                      fontFamily: mFont
                   
                    });
                    tObj.set("box-shadow","40px 40px 40px #ffffff");
                    canvas.renderAll();
                   });

                });
          </script>
            </div>

          </div>
              </div>
               <img src ="" id="imageToChange" style="position:fixed; top:200px; left:980px;"/>
                 
                   <a class="waves-effect waves-light btn" id="btnSave" name="data" style="position:fixed;top:610px;
      right:800px;background:transparent;border:1px solid lightgreen;border-radius: 7px;
      box-shadow: 0px 8px 16px 0px rgba(133 ,233 ,109 ,0.89); color:white;">
      <i class="material-icons left">cloud</i>Save Your Design</a>
                
            
                         
             

               <!--Design Save ---->
             
             <script >
             function convertCanvasToImage(canvas) {
          var image = new Image();
          image.src = canvas.toDataURL("image/png");
                //document.write(image);
                return image;
                
              }
                $(function() { 
                $("#btnSave").click(function() { 
                    html2canvas($("#image5"), {
                        onrendered: function(canvas) {
                           theCanvas = canvas;
                           
                            var  uri = theCanvas.toDataURL();
                            
    
                  $.ajax({
                    url:"extract.php",
                    // send the base64 post parameter
                    data:{
                       base64 :uri
                    },
                    // important POST method !
                    type:"post",
                    complete:function(){
                      console.log("Ready");
                    }
                  });



                      }
                   });

              });


                });




                $(function() { 
                $("#done").click(function() { 
                    html2canvas($("#image5"), {
                        onrendered: function(canvas) {
                           theCanvas = canvas;
                           
                            var  uri = theCanvas.toDataURL();
                            
    
                  $.ajax({
                    url:"extract.php",
                    // send the base64 post parameter
                    data:{
                       base64 :uri
                    },
                    // important POST method !
                    type:"post",    
                    complete:function(){
                      console.log("Ready");
                    }
                  });



                      }
                   });

              });


                });




          


            
        </script>

        
                                 


        <!--- Play Crousal -->



        <!-- Script-->

              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      

 <a class="waves-effect waves-light btn"  id="btnPlay" onclick="openNavP()" 
  style="position:fixed;top:610px;right:430px;background:transparent;border:1px solid lightgreen;border-radius: 7px;
      box-shadow: 0px 8px 16px 0px rgba(133 ,233 ,109 ,0.89); height: 30px; width:100px; color:white"><i class="material-icons right">send</i>Play</a>
       
            
                                                                            
           

     


         

<script type="text/javascript" src="materialize/css/materialize.min.css"></script>
      <script type="text/javascript" src="materialialize/js/materialize.min.js"></script>

      <p style=" position:fixed; right:10px; bottom:120px; width:100px; height:50px; color:white; font-family: appleberry; font-size: 20px; ">Play Save</p>
       <p style=" position:fixed; right:10px; bottom:100px; width:100px; height:50px; color:white; font-family: appleberry; font-size: 20px; margin-left: 2px; text-align: center; ">Change</p>
  <div class="fixed-action-btn horizontal" id="floatbtn">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="btn-floating red" id="Play"  onclick="openNavP()"><i class="material-icons" name="data" data-toggle="modal" data-target="#myModal">play_arrow</i></a></li>
      <li><a class="btn-floating yellow darken-1" ><i class="material-icons" id="done">done</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons" onclick="openNav()">invert_colors</i></a></li>

    </ul>
  </div>

<!--- Change T-Colour-->
  

  <div id="myNav" class="overlay"  >
  <a  class="closebtn" onclick="closeNav()"><img src="content/Icons/error.png" id="cancelC"></a>
  <div class="overlay-content">
  <p id="headColour">Change</p>
<p id="headColour">T-Colour </p>
<img src=""  alt=" " width="50" height="50" class="whiteT" onclick="backgroundI('whiteT')">
<img src=""  alt=" " width="50" height="50" class="blackT" onclick="backgroundI('blackT')">
<img src=""  alt=" " width="50" height="50" id="redT" onclick="backgroundI('redT')">
<img src=""  alt=" " width="50" height="50" class="blueT" onclick="backgroundI('blueT')">

<img src=""  alt=" " width="50" height="50" class="pinkT" onclick="backgroundI('pinkT')">
<img src=""  alt=" " width="50" height="50" class="greenT" onclick="backgroundI('greenT')">
<img src=""  alt=" " width="50" height="50" class="yellowT" onclick="backgroundI('yellowT')">
<img src=""  alt=" " width="50" height="50" class="orangeT" onclick="backgroundI('orangeT')">



<img src=""  width="50" height="50" class="purpleT"  onclick="backgroundI('purpleT')">


  </div>
</div>

<script>
function openNav() {
    document.getElementById("myNav").style.width = "20%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

function backgroundI(name)
{
    if(name=='redT'){
                $('#image5').css("background-image","url('content/Products/redT1.png')"); 
                   }
                  


            else if(name=='blueT'){
                $('#image5').css("background-image","url('content/Products/blueT2.png')"); 
                   }
                 
                  else if(name=='yellowT'){
                $('#image5').css("background-image","url('content/Products/yellowT1.png')"); 
                   }
                   
                 else  if(name=='orangeT'){
                $('#image5').css("background-image","url('content/Products/orangeT2.png')"); 
                   }
                   
                 else  if(name=='greenT'){
                $('#image5').css("background-image","url('content/Products/greenT2.png')"); 
                   }
                   
                  else if(name=='purpleT'){
                $('#image5').css("background-image","url('content/Products/purpleT1.png')"); 
                   }
                       

                  else if(name=='blackT'){
                $('#image5').css("background-image","url('content/Products/blackT.png')"); 
                   }
                        
                 else  if(name=='whiteT'){
                $('#image5').css("background-image","url('content/Products/whiteT2.png')"); 
                   }

                    else  if(name=='pinkT'){
                $('#image5').css("background-image","url('content/Products/pinkT1.png')"); 
                   }
                   else
                   {
                     document.getElementById("myNav").style.width = "0%";
                   }        
}
</script>

      <!-- Right Sidebar Text Styling Starts Here -->
  <div class="w3-sidebar w3-bar-block w3-xxlarge" style="width:90px; overflow:hidden; align-content: left; " id="sidebar2">
  <br>
  <br>
  <br>
  <br>
  <br>
  
  <p style="font-size: 25px;  text-align: center; font-family:appleberry; color: white;">Font Styling</p>

    
    
  <div id="textstyle" style="height:100px; width:100px;"><img src="content/Icons/drop5.png" style="height:80px; width:70px; margin-left: 12px; margin-top: 12px;"></div>
   </div>
<script >
    $(document).ready(function() {

    $("#textstyle").on("mouseover", function() {
        $("#left-arrow1").show();
         });
    });
      $("#textstyle").on("mouseout", function() {
        $("#left-arrow1").show();
         });
  
</script>
  

  <!--left bar-->

       <!--    TEXT STYLING STARTS HERE -->

              <div id="tooltipRight1">

<div id="right-arrow1" >
<p style="width:90px; height:40px; font-size: 50px; font-family: newWaltDisneyUI;  
margin-bottom: 20px;  color:#ffccff;margin-left: 300px;">Text Styling</p>

<button type="button" class="close1"   style="position: relative; width: 25px;
height:25px; background-color: transparent; background-image: url('content/Icons/error1.png'); background-repeat: no-repeat; border:0px; margin-left: 30px;
border-radius: 7px; float:left; bottom:40px; margin-right: 4px; cursor:pointer;" >

   </button>

<div id="scrollside21" style=" height:150px; margin-top: 80px;   width:350px; margin-left: 50px; margin-right: 4px;">
                                       
  <!---TEXT STYLING STARTS HERE -->

<div id="TFont1" class="TFont1">Font
<div id="TFont-content1"  class="TFont-content1" ><a id="ar">Arial</a>
<a id="g" >Tangerine</a>
<a id="p" >Appleberry</a>
<a id="an">Cursive</a>
<a id="s"  >New Roman</a>
</div>
</div>

<div id="StyleDropdown1" class="StyleDropdown1">Font Style
<div id="StyleDropdown-content1"  class="StyleDropdown-content1" ><a id="normal" value="normal">Normal</a>
<a id="italic" value="italic">Italic</a>
<a id="oblique" value="oblique">Oblique</a>
<a id="bold" value="bold">Bold</a>
</div>
</div>


<input id ="colorpick1" type="color" width="50px" height="50px" >
<label id=choosecolor1><p style="color:white; box-shadow: 0px 8px 16px 0px rgba(233 ,109 ,0.89); font-size: 16px; cursor:pointer;" onclick="target()">Choose T-Colour</p></label>
</div>
</div>
<script>
function target()
{
   $('#colorpick1').click(); 
}
</script>


 <!--Play Crousel-->


<div id="myNav1" class="overlay" style="z-index: 999; height: 900px;">
  <a href="javascript:void(0)" class="closebtn" id="closeP" onclick="closeNavP()">&times;</a>
  <div class="overlay-content"  >

<div class="container"  style="height:800px;">
  <br>
  <div id="myCarousel1" class="carousel slide" data-ride="carousel" style=" position :absolute; height:600px; top:10px;left:10px;">
    <!-- Indicators -->
    <ol class="carousel-indicators" id="carousel-indicators1" >
      <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel1" data-slide-to="1"></li>
      <li data-target="#myCarousel1" data-slide-to="2"></li>
      <li data-target="#myCarousel1" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox"   >

      <div class="item active">
      <div style=" height: 600px; background-image: url('content/Icons/funky10.png'); max-width: 100%;
              max-height: 100%;  
    border: 1px solid black;
   opacity: 0.8;
    filter: alpha(opacity=60); ">
    <?php
                  
                           while($c==1) {
                               $row = mysqli_fetch_array($result)
                       ?>
                        <img alt="No More Design" width="50%" height="50%"  src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" style="position:fixed;  left:200px; height: 500px; width: 800px; top:20px;opacity: 1.0; "  />
                       <?php  
                          $c++; 
                        }
                

                        ?>

              
                    
        <div class="carousel-caption" id="carousel-caption1">
          <h3>Tshirt 1</h3>
        </div>
        </div>
      </div>

      <div class="item">
       <div style=" background-image: url('content/Icons/funky2.jpg'); max-width: 100%;
              max-height: 100%;  background-color: #ffffff;
    border: 1px solid black;
    opacity: 0.8;
    filter: alpha(opacity=60); height: 600px;">
        <?php     
                       
                  while($c==2) {
                    $row = mysqli_fetch_array($result)
                  ?>
                  <img alt="No More Design"  width="50%" height="50%"  src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" style="position:fixed;  left:200px; height: 500px; width: 800px; top:20px;opacity: 1.0; z-index: 999;"  />
                  <?php  
                  $c++; 
                  }

                 

                 ?>

       

       <div class="carousel-caption" id="carousel-caption1">
          <h3>Tshirt 2</h3>
        </div>
        </div>
      </div>
    
      <div class="item">
       <div style=" height: 600px;background-image: url('content/Icons/funky4.jpg'); max-width: 100%;
              max-height: 100%;  background-color: #ffffff;
    border: 1px solid black;
     opacity: 0.8;
    filter: alpha(opacity=60);">
     <?php   
                   
                  while($c==3) {
                    $row = mysqli_fetch_array($result)
                  ?>
                  <img alt="No More Design" width="50%" height="50%"  src="imageView.php?image_id=<?php echo $row["imageId"]; ?>"  style="position:fixed;  left:200px; height: 500px; width: 800px; top:20px;opacity: 1.0; z-index: 999;"/>
                  <?php  
                  $c++; 
                  }

                
                   

                ?>

       

     
        <div class="carousel-caption" id="carousel-caption1">
          <h3>Tshirt 3</h3>
        </div>
        </div>
      </div>

      <div class="item">
       <div style=" height: 600px;background-image: url('content/Icons/funky12.png'); max-width: 100%;
              max-height: 100%;  background-color: #ffffff;
    border: 1px solid black;
    opacity: 0.8;
    filter: alpha(opacity=60);">
        
                <?php     
                   
                  while($c==4) {
                    $row = mysqli_fetch_array($result)
                  ?>
                  <img alt="No More Design" width="50%" height="50%" src="imageView.php?image_id=<?php echo $row["imageId"]; ?>"   style="position:fixed;  left:200px; height: 500px; width: 800px; top:20px;opacity: 1.0; " />
                  <?php  
                  $c++; 
                  }

                 mysqli_close($conn);

               ?>

      
                        
                  
            <div class="carousel-caption" id="carousel-caption1">
          <h3>Tshirt 4</h3>
        </div>
           
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  </div>
</div>

<script>

function openNavP() {
    document.getElementById("myNav1").style.width = "100%";
}

function closeNavP() {
    document.getElementById("myNav1").style.width = "0%";
}
   
</script>







   



      </body>
     </html>
