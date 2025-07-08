<style>
#_why-root {
  width: 100%;
  /*padding-top: clamp(8rem, 2vw, 12rem);
  padding-bottom: clamp(8rem, 2vw, 12rem);*/
  background: #de1d0c0d;
}
#_why-root ._why-wrapper {
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: stretch;
  gap: 2rem;
}
@media (min-width: 48rem) {
  #_why-root ._why-wrapper {
    gap: 3rem;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: stretch;
  }
}
#_why-root ._why-wrapper > div {
  flex: 1;
}
@media (min-width: 48rem) {
  #_why-root ._why-wrapper > div {
    flex: 0.5;
  }
}
#_why-root ._why-wrapper ._why-title-wrapper {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: start;
  position: relative;
}
#_why-root ._why-wrapper ._why-title-wrapper ._why-title-header {
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: start;
  /*gap: clamp(0.6rem, 2vw, 0.8rem);*/
}
/*#_why-root ._why-wrapper ._why-title-wrapper ._why-title-header span {
  color: red;
  font-weight: bold;
}*/
#_why-root ._why-wrapper ._why-title-wrapper ._why-title-header h2 {
  width: 100%;
  padding: 0;
  margin: 0;
}
@media (min-width: 48rem) {
  #_why-root ._why-wrapper ._why-title-wrapper ._why-title-header h2 {
    width: 80%;
  }
}
#_why-root ._why-wrapper ._why-title-wrapper ._why-title-images-wrapper {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  gap: 2rem;
  flex-wrap: wrap;
  margin-top: 2rem;
}
#_why-root ._why-wrapper ._why-title-wrapper ._why-title-images-wrapper ._why_title-image {
  width: 220px;
  object-fit: cover;
  height: 170px;
  border-radius: 1rem;
}
#_why-root ._why-wrapper ._why-title-wrapper ._why-title-images-wrapper ._why-title-user-desc {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: start;
}
#_why-root ._why-wrapper ._why-title-wrapper ._why-title-images-wrapper ._why-title-user-desc ._why-users-wrapper {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  width: 200px;
}
#_why-root ._why-wrapper ._why-title-wrapper ._why-title-images-wrapper ._why-title-user-desc ._why-users-wrapper ._why-user {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  width: 50px;
  height: 50px;
  border: 3px solid white;
  border-radius: 999em;
  object-fit: cover;
}
#_why-root ._why-wrapper ._why-title-wrapper ._why-title-images-wrapper ._why-title-user-desc ._why-users-wrapper ._why-user:last-child {
  background-color: var(--colors);
  color: white;
  padding: 8px;
}
#_why-root ._why-wrapper ._why-title-wrapper ._why-title-desc {
  font-weight: bold;
  margin-top: 1rem;
  margin-bottom: 0;
  color: var(--colors);
}
#_why-root ._why-wrapper ._why-card-wrapper {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: start;
  flex-wrap: wrap;
  gap: clamp(0.8rem, 2vw, 1rem);
}
#_why-root ._why-wrapper ._why-card-wrapper > div {
  flex: 1;
  gap: clamp(0.8rem, 2vw, 1rem);
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: stretch;
}
#_why-root ._why-wrapper ._why-card-wrapper > div ._why-card {
  background-color: var(--colors);
  color: white;
  position: relative;
  padding: clamp(1rem, 2vw, 2rem);
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: stretch;
  gap: clamp(0.8rem, 2vw, 1rem);
  overflow: hidden;
}
#_why-root ._why-wrapper ._why-card-wrapper > div ._why-card ._why-bookmark {
  position: absolute;
  top: -2px;
  right: 20px;
  color: #fff;
  font-size: clamp(1rem, 2vw, 2rem);
}
#_why-root ._why-wrapper ._why-card-wrapper > div ._why-card ._why-card-icon {
  font-size: clamp(2rem, 2vw, 5rem);
}
#_why-root ._why-wrapper ._why-card-wrapper > div ._why-card ._why-card-title {
  font-size: clamp(1.2rem, 2vw, 1.4rem);
  line-height: 150%;
  padding: 0;
  margin: 0;
  font-family: var(--primtext);
  letter-spacing: .5px;
  text-transform: capitalize;
  color: white;
  font-weight: bold;
}
#_why-root ._why-wrapper ._why-card-wrapper > div ._why-card ._why-card-description {
  font-size: clamp(0.9rem, 2vw, 1rem);
  line-height: 150%;
  padding: 0;
  color: #eee;
}
#_why-root ._why-wrapper ._why-card-wrapper ._why-card-wrapper-right {
  margin-top: 2rem;
}

@media screen and (max-width: 768px) {
    #_why-root ._why-wrapper ._why-title-wrapper ._why-title-images-wrapper ._why-title-user-desc ._why-users-wrapper {
        justify-content: left;
    }
    #_why-root ._why-wrapper ._why-title-wrapper ._why-title-images-wrapper ._why_title-image {
        width: 120px;
        height: 100px;
    }
    #_why-root ._why-wrapper ._why-title-wrapper ._why-title-images-wrapper ._why-title-user-desc ._why-users-wrapper ._why-user {
        width: 40px;
        height: 40px;
    }
    #_why-root ._why-wrapper ._why-title-wrapper ._why-title-desc {
        margin-top: 5px;
        font-size: 10px;
    }
    #_why-root ._why-wrapper ._why-title-wrapper ._why-title-images-wrapper {
        gap: 1rem;
    }
    #_why-root ._why-wrapper ._why-card-wrapper > div ._why-card ._why-card-description {
        font-size: 11px;
    }
    #_why-root ._why-wrapper ._why-card-wrapper > div ._why-card {
        gap: 5px;
    }
    #_why-root ._why-wrapper ._why-card-wrapper > div ._why-card ._why-card-title {
        font-size: 16px;
    }
}
</style>

<section id="_why-root" class="pad6rem">
  <?php
    $_why = json_decode(json_encode([
      "span" => "Why Choose Us?",
      "title" => "Your Trusted Guide to Mount Batur’s Best Experiences",
      "items" => [
        'left' => [
          [
            "title" => "Experienced Guides",
            "description" => "Our professional guides ensure a safe and enjoyable trekking experience.",
            "icon" => "fa-solid fa-person-hiking"
          ],
          [
            "title" => "Breathtaking Views",
            "description" => "Enjoy the mesmerizing sunset from the peak of Mount Batur.",
            "icon" => "fa-solid fa-mountain"
          ],
        ],
        'right' => [
        [
          "title" => "Adventure & Thrill",
          "description" => "Experience the thrill of hiking a volcano with stunning landscapes.",
          "icon" => "fa-solid fa-fire"
        ],
        [
          "title" => "Picnic Food",
          "description" => "Enjoy snack and water at the volcano while witnessing the sunset",
          "icon" => "fa-solid fa-mug-hot"
        ]
      ]
        ]
    ]));
  ?>
  <div class="_why-wrapper container-global">
    <div class="_why-title-wrapper">
      <div class="title-product _why-title-header">
        <span class=tag-atas><i class="fa-solid fa-star-of-life mr-3"></i><?= $_why->span ?></span>
        <h2 ><?= $_why->title ?></h2>
      </div>
      
      <div class="_why-title-images-wrapper">
        <img class="_why_title-image" src="https://jwc.gotra-resources.my.id/web-upload/1742280464-product_image-18-03-2025-OAmKEHq25XbRUN6a.jpg" alt="why choose us image">
        <div class="_why-title-user-desc">
          <div class="_why-users-wrapper">
            <img style="z-index: 1" src="https://jwc.gotra-resources.my.id/web-upload/1742280485-18-03-2025-4lW5FUMA8zVuLm1tchpoX6erTNsKEnj0.jpg" class="_why-user" alt="user">
            <img style="z-index: 2; transform: translateX(-15px)" src="https://jwc.gotra-resources.my.id/web-upload/1742278941-product_image-18-03-2025-CWV8rYlI3feTBpNG.webp" class="_why-user" alt="user">
            <img style="z-index: 3; transform: translateX(-30px)" src="https://jwc.gotra-resources.my.id/web-upload/1742279463-product_image-18-03-2025-2PBFR9xgNilz6vfJ.jpg" class="_why-user" alt="user">
            <div style="z-index: 4; transform: translateX(-45px)"  class="_why-user">8k+</div>
          </div>
          <p class="_why-title-desc">850K+ Happy Costumers</p>
        </div>
      </div>
    </div>
    <div class="_why-card-wrapper">
      <div class="_why-card-wrapper-left">
        <?php foreach ($_why->items->left as $item): ?>
          <div class="_why-card">
            <i class="fa-solid fa-bookmark _why-bookmark"></i>
            <i class="_why-card-icon <?= $item->icon ?>"></i>
            <h3 class="_why-card-title"><?= $item->title ?></h3>
            <p class="_why-card-description"><?= $item->description ?></p>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="_why-card-wrapper-right">
        <?php foreach ($_why->items->right as $item): ?>
          <div class="_why-card">
            <i class="fa-solid fa-bookmark _why-bookmark"></i>
            <i class="_why-card-icon <?= $item->icon ?>"></i>
            <h3 class="_why-card-title"><?= $item->title ?></h3>
            <p class="_why-card-description"><?= $item->description ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>