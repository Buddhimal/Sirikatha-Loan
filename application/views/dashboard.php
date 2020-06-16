<title> SIRIKATHA | Dashboard </title>

<div class="row">
    <!-- begin col-3 -->

    <?php foreach ($loans->result() as $loans) { ?>

        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats <?php echo $loans->color ?>">
                <div class="stats-icon"><i class="<?php echo $loans->icon ?>"></i></div>
                <div class="stats-info">
                    <h4 style="font-size: 17px"><?php echo $loans->loan_name ?></h4>
                    <p><?php echo $loans->count ?> Loans</p>
                </div>
                <div class="stats-link">
                    <a href="<?php echo base_url()?>dashboard/loan_list?loan_type_id=<?php echo $loans->id ?>">View
                        Detail <i
                                class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>

    <?php } ?>


</div>


<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>


<script src="https://code.highcharts.com/highcharts.js"></script>


<!--<div class="row">-->
<!--    <div class="col-md-6">-->
<!--        <div id="container5"></div>-->
<!--    </div>-->
<!--</div>-->


<script>

    Highcharts.chart('container5', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Local And Export Gems'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: <?php echo json_encode($jsonData)?>
        }]
    });
</script>

<script>
    $(document).ready(function () {
        App.init();
    });

</script>


</script>


<script src = "https://code.highcharts.com/highcharts.js" ></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>


<script>
