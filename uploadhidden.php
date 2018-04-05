<html lang="en">
<head>
<title>PHP - Image Uploading with Form JS Example</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="js/uploadform.js"></script> 
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

 
    
<script src="js/moveClipart2.js">/*google js script*/
        
    </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<script src="js/moveClipart.js"> </script>

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
<body>
  

  <form action="imageuploadpro.php" enctype="multipart/form-data" id="frmImageUpload" method="post">
   
    
          <input id="fooupload" type="file" title=""   style="display:none"  name="image" type="button"/>

          <label for="fooupload"><img src="content/Icons/add.png" id="addimg"></label>
    
    <input  type="button" title="" style="display:none;" id="btnSubmit">
    <label for="btnSubmit"><img src="content/Icons/check.png"  width="20px" id="checkimg" height="20px"></label>
    
  </form>
   <div id="image8"></div>
   <script> 
        $(document).ready(function() { 
            $("#btnSubmit").click(function(){
              $("#frmImageUpload").ajaxForm({target: '#image8'}).submit();
            });
        }); 
</script>
  
</body>
</html>