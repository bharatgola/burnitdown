
<html>
<head>
  <title>report</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
<div id="container">
  <div id="sideMenu">
   <!-- <h1>Sales Report</h1>

    <ul class="menu">
      <li>Main</li>
      <li>Dashboard</li>
      <li>Reports <span class="notification">8</span></li>
      <li>Groups</li>
    </ul>

    <ul class="menu">
      <li>Account</li>
      <li>Activity</li>
      <li>Messages <span class="notification">4</span></li>
      <li>Downloads</li>
    </ul>

    <ul class="menu">
      <li>Categories</li>
      <li>Credit Sales <span class="colorIcon red"></span></li>
      <li>Channel Sales <span class="colorIcon orange"></span></li>
      <li>Direct Sales <span class="colorIcon green"></span></li>
    </ul>
    <div class="addCategory"><span class="plus">+</span> Add Category</div>
  </div> -->
  <div id="content">
    <div id="titleBar">
      <h2>Dashboard</h2>
      <div id="profilePic">
        <img src="file:///C:/xampp/htdocs/practice/carry.jpg" />
      </div>
      <span class="controls activeControl">Weekly</span>
      <span class="controls">Monthly</span>
    </div>

    <div class="mainChart">
      <canvas id="salesData"></canvas>
      <h2>Total Sales</h2>

      <div class="clearFix"></div>

      <div id="totalSales">
        <div class="col">
          <div id="creditSales" class="progressBar"></div>
          <h3>$36,059</h3>
          <span class="progressTitle">Credit Sales</span>
        </div>
        <div class="col">
          <div id="channelSales" class="progressBar"></div>
          <h3>$24,834</h3>
          <span class="progressTitle">Channel Sales</span>
        </div>
        <div class="col">
          <div id="directSales" class="progressBar"></div>
          <h3>$15,650</h3>
          <span class="progressTitle">Direct Sales</span>
        </div>
      </div>

      <table>
        <tr>
          <th>November Sales</th>
          <th>Quantity</th>
          <th>Total</th>
        </tr>

        <tr>
          <td>Dallas Oak Dining Chair</td>
          <td>20</td>
          <td>$1,342</td>
        </tr>

        <tr>
          <td>Benmore Glass Coffee Table</td>
          <td>18</td>
          <td>$1,550</td>
        </tr>

        <tr>
          <td>Aoraki Leather Sofa</td>
          <td>15</td>
          <td>$4,170</td>
        </tr>

        <tr>
          <td>Bali Outdoor Wicker Chair</td>
          <td>25</td>
          <td>$2,974</td>
        </tr>
      </table>
    </div>

  </div>
</div>
</div>
    <style type="text/css">
      @import url(https://fonts.googleapis.com/css?family=Lato:100,300,400,700);

html {
  height: 100%;
  font-family: 'Lato', sans-serif;
}
body {
  height: 100%;
  margin: 0;
  background: linear-gradient(135deg, rgba(65,131,155,1) 0%,rgba(51,98,123,1) 100%);
  background-repeat: no-repeat;
  background-attachment: fixed;
}
* {
  box-sizing: border-box;
}

#container {
  display: table;
  width: 1200px;
  background: #202b33;
  margin: 60px auto;
  border-radius: 4px;
}

/* Side Bar */
#sideMenu {
  width: 240px;
  height: 100%;
  padding: 30px;
  border-right: 1px solid #111;
  display: table-cell;
  vertical-align: top;
  color: #fff;
}
.menu {
  list-style: none;
  margin:  24px 0;
  padding: 0;
}
.menu li {
  display: block;
  height: 30px;
  width: 100%;
  line-height: 30px;
  font-size: 14px;
  font-weight: 200;
  color: rgba(255, 255, 255, .6);
  position: relative;
}
.menu li:hover {
  color: #239ae3;
}
.menu li:first-child {
  height: 35px;
  line-height: 35px;
  font-size: 16px;
  font-weight: 400;
  color: #fff;
}
.addCategory {
  font-size: 13px;
  font-weight: 200;
  color: rgba(255, 255, 255, .2);
}
.addCategory:hover {
  color: #fff;
}
/* Content */
#content {
  width: calc(100% - 800px);
  height: 100%;
  padding: 25px;
  display: table-cell;
}
#titleBar {
  height: 36px;
  margin-bottom: 30px;
}
#profilePic {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: #999;
  float: right;
  margin-top: -8px;
  margin-left: 14px;
  overflow: hidden;
}
#profilePic img {
  width: 100%;
}
.controls {
  display: block;
  width: 70px;
  height: 20px;
  color: rgba(255, 255, 255, 0.4);
  font-size: 10px;
  font-weight: 300;
  text-transform: uppercase;
  text-align: center;
  line-height: 20px;
  float: right;
  border-radius: 20px;
}
.activeControl {
  background: rgba(255, 255, 255, 0.9);
  color: #202b33;
  font-weight: 600;
}
#salesData {
  margin-bottom: 60px;
}
#totalSales {
  height: 120px;
  position: relative;
  margin-top: 24px;
  margin-bottom: 50px;
}
#totalSales .col {
  float: left;
  width: 33.33%;
  height: 100%;
}
#totalSales .col .progressTitle {
  float: left;
  margin-left: 20px;
  font-weight: 300;
  color: rgba(255, 255, 255, 0.4);
}
.progressBar {
  float: left;
  height: 120px;
  width: 120px;
  font-size: 40px;
  text-align: center;
  line-height: 120px;
}

/* Icons */
.notification {
  display: block;
  width: 20px;
  height: 20px;
  color: #202b33;
  font-weight: 600;
  line-height: 20px;
  text-align: center;
  border-radius: 50%;
  background: rgba(255, 255, 255, .6);
  position: absolute;
  top: 0; bottom: 0; right: 2%;
  margin: auto;
}
.colorIcon {
  display: block;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  position: absolute;
  top: 0; bottom: 0; right: 2%;
  margin: auto;
}
.plus {
  display: inline-block;
  width: 20px;
  height: 20px;
  color: #202b33;
  font-weight: 600;
  font-size: 16px;
  line-height: 8px;
  padding: 4px;
  margin-right: 6px;
  border: 2px solid rgba(255, 255, 255, .2);
  border-radius: 50%;
  color: rgba(255, 255, 255, .2);
}
.red {
  background: #ec1561;
}
.orange {
  background: #ff9939;
}
.green {
  background: #2bab51;
}

/* Table */
table {
  width: 100%;
  border-collapse: collapse;
}
th {
  text-align: left;
  color: #fff;
  font-weight: 400;
  font-size: 13px;
  text-transform: uppercase;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  padding: 0 10px;
  padding-bottom: 14px;
}
tr:not(:first-child):hover {
  background: rgba(255, 255, 255, 0.1);
}
td {
  height: 40px;
  line-height: 40px;
  font-weight: 300;
  color: rgba(255, 255, 255, 0.4);
  padding: 0 10px;
}
/* Headers */
h1 {
  font-size: 13px;
  font-weight: 200;
  letter-spacing: 1px;
  text-transform: uppercase;
  margin: 0;
}
h2 {
  float: left;
  font-size: 19px;
  font-weight: 200;
  letter-spacing: 1px;
  margin: 0;
  color: rgba(255, 255, 255, .8);
}
h3 {
  float: left;
  color: #fff;
  font-size: 32px;
  font-weight: 300;
  margin: 0;
  margin-top: 8%;
  margin-left: 20px;
  margin-bottom: 6px;
}

.clearFix {
  clear: both;
}
    </style>
    <script type="text/javascript">
      // https://dribbble.com/shots/1821178-Sales-Report?list=buckets&offset=0

// Line Chart
var salesData = {
  labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
  datasets: [
    {
      label: "Front",
      fillColor: "rgba(195, 40, 96, 0.1)",
      strokeColor: "rgba(195, 40, 96, 1)",
      pointColor: "rgba(195, 40, 96, 1)",
      pointStrokeColor: "#202b33",
      pointHighlightStroke: "rgba(225,225,225,0.9)",
      data: [3400, 3000, 2500, 4500, 2500, 3400, 3000]
    },
    {
      label: "Middle",
      fillColor: "rgba(255, 172, 100, 0.1)",
      strokeColor: "rgba(255, 172, 100, 1)",
      pointColor: "rgba(255, 172, 100, 1)",
      pointStrokeColor: "#202b33",
      pointHighlightStroke: "rgba(225,225,225,0.9)",
      data: [1900, 1700, 2100, 3600, 2200, 2500, 2000]
    },
    {
      label: "Back",
      fillColor: "rgba(19, 71, 34, 0.3)",
      strokeColor: "rgba(88, 188, 116, 1)",
      pointColor: "rgba(88, 188, 116, 1)",
      pointStrokeColor: "#202b33",
      pointHighlightStroke: "rgba(225,225,225,0.9)",
      data: [1000, 1400, 1100, 2600, 2000, 900, 1400]
    }
  ]
};
var ctx = document.getElementById("salesData").getContext("2d");
window.myLineChart = new Chart(ctx).Line(salesData, {
  pointDotRadius : 6,
  pointDotStrokeWidth : 2,
  datasetStrokeWidth : 3,
  scaleShowVerticalLines: false,
  scaleGridLineWidth : 2,
  scaleShowGridLines : true,
  scaleGridLineColor : "rgba(225, 255, 255, 0.02)",
  scaleOverride: true,
  scaleSteps: 9,
  scaleStepWidth: 500,
  scaleStartValue: 0,

  responsive: true

});

//Credit Sales
var creditSales = new ProgressBar.Circle('#creditSales', {
  color: '#e81760',
  strokeWidth: 3,
  trailWidth: 3,
  duration: 1500,
  text: {
    value: '0%'
  },
  step: function(state, bar) {
    bar.setText((bar.value() * 100).toFixed(0) + "%");
  }
});
var channelSales = new ProgressBar.Circle('#channelSales', {
  color: '#e88e3c',
  strokeWidth: 3,
  trailWidth: 3,
  duration: 1500,
  text: {
    value: '0%'
  },
  step: function(state, bar) {
    bar.setText((bar.value() * 100).toFixed(0) + "%");
  }
});
var directSales = new ProgressBar.Circle('#directSales', {
  color: '#2bab51',
  strokeWidth: 3,
  trailWidth: 3,
  duration: 1500,
  text: {
    value: '0%'
  },
  step: function(state, bar) {
    bar.setText((bar.value() * 100).toFixed(0) + "%");
  }
});
creditSales.animate(0.8);
channelSales.animate(0.64);
directSales.animate(0.34);
    </script>
</body>
</html>