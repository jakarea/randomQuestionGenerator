<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>pdfquestion</title>
        <style>

            .sub-text h3{
                font-family: 'Archivo Black', sans-serif;
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
            i{
                text-align: center;
            }
            .markd{
                float: right;
            }
            .sn{
                font-weight: bold;
            }
            .set{
                text-align:center;
            }
            .four{
                text-align: center;
            }
        </style>
    </head>
    <body style="margin-top:70px">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 sub-text">
               <?php echo Html::image('assets/dist/img/logo.png'); ?>

                    <h3>STAMFORD UNIVERSITY BANGLADESH</h3>
                    <h4>Department of Computer Science and Engineering</h4>
                    <h5><?php echo $head['exam_type']; ?>,<?php echo $head['trimister']; ?> Trimester</h5>
                    <h5><?php echo $head['code']; ?> : <?php echo $head['title']; ?></h5>
                    <h5>CT: <?php echo $head['ct']; ?></h5>
                    <h5>Date and Time: <?php echo $head['exam_date']; ?> & <?php echo $head['time']; ?></h5>
                </div>
                <br>
                <table style="width:100%">
                    <tr align="center">
                        <td><strong>Batch:</strong> <?php echo $head['batch']; ?></td>
                        <td><strong>Capmus:</strong>Siddeswari</td>
                    </tr>
                     <tr align="center">
                        <td><strong>Time: </strong><?php echo $head['time']; ?></td>
                        <td><strong>Full Marks: </strong>30</td>
                    </tr>
                </table>
                <hr>
                <br>
                <div class="col-md-offset-1 col-md-10 four">
                    <p><i>(There are <strong>Four </strong>questions.Answer any <strong>THREE </strong>of them. Figures in the right margin indicate <br>full marks. Write anything on the question paper is strictly prohibited.)</i></p>
                </div>
               <!--  <br><br><br> -->
                <!--1-->
                <?php
                $sn = 1;
                $alp = 'a';
                ?>
               <?php foreach($questions as $sets): ?>
                <div class="col-md-12 set">
                    <span class="sn"><?php echo e($sn); ?>.</span>
                    <?php foreach($sets as $set): ?>
                    <span class="alp">(<?php echo e($alp); ?>)</span>
                    <span class="question"><?php echo e($set['question']); ?>anything on the question paper is strictly prohibited.anything on the question paper is strictly prohibited. </span>
                    <span class="marks">[<?php echo e($set['mark']); ?>]</span><br>
                    <?php $alp++; ?>
                    <?php endforeach; ?>
                    <br>
                    <?php $alp = 'a';
                    $sn++;
                    ?>
                </div>
                <?php endforeach; ?>
                <br><br><br>
                <div class="col-md-offset-1 col-md-10 sub-text">
                    <h6>===GOOD LUCK===</h6>
                </div>
            </div>
        </div>
        <a href="<?php echo url('pdfdownload'); ?>">Download</a>
    </body>
</html>
