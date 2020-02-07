<?php
    require_once "../conn.php";

    $data = array();
    $sql = "SELECT *, m.nama_meja, u.username FROM tb_order o
            LEFT JOIN tb_meja m ON o.kode_meja = m.kode_meja
            LEFT JOIN tbl_user u ON o.user_id = u.id
            ORDER BY o.order_number DESC";
    $result = $conn->query($sql);

    foreach ($result as $row) {
        $sub_array = array();
        $sub_array[] = $row['order_number'];
        $sub_array[] = $row['tipe_pesanan_id'] == 1 ? '<span class="badge badge-primary">Dine In</span>' : '<span class="badge badge-info">Take Away</span>';
        $sub_array[] = $row['username'];
        $sub_array[] = $row['paid'] == 0 ? '<span class="badge badge-warning">Unpaid</span>' : '<span class="badge badge-success">Paid</span>';
        $sub_array[] = $row['tgl'];
        // $sub_array[] = $row['subtotal'];
        // $sub_array[] = $row['tax'];
        $sub_array[] = number_format($row['total'], 0, ',', '.');
        $sub_array[] = '
            <a href="./penjualan_detail.php?no='.$row['order_number'].'" class="trans-detail badge badge-info mr-2"><i class="far fa-eye p-1"></i></a>
        ';
        $data[] = $sub_array;
    }
    
    $output = array(
        "data" => $data
    );
    echo json_encode($output);
?>