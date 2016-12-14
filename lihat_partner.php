<style>
                table {
                    width:100%;
                }
                table, th, td {
                    border: 1px solid black;
                    border-collapse: collapse;
                }
                th, td {
                    padding: 5px;
                    text-align: left;
                }
                table#t01 tr:nth-child(even) {
                    background-color: #eee;
                }
                table#t01 tr:nth-child(odd) {
                    background-color:#fff;
                }
                table#t01 th {
                    background-color: black;
                    color: white;
                }
            </style>


            <table id="t01">
            <tr>
            <th>NIM</th>
            <th>Username</th>
            <th>Status</th>
            </tr>
            <tr>


            <?php
      
      require 'koneksiall.php';

      
      
      
$sql="SELECT * FROM joinlokasi";


   $result_set=mysqli_query($koneksi,$sql);
    
    if($result_set ){
    while($row=mysqli_fetch_array($result_set))
    {
        ?>
        <tr>
        
        <td><?php echo $row['nim']; ?></td>
        <td><?php echo $row['username'] ?></td>
        </tr>
        <?php
    }
}
    ?></table>
        

