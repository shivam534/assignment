<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/css/bootstrap.css') ?>" />
    <style>
        .window {
            width: 350px;
            margin-left: 570px;
            margin-top: 70px;
        }

        .header {
            background-color: blueviolet;
            border-top-right-radius: 20px;
            border-top-left-radius: 20px;
            align-items: center;

        }



        .header h3 {
            padding: 20px;
        }

        form {
            width: 100%
        }

        label {
            margin-top: 10px;
        }

        .btn {
            width: 100%;
        }

        form input {
            border: none;
            border-bottom: 1px solid grey;
        }
    </style>
</head>

<body>
    <marquee behavior="" direction="left">
        <h1>Make Secure payment</h1>
    </marquee>
    <br>
    <div class="text-center" style="font-size: 20px">
        Click <a href="/main">here</a> to view all details
    </div>
    <br>
    <h3 class="text-center"><i>Make Payment to enjoy more benefits</i></h3>

    <div class="window">
        <div class="header">


            <h3>Go Pro </h3>


        </div>


        <div class="content">
            <form method="post">
                <div class="row">
                    <div class="col-lg-12">
                        <label for="number">Card number:</label>
                        <input type="text" class="form-control" name="number">
                        <?php
                        if (isset($validation) && $validation->hasError('number')) { ?>
                            <p class='text-danger'>"<?php echo $validation->getError('number'); ?></p>
                        <?php } ?>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="name">Card holder's name:</label>
                        <input type="text" name="name" class="form-control">
                        <?php
                        if (isset($validation) && $validation->hasError('name')) { ?>
                            <p class='text-danger'>"<?php echo $validation->getError('name'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <label for="expiry">Expiry date</label>
                        <input type="text" name="expiry" class="form-control" placeholder="MM/YY">
                        <?php
                        if (isset($validation) && $validation->hasError('expiry')) { ?>
                            <p class='text-danger'>"<?php echo $validation->getError('expiry'); ?></p>
                        <?php } ?>
                    </div>
                    <div class="col-lg-5">
                        <label for="cvv">CVV:</label>
                        <input type="text" class="form-control" placeholder="CVV" name="cvv">
                        <?php
                        if (isset($validation) && $validation->hasError('cvv')) { ?>
                            <p class='text-danger'>"<?php echo $validation->getError('cvv'); ?></p>
                        <?php } ?>
                    </div>
                </div><br>
                <button class="btn btn-info" name="pay">Make Pament</button>

            </form>
        </div>
        <br>
        <a href="" class="free">Go for free</a>

    </div>
</body>

</html>