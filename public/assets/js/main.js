// wol cursel
$('.owl-carousel').owlCarousel({
  margin: 10,
  loop:true,
  autoplay:true,
  autoplayTimeout:3000,
  responsive: {
      0: {
          items: 1,
      },
      600: {
          items: 1,
      },
      1000: {
          items: 1,
      }
  }
 });

 var acc = document.getElementsByClassName("accordion");
 var i;
 
 for (i = 0; i < acc.length; i++) {
   acc[i].addEventListener("click", function() {
     this.classList.toggle("activee");
     var panel = this.nextElementSibling;
     if (panel.style.display === "block") {
       panel.style.display = "none";
     } else {
       panel.style.display = "block";
     }
   });
 }
