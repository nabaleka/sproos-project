@extends('layouts.theme')
@section('content')
      <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Help / FAQ</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="/">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Help / FAQ</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x">
        <div class="row">
          <!-- Side Menu-->
          <div class="col-lg-3 col-md-4">
            <nav class="list-group"><a class="list-group-item active" href="#">Most Popular Questions</a><a class="list-group-item" href="#">Managing Account</a><a class="list-group-item" href="#">Working With Dashboard</a><a class="list-group-item" href="#">Available Payment Methods</a><a class="list-group-item" href="#">Delivery Information</a><a class="list-group-item" href="#">Order Tracking Instructions</a><a class="list-group-item" href="#">Refund Policy</a><a class="list-group-item" href="#">Offers And Discounts</a><a class="list-group-item" href="#">Reward Points</a><a class="list-group-item" href="#">Affiliate Program</a><a class="list-group-item" href="#">Service Terms &amp; Conditions</a></nav>
            <div class="padding-bottom-3x hidden-md-up"></div>
          </div>
          <!-- Content-->
          <div class="col-lg-9 col-md-8">
            <div class="accordion" id="accordion" role="tablist">
              <div class="card">
                  <div class="card-header" role="tab">
                    <h6><a href="#collapseOne" data-toggle="collapse" data-parent="#accordion"> Do I need an account to shop on Sproos?</a></h6>
                  </div>
                  <div class="collapse show" id="collapseOne" role="tabpanel">
                    <div class="card-block">
                      <p> You do not need an account to shop on Sproos, however you do need an account sell on Sproos.</p>
                    </div>
                  </div>
                </div>

              <div class="card">
                <div class="card-header" role="tab">
                  <h6><a class="collapsed" href="#collapseTwo" data-toggle="collapse" data-parent="#accordion">	How do I place an order?</a></h6>
                </div>
                <div class="collapse" id="collapseTwo" role="tabpanel">
                  <div class="card-block">Shopping on Sproos is easy! Once you have found the product you want to buy, just follow the steps -below:
<ul>
<li>	Add the product to your cart,</li>
<li>	Click on'cart' in the top right corner,</li>
<li>	Register/Login into your account by entering your email and password,</li>
<li>	Enter your shipping/billing information,</li>
<li>	Choose your preferred payment option,</li>
<li>	Click on 'Confirm order' to proceed to the payment portal and complete your order.</li>
</ul>
Once your order is placed, we will either automatically confirm it by notifying you via email, or we will call    you for confirmation in case we need more details. Please note that this confirmation is a mandatory step before we ship your order. In case you have a doubt about whether the confirmation was done or not, do not hesitate to contact our Customer Service Call Center at 0715-725 418/sproosplace@gmail.com a few hours after your order placement.</a>
</div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab">
                  <h6><a class="collapsed" href="#collapseThree" data-toggle="collapse" data-parent="#accordion">How do I pay on Sproos?</a></h6>
                </div>
                <div class="collapse" id="collapseThree" role="tabpanel">
                  <div class="card-block">You can choose from the different payment methods available on Sproos. Please find below the list of available payment methods:
<ul>
<li>Cash On Delivery (easy and simple at your doorstep)</li>
<li>	Credit/Debit Card</li>
<li>Mobile Money</li>
</ul>
You can find the payment methods during the final step of checkout in detail. Do not hesitate to contact our Customer Service for more information.
</div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab">
                  <h6><a class="collapsed" href="#collapseFour" data-toggle="collapse" data-parent="#accordion">Are there any hidden costs or charges if I order from Sproos</a></h6>
                </div>
                <div class="collapse" id="collapseFour" role="tabpanel">
                  <div class="card-block">There are no hidden costs or charges when you order from Sproos. All costs are 100% visible at the end of the checkout process.</div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab">
                  <h6><a class="collapsed" href="#collapseFive" data-toggle="collapse" data-parent="#accordion">How can I track my order?</a></h6>
                </div>
                <div class="collapse" id="collapseFive" role="tabpanel">
                  <div class="card-block">Once you place your order and have any questions on the delivery, contact our customer service team via telephone (0715) 725 418 or email: sproosplace@gmail.com</div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab">
                  <h6><a class="collapsed" href="#collapseSix" data-toggle="collapse" data-parent="#accordion">Are the prices on Sproos negotiable?</a></h6>
                </div>
                <div class="collapse" id="collapseSix" role="tabpanel">
                  <div class="card-block">Prices on Sproos are not negotiable. Sproos has thousands of sellers which offer you the best prices and deals.</div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab">
                  <h6><a class="collapsed" href="#collapseSeven" data-toggle="collapse" data-parent="#accordion">Are all products on Sproos new and unused?</a></h6>
                </div>
                <div class="collapse" id="collapseSeven" role="tabpanel">
                  <div class="card-block">No Sproos offers a wide selection of both new and second hand items.</div>
                </div>
              </div>
            
            <div class="card">
                <div class="card-header" role="tab">
                  <h6><a class="collapsed" href="#collaps8" data-toggle="collapse" data-parent="#accordion">Why do I see different prices for the same product?</a></h6>
                </div>
                <div class="collapse" id="collapse8" role="tabpanel">
                  <div class="card-block">Our products are offered by different sellers. This allows you to choose your preferred offer. If a product is sold by different sellers, you will find the alternative prices of other sellers in the product page.</div>
                </div>
              
            </div>
            <div class="card">
                <div class="card-header" role="tab">
                  <h6><a class="collapsed" href="#collapse9" data-toggle="collapse" data-parent="#accordion">How do I know my order has been confirmed?</a></h6>
                </div>
                <div class="collapse" id="collapseSeven" role="tabpanel">
                  <div class="card-block">Once your order is placed, we will either automatically confirm it by notifying you via email, or we will call you for confirmation in case we need more details. Please note that this confirmation is a mandatory step before we ship your order. In case you have a doubt about whether the confirmation was done or not, do not hesitate to contact our Customer Service Call Center at 0715-725 418 sproosplace@gmail.com a few hours after your order placement.</div>
                </div>
              </div>
              <div>
          
            <div class="card">
                <div class="card-header" role="tab">
                  <h6><a class="collapsed" href="#collapse10" data-toggle="collapse" data-parent="#accordion">How do I cancel my order?</a></h6>
                </div>
                <div class="collapse" id="collapse10" role="tabpanel">
                  <div class="card-block">If you have not already received the email information that your order was shipped, you can simply cancel your order by getting in touch with our Customer Service Center.
If your order has already been shipped you will not be able to cancel it, but be able to return it (Check out our Return Policy for detailed information. CLICK HERE.
</div>
                </div>
              </div>
            
            <div class="card">
                <div class="card-header" role="tab">
                  <h6><a class="collapsed" href="#collapse11" data-toggle="collapse" data-parent="#accordion">What is cash on delivery?</a></h6>
                </div>
                <div class="collapse" id="collapse11" role="tabpanel">
                  <div class="card-block">You can pay Cash On Delivery to the delivery agent upon receipt of your order.
Note: Gift cards or vouchers cannot be used to make CoD payments.
</div>
                </div>
             
            </div>
            <div class="card">
                <div class="card-header" role="tab">
                  <h6><a class="collapsed" href="#collaps12" data-toggle="collapse" data-parent="#accordion">How do I return a product?</a></h6>
                </div>
                <div class="collapse" id="collapse12" role="tabpanel">
                  <div class="card-block">Do you need to return a product? Check our Returns & Refunds Policy.</div>
                </div>
             
            </div>
            <div class="card">
                <div class="card-header" role="tab">
                  <h6><a class="collapsed" href="#collapse13" data-toggle="collapse" data-parent="#accordion">How much time do I have to return a product on Sproos?</a></h6>
                </div>
                <div class="collapse" id="collapse13" role="tabpanel">
                  <div class="card-block">All items purchased on Sproos for return need to be reported within 48hours of receiving the product. The products need to be returned within a period of 7 days from delivery date.
Please note: Once product is received you have to notify us within 48hours by calling our Customer Service or by emailing us a completed return form which can be downloaded CLICK HERE.
Past this time window, unfortunately we cannot accept returns. 
</div>
                </div>
              
            </div>
            <div class="card">
                <div class="card-header" role="tab">
                  <h6><a class="collapsed" href="#collapse14" data-toggle="collapse" data-parent="#accordion">If I am receiving a refund, how do I get my reimbursement?</a></h6>
                </div>
                <div class="collapse" id="collapse14" role="tabpanel">
                  <div class="card-block">Refund process begins after we received your complaint within 48hours of delivery.
You can choose any of the refund methods below, depending on the payment method utilized when placing the order.
                Refund methods available according to payment methods.
</div>
                
                </div>
              </div>
            </div>
            <h3 class="padding-top-2x">Haven't found the answer? Ask us.</h3>
            <p class="text-muted mb-30">We normally respond within 2 business days. Most popular questions will appear on this page.</p>
            <form class="row" method="post" action="{{route('contact_store')}}">
              <input type="hidden" name="_token" value= "{{csrf_token()}}">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="help_name">Your Name</label>
                  <input class="form-control form-control-rounded" type="text" name="your_name" id="help_name" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="help_email">Your Email</label>
                  <input class="form-control form-control-rounded" name="your_email"
                  type="email" id="help_email" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="help_subject">Subject</label>
                  <input class="form-control form-control-rounded" name="your_subject" type="text" id="help_subject" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="help_category">Category</label>
                  <select class="form-control form-control-rounded" id="help_category" name="your_category">
                    <option>Account Management</option>
                    <option>Refund Policy</option>
                    <option>Payment Procedure</option>
                    <option>Shipping Info</option>
                    <option>Referral Program</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="help_question">Question </label>
                  <textarea class="form-control form-control-rounded" name="your_question" id="help_question" rows="8" required></textarea>
                </div>
              </div>
              <div class="col-12 text-right">
                <button class="btn btn-outline-primary" type="submit">Submit Question</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
@endsection
