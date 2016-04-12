<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/favicon.jpg">
    <title>Development Center | International Institute of Professional Studies, Devi Ahilya Vishwavidhalay</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/newfile.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="yamm/yamm.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body>
<?php include 'header.php';?>
<div class="container">
  <div class="row">
    <div class="col-md-3" id="sidebar">
      <ul class="nav nav-stacked" role="tablist">
        <li role="presentation" id="colm" class="active" ><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><span class="fa fa-hand-o-right"></span>&nbsp;Academic Calendar</a></li>   
      </ul>
    </div>

    <div class="col-md-9">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="tab1">
            <h3 class="text-center">Academic Calendar</h3>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showTabs=0&amp;height=500&amp;wkst=1&amp;hl=en&amp;bgcolor=%2366cccc&amp;src=a5miku0t4g7j0bjda632f7rba0%40group.calendar.google.com&amp;color=%2323164E&amp;ctz=Asia%2FCalcutta" style="border:solid 1px #777" width="100%" height="500" frameborder="0" scrolling="no"></iframe>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
      </div>
      <br><br>
    </div><!--Col-md-9 End> -->
  </div>
</div>
</div>
<br>
<?php include 'footer.php'; ?>