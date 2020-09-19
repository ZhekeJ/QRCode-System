<!-- Qrcode Id Field -->
<div class="form-group">
    {!! Form::label('qrcode_id', 'Product Name:') !!}
    <p> <a href="/qrcode/{{ $transaction->qrcode['product_name'] }}"></a>
       <b> {{ $transaction->qrcode['product_name'] }}</b></p>
</div>
<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $transaction->amount }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Customer Name:')  !!}
    <p>{{ $transaction->user['name'] }} | {{ $transaction->user['email'] }} </p>
</div>

<!-- Qrcode Owner Id Field -->
<div class="form-group">
    {!! Form::label('qrcode_owner_id', 'Qrcode Owner Name:') !!}
    <p>{{ $transaction->qrcode_owner_id }}</p>
</div>


<!-- Payment Method Field -->
<div class="form-group">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    <p>{{ $transaction->payment_method }}</p>
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Message:') !!}
    <p>{{ $transaction->message }}</p>
</div>


<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $transaction->status }}</p>
</div>

