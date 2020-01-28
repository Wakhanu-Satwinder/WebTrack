<?php
include("db.php");
?>
<html>
    <head>
    </head>
    <body>
        <table border='1'>
            <tr><th>id</th><th>name</th><th>charts</th></tr>
<?php
$result = mysqli_query($db,"SELECT * from companies limit 100");
$data = array(array('', 'year1', 'year2', 'year3', 'year4'));
$i = 0;
while($row = mysqli_fetch_array($result)) {
    echo "<tr><td>{$row['id']}</td><td>{$row['company']}</td><td><div id='chart_div_{$i}' style='width:200; height:150'></div></td></tr>";
    $data[] = array('', $row['year1'], $row['year2'], $row['year3'], $row['year4']);
    $i++;
}
?>
        </table>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
         <script src="gaddafi/jquery.min.js"></script>
        <script type="text/javascript">

        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable(<?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>);
            var options = {
                title: 'Company',
                curveType: 'function',
                width: 200,
                height: 150,
                legend: 'none'
            };

            var charts = [];
            var views = [];
            for (var i = 0; i < data.getNumberOfRows(); i++) {
                views.push(new google.visualization.DataView(data));
                views[i].setRows([i]);
                charts.push(new google.visualization.LineChart(document.querySelector('#chart_div_' + i)));
                charts[i].draw(views[i], options);
            }
        }
        </script>
    </body>
</html>