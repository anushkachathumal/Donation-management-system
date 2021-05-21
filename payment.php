ht


<div class="container">
    <div class="col-sm-6">
                        <div id="paypal-button-container">
                          <h3>Online Payment</h3>
                        <script>
                            paypal.Buttons({
                              createOrder: function(data, actions) {
                                return actions.order.create({
                                  purchase_units: [{
                                    amount: {
                            
                                      value: "<?php echo (round($dollar,2)); ?>"
                                
                                    }
                                  }]
                                });
                              },
                              onApprove: function(data, actions) {
                                return actions.order.capture().then(function(details) {
                                  alert('Transaction completed by ' + details.payer.name.given_name);
                                  // Call your server to save the transaction
                                  return fetch('/paypal-transaction-complete', {
                                    method: 'post',
                                    headers: {
                                      'content-type': 'application/json'
                                    },
                                    body: JSON.stringify({
                                      orderID: data.orderID
                                    })
                                  });
                                });
                              }
                            }).render('#paypal-button-container');
                          </script>
                           
                        </div> 


                    </div>
    </div>
