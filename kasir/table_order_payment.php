<?php
    include "../conn.php";

    $no_trans = $_POST['no_trans'];
    
    // $sql = "SELECT * FROM tb_order WHERE no_transaksi = '$no_trans'";  
    $sql = "SELECT order_id, order_number, total, tipe_pesanan_id, kode_meja, name
        FROM tb_order O 
        LEFT JOIN tb_tipe_pesanan T ON O.tipe_pesanan_id = T.id
        WHERE order_number = '$no_trans'";

    $q = $conn->query($sql);
    $result = mysqli_num_rows($q);

    if ($result > 0) {
        $row = $q->fetch_assoc();
        $kode_meja = $row['kode_meja'];
        if($kode_meja == 0){
            $nama_meja = '-';
        } else { 
            $sql2 = "SELECT * FROM tb_meja WHERE kode_meja = '$kode_meja'";
            $q2 = $conn->query($sql2); 
            $row2 = $q2->fetch_assoc();
            $nama_meja =  $row2['nama_meja'];
        }
    ?>
        
        <div class="form-group row">
            <label for="no-transaksi" class="col-4 offset-1 col-form-label text-right">Order Number</label>
            <div class="col-4"> 
                <input type="text" readonly name="no_trans" class="form-control-plaintext font-weight-bold" id="no-transaksi" value="<?php echo $row['order_number']; ?>">
            </div>
        </div>
            <input type="hidden" name="kode_meja" value="<?php echo $kode_meja ?>">
            <input type="hidden" name="total_hidden" value="<?php echo $row['total'] ?>">
        <div class="form-group row">
            <label for="meja" class="col-4 offset-1 col-form-label text-right">Table</label>
            <div class="col-4">
                <input type="text" readonly class="form-control-plaintext font-weight-bold" id="meja" value="<?php echo $nama_meja ; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="total" class="col-4 offset-1 col-form-label text-right text-danger">Total Amount</label>
            <div class="col-4">
                <input type="text" readonly name="total" class="form-control text-right currency font-weight-bold" 
                id="total" value="<?php echo number_format($row['total'], 0, ',', '.'); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="bayar" class="col-4 offset-1 col-form-label text-right">Paid</label>
            <div class="col-4">
                <input type="text" name="bayar" class="form-control text-right font-weight-bold" id="bayar" autocomplete="off">
            </div>
        </div>
        <div class="form-group row">
            <label for="kembalian" class="col-4 offset-1 col-form-label text-right">Return Change</label>
            <div class="col-4">
                <input type="text" readonly name="kembalian" class="form-control text-right font-weight-bold" id="kembalian">
            </div>
        </div>
<?php
    }
?>