<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/css/bootstrap.css') ?>" />
   <style>
      form {
         margin-top: 50px;
         margin-left: 100px;
         margin-right: 100px;

      }

      input {
         width: 50%;
      }
   </style>
</head>

<body>
   <div class="container-fluid">
      <div class="well">
         <h2 class="text-center">Please Enter some details</h2>
      </div>
   </div>
   <div class="text-center" style="font-size: 20px">
      Click <a href="/main">here</a> to view all details
   </div>
   <form method="post">
      <div class="row">
         <div class="col-lg-6">
            <div class="form-group">
               <label for="name"> Name:</label>
               <input type="text" class="form-control" name="name" placeholder="Enter Name">
            </div>
            <?php
            if (isset($validation) && $validation->hasError('name')) { ?>
               <p class='text-danger'>"<?php echo $validation->getError('name'); ?></p>
            <?php } ?>
         </div>

         <div class="col-lg-6">
            <div class="form-group">
               <label for="dob">Date Of Birth:</label>
               <input type="date" name="dob" class="form-control">
            </div>
            <?php
            if (isset($validation) && $validation->hasError('dob')) { ?>
               <p class='text-danger'>"<?php echo $validation->getError('dob'); ?></p>
            <?php } ?>
         </div>
      </div>
      <br>
      <div class="row">
         <div class="col-lg-6">
            <div class="form-group">
               <label for="gender">Gender:</label>
               <input type="text" class="form-control" placeholder="Enter gender" name="gender">
               <?php
               if (isset($validation) && $validation->hasError('gender')) { ?>
                  <p class='text-danger'>"<?php echo $validation->getError('gender'); ?></p>
               <?php } ?>
            </div>
         </div>

         <div class="col-lg-6">
            <div class="form-group">
               <label for="number">Contact number</label>
               <input type="text" name="number" placeholder="Enter Contact Number" class="form-control" name="number">
               <?php
               if (isset($validation) && $validation->hasError('number')) { ?>
                  <p class='text-danger'>"<?php echo $validation->getError('number'); ?></p>
               <?php } ?>
            </div>
         </div>
      </div>
      <br>
      <div class="row">
         <div class="col-lg-12">
            <div class="form-group">
               <label for="address">Address</label>
               <input type="text" class="form-control" placeholder="Enter your address" name="address">
               <?php
               if (isset($validation) && $validation->hasError('address')) { ?>
                  <p class='text-danger'>"<?php echo $validation->getError('address'); ?></p>
               <?php } ?>
            </div>
         </div>


      </div>
      <br>
      <div class="row">
         <div class="col-lg-6">
            <div class="form-group">
               <label for="code">Pin Code</label>
               <input type="text" class="form-control" placeholder="Enter Pincode" name="code">
            </div>
            <?php
            if (isset($validation) && $validation->hasError('code')) { ?>
               <p class='text-danger'>"<?php echo $validation->getError('code'); ?></p>
            <?php } ?>
         </div>

         <div class="col-lg-6">
            <div class="form-group">
               <label for="email"> Email</label>
               <input type="text" class="form-control" placeholder="Enter Email" name="email">
               <?php
               if (isset($validation) && $validation->hasError('email')) { ?>
                  <p class='text-danger'>"<?php echo $validation->getError('email'); ?></p>
               <?php } ?>
            </div>
         </div>
      </div>
      <button class="btn btn-primary" name="submit">Submit</button>
   </form>

</body>

</html>