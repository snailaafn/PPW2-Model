<?php

return [

    'accepted'             => 'Isian :attribute harus diterima.',
    'active_url'           => 'Isian :attribute bukan URL yang valid.',
    'after'                => 'Isian :attribute harus tanggal setelah :date.',
    'after_or_equal'       => 'Isian :attribute harus berupa tanggal setelah atau sama dengan :date.',
    'alpha'                => 'Isian :attribute hanya boleh berisi huruf.',
    'alpha_dash'           => 'Isian :attribute hanya boleh berisi huruf, angka, dan strip.',
    'alpha_num'            => 'Isian :attribute hanya boleh berisi huruf dan angka.',
    'array'                => 'Isian :attribute harus berupa array.',
    'before'               => 'Isian :attribute harus berupa tanggal sebelum :date.',
    'before_or_equal'      => 'Isian :attribute harus berupa tanggal sebelum atau sama dengan :date.',
    'between'              => [
        'numeric' => 'Isian :attribute harus antara :min dan :max.',
        'file'    => 'Isian :attribute harus antara :min dan :max kilobytes.',
        'string'  => 'Isian :attribute harus antara :min dan :max karakter.',
        'array'   => 'Isian :attribute harus memiliki antara :min dan :max item.',
    ],
    'boolean'              => 'Isian :attribute harus berupa true atau false.',
    'confirmed'            => 'Konfirmasi :attribute tidak cocok.',
    'date'                 => 'Isian :attribute bukan tanggal yang valid.',
    'date_format'          => 'Isian :attribute tidak cocok dengan format :format.',
    'different'            => 'Isian :attribute dan :other harus berbeda.',
    'digits'               => 'Isian :attribute harus berupa :digits digit.',
    'digits_between'       => 'Isian :attribute harus antara :min dan :max digit.',
    'dimensions'           => 'Isian :attribute memiliki dimensi gambar yang tidak valid.',
    'distinct'             => 'Isian :attribute memiliki nilai duplikat.',
    'email'                => 'Isian :attribute harus berupa alamat email yang valid.',
    'exists'               => 'Isian :attribute yang dipilih tidak valid.',
    'file'                 => 'Isian :attribute harus berupa file.',
    'filled'               => 'Isian :attribute harus memiliki nilai.',
    'gt'                   => [
        'numeric' => 'Isian :attribute harus lebih besar dari :value.',
        'file'    => 'Isian :attribute harus lebih besar dari :value kilobytes.',
        'string'  => 'Isian :attribute harus lebih besar dari :value karakter.',
        'array'   => 'Isian :attribute harus memiliki lebih dari :value item.',
    ],
    'gte'                  => [
        'numeric' => 'Isian :attribute harus lebih besar atau sama dengan :value.',
        'file'    => 'Isian :attribute harus lebih besar atau sama dengan :value kilobytes.',
        'string'  => 'Isian :attribute harus lebih besar atau sama dengan :value karakter.',
        'array'   => 'Isian :attribute harus memiliki :value item atau lebih.',
    ],
    'image'                => 'Isian :attribute harus berupa gambar.',
    'in'                   => 'Isian :attribute yang dipilih tidak valid.',
    'in_array'             => 'Isian :attribute tidak ada di :other.',
    'integer'              => 'Isian :attribute harus berupa angka.',
    'ip'                   => 'Isian :attribute harus berupa alamat IP yang valid.',
    'ipv4'                 => 'Isian :attribute harus berupa alamat IPv4 yang valid.',
    'ipv6'                 => 'Isian :attribute harus berupa alamat IPv6 yang valid.',
    'json'                 => 'Isian :attribute harus berupa JSON string yang valid.',
    'lt'                   => [
        'numeric' => 'Isian :attribute harus kurang dari :value.',
        'file'    => 'Isian :attribute harus kurang dari :value kilobytes.',
        'string'  => 'Isian :attribute harus kurang dari :value karakter.',
        'array'   => 'Isian :attribute harus kurang dari :value item.',
    ],
    'lte'                  => [
        'numeric' => 'Isian :attribute harus kurang dari atau sama dengan :value.',
        'file'    => 'Isian :attribute harus kurang dari atau sama dengan :value kilobytes.',
        'string'  => 'Isian :attribute harus kurang dari atau sama dengan :value karakter.',
        'array'   => 'Isian :attribute tidak boleh lebih dari :value item.',
    ],
    'max'                  => [
        'numeric' => 'Isian :attribute tidak boleh lebih dari :max.',
        'file'    => 'Isian :attribute tidak boleh lebih dari :max kilobytes.',
        'string'  => 'Isian :attribute tidak boleh lebih dari :max karakter.',
        'array'   => 'Isian :attribute tidak boleh lebih dari :max item.',
    ],
    'mimes'                => 'Isian :attribute harus berupa file dengan tipe: :values.',
    'mimetypes'            => 'Isian :attribute harus berupa file dengan tipe: :values.',
    'min'                  => [
        'numeric' => 'Isian :attribute harus minimal :min.',
        'file'    => 'Isian :attribute harus minimal :min kilobytes.',
        'string'  => 'Isian :attribute harus minimal :min karakter.',
        'array'   => 'Isian :attribute harus memiliki minimal :min item.',
    ],
    'not_in'               => 'Isian :attribute yang dipilih tidak valid.',
    'not_regex'            => 'Format isian :attribute tidak valid.',
    'numeric'              => 'Isian :attribute harus berupa angka.',
    'password'             => 'Kata sandi tidak benar.',
    'present'              => 'Isian :attribute harus ada.',
    'regex'                => 'Format isian :attribute tidak valid.',
    'required'             => 'Isian :attribute wajib diisi.',
    'required_if'          => 'Isian :attribute wajib diisi jika :other adalah :value.',
    'required_unless'      => 'Isian :attribute wajib diisi kecuali :other ada di :values.',
    'required_with'        => 'Isian :attribute wajib diisi jika ada :values.',
    'required_with_all'    => 'Isian :attribute wajib diisi jika ada :values.',
    'required_without'     => 'Isian :attribute wajib diisi jika tidak ada :values.',
    'required_without_all' => 'Isian :attribute wajib diisi jika tidak ada satupun dari :values.',
    'same'                 => 'Isian :attribute dan :other harus sama.',
    'size'                 => [
        'numeric' => 'Isian :attribute harus berukuran :size.',
        'file'    => 'Isian :attribute harus berukuran :size kilobytes.',
        'string'  => 'Isian :attribute harus berukuran :size karakter.',
        'array'   => 'Isian :attribute harus mengandung :size item.',
    ],
    'starts_with'          => 'Isian :attribute harus dimulai dengan salah satu dari berikut: :values',
    'string'               => 'Isian :attribute harus berupa string.',
    'timezone'             => 'Isian :attribute harus berupa zona waktu yang valid.',
    'unique'               => 'Isian :attribute sudah ada sebelumnya.',
    'uploaded'             => 'Isian :attribute gagal diunggah.',
    'url'                  => 'Format isian :attribute tidak valid.',
    'uuid'                 => 'Isian :attribute harus berupa UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Baris Bahasa Kustom untuk Validasi Atribut
    |--------------------------------------------------------------------------
    |
    | Di sini kamu dapat menentukan pesan validasi kustom untuk atribut menggunakan
    | konvensi "attribute.rule" untuk menamai baris. Ini membuatnya cepat
    | menentukan baris bahasa kustom yang spesifik untuk aturan atribut tertentu.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'pesan-kustom',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Atribut Validasi Kustom
    |--------------------------------------------------------------------------
    |
    | Baris bahasa berikut digunakan untuk menukar placeholder atribut
    | dengan sesuatu yang lebih ramah pembaca seperti "Alamat Email"
    | sebagai ganti dari "email". Ini membantu membuat pesan lebih ekspresif.
    |
    */

    'attributes' => [],

];
