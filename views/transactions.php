<!DOCTYPE html>
<html>

<head>
    <title>Transactions</title>
    <style>
        body {
            padding: 0;
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            font-size: large;
            font-weight: bold;
        }

        table tr th,
        table tr td {
            padding: 5px;
            border: 1px #eee solid;
            border-width: 2px;


        }

        tfoot tr th,
        tfoot tr td {
            font-size: 20px;
        }

        tfoot tr th {
            text-align: right;
        }



    </style>
</head>

<body>

    <main>

        <table>
            <thead>
                <tr>
                    <th colspan="4">
                        <h1>My Budgeting System</h1>
                    </th>
                </tr>
                <tr>
                    <th>Date</th>
                    <th>Check #</th>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>

                <?php if (!empty($transactions)) : ?>
                    <?php foreach ($transactions as $tra) : ?>

                        <tr>

                            <td><?php echo $tra[0] ?></td>
                            <td><?php echo $tra[1] ?></td>
                            <td><?php echo $tra[2] ?></td>

                            <?php if (str_replace(['$', ','], '', $tra[3]) < 0) : ?>
                                <td>
                                    <span style="color:red;text-shadow: none;">
                                        <?= $tra[3] ?> </span>
                                </td>

                            <?php else :  ?>
                                <td>
                                    <span style="color:green;text-shadow: none;">
                                        <?= $tra[3] ?> </span>
                                </td>

                            <?php endif ?>

                        </tr>
                    <?php endforeach ?>
                <?php endif ?>


            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Total Income:</th>
                    <td>
                        <?= $total['Income'] ?>
                    </td>
                </tr>
                <tr>
                    <th colspan="3">Total Expense:</th>
                    <td>
                        <?= $total['Expense'] ?>
                    </td>
                </tr>
                <tr>
                    <th colspan="3">Net Total:</th>
                    <td>
                        <?= $total['Net'] ?>
                    </td>
                </tr>
            </tfoot>
        </table>
    </main>

</body>

</html>