<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/css/bootstrap.css') ?>" />
    <style>
        h2 {
            width: 100%;
            background-color: #A52A2A;
            padding: 10px;
            font-weight: 500;
        }

        form {
            margin-left: 200px;
            margin-top: 50px;
            width: 50%;
        }
    </style>
</head>

<body>
    <h2 class="text-center">Qualification Detail</h2><br>
    <div class="text-center" style="font-size: 20px">
        Click <a href="/main">here</a> to view all details
    </div>
    <marquee behavior="" direction="left">
        <h3>Please enter your qualification detail</h3>
    </marquee>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form method="post">
                    <div class="row">
                        <div class="form-group">
                            <label for="marticulation">10th Marks:</label>
                            <input type="text" class="form-control" name="marticulation" placeholder="Enter 10th marks">
                            <?php
                            if (isset($validation) && $validation->hasError('marticulation')) { ?>
                                <p class='text-danger'>"<?php echo $validation->getError('marticulation'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="intermediate">12th Marks:</label>
                            <input type="text" class="form-control" name="intermediate" placeholder="Enter 12th marks">
                            <?php
                            if (isset($validation) && $validation->hasError('intermediate')) { ?>
                                <p class='text-danger'>"<?php echo $validation->getError('intermediate'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="graduation">Graduation Marks:</label>
                            <input type="text" class="form-control" name="graduation" placeholder="Enter graduation Marks">
                            <?php
                            if (isset($validation) && $validation->hasError('graduation')) { ?>
                                <p class='text-danger'>"<?php echo $validation->getError('graduation'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="post_graduation">Post-Graduation Marks:</label>
                            <input type="text" class="form-control" name="post_graduation" placeholder="Enter graduation Marks">
                            <?php
                            if (isset($validation) && $validation->hasError('post_graduation')) { ?>
                                <p class='text-danger'>"<?php echo $validation->getError('post_graduation'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="gap">Education Gap (If any):</label>
                            <input type="text" class="form-control" name="gap" placeholder="Enter gap in studies">
                        </div>
                    </div>
                    <button class="btn btn-primary" name="Submit">Submit</button>
                </form>
            </div>

        </div>

    </div>

</body>

</html>