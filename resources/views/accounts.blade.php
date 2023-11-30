@extends('admin.layout.admin_master')
@push('css')

<link rel="stylesheet" href="{{asset('css/style.css')}}" />
<link rel="stylesheet" href="{{asset('css/index.css')}}" />
@endpush

@push('title')
  Account
@endpush
@section('content')
    <div class="container-fluid px-lg-5 py-4">
      <div class="strip d-flex align-items-center">
        <h4 class="text-secondary">Payment Accounts</h4>
        <span class="text-secondary mx-3 mb-2">|</span>
        <i class="ri-home-smile-2-line text-secondary mb-1 me-2 fw-bold"></i>
        <span><i class="ri-arrow-right-s-line text-secondary"></i></span>
        <p class="m-0 p-0 text-secondary mx-3">Integration</p>
        <span><i class="ri-arrow-right-s-line text-secondary"></i></span>
        <p class="text-primary m-0 p-0 ms-2">API channels</p>
      </div>

      <!-- form -->
      <div class="row bg-white py-3 px-2 rounded shadow mt-4">
        <div class="col">
          <form>
            <div class="row">
              <div class="col-md-4">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-at-line"></i> PAYPAL EMAIL</label
                  >
                  <input type="text" placeholder="pay@unli.io" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-money-dollar-circle-line"></i> PAYPAL
                    RECURRING PAYMENT</label
                  >
                  <div class="form-check form-switch mt-4">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      role="switch"
                      id="flexSwitchCheckDefault"
                    />
                    <label
                      class="form-check-label text-secondary"
                      for="flexSwitchCheckDefault"
                      >ENABLE</label
                    >
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-timer-line"></i> PAYPAL SANDBOX MODE</label
                  >
                  <div class="form-check form-switch mt-4">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      role="switch"
                      id="flexSwitchCheckDefault"
                    />
                    <label
                      class="form-check-label text-secondary"
                      for="flexSwitchCheckDefault"
                      >ENABLE</label
                    >
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-6">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> STRIPE SECRET KEY</label
                  >
                  <input
                    type="text"
                    placeholder="sk_live_l5e5vOlhKxPM0mkv4AoHm2PT00UIiDkTuA"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> STRIPE PUBLISHABLE KEY</label
                  >
                  <input
                    type="text"
                    placeholder="pk_live_Mb0Svs8KYZ2EzGVvT1W2YFEN00a4fWlNtU"
                  />
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-8">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> MOLLIE API KEY</label
                  >
                  <input type="text" />
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-6">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> RAZORPAY KEY ID</label
                  >
                  <input type="text" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> RAZORPAY KEY SECRET</label
                  >
                  <input type="text" />
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-6">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> PAYSTACK SECRET KEY</label
                  >
                  <input type="text" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> PAYSTACK PUBLIC KEY</label
                  >
                  <input type="text" />
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-4">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> PAYSTACK SECRET KEY</label
                  >
                  <input type="text" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> SSLCOMMERZ STORE
                    PASSWORD</label
                  >
                  <input type="text" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-global-line"></i> MERCADOPAGO COUNTRY</label
                  >
                  <select
                    class="form-select"
                    aria-label="Default select example"
                  >
                    <option selected>Argentina</option>
                    <option value="1">Brazil</option>
                    <option value="2">India</option>
                    <option value="3">Colmbia</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-6">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    >MERCADOPAGO SANDBOX MODE</label
                  >
                  <div class="mt-3">
                    <input class="form-check-input" type="checkbox" />
                    <label
                      class="form-check-label text-secondary"
                      for="flexCheckDefault"
                    >
                      ENABLE
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-4">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> PAYSTACK SECRET KEY</label
                  >
                  <input type="text" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> MERCADOPAGO PUBLIC KEY</label
                  >
                  <input type="text" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-timer-line"></i> SSLCOMMERZ SANDBOX
                    MODE</label
                  >
                  <div class="form-check form-switch mt-4">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      role="switch"
                      id="flexSwitchCheckDefault"
                    />
                    <label
                      class="form-check-label text-secondary"
                      for="flexSwitchCheckDefault"
                      >ENABLE</label
                    >
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-4">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> SENANGPAY MERCHANT ID</label
                  >
                  <input type="text" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> SENANGPAY SECRET KEY</label
                  >
                  <input type="text" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-timer-line"></i> SENANGPAY SANDBOX MODE</label
                  >
                  <div class="form-check form-switch mt-4">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      role="switch"
                      id="flexSwitchCheckDefault"
                    />
                    <label
                      class="form-check-label text-secondary"
                      for="flexSwitchCheckDefault"
                      >ENABLE</label
                    >
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col d-md-flex align-items-md-center">
                <h6 class="mb-md-0 mb-3">Senangpay return URL:</h6>
                <span
                  class="ms-md-3 p-2 rounded text-white w-100"
                  style="background-color: #ff5b5c"
                  >HTTPS://APP.POSTON.IO/STRIPE_ACTION/SENANGPAY_ACTION</span
                >
                <span class="ms-md-3" style="color: #7e44f4"
                  ><i class="ri-information-line"></i> Details</span
                >
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-4">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> INSTAMOJO PRIVATE API
                    KEY</label
                  >
                  <input type="text" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> INSTAMOJO PRIVATE AUTH
                    TOKEN</label
                  >
                  <input type="text" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-timer-line"></i> INSTAMOJO SANDBOX MODE</label
                  >
                  <div class="form-check form-switch mt-4">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      role="switch"
                      id="flexSwitchCheckDefault"
                    />
                    <label
                      class="form-check-label text-secondary"
                      for="flexSwitchCheckDefault"
                      >ENABLE</label
                    >
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-4">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> TOYYIBPAY SECRET KEY</label
                  >
                  <input type="text" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> TOYYIBPAY CATEGORY CODE</label
                  >
                  <input type="text" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="d-flex flex-column align-items-start">
                  <label class="text-secondary" for="email"
                    ><i class="ri-timer-line"></i> TOYYIBPAY SANDBOX MODE</label
                  >
                  <div class="d-flex mt-4 align-items-center">
                    <input type="checkbox" class="me-2" />
                    <label class="text-secondary">ENABLE</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> XENDIT SECRET API KEY</label
                  >
                  <input type="text" />
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-8">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> MYFATOORAH API KEY
                  </label>
                  <input type="text" />
                </div>
              </div>

              <div class="col-md-4">
                <div class="d-flex flex-column align-items-start">
                  <label class="text-secondary" for="email"
                    ><i class="ri-timer-line"></i> TOYYIBPAY SANDBOX MODE</label
                  >
                  <div class="d-flex mt-4 align-items-center">
                    <input type="checkbox" class="me-2" />
                    <label class="text-secondary">ENABLE</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-4">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> PAYMAYA PUBLIC KEY
                  </label>
                  <input type="text" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-key-line"></i> PAYMAYA SECRET KEY
                  </label>
                  <input type="text" />
                </div>
              </div>

              <div class="col-md-4">
                <div class="d-flex flex-column align-items-start">
                  <label class="text-secondary" for="email"
                    ><i class="ri-timer-line"></i> PAYMAYA SANDBOX MODE</label
                  >
                  <div class="d-flex mt-4 align-items-center">
                    <input type="checkbox" class="me-2" />
                    <label class="text-secondary">ENABLE</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-6">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-money-dollar-circle-line"></i> CURRENCY</label
                  >
                  <select
                    class="form-select"
                    aria-label="Default select example"
                  >
                    <option selected>Argentina</option>
                    <option value="1">Brazil</option>
                    <option value="2">India</option>
                    <option value="3">Colmbia</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-article-line"></i> ENABLE MANUAL
                    PAYMENT</label
                  >
                  <div class="form-check form-switch mt-4">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      role="switch"
                      id="flexSwitchCheckDefault"
                    />
                    <label
                      class="form-check-label text-secondary"
                      for="flexSwitchCheckDefault"
                      >ENABLE</label
                    >
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col">
                <div class="d-flex flex-column">
                  <label class="text-secondary" for="email"
                    ><i class="ri-information-line"></i> MANUAL PAYMENT
                    INSTRUCTIONS
                  </label>
                  <div class="form-floating">
                    <textarea
                      class="form-control"
                      placeholder="Leave a comment here"
                      id="floatingTextarea2"
                      style="height: 100px"
                    ></textarea>
                    <label for="floatingTextarea2">Comments</label>
                  </div>
                </div>
              </div>
            </div>

            <button class="mt-4"><i class="ri-save-fill"></i> Save</button>

          </form>
        </div>
      </div>
    </div>
    @endsection
