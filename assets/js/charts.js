// Load the Visualization API and the corechart package.
google.charts.load('current', {'packages':['corechart']});
// Set a callback to run when the Google Visualization API is loaded.
google.charts.setOnLoadCallback(genreChart);
function genreChart() {
 var data = google.visualization.arrayToDataTable([
  ['Gênero', 'Porcentagem'],
  ['Masculino', 52],
  ['Feminino', 48],
  ]);

 var options = {
  chartArea: {
    width: '100%',
    height: '110%',
  },
  width: 275,
  height: 200,
  pieHole: 0.68,
  forceIFrame: 'true',
  colors: [ '#4FC1E9', '#F46F7D', '#FFCE54', '#6D537A', '#53F3B1', '#F5B378', '#F57156', '#C168AC' ],
  legend: 'none',
  enableInteractivity: false,
  tooltip: {trigger: 'none'},
  pieSliceBorderColor: 'transparent',
  pieSliceText: 'percentage',
  pieSliceTextStyle: {
    fontSize: 9,
    bold: 'true'
  }
};

var chart = new google.visualization.PieChart(document.getElementById('genreChart'));
chart.draw(data, options);
}

google.charts.setOnLoadCallback(ageChart);
function ageChart() {
  var data = google.visualization.arrayToDataTable([
    ['Idades', 'Porcentagem'],
    ['40 >', 9],
    ['30 - 40', 18],
    ['25 - 30', 17],
    ['18 - 25', 41],
    ['< 18', 15]
    ]);

  var options = {
    chartArea: {
      width: '100%',
      height: '110%',
    },
    width: 275,
    height: 200,
    pieHole: 0.68,
    forceIFrame: 'true',
    colors: [ '#4FC1E9', '#F46F7D', '#FFCE54', '#6D537A', '#53F3B1', '#F5B378', '#F57156', '#C168AC' ],
    legend: 'none',
    enableInteractivity: false,
    tooltip: {trigger: 'none'},
    pieSliceBorderColor: 'transparent',
    pieSliceText: 'percentage',
    pieSliceTextStyle: {
      fontSize: 9,
      bold: 'true'
    }
  };

  var chart = new google.visualization.PieChart(document.getElementById('ageChart'));
  chart.draw(data, options);
}

google.charts.setOnLoadCallback(socialClassChart);
function socialClassChart() {
  var data = google.visualization.arrayToDataTable([
    ['Classe Social', 'Porcentagem'],
    ['A', 14],
    ['B1', 15],
    ['B2', 30],
    ['C1', 22],
    ['C2', 14],
    ['DE', 5],
    ]);

  var options = {
    chartArea: {
      width: '100%',
      height: '110%',
    },
    width: 275,
    height: 200,
    pieHole: 0.68,
    forceIFrame: 'true',
    colors: [ '#4FC1E9', '#F46F7D', '#FFCE54', '#6D537A', '#53F3B1', '#F5B378', '#F57156', '#C168AC' ],
    legend: 'none',
    enableInteractivity: false,
    tooltip: {trigger: 'none'},
    pieSliceBorderColor: 'transparent',
    pieSliceText: 'percentage',
    pieSliceTextStyle: {
      fontSize: 9,
      bold: 'true'
    }
  };

  var chart = new google.visualization.PieChart(document.getElementById('socialClassChart'));
  chart.draw(data, options);
}

google.charts.setOnLoadCallback(residenceRegionChart);
function residenceRegionChart() {
  var data = new google.visualization.arrayToDataTable([
    ['Região', 'Porcentagem'],
    ['Sudeste', 52],
    ['Nordeste', 24],
    ['Sul', 12],
    ['Centro Oeste', 8],
    ['Norte', 4],
    ]);

  var options = {
    chartArea: {
      width: '100%',
      height: '110%',
    },
    width: 275,
    height: 200,
    pieHole: 0.68,
    forceIFrame: 'true',
    colors: [ '#4FC1E9', '#F46F7D', '#FFCE54', '#6D537A', '#53F3B1', '#F5B378', '#F57156', '#C168AC' ],
    legend: 'none',
    enableInteractivity: false,
    tooltip: {trigger: 'none'},
    pieSliceBorderColor: 'transparent',
    pieSliceText: 'percentage',
    pieSliceTextStyle: {
      fontSize: 9,
      bold: 'true'
    }
  };

  var chart = new google.visualization.PieChart(document.getElementById('residenceRegionChart'));
  chart.draw(data, options);
}