
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="practice3.css">
    <title>Document</title>
</head>
<body>

<div style="margin: auto; width: 50%;">
  <canvas id="myChart"></canvas>
</div>
    
<?php 

  $a = 30;
  $b = 70;
  $c = 20;
  $value = array($a,$b,$c);
  $mentalhealth = array("Stress","Anxiety","Depression");

?>


<script>
  const labels = <?php echo json_encode($mentalhealth) ?>;

  const data = {
  labels: labels,
  datasets: [{
    label: 'Mental Health Status',
    data:<?php echo json_encode($value) ?>,
    backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',

    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
 
    ],
    borderWidth: 1
  }]
};

const config = {
  type: 'scatter plot',
  data: data,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  },
};

  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );

</script>
</body>
</html>