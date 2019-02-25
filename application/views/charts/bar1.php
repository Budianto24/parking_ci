<div id="pie1" height="200"></div>
  <script>
    Highcharts.chart('pie1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie',
        height: 300,
        spacingTop: 1,
    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    credits: {
      enabled: false
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Total',
        colorByPoint: true,
        data: [
            <?php foreach ($dataParkir as $Parkir):?>
                {
                    name: '<?= $Parkir["jenis_kendaraan"]?>',
                    y: <?= $Parkir['total'] ?>,
                },
            <?php endforeach; ?>
        ]
    }]
});
  </script>