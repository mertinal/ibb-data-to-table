<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>IBB API - Mert İnal</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="css/stil.css">
    <link rel="stylesheet" type="text/css" href="css/fotorama.css">
    <link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.10.20/css/dataTables.semanticui.min.css">
   
<meta name="description" content="IBB API'lerini arayabilir , seçtiğiniz API verilerini tabloda görebilirsiniz.">
    <style>

        .ui.vertical.menu .item>i.icon.left {
            float: none;
            margin: 0em 0.35714286em 0em 0em !important;
        }

        .cent {
            text-align: center
        }
        .ui.label{
            background-color: transparent;
        }
     

/* Define what each icon button should look like */
.button {
  color: white;
  display: inline-block; /* Inline elements with width and height. TL;DR they make the icon buttons stack from left-to-right instead of top-to-bottom */
  position: relative; /* All 'absolute'ly positioned elements are relative to this one */
  padding: 2px 5px; /* Add some padding so it looks nice */
}

/* Make the badge float in the top right corner of the button */
.button__badge {
  background-color: #fa3e3e;
  border-radius: 2px;
  color: white;
 
  padding: 1px 3px;
  font-size: 10px;
  
  position: absolute; /* Position the badge within the relatively positioned button */
  top: 0;
  right: 0;
}
    </style>
</head>


<body bg style="background-color: #ffcc99;">
    <div class="ui container-fluid" style="padding-left: 15px; padding-right: 15px;">
        <div class="ui middle aligned grid ">
            <div class="row" >



                <div class="sixteen wide mobile sixteen wide computer column" style="background-color: #1B1C1D;">


                    <div class="ui fluid stackable inverted menu  visible overlay" >
                        <div class="ui container" style="width: 100%;">

                            <a href="http://data.ibb.gov.tr" class="header item">
                                  Data &nbsp;
                                <i class="ui red large heart icon"></i> IBB
                              
                            </a>
                         
                            <div class="right menu">
                               
                             
                                

    <div class="ui simple right  dropdown item">
        <div class="navbar">
            <div class="button">
                <i class="circular inverted orange bell outline icon"></i>
              <span class="button__badge">2</span>
            </div>
            
          </div>
        <div class="menu">
            
            <a class="item" href="http://github.com/mertinal"><i class="circular bordered inverted black github icon "></i>Github @mertinal</a>
            <div class="divider"></div>
            <a class="item" href="http://linkedin.com/in/mertinal"><i class="circular bordered inverted blue linkedin icon"></i>Linkedin @mertinal</a>
           
        </div>
    </div>

    <div class="ui simple top right dropdown item" style="margin-right:15px;">
        <div class="navbar">
            <div class="button">
                <img class="ui mini circular image" src="./images/pp.png">
             
            </div>
            
          </div>
        <div class="menu">
            
            <a class="item" href="#"><i class="circular bordered inverted  user icon "></i>Profilim</a>
            <div class="divider"></div>
            <a class="item" href="#"><i class="circular bordered inverted  flag icon"></i>Site Ayarları</a>
            <div class="divider"></div>
            <a class="item" href="#"><i class="circular bordered inverted  sign out alternate icon"></i>Çıkış Yap</a>
            
        </div>
    </div>


                            </div>
                        </div>
                    </div>


                </div>
            </div>

           

        
            <div class="row ">
                
                <div class="sixteen wide mobile sixteen wide computer column">
                    <div class="ui stackable equal width middle aligned grid">

                        <div class="ui column">
                            <div class="ui card-fluid"
                                style="  background-image: linear-gradient(to right, purple , blue); border-radius:5px ; padding: 15px ; ">
                                <div class="stackable label">
                                    <h2 class="header" style="color:white ;">85<div style="float:right;">

                                            <i class="ui  white github icon"></i>

                                        </div>
                                        </h3>

                                </div>
                                <div class="ui progress yellow active" data-value="75" data-percent="75"
                                    style="background-color: grey;margin-top: 5px;margin-top:10px ;margin-bottom: 10px;">
                                    <div class="bar" style="transition-duration: 300ms; width: 75%; height: 10px;">

                                    </div>
                                </div>
                                <div class="label">
                                    <h4 class="header" style="color:white ; margin-top: 20px;">Toplam API Sayısı<div
                                            style="float:right;">

                                            +4.2% <i class="ui  white arrow up icon"></i>

                                        </div>
                                        </h3>

                                </div>
                            </div>
                        </div>
                        <div class="ui column">
                            <div class="ui card-fluid"
                                style="  background-image: linear-gradient(to right, #db5812 , #6e1010); border-radius:5px ; padding: 15px;">
                                <div class="stackable label">
                                    <h2 class="header" style="color:white; ;">8323<div style="float:right;">

                                            <i class="ui  white search icon"></i>

                                        </div>
                                        </h3>

                                </div>
                                <div class="ui progress yellow active" data-value="40" data-percent="40"
                                    style="background-color: grey;margin-top: 5px;margin-top:10px ;margin-bottom: 10px;">
                                    <div class="bar" style="transition-duration: 300ms; width: 55%; height: 10px;">

                                    </div>
                                </div>
                                <div class="label">
                                    <h4 class="header" style="color:#fff ; margin-top: 20px;">Toplam Sorgu<div
                                            style="float:right;">

                                            +1.2% <i class="ui  white arrow up icon"></i>

                                        </div>
                                        </h3>

                                </div>
                            </div>
                        </div>
                        <div class="ui column">
                            <div class="ui card-fluid"
                                style="  background-image: linear-gradient(to right, #52571d, #275718); border-radius:5px ; padding: 15px">
                                <div class="stackable label">
                                    <h2 class="header" style="color:white; ;">1763<div style="float:right;">

                                            <i class="ui  white eye icon"></i>

                                        </div>
                                        </h3>

                                </div>
                                <div class="ui progress yellow active" data-value="20" data-percent="20"
                                    style="background-color: grey;margin-top: 5px;margin-top:10px ;margin-bottom: 10px;">
                                    <div class="bar" style="transition-duration: 300ms; width: 20%; height: 10px;">

                                    </div>
                                </div>
                                <div class="label">
                                    <h4 class="header" style="color:white ; margin-top: 20px;">Ziyaretçiler<div
                                            style="float:right;">

                                            -7.2% <i class="ui  white arrow down icon"></i>

                                        </div>
                                        </h3>

                                </div>
                            </div>
                        </div>

                       
                    </div>
                     <div class="row ">
                
                <div class="sixteen wide mobile sixteen wide computer column">
                    <div class="ui search" style="margin-top: 20px ;">
        <div class="ui fluid left icon input" style="height: 100px !important">
          <input class="prompt" type="text" placeholder="IBB Data Ara .." autocomplete="off" style=" font-size:24px;">
          <i class="red large search icon"><div class="ab"></div></i>
        </div></div></div></div>
                      <div class="sixteen wide mobile sixteen wide computer column" style="margin-top: 10px;">
                                  <div class="ui stackable  middle aligned grid">
                                    <div class="sixteen wide column" style="margin-top: 15px">
                                    <div id="tabletabtitle" style="visibility: hidden;word-wrap:break-word !important;"><h1 class="ui header center aligned" id="tabletitle" style="color: black; " >” Üyeler ” </h1></div>
                                </div>
                                 <div class="sixteen wide column" style="margin-top: 10px">
                                  <div class="ui fluid card" style="background-color: transparent;box-shadow: none;">
                                  
                                <table id="examplediy" class="ui celled table" style="width:100% ; visibility: hidden;">
                                    <thead>
                                        
                                    </thead>
                                    <tbody>
                                      
                                    </tbody>
                                    <tfoot>
                                       
                                    </tfoot>
                                </table>
                            </div>

                            </div>  
                            </div>
                        </div>
                    
                </div>
                </div>
                </div>
                </div>
                </div>

</body>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/semantic.min.js"></script>
<script type="text/javascript" src="js/utils.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.semanticui.min.js"></script>

<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
    var ctx = document.getElementById('canvas').getContext('2d');
    var randomScalingFactor = function () {
        return Math.round(Math.random() * 100);
    };
    var gradient = ctx.createLinearGradient(0, 0, 0, 450);
    
    gradient.addColorStop(0, 'rgba(23, 70, 111 , 1)');
    gradient.addColorStop(0.5, 'rgba(23, 70, 111 , 1)');
    gradient.addColorStop(1, 'rgba(23, 70, 111 , 1)');

    var gradient2 = ctx.createLinearGradient(0, 0, 0, 450);
    gradient2.addColorStop(0, 'rgba(111, 161, 205, 1)');
    gradient2.addColorStop(0.5, 'rgba(111, 161, 205,1');
    gradient2.addColorStop(1, 'rgba(111, 161, 205, 1)');
    var keys = [];
  var values=[];
  var gelirkeys=[];
  var gelirvalues=[];

 
    
    var config = {
        type: 'line',

        data: {
            labels: keys,
            datasets: [{
                label: 'Sayfa Ziyareti',
                fill: true,
                backgroundColor: gradient,
                borderColor: window.chartColors.blue,
                spanGaps: false,
                data: values
            }, {
                label: 'Gelir $',
                fill: true,
                backgroundColor: gradient2,
                borderColor: window.chartColors.blue,
                spanGaps: false,
                data:gelirvalues,
            }]
        },
        options: {
            responsive: true,
            title: {
                fontSize: 20,
                display: true,
                text: 'Reklam Gelirleri',
                lineHeight: 1.6,
                fontFamily: 'sans-serif'
            },
        }
    };
    var x;
    window.onload = function () {
        x=new Chart(ctx, config)
        window.myLine = new Chart(ctx, config);
    };
    $.getJSON("ziyaretchart.json", function(result){
     $.each(result, function(key, val){
        values.push(val);
        keys.push(key)
      });
    });
    $.getJSON("gelirchart.json", function(result){
     $.each(result, function(key, val){
        gelirkeys.push(key);
        gelirvalues.push(val)
      });
      x.update();
    });


</script>



      <script>

  
   $(".input").click(function(e) {
        $('.prompt').val("");
        $('.prompt').css( 'pointer-events', 'initial' );

   });


    var keys = [];
 
 var lab="";
 
        function toTitleCase(str) {
    return str.replace(/\w\S*/g, function(txt){
        return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
    });
}
        var sondata=[];
        $(document).ready(function () {
    $.ajax({ 
        type: 'GET', 
        url: 'jes.php', 
        success: function (data) { 
            data["result"].forEach(function(item){
                var x=toTitleCase(item.split("-").join(" "));
  sondata.push({'title':x,'urls':item});
});
          $('.ui.search')
  .search({
    
    source: sondata,
        onSelect: function (result, response) {
$('.prompt').css( 'pointer-events', 'none' );
$('.icon.cleartext').css( 'pointer-events', 'initial' );
            $('.icon.cleartext').css("visibility", "visible");
    var sonuc=result['urls'];
   // keys.length = 0;
           // values.length = 0;
          //   x.options.title.text = result['title'];
  $('#tabletitle').text(result['title']);
    $.ajax({ 
        type: 'GET', 
        url: 'getId.php?text='+sonuc, 
        success: function (data) {
             if ($.fn.DataTable.isDataTable("#examplediy")) {
  $('#examplediy').DataTable().clear().destroy();
}

var cebir=true;
 var values=[];
            values=data;
          if(cebir){
            /*
            console.log(Object.keys(values[0]));
              console.log(values[0]);
               <th>İsim</th>
                                            <th>Cinsiyet</th>
                                            <th>Şehir</th>
                                            <th>Yaş</th>
                                            <th>Mail</th>
                                            <th>Telefon</th>
*/

/*
'<tr><td>'.$değer['name'].
'</td><td>'.$değer['gender'].
'</td><td>'.$değer['il'].'</td>
                                            <td>'.$değer['age'].'</td>
                                            <td>'.$değer['mail'].'</td>
                                            <td>'.$değer['phone'].'</td>
                                        </tr>'
                                        */
var allbody="";
var headstring="";
              Object.keys(values[0]).forEach(function(entry) {
                headstring=headstring+"<th>"+entry+"</th>";
  
});
               values.forEach(function(entry) {
                allbody=allbody+'<tr>';
                Object.values(entry).forEach(function(centry) {
                    allbody=allbody+"<td>"+centry+"</td>";
                   

               
  
});
                allbody=allbody+'</tr>';
  
});

              headstring="<tr>"+headstring+"</tr>"

                $("#examplediy > thead").html(headstring);
                $("#examplediy > tbody").html(allbody);
                $("#examplediy > tfoot").html(headstring);
            $("#tabletabtitle").css("visibility", "visible");
            $("#examplediy").css("visibility", "visible");
    $('#examplediy').DataTable();

  
          }
          
              }
    });

    return true;
}
  })
; 

  }

    });
});
    </script>

</html>