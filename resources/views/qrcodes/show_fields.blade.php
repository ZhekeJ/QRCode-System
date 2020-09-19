<div class="col-md-6">
<!-- Product Name Field -->
<div class="form-group">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{{ $qrcode->product_name }}</p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    {{ $qrcode->amount }}R
</div>
<!-- Product Url Field -->
<div class="form-group">
    {!! Form::label('product_url', 'Product Url:') !!}
    <p>
        <a href="{{ $qrcode->product_url }}" target="_blank">
        {{ $qrcode->product_url }}</a></p>
</div>

<!-- Company Name Field -->
<div class="form-group">
    {!! Form::label('company_name', 'Company Name:') !!}
    <p>{{ $qrcode->company_name }}</p>
</div>
<!-- Website Field -->
<div class="form-group">
    {!! Form::label('website', 'Website:') !!}
    <p>{{ $qrcode->website }}</p>
</div>

<hr/>
@if ($qrcode->user_id == Auth::user()->id || Auth::user()->role_id < 3)
    <!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Email:') !!}
    <p>{{ $qrcode->user_id }}</p>
</div>

<!-- Callback Url Field -->
<div class="form-group">
    {!! Form::label('callback_url', 'Callback Url:') !!}
    <p>{{ $qrcode->callback_url }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>@if ($qrcode->status == 1)
        Active

        @else
        Inactive
        @endif</p>
</div>
</div>
<div class="col-md-6 pull-right">
 <!-- Qrcode Path Field -->
<div class="form-group">
    {!! Form::label('qrcode_path', 'Scan and Pay:') !!}

<img src="{{asset( $qrcode->qrcode_path)}}">
</div>
</div>
@endif


