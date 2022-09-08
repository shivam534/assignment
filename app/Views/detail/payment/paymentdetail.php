<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment detail</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/css/bootstrap.css') ?>" />

</head>

<body>
    <div class="container">
        <h2>Payment detail</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Sr no.</th>
                    <th scope="col">Card holdername</th>
                    <th scope="col">Card number</th>
                    <th scope="col">Expiry</th>
                    <th scope="col">CVV</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($payments)) {
                    foreach ($payments as $d) { ?>
                        <tr>

                            <td><?php echo $d['id']; ?></td>
                            <td><?php echo $d['name']; ?></td>
                            <td><?php echo $d['number']; ?></td>
                            <td><?php echo $d['expiry']; ?></td>
                            <td><?php echo $d['cvv']; ?></td>
                        </tr>
                    <?php }
                } else {
                    ?>

                    <tr>
                        <td colspan="5">Record Not found</td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>
</body>

</html>