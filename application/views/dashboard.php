<title> SIRIKATHA | Dashboard </title>


<div class="row">
    <!-- begin col-3 -->

    <?php

    foreach ($loans->result() as $loan) { ?>

        <div class="col-md-4 col-sm-6">
            <div class="widget widget-stats <?php
            echo $loan->class ?>">
                <div class="stats-icon"><i class="<?php
                    echo $loan->icon ?>"></i></div>
                <div class="stats-info">
                    <h4 style="font-size: 17px"><?php
                        echo $loan->loan_name ?></h4>
                    <p><?php
                        echo $loan->count ?> Loans</p>
                </div>
                <div class="stats-link">
                    <a href="<?php
                    echo base_url() ?>dashboard/loan_list?loan_type_id=<?php
                    echo $loan->id ?>">View
                        Detail <i
                                class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>

        <?php
    } ?>


</div>

<!-- begin row -->
<div class="row">
    <div class="col-md-12">
        <div class="widget-chart with-sidebar bg-black">
            <div class="widget-chart-content">
                <h4 class="chart-title">
                    Loan Analytics for 2020
                    <small>Loans issued in months</small>
                </h4>
                <div id="line-chart" class="morris-inverse" style="height: 400px;"></div>
            </div>
            <div class="widget-chart-sidebar bg-black-darker">
                <div class="chart-number">
                    <?php
                    echo $total_loans ?>
                    Loans
                </div>
                <div id="visitors-donut-chart" class="morris-chart" style="height: 280px"></div>
                <ul class="chart-legend">

                    <?php
                    foreach ($loan_summary->result() as $loan) { ?>

                        <li><i class="fa fa-circle-o fa-fw <?php
                            echo $loan->text_class ?> m-r-5"></i> <?php
                            echo number_format($loan->average, '2') ?>% <span><?php
                                echo $loan->loan_name ?></span></li>
                    <?php
                    } ?>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

<link href="https://cdn.oesmith.co.uk/morris-0.5.1.css"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js"></script>


<!--<div class="row">-->
<!--    <div class="col-md-6">-->
<!--        <div id="container5"></div>-->
<!--    </div>-->
<!--</div>-->

<script>

    var months = ['', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

    var data = <?php echo json_encode($loan_count) ?>,

        // var data = [
        //         {y: '1', "asiri_loan": "50", "siriliya_loan": "90", "siriyawi_loan": "90"},
        //         {y: '2', "a": "65", "b": "75", "c": "90"},
        //         {y: '3', "a": "50", "b": "50"},
        //         {y: '4', "a": "75", "b": "60"},
        //         // {y: 'Jan', a: 50, b: 90, c: 90},
        //         // {y: 'Feb', a: 65, b: 75, c: 90},
        //         // {y: 'Mar', a: 50, b: 50},
        //         // {y: 'Apr', a: 75, b: 60},
        //         // {y: '2018', a: 80, b: 65},
        //         // {y: '2019', a: 90, b: 70},
        //         // {y: '2020', a: 100, b: 75},
        //         // {y: '2021', a: 115, b: 75},
        //         // {y: '2022', a: 120, b: 85},
        //         // {y: '2023', a: 145, b: 85},
        //         // {y: '2024', a: 160, b: 95}
        //     ],
        config = {
            data: data,
            xkey: 'month',
            ykeys: ['asiri_loan', 'siriliya_loan', 'siriyawi_loan', 'sirisetha_loan', 'sirisetha_special_loan'],
            labels: ['Asiri', 'Siriliya', 'Siriyawi', 'Sirisetha', 'Sirisetha Special'],
            fillOpacity: 0.6,
            hideHover: 'auto',
            behaveLikeLine: true,
            resize: true,
            parseTime: false,
            // pointFillColors: ['#4CD964','#ffffff'],
            pointStrokeColors: ['black'],
            lineColors: ['#4CD964', '#f68213', '#FF3B30', '#007aff', '#3ca0d6'],
            xLabelFormat: function (x) {
                var index = parseInt(x.src.month);
                return months[index];
            },
        };
    config.element = 'line-chart';
    // config.xLabelFormat: getMonth(x);
    Morris.Line(config);

    // var data2 = [
    //     {y: 'Friends', a: 160},
    //     {y: 'Friends2', a: 300},
    // ]
    // config2 = {
    //     data: data2,
    //     labels: ['Asiri'],
    //     value: 'a'
    //
    // }
    // config2.element = 'visitors-donut-chart';
    // Morris.Donut(config2);

    Morris.Donut({
        element: 'visitors-donut-chart',
        // data: [
        //     {label: "Friends", value: 30, color: '#4CD964'},
        //     {label: "Allies", value: 15},
        //     {label: "Enemies", value: 45},
        //     {label: "Neutral", value: 10},
        //     {label: "Neutral", value: 11}
        // ],
        data: <?php echo json_encode($loans->result()) ?>,
        // config:{
        //     color: ['#4CD964', '#f68213','#FF3B30','#007aff','#3ca0d6']
        // }
    });

    function getMonth(x) {
        alert(x)
        return months[x.getMonth()]
    }


</script>
<!--<script src = "https://code.highcharts.com/highcharts.js" ></script>-->

<style>
    .morris-chart text {
        fill: white;
    }
</style>

<script>

    //Highcharts.chart('container5', {
    //    chart: {
    //        plotBackgroundColor: null,
    //        plotBorderWidth: null,
    //        plotShadow: false,
    //        type: 'pie'
    //    },
    //    title: {
    //        text: 'Local And Export Gems'
    //    },
    //    tooltip: {
    //        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    //    },
    //    plotOptions: {
    //        pie: {
    //            allowPointSelect: true,
    //            cursor: 'pointer',
    //            dataLabels: {
    //                enabled: true,
    //                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
    //                style: {
    //                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
    //                }
    //            }
    //        }
    //    },
    //    series: [{
    //        name: 'Brands',
    //        colorByPoint: true,
    //        data: <?php //echo json_encode($jsonData)?>
    //    }]
    //});
</script>

<script>
    $(document).ready(function () {
        App.init();
    });

</script>

