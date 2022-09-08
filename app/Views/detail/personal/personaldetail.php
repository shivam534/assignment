<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/css/bootstrap.css') ?>" />

</head>

<body>
    <div class="container">
        <h2>
            Detail of personal data:
        </h2><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Sr no.</th>
                    <th scope="col">Name</th>
                    <th scope="col">gender</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($detail)) {
                    foreach ($detail as $d) { ?>
                        <tr>

                            <td><?php echo $d['Id']; ?></td>
                            <td><?php echo $d['name']; ?></td>
                            <td><?php echo $d['dob']; ?></td>
                            <td><?php echo $d['gender']; ?></td>
                            <td><?php echo $d['email']; ?></td>
                        </tr>
                    <?php }
                } else {
                    ?>

                    <tr>
                        <td colspan="5">Record Not found(Please <a href="\">Enter</a> Some data)</td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>

        <br><br>


    </div>
</body>

</html>