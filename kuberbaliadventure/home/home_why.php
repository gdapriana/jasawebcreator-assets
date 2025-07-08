<style>

    .col-custom {
        width: 20%;
        padding-left: 0.6rem;
        padding-right: 0.6rem;
      }
      .d-flex {
        display: flex;
        flex-wrap: wrap;
      }
      .justify-content-center {
        justify-content: center;
      }
      .align-item-center {
        align-items: center;
      }
      .visi-misi .text {
          position: relative;
          padding: 30px;
          padding-left: 40px;
          border-left: 4px solid var(--colors);
      }
      .visi-misi .text::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 15px;
        height: 15px;
        background-color: var(--colors);
        border-radius: 50%;
        transform: translateX(-64%);
      }
      .visi-misi .text::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 15px;
        height: 15px;
        background-color: var(--colors);
        border-radius: 50%;
        transform: translateX(-64%);
      }
      .visi-misi .text h2 {
          font-family: var(--primtext);
          font-size: 45px;
          line-height: 55px;
          font-weight: 400;
          color: #333;
          letter-spacing: 0;
          text-transform: uppercase;
          margin-bottom: 20px;
      }
      .visi-misi .text h2 span {
            color: var(--colors);
            font-weight: 800;
        }

      .visi-misi .card {
          border-radius: 0;
          border: 2px solid var(--colors);
          /* box-shadow: 5px 5px 10px #00000015, -1px -1px 5px #00000010; */
          padding: 35px 25px;
          height: 310px;
          background: #f1f1f1;
          clip-path: polygon(15% 0%, 100% 0, 100% 87%, 85% 100%, 0 100%, 0% 13%);
      }

      .visi-misi .card i {
          width: 80px;
          height: 80px;
          background: var(--colors);
          clip-path: polygon(15% 0%, 100% 0, 100% 87%, 85% 100%, 0 100%, 0% 13%);
          color: white;
          line-height: 80px;
          font-size: 30px;
          text-align: center;
          margin: auto;
          margin-bottom: 30px;
      }

      .visi-misi img {
        aspect-ratio: 8/3;
        object-fit: contain;
      }
      .visi-misi p {
          font-family: var(--subtext);
          font-size: 15px;
          line-height: 27px;
          font-weight: 400;
          letter-spacing: .3px;
          color: #555;
          margin-bottom: 0;
      }
      
      .visi-misi .btn {
        color: #fff;
        background-color: var(--colors);
        padding: 12px 20px;
        font-weight: 600;
        font-family: var(--subtext);
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        border-radius: 0;
        overflow: hidden;
        transition: all ease 500ms;
    }

      .visi-misi .btn:hover { background:var(--color2); color:#000; }

      .visi-misi h5 {
          text-align: center;
          font-weight: 700;
          letter-spacing: 0;
          font-size: 22px;
          font-family: var(--primtext);
          color: var(--colors);
          text-transform: capitalize;
      }

    @media (max-width: 768px) {
      .visi-misi .text h2 {
          font-size: 30px;
          margin-bottom: 20px;
      }

      .visi-misi p {
          font-size: 14px;
          line-height: 25px;
      }

      .visi-misi .card {
          padding: 25px 10px;
          height: unset;
      }

      .visi-misi .card i {
          width: 50px;
          height: 50px;
          line-height: 50px;
          font-size: 20px;
          margin-bottom: 20px;
      }

      .visi-misi h5 {
          font-size: 15px;
          margin-bottom: 7px;
      }

      .visi-misi .col-6 { padding:5px; }

      .visi-misi .text { margin-bottom:30px; }
    }

</style>



<section class="visi-misi pad6rem">
      <div class="container-global">
        <div class="row">
          <div class="col-sm-4 d-flex align-item-center">
            <div class="text">
              <h2>Why Choose <span>Kuber Bali Adventure</span></h2>
              <p class="text-justify">
               Discover what makes us the top choice for an unforgettable, safe, and eco-friendly ATV experience in Bali.
              </p>
              <div class="line"></div>
              <a href="<?= $func->dm_whatsapp() ?>" class="btn mt-4">
                Reservation Now!
                <i class="ml-2 fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="col-sm-8">
    <div class="row">
        <div class="col-6">
          <div class="card mb-3 text-center">
              <i class="fas fa-map-marked-alt"></i>
              <div class="card-body p-0">
                  <h5 class="text-center">Authentic Experience</h5>
                  <p class="text-center">As the original ATV provider, we offer exclusive tracks through Bali’s stunning landscapes.</p>
              </div>
          </div>
      </div>
      <div class="col-6">
          <div class="card mb-3 text-center">
              <i class="fas fa-shield-alt"></i>
              <div class="card-body p-0">
                  <h5 class="text-center">Safety First</h5>
                  <p class="text-center">Professional guides and quality equipment ensure a safe and thrilling adventure.</p>
              </div>
          </div>
      </div>
      <div class="col-6">
          <div class="card mb-3 text-center">
              <i class="fas fa-leaf"></i>
              <div class="card-body p-0">
                  <h5 class="text-center">Eco-Friendly</h5>
                  <p class="text-center">We prioritize sustainable tourism, protecting Bali's natural beauty.</p>
              </div>
          </div>
      </div>
      <div class="col-6">
          <div class="card mb-3 text-center">
              <i class="fas fa-users"></i>
              <div class="card-body p-0">
                  <h5 class="text-center">Tailored Packages</h5>
                  <p class="text-center">Our adventures are customizable to fit solo travelers, families, or groups.</p>
              </div>
          </div>
      </div>

    </div>
</div>


        </div>
      </div>
    </section>