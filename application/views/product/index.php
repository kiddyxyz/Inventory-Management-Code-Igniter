<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List of Product</h4>
                <a href="<?php echo base_url()?>product/create" class="btn btn-sm btn-primary mb-3">Create Product</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($product as $item) { ?>
                            <tr>
                                <td><?php echo $item->nama_produk ?></td>
                                <td><?php echo $item->harga_produk ?></td>
                                <td><?php echo $item->stok ?></td>
                                <td class="text-capitalize"><?php echo $item->tipe_produk ?></td>
                                <td>
                                    <a href="<?php echo base_url()?>product/show/<?php echo $item->id_produk ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="<?php echo base_url()?>product/delete/<?php echo $item->id_produk ?>" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>