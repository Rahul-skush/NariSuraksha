
<?php 
include "../config/dbconfig.php"; 
?>

<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

   
 
  
    <title>Using MySQL and PHP with Google Maps</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        margin-top:30px;
        display: block;
  margin-left: auto;
  margin-right: auto;
        height: 80%;
        width:80%;
        text-align:center;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

<html>
  <body>
 
 

  
  <div id="map"></div> 


    

    <script>

    
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

      

     //Find live location user

     var lt;
     var ln;
     GetGeolocation();
     function GetGeolocation() 
     { 
               navigator.geolocation.getCurrentPosition(GetCoords);
     }
     function GetCoords(position){
      
      lt=position.coords.latitude;
      ln=position.coords.longitude;
      // alert(lt); 
      // alert(ln); 
      // alert(position.coords.accuracy); 
      }
 
      
    //End live location of user
      
    icon: {                             
  url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"                           }

        function initMap() {



        var map = new google.maps.Map(document.getElementById('map'), {
          //center: new google.maps.LatLng(25.405754, 81.876980),
          center: new google.maps.LatLng(lt-1.4409548,ln+0.9308208),
 
          zoom: 12
        });


        //user marker
    let marker = new google.maps.Marker({
    map: map,
    position: {lat: lt-1.4409548, lng: ln+0.9308208},
    icon: {
      url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"
    }
  });
 


        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
            var xml = data.responseXML;
            var markers = document.getElementsByTagName('markers');

            console.log(markers);


            

            var i=0;
            Array.prototype.forEach.call(markers[0].childNodes, function(markerElem) 
            
            {
              
                    var id = markers[0].childNodes[i].getAttribute('id');
                    var name = markers[0].childNodes[i].getAttribute('name');
        
                    var address = markers[0].childNodes[i].getAttribute('address');
                    var type = markers[0].childNodes[i].getAttribute('type');
                    var lat=markers[0].childNodes[i].getAttribute('lat');
                    var lng=markers[0].childNodes[i].getAttribute('lng');
                    var mob=markers[0].childNodes[i].getAttribute('mobile_no');


                    console.log(id);
                    console.log(name);
                    console.log(address);
                    console.log(type);
                    console.log(lat);
                    console.log(lng);
                    console.log(mob);


                    var point = new google.maps.LatLng(
        
                        parseFloat(markers[0].childNodes[i].getAttribute('lat')),
                        parseFloat(markers[0].childNodes[i].getAttribute('lng')));

                    var infowincontent = document.createElement('div');
                    var strong = document.createElement('strong');
                    strong.textContent = name
                    infowincontent.appendChild(strong);
                    infowincontent.appendChild(document.createElement('br'));

                    var text = document.createElement('text');
                    text.textContent = address
                    infowincontent.appendChild(text);

 

                    var icon = customLabel[type] || {};
                    var marker = new google.maps.Marker({
                        map: map,
                        position: point,
                        label: icon.label
                    });
                    marker.addListener('click', function() {
                        infoWindow.setContent(infowincontent);
                        infoWindow.open(map, marker);
                   



                    // SMS START HERE
                
                        // alert(name);
                        // alert(mob);

                        <?php

                      $lat = "document.writeln(lt);"; 
                      //echo $lat;
                      $mob= "";

                       
                      $db = mysqli_connect($servername, $username, $password, $database);
                        
                      $testimonial_query = "SELECT * FROM markers";

                      

                      
                      $testimonial_res = mysqli_query($db, $testimonial_query);
                    

                      $testimonial_num = mysqli_num_rows($testimonial_res);

                      if($testimonial_num)
                      {
                        while ($row = mysqli_fetch_assoc($testimonial_res)){
                              
                                   $mob= $row['mobile_no'] ;
                        } 
                      }


                      $number='numberyuop';
                      //$mob = "document.writeln(mob);"; 
                      $mob = '638702979'; 
                      $lat = "document.writeln(lt);";  
                      $log = "document.writeln(ln);";  
                      $curl = curl_init();
                      echo $mob;
                      // echo $lat;
                      // $text= $lat. ' '. $log;
                      // echo $text;
                      // echo $mob;

                      // $str='';

                      // $array = str_split($text);
                      // foreach ($array as $char) {
                      
                      //     if($char==' ')
                      //     $str=$str.'%20';
                      //     else
                      //     $str=$str.$char;
                          
                      //   }
                      
                      // echo $str;
                      curl_setopt_array($curl, array(
                      
                      
                      CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=sT0gcymR5ZOYuDUhWKEAoFQrpGXziPtIaxldvfS7ne1864V3JMlUsTv9MowWFE2tDqrhnKAVSRuI54k6&route=q&message=$number&language=english&flash=0&numbers=$mob",
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_ENCODING => "",
                      CURLOPT_MAXREDIRS => 10,
                      CURLOPT_TIMEOUT => 30,
                      CURLOPT_SSL_VERIFYHOST => 0,
                      CURLOPT_SSL_VERIFYPEER => 0,
                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                      CURLOPT_CUSTOMREQUEST => "GET",
                      CURLOPT_HTTPHEADER => array(
                          "cache-control: no-cache"
                      ),
                      ));
                      

                      $response = curl_exec($curl);
                      $err = curl_error($curl);

                      curl_close($curl);

                    //   if ($err) {
                    //   echo $err;
                    //   } else {
                    //   echo $response;
                    //   }



                  ?> 


                        
                   
                         

                    });


                    // SMS END HERE


                    i++;
            });



          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPKOD1-Gxhg9YvhLKl8lPFokjSBY3Cy-E&callback=initMap">
    </script>



  

 
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  
  </body>
</html>



<?php
//require("phpsqlajax_dbinfo.php");

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}


 
                 





// Opens a connection to a MySQL server
$connection=mysqli_connect($servername, $username, $password, $database);  
 
$query = "SELECT * FROM markers WHERE 1";
$result = mysqli_query($connection, $query);
$testimonial_num = mysqli_num_rows($result);


//header("Content-type: text/xml");

// Start XML file, echo parent node
echo "<?xml version='1.0' ?>";
echo '<markers>';
$ind=0;
// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  echo '<div ';
  echo 'id="' . $row['id'] . '" ';
  echo 'name="' . parseToXML($row['name']) . '" ';
  echo 'address="' . parseToXML($row['address']) . '" ';
  echo 'lat="' . $row['lat'] . '" ';
  echo 'lng="' . $row['lng'] . '" ';
  echo 'type="' . $row['type'] . '" ';
  echo 'mobile_no="' . $row['mobile_no'] . '" ';
  echo '></div>';
  $ind = $ind + 1;
}

// End XML file
echo '</markers>';

?>
