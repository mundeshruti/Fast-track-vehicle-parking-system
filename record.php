<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Parking</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center" id="header">
                   <h1> Fast-track Vehicle Parking</h1>
                   <ul>
                       <li><a href="login1.php">Home</a></li>
                       <li><a href="record.php">All Records</a></li>
                    </ul>
                </div>
            </div>
        </div>     
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="register1">All Vehicle Entry And Exit Records</h2>
                </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                   <div class="input-group">
                       <div class="input-group-prepend">
                           <span class="input-group-text" >Search</span>
                       </div>
                        <input type="text" class="form-control" onkeyup="search()" id="text" placeholder="Search Vehicle Details">
                   </div>
                   
                <table class="table table-striped" id="table" >
                    <thead>
                        <tr>
                            <th>Owner Name</th>
                            <th>Vehicle Name</th>
                            <th>Vehicle Number</th>
                            <th>Entry Date</th>
                            <th>Exit Date</th>
                            <th>Slot Number</th>
                        </tr>
                    </thead>
                        <tr>
                            <td>Shrutika</td>
                            <td>Thar</td>
                            <td>MH 26 BQ 4083</td>
                            <td>11-10-22</td>
                            <td>12-10-22</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Shruti</td>
                            <td>XUV</td>
                            <td>MH 26 BA 9067</td>
                            <td>11-10-22</td>
                            <td>12-10-22</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Sakshi</td>
                            <td>BMW</td>
                            <td>MH 26 BZ 1376</td>
                            <td>11-10-22</td>
                            <td>12-10-22</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>Anuja</td>
                            <td>Thar</td>
                            <td>MH 26 BQ 9890</td>
                            <td>11-10-22</td>
                            <td>12-10-22</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Rutuja</td>
                            <td>Swift</td>
                            <td>MH 26 NR 2754</td>
                            <td>10-10-22</td>
                            <td>11-10-22</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>Ram</td>
                            <td>Electrical</td>
                            <td>MH 24 CG 7657</td>
                            <td>10-10-22</td>
                            <td>11-10-22</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>Sagar</td>
                            <td>Activa</td>
                            <td>MH 24 MN 9922</td>
                            <td>10-10-22</td>
                            <td>11-10-22</td>
                            <td>6</td>
                        </tr>

                </table>        
               </div>
            </div>
        </div>
    </section>
    <script>    
        const search = () =>{
            var input_value = document.getElementById("text").value.toUpperCase();
            var table = document.getElementById("table");
            var tr = table.getElementsByTagName("tr");
            for(var i =0; i<tr.length; i++){
               td = tr[i].getElementsByTagName("td")[0];
               
               if(td){
                 var text_value = td.textContent;
                 if(text_value.toUpperCase().indexOf(input_value)>-1){
                    tr[i].style.display = "";
                 }else{
                    tr[i].style.display= "none";
                 }
               }
            }

        }   
    </script>
</body>
</html>

    <?php

?>
