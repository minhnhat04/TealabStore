<style>
* {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
        }

        .formcontent {
            width: calc(100% - 220px);
            margin-left: 200px;
            padding: 10px 50px;
            border-radius: 5px;
            background-color: #ecf0f1;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #3498db;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .row {
            margin-top: 10px;
        }

        .mb10 {
            margin-top: 15px;
        }

        input[type="button"] {
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 3px;
            margin-right: 10px;
        }

        a {
            text-decoration: none;
        }

        button {
            background-color: #3498db;
            color: #ffffff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-left: 10px; /* Đã sửa lỗi chính tả tại đây */
        }

        button i {
            margin-right: 5px;
        }

        button:hover {
            background-color: #2980b9;
        }

        .nut1 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 102px;
        }
        .b1, .b2{
            display: flex;
        }
        .b2{
            background-color: red;
        }
        .nut1 button i{
            margin-left: 10px;
        }
        .weight{
            width: 140px;
            text-align: center;
        }
        .weight img{
            height: 80px;
            width: 60px;
        }
        .ndung{
            max-width: 200px; 
            white-space: nowrap; 
            overflow: hidden; 
            text-overflow: ellipsis; 
        }
</style>
<div class="formcontent">
        <form action="#" method="post">
            <div class="row">
                <table>
                    <tr>
                        <th>Mã danh mục</th>
                        <th>Tên danh mục</th>
                        <th>Số lượng</th>
                        <th>Gía cao nhất</th>
                        <th>Gía thấp nhất</th>
                        <th>Gía trung bình</th>
                    </tr>
                    <?php
                      foreach($listthongke as $thongke){
                        extract($thongke);
                        echo ' <tr>
                                    <td>'.$madm.'</td>
                                    <td>'.$tendm.'</td>
                                    <td>'.$countsp.'</td>
                                    <td>'.$maxprice.'</td>
                                    <td>'.$minprice.'</td>
                                    <td>'.$avgprice.'</td>
                                </tr>';
                      }
                    ?>
                 </table>
</div>
 <div id="myChart" style="width:100%; max-width:800px; height:700px;"></div>
<script>
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    const data = google.visualization.arrayToDataTable([
      ['Danh mục', 'Số lượng'],
      <?php
         $tongdm = count($listthongke);
         $i = 1;
         foreach($listthongke as $thongke) {
           if($i == $tongdm) {
             $dauphay = "";
           } else {
             $dauphay = ",";
           }
           extract($thongke);
           echo "['".$thongke['tendm']."', ".$thongke['countsp']."]".$dauphay;
           $i += 1;
         }
      ?>
    ]);

    const options = {
      title: 'Biểu đò bán đồng hồ',
      is3D: true
    };
    const chart = new google.visualization.PieChart(document.getElementById('myChart'));
    chart.draw(data, options);
  }
</script>

</div>