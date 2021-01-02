<!DOCTYPE html>
<html>
    <head>
        <title>{{$student['studentNo']}} Student Financial Statement</title>

        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">

        <style>
            th{
                text-align:left;
                font-weight: normal;
                line-height: 1.5;
            }
            .sfont{
                font-size:12px;
            }
            table{
                width:100%;
            }
            .seperator{
                width:5%;
            }
            body{
                padding: 0 3% 3% 3%;
                /* background-image: url('{{asset("img/letterbg.png")}}');
                background-repeat: no-repeat;
                background-position: center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;*/
            }
            .texts{
                text-align:justify;
                line-height: 1.5;
            }
        </style>
    </head>

    <body>

        <h2 class="text-center" style="color:#004394;">Student Financial Statement</h2>

        <br><br>

        <table>
            <tr class="sfont">
                <td>Name: </td>
                <td width="40%">{{$student['eName']}}</td>
                <td width="2%"></td>
                <td>IC / Passport: </td>
                <td>{{$student->user->contact['ppno']}}</td>
            </tr>
            <tr class="sfont">
                <td>Student No: </td>
                <td>{{$student['studentNo']}}</td>
                <td></td>
                <td>Nationality: </td>
                <td>{{$student->user->contact['nation']}}</td>
            </tr>
            <tr class="sfont">
                <td>Level: </td>
                <td>{{$student->classroom->level['title']}}</td>
                <td></td>
                <td>Status: </td>
                <td>{{$student->user->status['title']}}</td>
            </tr>
            <tr class="sfont">
                <td>Classroom: </td>
                <td>{{$student->classroom['title']}}</td>
                <td></td>
                <td>Sponser: </td>
                <td>{{$student['sponsor']}}</td>
            </tr>
        </table>

        <br><br>

        <table class="table table-bordered" width="100%">
            <tr class="text-center">
                <td rowspan="3">Semester</td>
                <td colspan="5">Dues</td>
                <td colspan="2">Payments</td>
            </tr>
            <tr class="text-center">
                <td rowspan="2">Title</td>
                <td rowspan="2">Amount</td>
                <td colspan="2">Discounts</td>
                <td rowspan="2">Final Amount</td>
                <td rowspan="2">Date</td>
                <td rowspan="2">Amount <p hidden>{{$duesTotal=0}}</p></td>
            </tr>
            <tr class="text-center">
                <td>Title</td>
                <td>Amount <p hidden>{{$paymentsTotal=0}}</p></td>
            </tr>
            @foreach($payments as $payment)
                <tr>
                    <td>{{$payment->sem['title']}}, {{$payment->sem->year['title']}}</td>
                    <td colspan="5"></td>
                    <td>{{$payment['date']->format('d M Y')}}</td>
                    <td>{{$payment['amount']}} <p hidden>{{$paymentsTotal+=$payment['amount']}}</p></td>
                </tr>
            @endforeach
            @foreach($dues as $due)
                <tr>
                    <td>{{$due->sem['title']}}, {{$due->sem->year['title']}}</td>
                    <td>{{$due->category['title']}}</td>
                    <td>{{$due->category['amount']}}</td>
                    <td>{{$due->discount['title']}}</td>
                    <td>
                        @if($due->discount['type'])
                            @if($due->discount['type'] == "Percentage")
                                {{$due->discount['amount']}}%
                            @else
                                RM{{$due->discount['amount']}}
                            @endif
                        @endif
                    </td>
                    <td>{{$due->finalAmount}} <p hidden>{{$duesTotal+=$due->finalAmount}}</p></td>
                    <td colspan="2"></td>
                </tr>
            @endforeach
                <tr>
                    <td colspan="4"></td>
                    <td>Total</td>
                    <td>{{$duesTotal}}</td>
                    <td>Total</td>
                    <td>{{$paymentsTotal}}</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                    <td colspan="2"><h4>Grand Total</h4></td>
                    @if($duesTotal > $paymentsTotal)
                        <td colspan="2" class="text-danger"><h4> Debt of
                    @else
                        <td colspan="2" class="text-success"><h4> Credit of
                    @endif
                            {{$duesTotal-$paymentsTotal}}</h4>
                        </td>
                </tr>
        </table>

        <br><br>

        <p class="texts"><b>THANK YOU</b><br>Financial Management<br>{{ config('app.sname') }}<br><br><br></p>
        <p class="sfont">Note: This document was automatically generated through {{ config('app.name') }} {{ config('app.url') }}</p>

    </body>
</html>