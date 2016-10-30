<!DOCTYPE html>
<html>
<head>
    <title>Question</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pdfquestion</title>
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!--Font-->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Archivo+Black'>
    <style>
        .sub-text h3{
            text-align: center;
        }
        h4{
            text-align: center;
        }
        h5{
            text-align: center;
        }
        h6{
            text-align: center;
            font-size: 15px;
            font-family: 'Archivo Black', sans-serif;
        }
        .batch{
            margin: 0 0 0 190px;
        }
        .campus{
            margin: -52px 0 0 814px;
        }
        .four{
            text-align: center;
        }
        .set{
            margin: 50px 200px 0px 200px;
        }
        .alp{
            margin: 0 0 0 20px
        }
        .question{
            margin: auto;
            text-align:justify;
        }
        .good_luck{
            align:center;
            margin-top:30px; 
        }
    </style>
</head>
<body style="margin-top:20px">
<div class="container">
    <div class="sub-text">
        <!-- <img src="logo.gif" height="170" width="170" style="margin:-8px -39px -192px 285px;"> -->
        <?php echo Html::image('assets/bootstrap/img/stamford-logo.gif', 'a picture', array('class' => 'img-responsive','title' => '', 'class' => '', 'style' => 'width:150px;height:130px;margin:0px -39px -192px 180px')); ?>


        <h3><b>STAMFORD UNIVERSITY BANGLADESH</b></h3>
        <h4>Department of Computer Science and Engineering</h4>
        <h5><?php echo $head['exam_type']; ?>,<?php echo $head['trimister']; ?> Trimester</h5>
        <h5><?php echo $head['code']; ?> : <?php echo $head['title']; ?></h5>
        <h5>CT: <?php echo $head['ct']; ?></h5>
        <h5>Date and Time: <?php echo $head['exam_date']; ?> & <?php echo $head['time']; ?></h5>
    </div>
    <div class="batch">
        <p>
            <strong>Batch: </strong><?php echo $head['batch']; ?><br>
            <strong>Duration: </strong>2 hours
        </p>
    </div>
    <div class="campus">
        <p>
            <strong>Campus: </strong>Siddeswari<br>
            <strong>Full Marks: </strong>30
        </p>
    </div><hr><br>
    <div class="four">
        <p><i>(There are <strong>Four </strong>questions.Answer any <strong>THREE </strong>of them. Figures in the right margin indicate <br>full marks. Write anything on the question paper is strictly prohibited.)</i></p>
    </div>
    <table align="center" width="60%">
        <?php
        $sn = 1;
        $alp = 'a';
        ?>
        <?php foreach($questions as $sets): ?>
        <tr>
            <td align="right" valign="top"><?php echo e($sn); ?>.</td>
            <?php foreach($sets as $set): ?>
            <td align="center" valign="top"><?php echo e($alp); ?>)</td>
            <td align="left" valign="top"><?php echo e($set['question'] ."Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut"); ?></td>
            <td align="right" valign="top">[<?php echo e($set['mark']); ?>]</td>
        </tr>
        <tr>
            <td align="center"></td>
            <?php $alp++; ?>
            <?php endforeach; ?>
            <?php
                $alp = 'a';
                $sn++;
            ?>
        </tr>
        <?php endforeach; ?>
    </table>
   
    </div>
     <div class="good_luck">
        <h6>====GOOD LUCK====</h6>
    </div>
    <button type="button" class="btn btn-lg btn-default" style="float:right">
      <a href="<?php echo url('pdfdownload'); ?>"  style="text-decoration:none;"><b>Download</b></a> 
    </button>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>