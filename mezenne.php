<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Canlı məzənnə</title>
</head>
<body>
<div class="container ">
    <div class="col-md-8 mx-auto">
        <table class="table table-bordered table-striped mt-2">
            <thead>
            <tr>
                <th scope="col">Valyuta</th>
                <th scope="col">Kod</th>
                <th scope="col">Kurs</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $url = simplexml_load_file('https://www.cbar.az/currencies/09.03.2022.xml');
                $mezenne = $url->ValType[1];
                foreach ($mezenne as $value)
                {
                    ?>
                    <tr>
                        <td><?= $value->Name?></td>
                        <td><?= $value['Code'];?></td>
                        <td><?= $value->Value;?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
