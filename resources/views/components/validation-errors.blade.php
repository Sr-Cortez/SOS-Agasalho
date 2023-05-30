@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">{{ __('Opa! Algo deu errado.') }}</div>

        <ul class="mt-1 list-disc list-inside text-sm text-red-600" style="font-size:13.5px;list-style: none;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
