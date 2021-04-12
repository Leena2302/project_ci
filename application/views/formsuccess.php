<!-- <html>

<head>
    <title>My Form</title>
</head>

<body>

    <h3>Your form was successfully submitted!</h3>
    <a href="user-login">Login</a>

     <p><?php echo anchor('form', 'Try it again!'); ?></p> 

</body>

</html> -->

<html>

<head>
  <title>Success Message</title>
</head>

<body>
  <h3>Congragulation You Have Successfuly Uploaded</h3>
  <!-- Uploaded file specification will show up here -->
  <ul>
    <?php foreach ($upload_data as $item => $value) : ?>
    <li><?php echo $item; ?>: <?php echo $value; ?></li>
    <?php endforeach; ?>
  </ul>
  <p><?php echo anchor('form', 'Try it again!'); ?></p>
</body>

</html>