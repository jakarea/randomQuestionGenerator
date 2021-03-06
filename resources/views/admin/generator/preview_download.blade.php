<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>pdfquestion</title>
        <style>
             h3{
            
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
    <body style="margin-top:20px">
        <div>
            <h3>STAMFORD UNIVERSITY BANGLADESH</h3>
            <h4>Department of Computer Science and Engineering</h4>
            <h5>{!! $head['exam_type'] !!},{!! $head['trimister'] !!} Trimester</h5>
            <h5>{!!  $head['code'] !!} : {!!  $head['title'] !!}</h5>
            <h5>CT: {!! $head['ct'] !!}</h5>
            <h5>Date and Time: {!!  $head['exam_date'] !!} & {!!  $head['time'] !!}</h5>
        </div>
        <br>
        <table style="width:100%">
            <tr >
                <td align="left"><strong>Batch:</strong> {!!  $head['batch'] !!}</td>
                <td align="right"><strong>Capmus:</strong>Siddeswari</td>
            </tr>
            <tr >
                <td align="left"><strong>Duration: </strong>{!!  $head['time'] !!}</td>
                <td align="right"><strong>Full Marks: </strong>30</td>
            </tr>
        </table>
        <hr>
        <br>
        <div class="col-md-offset-1 col-md-10">
            <p><i>(There are <strong>Four </strong>questions.Answer any <strong>THREE </strong>of them. Figures in the right margin indicate <br>full marks. Write anything on the question paper is strictly prohibited.)</i></p>
        </div>
        <br><br><br>
        <table align="center" width="100%">
            <?php
                $sn = 1;
                $alp = 'a';
                ?>
            @foreach($questions as $sets)
            <tr>
                <td align="right" valign="top">{{$sn}}.</td>
                @foreach($sets as $set)
                <td align="center" valign="top">{{$alp}})</td>
                <td align="left" valign="top">{{$set['question'] }}</td>
                <td align="right" valign="top">[{{$set['mark']}}]</td>
            </tr>
            <tr>
                <td align="center"></td>
                <?php $alp++; ?>
                @endforeach
                <?php
                    $alp = 'a';
                    $sn++;
                    ?>
            </tr>
            @endforeach
        </table>
        <br><br><br>
        <div class="col-md-offset-1 col-md-10 sub-text">
            <h6>===GOOD LUCK===</h6>
        </div>
    </body>
</html>