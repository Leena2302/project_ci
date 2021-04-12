<div class=" padding1">
  <h1 class="text-center">Welcome</h1>
  <div class="container">

    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6 pt-4">
        <div class="shadow-lg p-4 bg-white rounded">
          <?= form_open('login_form') ?>
          <!-- <form action="/action_page.php"> -->
          <div class="form-group">
            <label for="email" style="padding-right: 126px;">Email</label>
            <input type="email" name="email" placeholder="Enter email" id="email"
              value="<?php echo set_value('email'); ?>" size="50">
          </div>
          <br>
          <div class="form-group">
            <label for="pwd" class="pr-5 mr-5">Password</label>
            <span class="icon1">
              <input type="password" name="password" id="password" placeholder="Enter the password"
                value="<?php echo set_value('password'); ?>" size="50">
              <i class="far fa-eye" id="togglePassword"></i>
            </span>
          </div>


          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox"> Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <?= form_close(); ?>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
  <div class="container pt-5 pb-5">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-sm-6 text-center">
        <a href="#" class="text-muted">Forget Username/Password?</a><br>
        <a href="#" class="text-muted">Don't have an account?</a>
        <a href="user-signUp" class="text-muted pb-5">signup</a>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script>
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');

  togglePassword.addEventListener('click', function(e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
  });
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>