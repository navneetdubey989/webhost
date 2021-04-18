<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
      <script>
      var options = {
          "key": "rzp_test_EIUhDtvCd68fIz", // Enter the Key ID generated from the Dashboard
          "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
          "currency": "INR",
          "name": "Equipstat",
          "description": " Transaction",
          "image": "image/45.png",
          "handler": function (response){
              console.log(response);
          }
      };
      var rzp1 = new Razorpay(options);
      function myfunction(e){
          rzp1.open();
          e.preventDefault();
      }
      myfunction();
      </script>