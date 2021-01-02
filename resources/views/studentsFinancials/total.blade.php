<h4 class="text-center">Click below to generate and download your financial statement<br><br>
نرجو الضغط على الزر أدناه لإعداد وتنزيل البيان المالي الخاص بكم<br><br></h4>

<form class="text-center" action="{{route('sfStatement', 1)}}">
  <input type="hidden" name="id" value="{{$student->studentNo}}">
  <button class="btn btn-success submitbutton" type="submit"><i class="fas fa-print"></i> Full Financual Statement البيان المالي الكامل</button>
  <div class="loader" hidden><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>
</form>

<br><br>