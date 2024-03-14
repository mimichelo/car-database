<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    
  </head>

  <body style="padding: 50px;">
  <h3 class="text-center">Contact Form</h3>
  <div class="container">
   <form method="POST" action="process.php"> 
    <div class="form-group">
      <label for="firstname">First Name</label>
      <input type="text" name="firstname" id="firstname" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="lastname">Last Name</label>
      <input type="text" name="lastname" id="lastname" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" name="phone" id="phone" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="message">Message</label>
      <input type="text" name="message" id="message" class="form-control" required>
    </div>

    <div class="form-group">
      <button type="submit"class="btn btn-success">Submit</button>
    </div>
    
</body>
</html>
