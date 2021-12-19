@section('bay1')
<div id="chart1" class="chart-profile-visit"></div>
<script>
var options = {
  chart: {
      height: 150,
      type: 'area',
      toolbar: {
			show:false,
		},
  },
  dataLabels: {
      enabled: false
  },
  series: [],
  title: {
      text: 'Data Terakhir Desember 2021',
  },
	colors: ['#5350e9'],
	stroke: {
		width: 2,
	},
	grid: {
		show:false,
	},
  noData: {
    text: 'Loading...'
  },	xaxis: {
		// type: 'datetime',
		// categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z","2018-09-19T07:30:00.000Z","2018-09-19T08:30:00.000Z","2018-09-19T09:30:00.000Z","2018-09-19T10:30:00.000Z","2018-09-19T11:30:00.000Z"],
		axisBorder: {
			show:false
		},
		axisTicks: {
			show:false
		},
		labels: {
			show:false,
		}
	},
	show:false,
	yaxis: {
		labels: {
			show:false,
		},
	},
	tooltip: {
		x: {
			format: 'dd/MM/yy HH:mm'
		},
	},
}

var chart = new ApexCharts(
  document.querySelector("#chart1"),
  options
);
chart.render();

setInterval(() => {
  var url = '{{url('/')}}/api/getall?t=sampel__i_o_t_s';
  // var url = '{{url('/')}}/api/getall?t=suhu';


axios({
  method: 'GET',
  url: url,
}).then(function(response) {
  console.log(response.data)
  chart.updateSeries([{
    name: 'Data',
    data: response.data.data
  }])
})}, 10000);
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

@endsection
@section('bay2')
<div id="chart2" class="chart-profile-visit"></div>
<script>
var options = {
  chart: {
      height: 150,
      type: 'area',
      toolbar: {
			show:false,
		},
  },
  dataLabels: {
      enabled: false
  },
  series: [],
	colors: ['#5350e9'],
	stroke: {
		width: 2,
	},
	grid: {
		show:false,
	},
  noData: {
    text: 'Loading...'
  },	xaxis: {
		// type: 'datetime',
		// categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z","2018-09-19T07:30:00.000Z","2018-09-19T08:30:00.000Z","2018-09-19T09:30:00.000Z","2018-09-19T10:30:00.000Z","2018-09-19T11:30:00.000Z"],
		axisBorder: {
			show:false
		},
		axisTicks: {
			show:false
		},
		labels: {
			show:false,
		}
	},
	show:false,
	yaxis: {
		labels: {
			show:false,
		},
	},
	tooltip: {
		x: {
			format: 'dd/MM/yy HH:mm'
		},
	},
}

var chart2 = new ApexCharts(
  document.querySelector("#chart2"),
  options
);
chart2.render();

setInterval(() => {
  var url = '{{url('/')}}/api/getall?t=suhu';

axios({
  method: 'GET',
  url: url,
}).then(function(response) {
  console.log(response.data)
  chart2.updateSeries([{
    name: 'Data',
    data: response.data.data
  }])
})}, 10000);
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

@endsection

@section('bay3')
<div id="chart3" class="chart-profile-visit"></div>
<script>
var options = {
  chart: {
      height: 150,
      type: 'area',
      toolbar: {
			show:false,
		},
  },
  dataLabels: {
      enabled: false
  },
  series: [],
  title: {
      text: 'Data Terakhir Desember 2021',
  },
	colors: ['#6450e9'],
	stroke: {
		width: 2,
	},
	grid: {
		show:false,
	},
  noData: {
    text: 'Loading...'
  },	xaxis: {
		// type: 'datetime',
		// categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z","2018-09-19T07:30:00.000Z","2018-09-19T08:30:00.000Z","2018-09-19T09:30:00.000Z","2018-09-19T10:30:00.000Z","2018-09-19T11:30:00.000Z"],
		axisBorder: {
			show:false
		},
		axisTicks: {
			show:false
		},
		labels: {
			show:false,
		}
	},
	show:false,
	yaxis: {
		labels: {
			show:false,
		},
	},
	tooltip: {
		x: {
			format: 'dd/MM/yy HH:mm'
		},
	},
}

var chart3 = new ApexCharts(
  document.querySelector("#chart3"),
  options
);
chart3.render();

setInterval(() => {
  var url = '{{url('/')}}/api/getall?t=ph';

axios({
  method: 'GET',
  url: url,
}).then(function(response) {
  console.log(response.data)
  chart3.updateSeries([{
    name: 'Data',
    data: response.data.data
  }])
})}, 10000);
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

@endsection