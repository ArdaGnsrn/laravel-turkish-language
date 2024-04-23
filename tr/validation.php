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

    'accepted' => ':attribute alanının kabul edilmesi gerekiyor.',
    'accepted_if' => ':other :value olduğunda :attribute alanının kabul edilmesi gerekiyor.',
    'active_url' => ':attribute alanı geçerli bir URL olmalıdır.',
    'after' => ':attribute alanı :date tarihinden sonraki bir tarih olmalıdır.',
    'after_or_equal' => ':attribute alanı :date tarihinden sonraki veya ona eşit bir tarih olmalıdır.',
    'alpha' => ':attribute alanı yalnızca harflerden oluşmalıdır.',
    'alpha_dash' => ':attribute alanı yalnızca harf, rakam, tire ve alt çizgi içermelidir.',
    'alpha_num' => ':attribute alanı yalnızca harf ve rakamlardan oluşmalıdır.',
    'array' => ':attribute alanı bir dizi olmalıdır.',
    'ascii' => ':attribute alanı yalnızca tek baytlık alfasayısal karakterler ve semboller içermelidir.',
    'before' => ':attribute alanı :date tarihinden önceki bir tarih olmalıdır.',
    'before_or_equal' => ':attribute alanı :date tarihinden önceki veya ona eşit bir tarih olmalıdır.',
    'between' => [
        'array' => ':attribute alanı :min ile :max öğe arasında içermelidir.',
        'file' => ':attribute alanı :min ile :max kilobayt arasında olmalıdır.',
        'numeric' => ':attribute alanı :min ile :max arasında olmalıdır.',
        'string' => ':attribute alanı :min ile :max karakter arasında olmalıdır.',
    ],
    'boolean' => ':attribute alanı doğru veya yanlış olmalıdır.',
    'can' => ':attribute alanı yetkisiz bir değer içerir.',
    'confirmed' => ':attribute alanı onayı eşleşmiyor.',
    'current_password' => 'Şifre yanlış.',
    'date' => ':attribute alanı geçerli bir tarih olmalıdır.',
    'date_equals' => ':attribute alanı :date tarihine eşit bir tarih olmalıdır.',
    'date_format' => ':attribute alanı :format biçimiyle eşleşmelidir.',
    'decimal' => ':attribute alanı :decimal ondalık basamak içermelidir.',
    'declined' => ':attribute alanı reddedilmelidir.',
    'declined_if' => ':other :value olduğunda :attribute alanı reddedilmelidir.',
    'different' => ':attribute alanı ve :other farklı olmalıdır.',
    'digits' => ':attribute alanı :digits basamak olmalıdır.',
    'digits_between' => ':attribute alanı :min ile :max basamak arasında olmalıdır.',
    'dimensions' => ':attribute alanı geçersiz resim boyutlarına sahiptir.',
    'distinct' => ':attribute alanı yinelenen bir değere sahiptir.',
    'doesnt_end_with' => ':attribute alanı şu karakterlerden biriyle bitmemelidir: :values.',
    'doesnt_start_with' => ':attribute alanı şu karakterlerden biriyle başlamamalıdır: :values.',
    'email' => ':attribute alanı geçerli bir e-posta adresi olmalıdır.',
    'ends_with' => ':attribute alanı şu karakterlerden biriyle bitmelidir: :values.',
    'enum' => 'Seçilen :attribute geçersizdir.',
    'exists' => 'Seçilen :attribute geçersizdir.',
    'extensions' => ':attribute alanı şu uzantılardan birine sahip olmalıdır: :values.',
    'file' => ':attribute alanı bir dosya olmalıdır.',
    'filled' => ':attribute alanı bir değere sahip olmalıdır.',
    'gt' => [
        'array' => ':attribute alanı :value öğeden fazla olmalıdır.',
        'file' => ':attribute alanı :value kilobayttan büyük olmalıdır.',
        'numeric' => ':attribute alanı :value’dan büyük olmalıdır.',
        'string' => ':attribute alanı :value karakterden büyük olmalıdır.',
    ],
    'gte' => [
        'array' => ':attribute alanı :value öğe veya daha fazla olmalıdır.',
        'file' => ':attribute alanı :value kilobayttan büyük veya ona eşit olmalıdır.',
        'numeric' => ':attribute alanı :value’dan büyük veya ona eşit olmalıdır.',
        'string' => ':attribute alanı :value karakterden büyük veya ona eşit olmalıdır.',
    ],
    'hex_color' => ':attribute alanı geçerli bir onaltılık renk olmalıdır.',
    'image' => ':attribute alanı bir resim olmalıdır.',
    'in' => 'Seçilen :attribute geçersizdir.',
    'in_array' => ':attribute alanı :other içinde bulunmalıdır.',
    'integer' => ':attribute alanı bir tamsayı olmalıdır.',
    'ip' => ':attribute alanı geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute alanı geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute alanı geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute alanı geçerli bir JSON dizesi olmalıdır.',
    'list' => ':attribute alanı bir liste olmalıdır.',
    'lowercase' => ':attribute alanı küçük harf olmalıdır.',
    'lt' => [
        'array' => ':attribute alanı :value öğeden daha az olmalıdır.',
        'file' => ':attribute alanı :value kilobayttan küçük olmalıdır.',
        'numeric' => ':attribute alanı :value’dan küçük olmalıdır.',
        'string' => ':attribute alanı :value karakterden küçük olmalıdır.',
    ],
    'lte' => [
        'array' => ':attribute alanı :value öğeden fazla olmamalıdır.',
        'file' => ':attribute alanı :value kilobayttan küçük veya eşit olmalıdır.',
        'numeric' => ':attribute alanı :value’dan küçük veya eşit olmalıdır.',
        'string' => ':attribute alanı :value karakterden küçük veya eşit olmalıdır.',
    ],
    'mac_address' => ':attribute alanı geçerli bir MAC adresi olmalıdır.',
    'max' => [
        'array' => ':attribute alanı :max öğeden fazla olmamalıdır.',
        'file' => ':attribute alanı :max kilobayttan fazla olmamalıdır.',
        'numeric' => ':attribute alanı :max’dan fazla olmamalıdır.',
        'string' => ':attribute alanı :max karakterden fazla olmamalıdır.',
    ],
    'max_digits' => ':attribute alanı :max basamaktan fazla olmamalıdır.',
    'mimes' => ':attribute alanı şu dosya türlerinden biri olmalıdır: :values.',
    'mimetypes' => ':attribute alanı şu dosya türlerinden biri olmalıdır: :values.',
    'min' => [
        'array' => ':attribute alanı en az :min öğe içermelidir.',
        'file' => ':attribute alanı en az :min kilobayt olmalıdır.',
        'numeric' => ':attribute alanı en az :min olmalıdır.',
        'string' => ':attribute alanı en az :min karakter olmalıdır.',
    ],
    'min_digits' => ':attribute alanı en az :min basamak içermelidir.',
    'missing' => ':attribute alanı eksik olmalıdır.',
    'missing_if' => ':other :value olduğunda :attribute alanı eksik olmalıdır.',
    'missing_unless' => ':other :value olmadığı sürece :attribute alanı eksik olmalıdır.',
    'missing_with' => ':values mevcut olduğunda :attribute alanı eksik olmalıdır.',
    'missing_with_all' => ':values mevcut olduğunda :attribute alanı eksik olmalıdır.',
    'multiple_of' => ':attribute alanı :value’nın katı olmalıdır.',
    'not_in' => 'Seçilen :attribute geçersizdir.',
    'not_regex' => ':attribute alanının biçimi geçersizdir.',
    'numeric' => ':attribute alanı bir sayı olmalıdır.',
    'password' => [
        'letters' => ':attribute alanı en az bir harf içermelidir.',
        'mixed' => ':attribute alanı en az bir büyük ve bir küçük harf içermelidir.',
        'numbers' => ':attribute alanı en az bir sayı içermelidir.',
        'symbols' => ':attribute alanı en az bir sembol içermelidir.',
        'uncompromised' => 'Verilen :attribute bir veri sızıntısında yer aldı. Lütfen farklı bir :attribute seçin.',
    ],
    'present' => ':attribute alanı mevcut olmalıdır.',
    'present_if' => ':attribute alanı :other :value olduğunda mevcut olmalıdır.',
    'present_unless' => ':attribute alanı :other :value olmadığı sürece mevcut olmalıdır.',
    'present_with' => ':values mevcut olduğunda :attribute alanı mevcut olmalıdır.',
    'present_with_all' => ':values mevcut olduğunda :attribute alanı mevcut olmalıdır.',
    'prohibited' => ':attribute alanı yasaktır.',
    'prohibited_if' => ':other :value olduğunda :attribute alanı yasaktır.',
    'prohibited_unless' => ':attribute alanı :other :values içinde olmadıkça yasaktır.',
    'prohibits' => ':attribute alanı :other’ın mevcut olmasını yasaklar.',
    'regex' => ':attribute alanının biçimi geçersizdir.',
    'required' => ':attribute alanı gereklidir.',
    'required_array_keys' => ':attribute alanı şunlar için girdiler içermelidir: :values.',
    'required_if' => ':other :value olduğunda :attribute alanı gereklidir.',
    'required_if_accepted' => ':other kabul edildiğinde :attribute alanı gereklidir.',
    'required_unless' => ':attribute alanı :other :values içinde olmadıkça gereklidir.',
    'required_with' => ':values mevcut olduğunda :attribute alanı gereklidir.',
    'required_with_all' => ':values mevcut olduğunda :attribute alanı gereklidir.',
    'required_without' => ':values mevcut olmadığında :attribute alanı gereklidir.',
    'required_without_all' => ':values’nın hiçbiri mevcut olmadığında :attribute alanı gereklidir.',
    'same' => ':attribute alanı :other ile eşleşmelidir.',
    'size' => [
        'array' => ':attribute alanı :size öğe içermelidir.',
        'file' => ':attribute alanı :size kilobayt olmalıdır.',
        'numeric' => ':attribute alanı :size olmalıdır.',
        'string' => ':attribute alanı :size karakter olmalıdır.',
    ],
    'starts_with' => ':attribute alanı şu karakterlerden biriyle başlamalıdır: :values.',
    'string' => ':attribute alanı bir dize olmalıdır.',
    'timezone' => ':attribute alanı geçerli bir saat dilimi olmalıdır.',
    'unique' => ':attribute zaten alınmış.',
    'uploaded' => ':attribute yüklenemedi.',
    'uppercase' => ':attribute alanı büyük harf olmalıdır.',
    'url' => ':attribute alanı geçerli bir URL olmalıdır.',
    'ulid' => ':attribute alanı geçerli bir ULID olmalıdır.',
    'uuid' => ':attribute alanı geçerli bir UUID olmalıdır.',

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
