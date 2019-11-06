
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Linking fontawesome for the icons. -->
    <script src="https://kit.fontawesome.com/ce6452e9e3.js" crossorigin="anonymous"></script>

   
</head>

<script>

$(document).ready(function(){
    $("#btn-1").click(function(){
        $("#div1").fadeToggle();
    });
    $("#btn-2").click(function() {
        $("#div2").fadeToggle();
    });
    $("#btn-3").click(function() {
        $("#div3").fadeToggle();
    });
    $("#btn-4").click(function() {
        $("#div4").fadeToggle();
    });
});
</script>
<style>



.card-top {
	background-color: #160424;
    padding: 40px;
    text-align: center;
   	font-size: 200px;
    color: white;
    box-shadow: 1px 1px 3px black;
  }

.btn {
	background-color: #160424;
    box-shadow: 3px 3px 3px black;
    border: 0;
    color: white;
    border-radius: 5px;
  }

.btn:hover {
	background-color: #160424;
    color: white;
  }


</style>


<body>

    <?php
        include './header/hms-block.php';
    ?>
 
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="width:400px; margin-left: 70px;">
                    <div class="card-top">
    	                 <p>S</p>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Shrey Shah</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <button class="btn" id="btn-1">See Profile</button><br> <br>
                        <div id="div1" style="display: none;">Some example text some example text. John Doe is an architect and engineerSome example text some example text. John Doe is an architect and engineerSome example text some example text. John Doe is an architect and engineerSome example text some example text. John Doe is an architect and engineer</div>
                    </div>
                </div>
            </div>      
            <div class="col-sm-6">
                <div class="card" style="width:400px; margin-left: 75px;">
                    <div class="card-top">
                        <p>R</p>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Ronak Sirwani</h4>
                        <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
                        <button class="btn" id="btn-2">See Profile</button> <br> <br>
                        <div id="div2" style="display: none;">Some example text some example text. John Doe is an architect and engineerSome example text some example text. John Doe is an architect and engineerSome example text some example text. John Doe is an architect and engineerSome example text some example text. John Doe is an architect and engineer</div>
                    </div>
                </div>
            </div>
        </div> <br> <br>
        <div class="row">    
            <div class="col-sm-6">
                <div class="card" style="width:400px; margin-left: 70px;">
                    <div class="card-top">
                       <p>D</p>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Durgesh Singh</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <button class="btn" id="btn-3">See Profile</button><br> <br>
                        <div id="div3" style="display: none;">Some example text some example text. John Doe is an architect and engineerSome example text some example text. John Doe is an architect and engineerSome example text some example text. John Doe is an architect and engineerSome example text some example text. John Doe is an architect and engineer</div>
                    </div>
                </div>
            </div>     
            <div class="col-sm-6">
                <div class="card" style="width:400px; margin-left: 75px;">
                    <div class="card-top">
                       <p>J</p>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Jay Prajapati</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <button class="btn" id="btn-4">See Profile</button><br> <br>
                        <div id="div4" style="display: none;">Some example text some example text. John Doe is an architect and engineerSome example text some example text. John Doe is an architect and engineerSome example text some example text. John Doe is an architect and engineerSome example text some example text. John Doe is an architect and engineer</div>
                    </div>
                </div>
            </div>     
        </div> 
    </div>

<?php
    include 'footer/footer.php';
?>
    
</body>
</html>
