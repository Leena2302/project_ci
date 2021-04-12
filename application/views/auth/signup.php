<div class="card">
  <div class="card-body p-5 m-5">
    <div class="container">
      <div class="row">
        <div class="col-md-1"></div>
        <h1 class="text-center border-bottom pt-2 pb-2">Create Account</h1>
        <div class="col-md-10 mx-auto">

          <!-- <?php echo validation_errors(); ?> -->
          <?php echo form_open_multipart('signup'); ?>
          <!-- <?= form_open_multipart('signup') ?> -->
          <div class="pt-3"></div>
          <div class="form-group row" class="col-sm-4 col-form-label">
            <label for="exampleInput">First Name</label>
            <div class="col-sm-8 pl-5">
              <input type="text" name="first_name" class="form-control" placeholder="Enter First Name"
                value="<?php echo set_value('first_name'); ?>" size="50">
              <small style="color:red;"><?php echo form_error('first_name'); ?></small>
            </div>
          </div>
          <div class="form-group row" class="col-sm-4 col-form-label">
            <label for="exampleInput">Last Name</label>
            <div class="col-sm-8 pl-5">
              <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name"
                value="<?php echo set_value('last_name'); ?>" size="50">
              <small style="color:red;"><?php echo form_error('last_name'); ?></small>
            </div>
          </div>
          <div class="form-group row" class="col-sm-4 col-form-label">
            <label for="exampleInputEmail" class="padd">Email</label>
            <div class="col-sm-8 pl-5">
              <input type="text" name="email" class="form-control pr-5" placeholder="Enter Email"
                value="<?php echo set_value('email'); ?>" size="50">
              <small style="color:red;"><?php echo form_error('email'); ?></small>

            </div>
          </div>
          <div class="form-group row" class="col-sm-4 col-form-label">
            <label class="pr-1">Phone No.</label>
            <div class="col-sm-8 pl-5">
              <input type="tel" name="mobile_no" class="form-control" placeholder="Enter Phone number"
                value="<?php echo set_value('mobile_no'); ?>" size="50">
              <small style="color:red;"><?php echo form_error('mobile_no'); ?></small>
            </div>
          </div>
          <div class="form-group row" class="col-sm-3 col-form-label">
            <label for="Address" class="pr-3">Address</label>
            <div class="col-sm-8 pl-5">
              <textarea class="form-control" rows="5" id="Address" name="address" placeholder="Address">
                            <?php echo set_value('address'); ?>
                            </textarea>
            </div>
            <div>

              <div class="form-group row pt-3">
                <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8 pl-4">
                  <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password"
                    value="<?php echo set_value('password'); ?>" size="50">
                </div>
              </div>
              image to upload:

              <input type="file" name="userfile" size="50">
              <!-- <input type="submit" value="Upload Image" name="submit"> -->
              <div class="pt-4">
                <button type="submit" class="btn btn-primary" value='upload'>Submit</button>
              </div>
              <div class="col-md-1"></div>

              <?= form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>