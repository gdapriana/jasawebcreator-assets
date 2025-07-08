document.addEventListener("DOMContentLoaded", () => {
  $('._screen-wrapper').slick({
    arrows: false
  })

  $('._company-wrapper').slick({
    arrows: false,
    autoplay: true,
    slidesToShow: 5,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  })
})
