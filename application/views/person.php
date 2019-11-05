<!DOCTYPE html>
<html lang="en">
<head>
    <title>Server Side Processing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/jquery.dataTables.min.css">
</head>
<body>

<div class="container">
    <h1>Server Side Processing</h1>
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Salary</th>
            <th>Age</th>
            <th>edit</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Salary</th>
            <th>Age</th>
            <th>edit</th>
        </tr>
        </tfoot>
    </table>
</div>




<script src="<?= base_url();?>assets/js/jquery-3.3.1.js"></script>
<script src="<?= base_url();?>assets/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#example').DataTable({
            "processing": true,
            "serverSide": true,
			"bJQueryUI": true,
                "oLanguage": {
                    "sProcessing":   "Processando...",
                    "sLengthMenu":   "Mostrar _MENU_ registros",
                    "sZeroRecords":  "Não foram encontrados resultados",
                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
                    "sInfoFiltered": "",
                    "sInfoPostFix":  "",
                    "sSearch":       "Buscar:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Primeiro",
                        "sPrevious": "Anterior",
                        "sNext":     "Seguinte",
                        "sLast":     "Último"
                    }
                },
            "ajax":{
                "url":"<?php echo base_url()?>person/fetch",
                "type": "POST"
            },
            "columns": [
            { "data": "id" },
            { "data": "name" },
            { "data": "salary" },
            { "data": "age" },
            { "data": "edit" }
        ]
        });
    });
</script>
</body>
</html>
