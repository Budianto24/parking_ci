<div id="bar" height="200"></div>
  <script>
var chart = Highcharts.chart('bar', {

    chart: {
        type: 'column',
        height: 300,
        spacingTop: 1,
    },

    title: {
        text: ''
    },

    subtitle: {
        text: ''
    },

    legend: {
        align: 'right',
        verticalAlign: 'middle',
        layout: 'horizontal'
    },

    credits: {
      enabled: false
    },

    xAxis: {
        categories: ['Jenis Kendaraan'],
        labels: {
            x: -10
        }
    },

    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Jumlah'
        }
    },

    series: [
    <?php foreach ($dataParkir as $Parkir):?>
    {
        name: '<?= $Parkir["jenis_kendaraan"]?>',
        data: [<?= $Parkir['total'] ?>]
    },
    <?php endforeach; ?>
    ],
});
</script>