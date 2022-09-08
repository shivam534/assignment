<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h2>
            Qualification Details
        </h2>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Sr no.</th>
                    <th scope="col">Marticulation</th>
                    <th scope="col">intermediate</th>
                    <th scope="col">Graduation</th>
                    <th scope="col">Post-Graduation</th>
                    <th scope="col">Education-Gap</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($qualification)) {
                    foreach ($qualification as $d) { ?>
                        <tr>

                            <td><?php echo $d['id']; ?></td>
                            <td><?php echo $d['class10']; ?></td>
                            <td><?php echo $d['class12']; ?></td>
                            <td><?php echo $d['graduation']; ?></td>
                            <td><?php echo $d['post_graduation']; ?></td>
                            <td><?php echo $d['Education_gap']; ?></td>

                        </tr>
                    <?php }
                } else {
                    ?>

                    <tr>
                        <td colspan="5">Record Not found (Please <a href="\qual">Enter</a> Some data)

                        </td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>
</body>

</html>