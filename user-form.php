<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home | UIU Diary</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <h1 style="margin:70 0px" class="text-center text-warning">UIU Diary</h1>

<div class="user-detail container">
    
    <h2 class="text-center text-info">Insert User Data</h2>
    <p id="msg"></p>
    <form id="userForm" method="POST">
          <div class="form-group">
              <label>Full Name</label>
              <input class="form-control" type="text" placeholder="Enter Full Name" name="fullName" required>
          </div>
          <div class="form-group">
              <label>Email Address</label>
              <input class="form-control" type="email" placeholder="Enter Email Address" name="emailAddress" required>
          </div>
          <div class="form-group">
              <label>City</label>
              <input class="form-control" type="city" placeholder="Enter Full City" name="city" required>
          </div>
          <div class="form-group">
              <label>Country</label>
              <input class="form-control" type="text" placeholder="Enter Full Country" name="country" required>
          </div>
          
          
          
          <button class="btn btn-outline-success btn-lg" type="submit">Submit</button>
    </form>
    <hr>

    <div class="d-flex justify-content-center">
        <button id="showData" class="btn btn-outline-warning btn-lg ">Show User Data</button>
    </div>

    <hr>
    <div class="d-flex justify-content-center">

        <div id="table-container" class="table table-hover table-dark"></div>
    </div>
    

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax-script.js"></script>
</body>
</html>