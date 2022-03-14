@extends('layouts.app')
@section('title', 'Integration')
@section('content')

@include('pages.aside')

<main class="main">
    @php
    print($response);
    @endphp
</main>
@endsection
@section('script')
<script src="https://cdn.collect.africa/collect-widget.js"></script>
<script>
  const CollectCheckoutService = window.CollectCheckout;
  const checkout = new CollectCheckoutService({
    email: "sarwar.cse4@gmail.com",
    firstName: "Sarwar",
    lastName: "Hossain",
    reference: uuidv4(),
    amount: 10000,
    currency: "NGN",
    publicKey: "pk_sandbox_cns4c5sa8m59m8svyqhu",
    onSuccess(e) {
      console.log("success callback.", e);

    },
    onClose(e) {
      console.log("closed the widget.", e);
    },
    onError(e){
        console.log("error: ", e);
    }
  });
  checkout.setup();
  checkout.open();

  function uuidv4() {
  return 'xxxxxxxx-xxxx-4xxx-yxxx'.replace(/[xy]/g, function(c) {
    var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
    return v.toString(16);
  });
}

</script>
@endsection
