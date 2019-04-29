<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Create Product</h4>
                <p class="card-description">
                    Create product with this form
                </p>
                <?php foreach($product as $item) { ?>
                <form class="forms-sample" action="<?php echo base_url()?>product/update/<?php echo $item->id_produk ?>" method="post">
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="<?php echo $item->nama_produk ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Stock</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Email" min="0" name="stock" value="<?php echo $item->stok ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Price</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Email" min="0" name="price" value="<?php echo $item->harga_produk ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Type</label>
                        <select name="type" class="form-control">
                            <option value="Makanan & Minuman" <?php if ($item->tipe_produk == "Makanan & Minuman") echo "selected" ?>> Makanan & Minuman</option>
                            <option value="Alat Mandi" <?php if ($item->tipe_produk == "Alat Mandi") echo "selected" ?>>Alat Mandi</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>