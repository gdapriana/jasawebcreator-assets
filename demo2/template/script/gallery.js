document.addEventListener("DOMContentLoaded", () => {
  $('#_gallery ._content ._content-slide').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 1000,
    dots: true,
    centerMode: true,
    variableWidth: false,
    infinite: true,
    focusOnSelect: true,
    touchMove: true,
    cssEase: "cubic-bezier(0.075, 0.82, 0.165, 1)",
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          slidesToShow: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          slidesToShow: 1
        }
      }
    ]
  })
})
