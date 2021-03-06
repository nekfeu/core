<div class="form-group">
  {!! Form::label("ad_descr_min", trans("backend.setting.ad_descr_min"), ['class' => 'col-sm-2 control-label label-text']) !!}
  <div class="col-sm-10">
  {!! Form::text("ad_descr_min", null, ['class' => 'form-control']) !!}
  <p class="note">{!! trans('backend.setting.ad_descr_min_help') !!}</p>
  </div>
</div>
<div class="form-group">
  {!! Form::label("ad_descr_max", trans("backend.setting.ad_descr_max"), ['class' => 'col-sm-2 control-label label-text']) !!}
  <div class="col-sm-10">
  {!! Form::text("ad_descr_max", null, ['class' => 'form-control']) !!}
  <p class="note">{!! trans('backend.setting.ad_descr_max_help') !!}</p>
  </div>
</div>
<div class="form-group">
  {!! Form::label("currency", trans("backend.setting.default_ad_currency"), ['class' => 'col-sm-2 control-label label-text']) !!}
  <div class="col-sm-10">
    <select class="form-control select2" name="default_ad_currency">
    @foreach ($currencies as $currency)
    <option @if ($currency == $setting->default_ad_currency) selected @endif value="{{ $currency }}"> {{ $currency }} </option>
    @endforeach
    </select>
    <p class="note">{!! trans('backend.setting.default_ad_currency_help') !!}</p>
  </div>
</div>
