<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <title>Document</title>

   
</head>

<body>
<table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Statistik Penjualan </th>
            <th>Total Pendapatan</th>
            
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Statistik Penjualan</th>
            <th>Total Pendapatan</th>
            
        </tr>
    </tfoot>
   <tbody>
        </tbody>
</table>
</body>
</html>



<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>

