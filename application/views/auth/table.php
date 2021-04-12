<div class="container">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Contact no.</th>
            <th>Address</th>
            <th>Password</th>
          </tr>
        </thead>
        <tbody>
          <?php

                    if (count($user))
                        $cnt = 1;
                    foreach ($user as $row) {
                    ?>
          <tr>
            <td><?php echo $row->first_name; ?></td>
            <td><?php echo $row->last_name; ?></td>
            <td><?php echo $row->email; ?></td>
            <td><?php echo $row->mobile_no; ?></td>
            <td><?php echo $row->address; ?></td>
            <td><?php echo $row->password; ?></td>
            <td><?php echo $row->image; ?></td>
          </tr>

          <?php

                        $cnt++;
                    }

                    ?>

        </tbody>
      </table>
    </div>
  </div>
</div>