@php
    $sitesetting = App\Models\SiteSetting::first();
@endphp
 <section class="line-bg bg-white">
     <div class="newsletter-block border-bottom">
         <div class="container">
             <div class="row gy-5 align-items-center justify-content-center text-center text-md-start">
                 <div class="col-xl-5 col-lg-5 col-md-6 col-sm-10">
                     <div class="pe-0 pe-xl-4">
                         <h2 class="mb-3 lh-sm"> {{ $sitesetting->subscribe_news_letter_title }} </h2>
                         <p class="mb-0">
                            {{ $sitesetting->subscribe_news_letter_details }}
                         </p>
                     </div>
                 </div>
                 <div class="col-xl-4 col-lg-5 col-md-6">
                     <div class="ps-0 ps-xl-4">
                         <div id="mc_embed_signup">
                             <form action="{{ route('store.newsletter') }}" method="post">
                                 @csrf
                                 @method('POST')
                                 <div id="mc_embed_signup_scroll" class="input-group">
                                     <input type="text" value="" name="name"
                                         class="form-control w-100 @error('name')
                                     is-invalid
                                    @enderror"
                                         id="mce-NAME" placeholder="Full Name" aria-label="Name"
                                         autocomplete="new-name">


                                     <input type="email" value="" name="email"
                                         class="form-control w-100 required email @error('email')
                                     is-invalid
                                    @enderror"
                                         id="mce-EMAIL" placeholder="Your email address *" aria-label="Subscription"
                                         autocomplete="new-email">

                                     <div class="input-group-append w-100">
                                         <button type="submit" name="subscribe" id="mc-embedded-subscribe"
                                             class="input-group-text w-100 mb-0" aria-label="Subscription Button">
                                              {{ $sitesetting->subscribe_news_button_text }}<i class="ti ti-arrow-up-right ms-auto"></i>
                                         </button>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
