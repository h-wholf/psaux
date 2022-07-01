require 'stripe'
require 'sinatra'

# This is your test secret API key.
Stripe.api_key = 'sk_test_51LGqvFEN8bL9PicTwIKcuEpGGe61tslOzF5FGYLGmDcx9t4Eci9STs0yTPVx4oPwrZjYkGu54dJOQFx3KuPUoGwk00Kb79scpA'

set :static, true
set :port, 4242

YOUR_DOMAIN = 'http://3.19.232.196/verde2/psaux/'

post '/create-checkout-session' do
  content_type 'application/json'

  session = Stripe::Checkout::Session.create({
    line_items: [{
      # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
      price: '{{PRICE_ID}}',
      quantity: 1,
    }],
    mode: 'payment',
  })
  redirect session.url, 303
end