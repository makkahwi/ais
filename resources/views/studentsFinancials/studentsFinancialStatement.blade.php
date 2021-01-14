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
            <tr class="sfont">
                <td></td>
                <td></td>
                <td></td>
                <td>Tuition Fees Payment Frequancy: </td>
                <td>
                    @if ($student['tuitionfreq'])
                        Monthly
                    @else
                        Semesterly
                    @endif
                </td>
            </tr>
            <tr class="sfont">
                <td></td>
                <td></td>
                <td></td>
                <td>Transportation: </td>
                <td>
                    @if ($student['trans'])
                        School Bus
                    @else
                        Own Transportation
                    @endif
                </td>
            </tr>
        </table>

        <br><br>

        <table class="table table-bordered" width="100%">
            <tr class="text-center">
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
            @foreach($sems as $sem)
                <tr>
                    <td colspan="7"><b>{{$sem['title']}}, {{$sem->year['title']}}</b><p hidden>{{$semPayments=0, $semDues=0}}</p></td>
                </tr>
                @if ($sem->payments_count > $sem->dues_count)
                    <p hidden>{{$count=$sem->payments_count}}</p>
                @else
                    <p hidden>{{$count=$sem->dues_count}}</p>
                @endif

                @for ($i = 0; $i < $count; $i++)
                    <tr>
                        @if ($i < $sem->dues_count)
                            <td>{{$sem->dues[$i]->category['title']}}</td>
                            <td>RM{{$sem->dues[$i]->category['amount']}}</td>
                            <td>{{$sem->dues[$i]->discount['title']}}</td>
                            <td>
                                @if($sem->dues[$i]->discount['type'])
                                    @if($sem->dues[$i]->discount['type'] == "Percentage")
                                        {{$sem->dues[$i]->discount['amount']}}%
                                    @else
                                        RM{{$sem->dues[$i]->discount['amount']}}
                                    @endif
                                @endif
                            </td>
                            <td>RM{{$sem->dues[$i]->finalAmount}} <p hidden>{{$semDues+=$sem->dues[$i]->finalAmount}}{{$duesTotal+=$sem->dues[$i]->finalAmount}}</p></td>
                        @else
                            <td colspan="5"></td>
                        @endif
                        @if ($i < $sem->payments_count)
                            <td>{{$sem->payments[$i]['date']->format('d M Y')}}</td>
                            <td>RM{{$sem->payments[$i]['amount']}} <p hidden>{{$semPayments+=$sem->payments[$i]['amount']}}{{$paymentsTotal+=$sem->payments[$i]['amount']}}</p></td>
                        @else
                            <td colspan="2"></td>
                        @endif
                    </tr>
                @endfor
                <tr>
                    <td colspan="3">{{$sem['title']}}, {{$sem->year['title']}} Totals</td>
                    <td>Dues</td>
                    <td>RM{{$semDues}}</td>
                    <td>Payments</td>
                    <td>RM{{$semPayments}}</td>
                </tr>
            @endforeach
                <tr>
                    <td colspan="3">All Semesters Totals</td>
                    <td>Dues</td>
                    <td>RM{{$duesTotal}}</td>
                    <td>Payments</td>
                    <td>RM{{$paymentsTotal}}</td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td colspan="2"><h4>Grand Total</h4></td>
                    @if($duesTotal > $paymentsTotal)
                        <td colspan="2" class="text-danger"><h4> Debt of RM{{$duesTotal-$paymentsTotal}}</h4></td>
                    @else
                        <td colspan="2" class="text-success"><h4> Credit of RM{{$paymentsTotal-$duesTotal}}</h4></td>
                    @endif
                </tr>
        </table>

        <br><br>

        <p class="texts"><b>THANK YOU</b><br>Financial Management<br>{{ config('app.sname') }}<br><br><br></p>
        <p class="sfont">Note: This document was automatically generated through {{ config('app.name') }} {{ config('app.url') }}</p>

    </body>
</html>