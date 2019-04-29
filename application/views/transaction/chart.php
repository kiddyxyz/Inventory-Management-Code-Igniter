<?php
foreach($transaction as $data){
    $nama_produk[] = $data->nama_produk;
    $sold[] = (float) $data->sold;
}
?>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Chart of Transaction</h4>

                <canvas class="m-5" id="canvas" width="1000" height="280"></canvas>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    var ctx = document.getElementById('canvas').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'pie',

        // The data for our dataset
        data: {
            labels : <?php echo json_encode($nama_produk);?>,
            datasets : [

                {
                    fillColor: "rgba(60,141,188,0.9)",
                    strokeColor: "rgba(60,141,188,0.8)",
                    pointColor: "#3b8bba",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    backgroundColor : [
                        "rgba(211, 84, 0,1.0)", "rgba(41, 128, 185,1.0)", "rgba(142, 68, 173,1.0)",
                        "rgba(211, 84, 0,1.0)", "rgba(41, 128, 185,1.0)", "rgba(142, 68, 173,1.0)",
                        "rgba(211, 84, 0,1.0)", "rgba(41, 128, 185,1.0)", "rgba(142, 68, 173,1.0)",
                        "rgba(211, 84, 0,1.0)", "rgba(41, 128, 185,1.0)", "rgba(142, 68, 173,1.0)"
                    ],
                    pointHighlightStroke: "rgba(152,235,239,1)",
                    data : <?php echo json_encode($sold);?>
                }

            ]
        },

        // Configuration options go here
        options: {}
    });
</script>