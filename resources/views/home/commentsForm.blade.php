<form method="post" action="evaluate">

  @csrf

  <div class="form-group row">

    <div class="col-md-3">
      <label for="outlook"><h4>Please rate the portal outlook & ease of use<br><br>نرجو تقييم تصميم البوابة ومدى سهولة استخدامها</h4></label>
    
      <label for="good"><h5>Good<br>جيد</h5></label>
      <input type="radio" id="good" required name="outlook" value="good">
        
      <label for="medium"><h5>Medium<br>متوسط</h5></label>
      <input type="radio" id="medium" name="outlook" value="medium">
        
      <label for="bad"><h5>Bad<br>سيء</h5></label>
      <input type="radio" id="bad" name="outlook" value="bad">
    </div>

    <div class="col-md-3">
      <label for="efficiency"><h4>Please rate the portal efficiency / how useful & helpful <br><br>نرجو تقييم فعّالية البوابة / مدى الاستفادة منها</h4></label>
    
      <label for="good"><h5>Good<br>جيدة</h5></label>
      <input type="radio" id="good" required name="efficiency" value="good">
        
      <label for="medium"><h5>Medium<br>متوسطة</h5></label>
      <input type="radio" id="medium" name="efficiency" value="medium">
        
      <label for="bad"><h5>Bad<br>سيئة</h5></label>
      <input type="radio" id="bad" name="efficiency" value="bad">
    </div>
    
    <div class="col-md-3">
      <label for="accuracy"><h4>Please rate the portal data accuracy and how complete it is<br><br>نرجو تقييم دقة البيانات في البوابة ومدى اكتمالها</h4></label>
    
      <label for="good"><h5>Good<br>جيدة</h5></label>
      <input type="radio" id="good" required name="accuracy" value="good">
        
      <label for="medium"><h5>Medium<br>متوسطة</h5></label>
      <input type="radio" id="medium" name="accuracy" value="medium">
        
      <label for="bad"><h5>Bad<br>سيئة</h5></label>
      <input type="radio" id="bad" name="accuracy" value="bad">
    </div>

    <div class="col-md-3">
      <label for="speed"><h4>Please rate the portal loading speed<br><br>نرجو تقييم سرعة تحميل البوابة</h4></label>
    
      <label for="good"><h5>Good<br>جيدة</h5></label>
      <input type="radio" id="good" required name="speed" value="good">
        
      <label for="medium"><h5>Medium<br>متوسطة</h5></label>
      <input type="radio" id="medium" name="speed" value="medium">
        
      <label for="bad"><h5>Bad<br>سيئة</h5></label>
      <input type="radio" id="bad" name="speed" value="bad">
    </div>

  </div>

  <div class="form-group col-md-4">
    <label for="email"><h4>Please state your Email address<br><br>نرجو ذكر بريدك الإلكتروني</h4></label>
    <input required type="email" class="form-control" name="email">
  </div>

  <div class="form-group col-md-8">
    <label for="comment"><h4>Please state any other comments you'd like to add<br><br>نرجو ذكر أي تعليقات إضافية ترغب بها</h4></label>
    <textarea rows="1" class="form-control" name="comment"></textarea>
  </div>

  <div class="form-group pull-right">
    <button type="submit" class="btn btn-success">Send إرسال</button>
  </div>

</form>