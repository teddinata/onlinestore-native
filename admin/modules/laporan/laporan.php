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
            <th>Statistik Penjualan Per Hari ini </th>
            <th>Total Pendapatan</th>
            
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Statistik Penjualan Per Hari ini</th>
            <th>Total Pendapatan</th>
            
        </tr>
    </tfoot>
   <tbody>
       <th>1</th>
       <th>Rp 500.000</th>
       <th>Rp 10.000.000</th>
        </tbody>
         <a href="index.php?modules=lihatlaporan" class="btn btn-primary">Cetak</a>
</table>
</body>
</html>



<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>

