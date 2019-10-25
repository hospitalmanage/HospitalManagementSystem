
<html>
<head>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <style>
      .alert{
    display: none;
}
    </style>

    <script>
      $(document).ready(function(){
    $('button').click(function(){
        $('.alert').show()
    }) 
});
    </script>
</head>

<body>
    <div class="container">
        <h2>Dismissal Alert Messages</h2>
        <button>Submit</button>
        <div class="alert alert-success alert-dismissable">
    <button class="spinner-grow spinner-grow-sm" data-dismiss="alert" aria-hidden="true">&times;</button>
            Success! message sent successfully.
        </div>

    </div>
</body>
</html>
