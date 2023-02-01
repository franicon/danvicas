<section class="container tw-py-10">
    <form class="row g-3 mt-5" method="POST" action="/contact-email">
        @csrf
        <div class="col-md-6">
           <div class="px-3">
               <div class="form-floating mb-4">
                   <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                   <label for="email">Email address</label>
               </div>
               <div class="form-floating mb-4">
                   <input type="text" name="name" class="form-control" id="floatingPassword" placeholder="company name">
                   <label for="name">Company Name</label>
               </div>
               <div class="form-floating">
                   <textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                   <label for="message">Message</label>
               </div>
           </div>
            <div class="col-12 mt-4 px-3">
                <button type="submit" class="btn btn-primary px-5 py-2">Send Message</button>
            </div>
        </div>
        <div class="col-md-6">
           <div class="px-3 tw-space-y-8">
               <div class="">
                   <div class="tw-font-bold tw-text-2xl">Address:</div>
                   <div class="md:tw-text-xl tw-text-md tw-py-2">4, Agba-oku street, off Awosika bus-stop, Ikeja, Lagos</div>
               </div>
               <div class="">
                   <div class="tw-font-bold tw-text-2xl">Email Us At:</div>
                   <div class="md:tw-text-xl tw-text-md tw-py-2">danvicasng@gmail.com | info@danvicas.com</div>
               </div>
               <div class="">
                   <div class="tw-font-bold tw-text-2xl">Contact-us:</div>
                   <div class="md:tw-text-xl tw-text-md tw-py-2">+234 806 283 188</div>
               </div>
           </div>
        </div>
    </form>
</section>
