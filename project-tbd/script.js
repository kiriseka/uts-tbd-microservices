function whatsapp2(name,){
  const message = `${name}`
  const whatsapp = `https://wa.me/6282123437618?text=${message}`
  open(whatsapp, "_blank")
}

function scrollr(){
  var left=document.querySelector(".scroll-img");
  left.scrollBy(350,0)
}

function scrolll(){
  var right=document.querySelector(".scroll-img");
  right.scrollBy(-350,0)
}

const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  effect: "autoplay",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  autoplay: {
      delay: 2000,
      disableOnInteraction: false,
  },

  pagination: {
    el: '.swiper-pagination',
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});