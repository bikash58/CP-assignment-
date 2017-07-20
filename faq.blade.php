@extends('layouts.store_front')

@section('content')

<div class="container-fluid margin-zero">
	<div class="row no-gutter-row">
		<div class="col-md-12 no-gutter-col">
			<p class="color-primary">home > speakers</p>
		</div>
	</div>
</div>
	
<div class="container-fluid margin-zero">
	<div class="row no-gutter-row">
		<div class="col-md-3 no-gutter-col">
			@include('layouts.store_front.sidebar')
		</div>
		<div class="col-md-9 no-gutter-col">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong>Customer Service at your figertips.</strong>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
							<p class="bold">Any question about our customer service or ordering policies? Please consult our frequently asked question down below or contact our service department.</p>

							<p class="bold">Availability of Customer Service: Available Sunday to Friday (10:00 am to 6:00 pm). Call us at 016-20322</p>

							<p><span class="bold">E-mail:</span> Send your queries to us at nepalbestdeal@gmail.com. Queries will be addressed within 24 hours of receipt. Note that for security reason, we actively discourage placing an order via e-mail.</p>
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
									<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
									How do I select items to purchase?</a>
									</h4>
									</div>
									<div id="collapse1" class="panel-collapse collapse in">
									<div class="panel-body">As you browse through products, click on add to cartbutton to add the items to your cart.</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
									<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
									How do I know what is in my shopping cart?</a>
									</h4>
									</div>
									<div id="collapse2" class="panel-collapse collapse">
									<div class="panel-body">
										<p>Hover over the “Shopping Cart” icon on the top right corner of the page to view a drop down list of items you have added or you can click the icon to open the cart page to view your items in detail.</p>
									</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
									<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
									How do I remove an item from my shopping cart?</a>
									</h4>
									</div>
									<div id="collapse3" class="panel-collapse collapse">
									<div class="panel-body">
										<p>To remove items from your cart, hover over the “Shopping Cart” icon to view a drop down list of items. Click ‘x’ beside the items you want to remove.</p>
									</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
									<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
									How do I modify the quantity of a product in my shopping cart?</a>
									</h4>
									</div>
									<div id="collapse4" class="panel-collapse collapse">
									<div class="panel-body">
										<p>Click on “Shopping Cart” icon on the top right corner to see an itemized list of the products in your shopping cart. Change the quantity of the items with the plus and minus sign provided in the ‘Quantity’ column.</p>
									</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
									<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
									How do I checkout/place order?</a>
									</h4>
									</div>
									<div id="collapse5" class="panel-collapse collapse">
									<div class="panel-body">
										<p>Hover over the “Shopping cart” button on the top right corner to view the checkout button.</p>
									</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
									<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
									How do I pay for my products?</a>
									</h4>
									</div>
									<div id="collapse6" class="panel-collapse collapse">
									<div class="panel-body">
										<p>We accept Cash on Delivery, Western Union. In some cases, if you wish to pay by another method, simply submit your request via email: nepalbestdeal@gmail.com, and we will contact you to make arrangements for payment.</p>

										<p>We’ll adding more payment methods in the future to simplify your shopping.</p>
									</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
									<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
									How do I know that Nepal Best Deal has received my order?</a>
									</h4>
									</div>
									<div id="collapse7" class="panel-collapse collapse">
									<div class="panel-body">
										<p>Our ordering system will automatically send you an email confirming that your order was successfully placed. Please make sure that the email address and the contact number you provide is correct. Upon processing, we will send you an additional email message confirming your order with shipping charge calculated, and a shipping order number for tracking.</p>
									</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
									<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
									What is NBD’s return policy and who do I contact regarding returns?</a>
									</h4>
									</div>
									<div id="collapse8" class="panel-collapse collapse">
									<div class="panel-body">
										<p>If for some reason you need to return an item, please inform us whole detail about product before 38 hours of purchase. For detail information, you can contact our service department on 016-20322.</p>
									</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
									<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
									How safe is my information?</a>
									</h4>
									</div>
									<div id="collapse9" class="panel-collapse collapse">
									<div class="panel-body">
										<p>Your information is kept safe at Nepal Best Deal and we take data security as a serious issue. We do not share customer information with other third parties.</p>
									</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
									<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
									Why was my package not deliverd?</a>
									</h4>
									</div>
									<div id="collapse10" class="panel-collapse collapse">
									<div class="panel-body">
										<p>
											<ul class="margin-left">
												<li>Incorrect Address/Contact info: If the address/contact info is incorrect or outdated, the package is typically returned by the carrier or the unintended recipient. Please double-check all your info carefully when placing a new order.</li>
												<li>Illegible Shipping Label. In rare cases, it is possible that the address label became illegible during the shipping and handling process.</li>
												<li>Failed Delivery Attempts. Most of our carriers make three attempts to deliver a package. If after three attempts the carrier determines that the package is undeliverable, the package will be returned to Nepal Best Deal.</li>
												<li>&middot; Refused by Recipient. If the recipient of the package refuses delivery, the package will be returned to us and determined undeliverable.</li>
											</ul>
										</p>
									</div>
									</div>
								</div>
									
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection