<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/index.css" />
    <title>POSTON.io | API channels</title>
  </head>
  <body>
    <div class="container-fluid px-lg-5 py-4">
      <div class="strip d-flex align-items-center">
        <h4 class="text-secondary">API channels</h4>
        <span class="text-secondary mx-3 mb-2">|</span>
        <i class="ri-home-smile-2-line text-secondary mb-1 me-2 fw-bold"></i>
        <span><i class="ri-arrow-right-s-line text-secondary"></i></span>
        <p class="text-primary m-0 p-0 ms-2">API channels</p>
      </div>

      <div class="buttons-part mt-3">
        <button>Payment APIs</button>
        <button>Social medias</button>
        <button>Email autoresponder</button>
        <button>Json API</button>
        <button>SMS API</button>
        <button>Email API</button>
        <button>Woocommerce</button>
        <button>Open AI</button>
      </div>

      <!-- payment account API -->
      <div class="payment-acc mt-4 bg-white p-3 rounded shadow">
        <h5 class="text-secondary m-0">Payment Account APIs</h5>
        <p class="text-secondary m-0 p-0 mt-1">
          Set up payment gateway to receive payments from subscribed users for
          using this platform.
        </p>

        <div class="row mt-5">
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/account">
              <img class="payment_img" src="{{asset('images/paypl.png')}}" alt="" />
              <p style="color: #555">Paypal</p>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/account">
              <img class="payment_img" src="./images/stripe.png" alt="" />
              <p style="color: #555">Stripe</p>
            </a>
          </div>

          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/account">
              <img class="payment_img" src="./images/mollie.png" alt="" />
              <p style="color: #555">Mollie</p>
            </a>
          </div>

          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/account">
              <img class="payment_img" src="./images/razorpay.png" alt="" />
              <p style="color: #555">Razorpay</p>
            </a>
          </div>

          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/account">
              <img class="payment_img" src="./images/paystack.png" alt="" />
              <p style="color: #555">Paystack</p>
            </a>
          </div>

          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/account">
              <img class="payment_img" src="./images/mercadopago.png" alt="" />
              <p style="color: #555">Mercadopago</p>
            </a>
          </div>
        </div>

        <div class="row mt-4">
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/account">
              <img class="payment_img" src="./images/sslcommerz.png" alt="" />
              <p style="color: #555">Sslcommerz</p>
            </a>
          </div>

          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/account">
              <img class="payment_img" src="./images/senangpay.png" alt="" />
              <p style="color: #555">Senangpay</p>
            </a>
          </div>

          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/account">
              <img class="payment_img" src="./images/instamojo.png" alt="" />
              <p style="color: #555">Instamojo</p>
            </a>
          </div>

          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/account">
              <img class="payment_img" src="./images/toyyibpay.png" alt="" />
              <p style="color: #555">Toyyibpay</p>
            </a>
          </div>

          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/account">
              <img class="payment_img" src="./images/xendit.png" alt="" />
              <p style="color: #555">Xendit</p>
            </a>
          </div>

          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/account">
              <img class="payment_img" src="./images/myfatoorah.png" alt="" />
              <p style="color: #555">Myfatoorah</p>
            </a>
          </div>
        </div>

        <div class="row mt-4">
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/account">
              <img class="payment_img" src="./images/paymaya.png" alt="" />
              <p style="color: #555">Paymaya</p>
            </a>
          </div>

          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/account">
              <img
                class="payment_img"
                src="./images/manualpayment.png"
                alt=""
              />
              <p style="color: #555">Manual</p>
            </a>
          </div>
        </div>
      </div>

      <!-- social media API -->
      <div class="social-media mt-4 bg-white p-3 rounded shadow">
        <h5 class="text-secondary m-0">Social Media</h5>
        <p class="text-secondary m-0 p-0 mt-1">
          Integrate different social media accounts to use bot, auto reply,
          social posting etc features.
        </p>

        <div class="row mt-5">
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center socialCloumn"
          >
            <img class="payment_img" src="./images/facebook.png" alt="" />
            <p style="color: #555">Facebook</p>
            <a href="{{url('/')}}/social">
              <div class="hover_part">
                <span class="mb-2 hover1"><i class="ri-plug-line"></i></span>
                <span class="hover2"
                  ><i class="ri-download-cloud-line"></i
                ></span>
              </div>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center socialCloumn"
          >
            <img class="payment_img" src="./images/twitter.png" alt="" />
            <p style="color: #555">Twitter</p>
            <a href="{{url('/')}}/social">
              <div class="hover_part">
                <span class="mb-2 hover1"><i class="ri-plug-line"></i></span>
                <span class="hover2"
                  ><i class="ri-download-cloud-line"></i
                ></span>
              </div>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center socialCloumn"
          >
            <img class="payment_img" src="./images/linkedin.png" alt="" />
            <p style="color: #555">Linkedin</p>
            <a href="{{url('/')}}/social">
              <div class="hover_part">
                <span class="mb-2 hover1"><i class="ri-plug-line"></i></span>
                <span class="hover2"
                  ><i class="ri-download-cloud-line"></i
                ></span>
              </div>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center socialCloumn"
          >
            <img class="payment_img" src="./images/medium.png" alt="" />
            <p style="color: #555">Medium</p>
            <a href="{{url('/')}}/social">
              <div class="hover_part">
                <span class="mb-2 hover1"><i class="ri-plug-line"></i></span>
                <span class="hover2"
                  ><i class="ri-download-cloud-line"></i
                ></span>
              </div>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center socialCloumn"
          >
            <img class="payment_img" src="./images/blogger.png" alt="" />
            <p style="color: #555">Blogger</p>
            <a href="{{url('/')}}/social">
              <div class="hover_part">
                <span class="mb-2 hover1"><i class="ri-plug-line"></i></span>
                <span class="hover2"
                  ><i class="ri-download-cloud-line"></i
                ></span>
              </div>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center socialCloumn"
          >
            <img class="payment_img" src="./images/reddit.png" alt="" />
            <p style="color: #555">Reddit</p>
            <a href="{{url('/')}}/social">
              <div class="hover_part">
                <span class="mb-2 hover1"><i class="ri-plug-line"></i></span>
                <span class="hover2"
                  ><i class="ri-download-cloud-line"></i
                ></span>
              </div>
            </a>
          </div>
        </div>

        <div class="row mt-4">
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center socialCloumn"
          >
            <img class="payment_img" src="./images/google.png" alt="" />
            <p style="color: #555">Google</p>
            <a href="{{url('/')}}/social">
              <div class="hover_part">
                <span class="mb-2 hover1"><i class="ri-plug-line"></i></span>
                <span class="hover2"
                  ><i class="ri-download-cloud-line"></i
                ></span>
              </div>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center socialCloumn"
          >
            <img class="payment_img" src="./images/wp.png" alt="" />
            <p style="color: #555">Wordpress</p>
            <a href="{{url('/')}}/social">
              <div class="hover_part">
                <span class="mb-2 hover1"><i class="ri-plug-line"></i></span>
                <span class="hover2"
                  ><i class="ri-download-cloud-line"></i
                ></span>
              </div>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center socialCloumn"
          >
            <img class="payment_img" src="./images/wp.png" alt="" />
            <p style="color: #555">Wordpress(self)</p>
            <a href="{{url('/')}}/social">
              <div class="hover_part">
                <span class="mb-2 hover1"><i class="ri-plug-line"></i></span>
                <span class="hover2"
                  ><i class="ri-download-cloud-line"></i
                ></span>
              </div>
            </a>
          </div>
        </div>
      </div>

      <!-- email autoresponder API -->
      <div class="email-autoresponder mt-4 bg-white p-3 rounded shadow">
        <h5 class="text-secondary m-0">Email Autoresponder APIs</h5>
        <p class="text-secondary m-0 p-0 mt-1">
          If you integrate email autoresponder and apply in bot manager then,
          email address will be forwared to auto responder account when a bot
          subscriber opt-in using email. As a admin you can use autoresponder
          integration when a new user sign-up to the system.
        </p>
        <div class="row mt-5">
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/email">
              <img class="payment_img" src="./images/mailchimp.png" alt="" />
              <p style="color: #555">Mailchimp</p>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/email">
              <img class="payment_img" src="./images/sendinblue.png" alt="" />
              <p style="color: #555">Sendinblue</p>
            </a>
          </div>

          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/email">
              <img class="payment_img" src="./images/mautic.png" alt="" />
              <p style="color: #555">Mautic</p>
            </a>
          </div>

          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/email">
              <img
                class="payment_img"
                src="./images/activecampaign.png"
                alt=""
              />
              <p style="color: #555">Activecampaign</p>
            </a>
          </div>

          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/email">
              <img class="payment_img" src="./images/acelle.png" alt="" />
              <p style="color: #555">Acelle</p>
            </a>
          </div>
        </div>
      </div>

      <!-- json API -->
      <div class="json mt-4 bg-white p-3 rounded shadow">
        <h5 class="text-secondary m-0">JSON API Connector</h5>
        <p class="text-secondary m-0 p-0 mt-1">
          Json API connector for messenger bot to share collected data accross
          different platforms. we send data via post method only.
        </p>
        <div class="row mt-5">
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/json">
              <img
                class="payment_img ms-5 mb-2"
                src="./images/json_api.png"
                alt=""
              />
              <p style="color: #555">JSON API Connector</p>
            </a>
          </div>
        </div>
      </div>

      <!-- SMS API -->
      <div class="sms mt-4 bg-white p-3 rounded shadow">
        <h5 class="text-secondary m-0">Sms Apis</h5>
        <p class="text-secondary m-0 p-0 mt-1">
          Integrate sms apis to broadcast sms and send sms notification.
        </p>
        <div class="row mt-5">
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/sms">
              <img class="payment_img" src="./images/twilio.png" alt="" />
              <p style="color: #555">Twilio</p>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/sms">
              <img class="payment_img" src="./images/plivo.png" alt="" />
              <p style="color: #555">Plivo</p>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/sms">
              <img class="payment_img" src="./images/clickatell.png" alt="" />
              <p style="color: #555">Clickatell</p>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/sms">
              <img class="payment_img ms-md-0 ms-5" src="./images/clickatell.png" alt="" />
              <p style="color: #555">Clickatell - plateform</p>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/sms">
              <img class="payment_img" src="./images/planet.png" alt="" />
              <p style="color: #555">Planet</p>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/sms">
              <img class="payment_img" src="./images/nexmo.png" alt="" />
              <p style="color: #555">Nexmo</p>
            </a>
          </div>
        </div>

        <div class="row mt-4">
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/sms">
              <img class="payment_img" src="./images/msg91.png" alt="" />
              <p style="color: #555">Msg91</p>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/sms">
              <img
                class="payment_img"
                src="./images/africastalking.png"
                alt=""
              />
              <p style="color: #555">Africas talking</p>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/sms">
              <img class="payment_img" src="./images/semysms.png" alt="" />
              <p style="color: #555">Semysms</p>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/sms">
              <img class="payment_img" src="./images/routesms.png" alt="" />
              <p style="color: #555">Routesms.com</p>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/sms">
              <img class="payment_img ms-md-0 ms-4 mb-md-0 mb-3" src="./images/custom.png" alt="" />
              <p style="color: #555">Http get/post</p>
            </a>
          </div>
        </div>
      </div>

      <!-- email API -->
      <div class="email mt-4 bg-white p-3 rounded shadow">
        <h5 class="text-secondary m-0">Email APIs</h5>
        <p class="text-secondary m-0 p-0 mt-1">
          Integrate email APIs to broadcast sms and send email notification.
        </p>
        <div class="row mt-5">
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/email">
              <img class="payment_img" src="./images/smtp.png" alt="" />
              <p style="color: #555">Smtp</p>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/email">
              <img class="payment_img" src="./images/sendgrid.png" alt="" />
              <p style="color: #555">Sendgrid</p>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/email">
              <img class="payment_img" src="./images/mailgun.png" alt="" />
              <p style="color: #555">Mailgun</p>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/email">
              <img class="payment_img" src="./images/mandrill.png" alt="" />
              <p style="color: #555">Mandrill</p>
            </a>
          </div>
        </div>
      </div>

      <!-- woocommerce API -->
      <div class="woocommerce mt-4 bg-white p-3 rounded shadow">
        <h5 class="text-secondary m-0">Woocommerce</h5>
        <p class="text-secondary m-0 p-0 mt-1">
          Woocommerce abandoned cart recovery plugin & import woocommerce
          product data.
        </p>
        <div class="row mt-5">
          <div
            class="col-md-2 col-6 mb-md-0 mb-3  d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/woocommerce">
              <img class="payment_img" src="./images/woocommerce.png" alt="" />
              <p style="color: #555">Wc abandoned cart recovery</p>
            </a>
          </div>
          <div
            class="col-md-2 col-6 mb-md-0 mb-3  d-flex flex-column align-items-center justify-content-center"
          >
            <a href="./woocommerce.html">
              <img class="payment_img" src="./images/woocommerce.png" alt="" />
              <p style="color: #555">Wc product import</p>
            </a>
          </div>
        </div>
      </div>

      <!-- open AI -->
      <div class="open-ai mt-4 bg-white p-3 rounded shadow">
        <h5 class="text-secondary m-0">Open AI</h5>
        <p class="text-secondary m-0 p-0 mt-1">
          Open AI Is for training data of using AI.
        </p>
        <div class="row mt-5">
          <div
            class="col-md-2 col-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center"
          >
            <a href="{{url('/')}}/openai">
              <img class="payment_img" src="./images/ai.png" alt="" />
              <p style="color: #555">Open AI api</p>
            </a>
          </div>
        </div>
      </div>

      <!-- footer -->
      <p class="text-secondary m-0 p-0 mt-4">2023 © POSTON.io</p>
    </div>

    <scripts
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
