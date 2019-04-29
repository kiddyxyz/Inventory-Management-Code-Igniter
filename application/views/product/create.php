<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Create Product</h4>
                <p class="card-description">
                    Create product with this form
                </p>
                <form class="forms-sample" action="<?php echo base_url()?>product/store" method="post">
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Stock</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Email" min="0" name="stock">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Price</label>
                        <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Email" min="0" name="price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Type</label>
                        <select name="type" class="form-control">
                            <option value="makanan">Makanan</option>
                            <option value="minuman">Minuman</option>
                            <option value="peralatan mandi">Peralatan Mandi</option>
                            <option value="pembersih">Pembersih</option>
                            <option value="obat">Obat</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>