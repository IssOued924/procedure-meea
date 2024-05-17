@props(['disabled' => false])

{{-- <input  {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-success   item-align-center   rounded-md']) !!}> --}}
<input style="margin-top: 0 !important;     margin-inline: auto;  /* width:50%; height:20%; */ padding-top: 2px !important; padding-bottom: 1px !important;" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-success border-gray-300  dark:border-gray-700']) !!}>
{{-- <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password" style="    float: right;
margin-left: -25px;
margin-top: -25px;
position: relative;
z-index: 2;
cursor: pointer;
color: #060;
}"></span> --}}
<img src="{{asset('img/eye.png')}}" width="6%" height="6%"
                     style="display: inline;margin-left: -1.5%;vertical-align: middle;float: right; margin-left: -25px;margin-top: -25px;
                     position: relative;z-index: 2; cursor: pointer; color: #060;"
                     id="togglePassword">