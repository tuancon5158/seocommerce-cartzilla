<!-- CONTENT -->
<section id="payment-successful" class="py-12">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">

        <!-- Icon -->
        <div class="mb-7 font-size-h1">❤️</div>

        <!-- Heading -->
        <h2 class="mb-5">Thank you for yor payment!</h2>
        <p>We've just sent you an order confirmation email. We will send you another email when your order is shipped.</p>

        <div class="text-center mb-6">
            <a href="<?php echo route('tracking'); ?>" class="btn btn-primary btn-lg btn-dark">Track Your Order</a>
        </div>

      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {

    const actions = new Vue({
        el: '#payment-successful',
        data() {
            return {
                store: window.$store
            }
        },
        created() {
            this.store.commit('resetCart');
        }
    })
})
</script>
