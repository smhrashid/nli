<page size="A4">
    <div style="padding: 30px;">
    <style>
    .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
    line-height: 1.42857;
    padding: 0 8px 2px;
    vertical-align: middle;
    border: 1px solid black;
   
}

.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
    position: relative;
    min-height: 1px;
    padding-left: 15px;
    padding-right: 15px;
}
.table-bordered {
    border: 1px solid #dddddd;
}
.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
}
table {
    background-color: transparent;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
table {
    display: table;
    border-collapse: separate;
    box-sizing: border-box;
    text-indent: initial;
    border-spacing: 2px;
    border-color: grey;
}
.table>caption+thead>tr:first-child>th, .table>colgroup+thead>tr:first-child>th, .table>thead:first-child>tr:first-child>th, .table>caption+thead>tr:first-child>td, .table>colgroup+thead>tr:first-child>td, .table>thead:first-child>tr:first-child>td {
    border-top: 0;
}

.table-bordered>thead>tr>th, .table-bordered>thead>tr>td {
    border-bottom-width: 2px;
}
.table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 1px solid #dddddd;
}
.table>thead>tr>th {
    vertical-align: bottom;
    border-bottom: 2px solid #dddddd;
}
.table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #dddddd;
}
table td, table th {
    padding: 9px 10px;
    text-align: left;
}
table th {
    font-weight: bold;
}
th {
    text-align: left;
}
td, th {
    padding: 0;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
th {
    display: table-cell;
    vertical-align: inherit;
    font-weight: bold;
    text-align: -internal-center;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}
user agent stylesheet
table {
    border-collapse: separate;
    text-indent: initial;
    border-spacing: 2px;
}
</style>





<br><br><br><br><br><br>


<?php
$jinfo=json_decode($_SESSION['premcal']['jinfo'], true);
$jprem=json_decode($_SESSION['premcal']['jprem'], true);
for ($x = 0; $x <= 8; $x++) {
   echo '<div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong>'.$jinfo[$x][0].' : </strong>'.$jinfo[$x][1].'</div>
  </div>
</div>';
}
echo '<div class="col-md-7 form-group"><br>
<table class="table table-bordered">';
for ($y = 0; $y <= count ($jprem)-1; $y++) {
    if (!empty($jprem[$y][2])){
echo '
      <tr>
        <th>'.$jprem[$y][0].'</th>
        <td>'.$jprem[$y][1].'</td>
        <td>'.$jprem[$y][2].'</td>
      </tr>';
    }
}
echo'
  </table>
</div>';
 

          ?>
     </div>
</page>
 