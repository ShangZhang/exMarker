// Set new default font family and font color to mimic Bootstrap's default styling
(Chart.defaults.global.defaultFontFamily = 'Nunito'),
  '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Area Chart Example
var ctx = document.getElementById('chart_rna_seq_type').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Plasma', 'Serum', 'TEP', 'Whole blood', 'CTC', 'PBMC', 'Urine'],
    datasets: [
      {
        label: 'Small RNA',
        data: [1417, 574, 0, 77, 0, 0, 4],
        backgroundColor: ['#158bb8', '#158bb8', '#158bb8', '#158bb8', '#158bb8', '#158bb8', '#158bb8'],
        borderColor: ['#158bb8', '#158bb8', '#158bb8', '#158bb8', '#158bb8', '#158bb8', '#158bb8'],
        borderWidth: 1,
      },
      {
        label: 'Long RNA',
        data: [601, 0, 1111, 0, 0, 0, 20],
        backgroundColor: ['#229453', '#229453', '#229453', '#229453', '#229453', '#229453', '#229453'],
        borderColor: ['#229453', '#229453', '#229453', '#229453', '#229453', '#229453', '#229453'],
        borderWidth: 1,
      },
      {
        label: 'Transcriptome',
        data: [45, 128, 0, 0, 32, 14, 0],
        backgroundColor: ['#ad6598', '#ad6598', '#ad6598', '#ad6598', '#ad6598', '#ad6598', '#ad6598'],
        borderColor: ['#ad6598', '#ad6598', '#ad6598', '#ad6598', '#ad6598', '#ad6598', '#ad6598'],
        borderWidth: 1,
      },
    ],
  },
  options: {
    // tooltips: {
    //   titleMarginBottom: 0,
    //   titleFontColor: '#6e707e',
    //   titleFontSize: 14,
    //   backgroundColor: 'rgb(255,255,255)',
    //   bodyFontColor: '#858796',
    //   borderColor: '#dddfeb',
    //   borderWidth: 1,
    //   xPadding: 15,
    //   yPadding: 15,
    //   displayColors: false,
    //   caretPadding: 10,
    //   callbacks: {
    //     label: function (tooltipItem, chart) {
    //       var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
    //       return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
    //     },
    //   },
    // },
    maintainAspectRatio: false,
    title: {
      display: true,
      fontSize: 16,
      text: 'RNA-seq samples in different specimen types and RNA-seq types.',
    },
    layout: {
      padding: {
        left: 0,
        right: 0,
        top: 0,
        bottom: 0,
      },
    },
    response: true,
    legend: {
      display: true,
      position: 'bottom',
    },
    scales: {
      xAxes: [
        {
          stacked: true,
          gridLines: {
            //网格
            color: '#FFF',
          },
        },
      ],
      yAxes: [
        {
          stacked: true,
        },
      ],
    },
  },
});
