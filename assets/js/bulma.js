// The following code is based off a toggle menu by @Bradcomp
// source: https://gist.github.com/Bradcomp/a9ef2ef322a8e8017443b626208999c1
 (function() {
     var burger = document.querySelector('.navbar-burger');
     var menu = document.querySelector('.navbar-menu');
     burger.addEventListener('click', function() {
         burger.classList.toggle('is-active');
         menu.classList.toggle('is-active');
     });
 })();

window.onload = function() {
Particles.init({
  maxParticles: 150,
  selector: '.background',
  connectParticles: true,
  color: '#7fa4d8',
  speed: 0.4,
  responsive: [
    {
      breakpoint: 768,
      options: {
        maxParticles: 120,
      }
    }, {
      breakpoint: 420,
      options: {
        maxParticles: 80
      }
    },{
      breakpoint: 360,
      options: {
        maxParticles: 50
      }
    }, {
      breakpoint: 320,
      options: {
        maxParticles: 40
      }
    }
  ] 
});
}; 