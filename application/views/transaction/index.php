<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List of Transaction</h4>
                <a href="<?php echo base_url()?>transaction/create" class="btn btn-sm btn-primary mb-3">Create Transaction</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>Date</th>
                            <th>Count</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($transaction as $item) { ?>
                            <tr>
                                <td class="text-capitalize"><?php echo $item->nama_produk ?></td>
                                <td><?php echo $item->tanggal_transaksi ?></td>
                                <td><?php echo $item->jumlah_produk ?></td>
                                <td><?php echo $item->total_harga ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>