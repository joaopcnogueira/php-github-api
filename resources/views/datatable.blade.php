<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</head>
<body>

<table class="table" id="my-table">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Private</th>
        <th scope="col">Owner</th>
        <th scope="col">Fork</th>
        <th scope="col">Created at</th>
        <th scope="col">Language</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($repositories as $value) : ?>
    <tr>
        <td><?= $value['name'] ?></td>
        <td><?= $value['private'] ?></td>
        <td><?= $value['owner']['login'] ?></td>
        <td><?= $value['fork'] ?></td>
        <td><?= $value['created_at'] ?></td>
        <td><?= $value['language'] ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>


<script>
    $(document).ready(function () {
        $('#my-table').dataTable();
    });
</script>

</body>
</html>
