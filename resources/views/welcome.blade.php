<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speedometer</title>
    <style>
        #chartsleep {
            width	: 100%;
            height	: 500px;
        }	
    </style>
</head>
<body>
    
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/gauge.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <main class="container">
        <h1>Kualitas Tidur</h1>
        <div class="row">
            <div class="col-8 mt-5">
                <div id="chartsleep"></div>	
            </div>
            <div class="col-4 mt-5">
                @foreach ( $resultSleepActivity as $resultActivity)
                    <label>{{ $resultActivity->activity_name }}</label>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{ ($resultActivity->activity_value/12) * 100 }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            
                        </div>
                        <label>{{ ($resultActivity->activity_value/12) * 100 }}%</label>                    
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    var gaugeChart = AmCharts.makeChart( "chartsleep", {
	"type": "gauge",
	"faceAlpha": 1,
	"faceColor": "#363636",
	"color": "#FAFAFA",
	"fontSize": 15,
	"arrows": [
		{
			"color": "#CE44D2",
			"id": "GaugeArrow-1",
			"innerRadius": 0,
			"nailBorderThickness": 4,
			"nailRadius": 22,
			"startWidth": 22,
			"value": 0
		}
	],
	"axes": [
		{
			"axisThickness": 0,
			"bottomText": "0% Sleep Quality",
			"bottomTextYOffset": 20,
			"endValue": 12,
			"id": "GaugeAxis-1",
			"labelOffset": 7,
			"minorTickLength": 0,
			"tickColor": "#FAFAFA",
			"tickLength": 15,
			"tickThickness": 2,
			"valueInterval": 2,
			"bands": [
				{
					"color": "#32CD32",
					"endValue": 2,
					"id": "GaugeBand-1",
					"innerRadius": "60%",
					"radius": "75%",
					"startValue": 0
				},
				{
					"color": "#15FF00",
					"endValue": 3,
					"id": "GaugeBand-2",
					"innerRadius": "60%",
					"radius": "75%",
					"startValue": 2
				},
				{
					"color": "#2AFF00",
					"endValue": 4,
					"id": "GaugeBand-3",
					"innerRadius": "60%",
					"radius": "75%",
					"startValue": 3
				},
				{
					"color": "#40FF00",
					"endValue": 5,
					"id": "GaugeBand-4",
					"innerRadius": "60%",
					"radius": "75%",
					"startValue": 4
				},
				{
					"color": "#55FF00",
					"endValue": 6,
					"id": "GaugeBand-5",
					"innerRadius": "60%",
					"radius": "75%",
					"startValue": 5
				},
				{
					"color": "#6AFF00",
					"endValue": 7,
					"id": "GaugeBand-6",
					"innerRadius": "60%",
					"radius": "75%",
					"startValue": 6
				},
				{
					"color": "#7FFF00",
					"endValue": 8,
					"id": "GaugeBand-7",
					"innerRadius": "60%",
					"radius": "75%",
					"startValue": 7
				},
				{
					"color": "#95FF00",
					"endValue": 9,
					"id": "GaugeBand-8",
					"innerRadius": "60%",
					"radius": "75%",
					"startValue": 8
				},
				{
					"color": "#AF0",
					"endValue": 10,
					"id": "GaugeBand-9",
					"innerRadius": "60%",
					"radius": "75%",
					"startValue": 9
				},
				{
					"color": "#BFFF00",
					"endValue": 11,
					"id": "GaugeBand-10",
					"innerRadius": "60%",
					"radius": "75%",
					"startValue": 10
				},
				{
					"color": "#D4FF00",
					"endValue": 12,
					"id": "GaugeBand-11",
					"innerRadius": "60%",
					"radius": "75%",
					"startValue": 11
				},
			]
		}
	],
	"allLabels": [],
	"balloon": {},
	"titles": [
		{
			"id": "Title-1",
			"size": 15,
			"text": "Speedometer"
		}
	]
} );

setInterval( randomValue, 1000 );

function randomValue() {
  var value = {{ $result }};
  if ( gaugeChart ) {
    if ( gaugeChart.arrows ) {
      if ( gaugeChart.arrows[ 0 ] ) {
        if ( gaugeChart.arrows[ 0 ].setValue ) {
          gaugeChart.arrows[ 0 ].setValue( value );
          gaugeChart.axes[ 0 ].setBottomText( value + "%" + " "+" Sleep Quality" );
        }
      }
    }
  }
}
</script>
</body>
</html>