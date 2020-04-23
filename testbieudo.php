<!--<div class="widget-manage">-->
<!--    <div class="widget-content data_table e_data_table">-->
<!--        <div class="span8"> -->
<!--            --><?php
//            echo "Xin chào <b>" . $user_name . "</b>. Hân hạnh được phục vụ !";
//            ?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<?php
$dataPoints = array(
    array("label"=> "Food + Drinks", "y"=> 590),
    array("label"=> "Activities and Entertainments", "y"=> 261),
    array("label"=> "Health and Fitness", "y"=> 158),
    array("label"=> "Shopping & Misc", "y"=> 72),
    array("label"=> "Transportation", "y"=> 191),
    array("label"=> "Rent", "y"=> 573),
    array("label"=> "Travel Insurance", "y"=> 126)
);

$dataPoints2 = array();
$y = 40;
for($i = 0; $i < 1000; $i++){
    $y += rand(0, 10) - 5;
    array_push($dataPoints, array("x" => $i, "y" => $y));
}
?>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="widget e_widget">
            <div class="widget-title">
                <div class="icon"><i class="icon20 i-table"></i></div>
                <h4>Trang Chủ</h4>
                <a href="#" class="minimize"></a>
            </div>
            <div class="widget-manage">
                <div class="widget-content">
                    <p style="padding-left: 15px; font-size: 16px !important;font-weight: bold;">Biểu đồ tròn</p>
                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    window.onload = function () {

        //var chart = new CanvasJS.Chart("chartContainer", {
        //    animationEnabled: true,
        //    exportEnabled: true,
        //    title:{
        //        text: "Average Expense Per Day  in Thai Baht"
        //    },
        //    subtitles: [{
        //        text: "Currency Used: Thai Baht (฿)"
        //    }],
        //    data: [{
        //        type: "pie",
        //        showInLegend: "true",
        //        legendText: "{label}",
        //        indexLabelFontSize: 16,
        //        indexLabel: "{label} - #percent%",
        //        yValueFormatString: "฿#,##0",
        //        dataPoints: <?php //echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        //    }]
        //});
        //chart.render();

    }

    window.onload = function () {

        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            animationEnabled: true,
            zoomEnabled: true,
            title: {
                text: "Try Zooming and Panning"
            },
            data: [{
                type: "area",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();

    }
</script>