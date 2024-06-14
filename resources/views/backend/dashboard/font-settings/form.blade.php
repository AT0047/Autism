<!-- resources/views/backend/font-settings/form.blade.php -->

@extends('backend.dashboard.dashboard')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ isset($fontSetting) ? 'Edit Font Settings' : 'Create Font Settings' }}</div>
                <div class="card-body">
                    @if (isset($fontSetting))
                        <form action="{{ route('font-settings.update', $fontSetting->id) }}" method="POST">
                            @method('PUT')
                    @else
                        <form action="{{ route('font-settings.store') }}" method="POST">
                    @endif
                        @csrf

                        <div class="form-group">
                            <label for="ar_font_family">Arabic Font Family</label>
                            <select class="form-control" id="ar_font_family" name="ar_font_family" required>
                                <option value="" disabled>Select Arabic Font Family</option>
                                <option value="Amiri" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'Amiri' ? 'selected' : '') }}>Amiri</option>
                                <option value="Cairo" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'Cairo' ? 'selected' : '') }}>Cairo</option>
                                <option value="Harmattan" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'Harmattan' ? 'selected' : '') }}>Harmattan</option>
                                <option value="Lateef" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'Lateef' ? 'selected' : '') }}>Lateef</option>
                                <option value="Scheherazade" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'Scheherazade' ? 'selected' : '') }}>Scheherazade</option>
                                <option value="Noto Naskh Arabic" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'Noto Naskh Arabic' ? 'selected' : '') }}>Noto Naskh Arabic</option>
                                <option value="Droid Arabic Naskh" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'Droid Arabic Naskh' ? 'selected' : '') }}>Droid Arabic Naskh</option>
                                <option value="Almarai" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'Almarai' ? 'selected' : '') }}>Almarai</option>
                                <option value="Katibeh" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'Katibeh' ? 'selected' : '') }}>Katibeh</option>
                                <option value="Simplified Arabic" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'Simplified Arabic' ? 'selected' : '') }}>Simplified Arabic</option>
                                <option value="Traditional Arabic" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'Traditional Arabic' ? 'selected' : '') }}>Traditional Arabic</option>
                                <option value="Droid Arabic Kufi" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'Droid Arabic Kufi' ? 'selected' : '') }}>Droid Arabic Kufi</option>
                                <option value="El Messiri" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'El Messiri' ? 'selected' : '') }}>El Messiri</option>
                                <option value="KFGQPC Uthman Taha Naskh" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'KFGQPC Uthman Taha Naskh' ? 'selected' : '') }}>KFGQPC Uthman Taha Naskh</option>
                                <option value="Mada" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'Mada' ? 'selected' : '') }}>Mada</option>
                                <option value="Markazi Text" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'Markazi Text' ? 'selected' : '') }}>Markazi Text</option>
                                <option value="Mirza" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'Mirza' ? 'selected' : '') }}>Mirza</option>
                                <option value="Tajawal" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'Tajawal' ? 'selected' : '') }}>Tajawal</option>
                                <option value="TPTQ Arabic" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'TPTQ Arabic' ? 'selected' : '') }}>TPTQ Arabic</option>
                                <option value="Mukta Mahee" {{ old('ar_font_family', isset($fontSetting) && $fontSetting->ar_font_family == 'Mukta Mahee' ? 'selected' : '') }}>Mukta Mahee</option>
                            </select>
                            @error('ar_font_family')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="ar_font_size">Arabic Font Size (px)</label>
                            <input type="number" class="form-control" id="ar_font_size" name="ar_font_size" value="{{ old('ar_font_size', isset($fontSetting) ? $fontSetting->ar_font_size : '') }}" required>
                            @error('ar_font_size')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="en_font_family">English Font Family</label>
                            <select class="form-control" id="en_font_family" name="en_font_family" required>
                                <option value="" disabled>Select English Font Family</option>
                                <option value="Roboto" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Roboto' ? 'selected' : '') }}>Roboto</option>
                                <option value="Open Sans" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Open Sans' ? 'selected' : '') }}>Open Sans</option>
                                <option value="Montserrat" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Montserrat' ? 'selected' : '') }}>Montserrat</option>
                                <option value="Lato" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Lato' ? 'selected' : '') }}>Lato</option>
                                <option value="Noto Sans" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Noto Sans' ? 'selected' : '') }}>Noto Sans</option>
                                <option value="Arial" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Arial' ? 'selected' : '') }}>Arial</option>
                                <option value="Helvetica" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Helvetica' ? 'selected' : '') }}>Helvetica</option>
                                <option value="Times New Roman" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Times New Roman' ? 'selected' : '') }}>Times New Roman</option>
                                <option value="Georgia" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Georgia' ? 'selected' : '') }}>Georgia</option>
                                <option value="Verdana" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Verdana' ? 'selected' : '') }}>Verdana</option>
                                <option value="Courier New" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Courier New' ? 'selected' : '') }}>Courier New</option>
                                <option value="Tahoma" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Tahoma' ? 'selected' : '') }}>Tahoma</option>
                                <option value="Calibri" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Calibri' ? 'selected' : '') }}>Calibri</option>
                                <option value="Candara" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Candara' ? 'selected' : '') }}>Candara</option>
                                <option value="Arial Narrow" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Arial Narrow' ? 'selected' : '') }}>Arial Narrow</option>
                                <option value="Century Gothic" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Century Gothic' ? 'selected' : '') }}>Century Gothic</option>
                                <option value="Garamond" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Garamond' ? 'selected' : '') }}>Garamond</option>
                                <option value="Book Antiqua" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Book Antiqua' ? 'selected' : '') }}>Book Antiqua</option>
                                <option value="Franklin Gothic Medium" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Franklin Gothic Medium' ? 'selected' : '') }}>Franklin Gothic Medium</option>
                                <option value="Palatino Linotype" {{ old('en_font_family', isset($fontSetting) && $fontSetting->en_font_family == 'Palatino Linotype' ? 'selected' : '') }}>Palatino Linotype</option>
                            </select>
                            @error('en_font_family')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="en_font_size">English Font Size (px)</label>
                            <input type="number" class="form-control" id="en_font_size" name="en_font_size" value="{{ old('en_font_size', isset($fontSetting) ? $fontSetting->en_font_size : '') }}" required>
                            @error('en_font_size')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">{{ isset($fontSetting) ? 'Update' : 'Create' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
