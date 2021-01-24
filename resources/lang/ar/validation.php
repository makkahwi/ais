<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Validation Language Lines
  |--------------------------------------------------------------------------
  |
  | The following language lines contain the default error messages used by
  | the validator class. Some of these rules have multiple versions such
  | as the size rules. Feel free to tweak each of these messages here.
  |
  */

  'accepted' => 'خانة :attribute يجب أن تقبل.',
  'active_url' => 'الرابط في خانة :attribute غير صالح.',
  'after' => 'التاريخ في خانة :attribute يجب أن يكون بعد تاريخ :date.',
  'after_or_equal' => 'التاريخ في خانة :attribute يجب أن يعادل أو يتجاوز تاريخ :date.',
  'alpha' => 'خانة :attribute يجب ان تحتوي على حروف حصراً.',
  'alpha_dash' => 'خانة :attribute يجب أن تحتوي على حروف, أرقام, شرطات أو شرطات سفلية فقط.',
  'alpha_num' => 'خانة :attribute يجب أن تحتوي على حروف وأرقام حصراً.',
  'array' => 'خانة :attribute يجب أن تحتوي على مصفوفة.',
  'before' => 'التاريخ في خانة :attribute يجب أن يسبق تاريخ :date.',
  'before_or_equal' => 'التاريخ في خانة :attribute يجب أن يعادل أو يسبق تاريخ :date.',
  'between' => [
    'numeric' => 'الرقم في خانة :attribute يجب أن ينحصر بين :min و :max.',
    'file' => 'الرقم في خانة :attribute يجب أن ينحصر بين :min و :max كيلوبايت.',
    'string' => 'الرقم في خانة :attribute يجب أن ينحصر بين :min و :max أحرف / حرفاً.',
    'array' => 'الإدخال في خانة :attribute يجب أن ينحصر بين :min و :max عناصر / عنصراً.',
  ],
  'boolean' => 'خانة :attribute يجب أي يحتوي على إجابة نعم / لا.',
  'confirmed' => 'خانة :attribute التأكيد لا تتطابق.',
  'date' => 'التاريخ في خانة :attribute غير صالح.',
  'date_equals' => 'التاريخ في خانة :attribute يجب أن يعادل تاريخ :date.',
  'date_format' => 'التاريخ في خانة :attribute لا يتبع النمط :format.',
  'different' => 'خانة :attribute وخانة :other يجب أن يختلفا.',
  'digits' => 'خانة :attribute يجب أن تحوي :digits أرقاماً.',
  'digits_between' => 'الرقم في خانة :attribute يجب أن ينحصر بين :min و :max أرقام / رقماً.',
  'dimensions' => 'أبعاد الصورة في خانة :attribute لا تصلح.',
  'distinct' => 'خانة :attribute تحوي على قيمة مكررة.',
  'email' => 'خانة :attribute يجب أن تحوي على عنوان بريد إلكتروني صالح.',
  'ends_with' => 'خانة :attribute يجب أن تنتهي بإحدى القيم التالية: :values.',
  'exists' => 'القيمة المختارة في خانة :attribute غير صالحة.',
  'file' => 'خانة :attribute يجب أن تحوي على ملف.',
  'filled' => 'خانة :attribute يجب أن تحوي على إدخال.',
  'gt' => [
    'numeric' => 'الرقم في خانة :attribute يجب أن يكون أكبر من :value.',
    'file' => 'الرقم في خانة :attribute يجب أن يكون أكبر من :value كيلوبايت.',
    'string' => 'الرقم في خانة :attribute يجب أن يكون يحوي أكثر من :value أحرف / حرفاً.',
    'array' => 'الإدخال في خانة :attribute يجب أن يحوي أكثر من :value عناصر / عنصراً.',
  ],
  'gte' => [
    'numeric' => 'الرقم في خانة :attribute يجب أن يعادل أو أن يكون أكبر من  :value.',
    'file' => 'الرقم في خانة :attribute يجب أن يعادل أو أن يكون أكبر من :value كيلوبايت.',
    'string' => 'الرقم في خانة :attribute يجب أن يعادل أو أن يكون أكبر من :value أحرف / حرفاً.',
    'array' => 'الإدخال في خانة :attribute يجب أن يحوي :value عناصر / عنصراً أو أكثر.',
  ],
  'image' => 'خانة :attribute يجب أن تحوي صورة.',
  'in' => 'القيمة المختارة في خانة :attribute غير صالحة.',
  'in_array' => 'خانة :attribute غير موجودة في :other.',
  'integer' => 'خانة :attribute يجب أن تحوي رقماً صحيحاً.',
  'ip' => 'خانة :attribute يجب أن تحوي عنوان IP صالحاً.',
  'ipv4' => 'خانة :attribute يجب أن تحوي عنوان IPv4 صالحاً.',
  'ipv6' => 'خانة :attribute يجب أن تحوي عنوان IPv6 صالحاً.',
  'json' => 'خانة :attribute يجب أن تحوي سلسلة JSON صالحة',
  'lt' => [
    'numeric' => 'The :attribute must be less than :value.',
    'file' => 'The :attribute must be less than :value kilobytes.',
    'string' => 'The :attribute must be less than :value characters.',
    'array' => 'The :attribute must have less than :value items.',
  ],
  'lte' => [
    'numeric' => 'The :attribute must be less than or equal :value.',
    'file' => 'The :attribute must be less than or equal :value kilobytes.',
    'string' => 'The :attribute must be less than or equal :value characters.',
    'array' => 'The :attribute must not have more than :value items.',
  ],
  'max' => [
    'numeric' => 'The :attribute may not be greater than :max.',
    'file' => 'The :attribute may not be greater than :max kilobytes.',
    'string' => 'The :attribute may not be greater than :max characters.',
    'array' => 'The :attribute may not have more than :max items.',
  ],
  'mimes' => 'The :attribute must be a file of type: :values.',
  'mimetypes' => 'The :attribute must be a file of type: :values.',
  'min' => [
    'numeric' => 'The :attribute must be at least :min.',
    'file' => 'The :attribute must be at least :min kilobytes.',
    'string' => 'The :attribute must be at least :min characters.',
    'array' => 'The :attribute must have at least :min items.',
  ],
  'not_in' => 'The selected :attribute is invalid.',
  'not_regex' => 'The :attribute format is invalid.',
  'numeric' => 'خانة :attribute يجب أن تحوي رقماً.',
  'password' => 'كلمة المرور غير صحيحة.',
  'present' => 'The :attribute field must be present.',
  'regex' => 'The :attribute format is invalid.',
  'required' => 'The :attribute field is required',
  'required_if' => 'The :attribute field is required when :other is :value.',
  'required_unless' => 'The :attribute field is required unless :other is in :values.',
  'required_with' => 'The :attribute field is required when :values is present.',
  'required_with_all' => 'The :attribute field is required when :values are present.',
  'required_without' => 'The :attribute field is required when :values is not present.',
  'required_without_all' => 'The :attribute field is required when none of :values are present.',
  'same' => 'The :attribute and :other must match.',
  'size' => [
    'numeric' => 'The :attribute must be :size.',
    'file' => 'The :attribute must be :size kilobytes.',
    'string' => 'The :attribute must be :size characters.',
    'array' => 'The :attribute must contain :size items.',
  ],
  'starts_with' => 'The :attribute must start with one of the following: :values.',
  'string' => 'The :attribute must be a string.',
  'timezone' => 'The :attribute must be a valid zone.',
  'unique' => 'القيمة في خانة :attribute محجوزة بالفعل.',
  'uploaded' => 'The :attribute failed to upload.',
  'url' => 'The :attribute format is invalid.',
  'uuid' => 'The :attribute must be a valid UUID.',

  /*
  |--------------------------------------------------------------------------
  | Custom Validation Language Lines
  |--------------------------------------------------------------------------
  |
  | Here you may specify custom validation messages for attributes using the
  | convention "attribute.rule" to name the lines. This makes it quick to
  | specify a specific custom language line for a given attribute rule.
  |
  */

  'custom' => [
    'attribute-name' => [
      'rule-name' => 'custom-message',
    ],
  ],

  /*
  |--------------------------------------------------------------------------
  | Custom Validation Attributes
  |--------------------------------------------------------------------------
  |
  | The following language lines are used to swap our attribute placeholder
  | with something more reader friendly such as "E-Mail Address" instead
  | of "email". This simply helps us make our message more expressive.
  |
  */

  'attributes' => [],

];
