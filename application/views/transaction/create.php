<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Product Tranasction</h4>
                <p class="card-description">
                    Product Transaction
                </p>
                <form class="forms-sample" action="<?php echo base_url()?>transaction/store" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail3">Product</label>
                        <select name="product" class="form-control">
                            <?php foreach($product as $item) { ?>
                                <option value="<?php echo $item->id_produk ?>"><?php echo $item->nama_produk ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Count</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Email" min="0" name="count">
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>