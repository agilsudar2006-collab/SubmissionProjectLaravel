@props(['tipe' => 'info'])

<div style="
    padding: 10px;
    margin: 10px 0;
    border: 1px solid;
    border-radius: 5px;
    color: {{ $tipe === 'bahaya' ? '#b91c1c' : ($tipe === 'sukses' ? '#166534' : '#1d4ed8') }};
">
    {{ $slot }}
</div>
