// The following code is based off a toggle menu by @Bradcomp
// source: https://gist.github.com/Bradcomp/a9ef2ef322a8e8017443b626208999c1
(function() {
    var burger = document.querySelector('.nav-toggle');
    var menu = document.querySelector('.nav-menu');
    if (burger!=null) {
        burger.addEventListener('click', function() {
            burger.classList.toggle('is-active');
            menu.classList.toggle('is-active');
        });
    }
})();
document.addEventListener('DOMContentLoaded', function () {
        var simple = document.querySelector('.js_slider');

        lory(simple, {
            infinite: 1
        });
    });

//#3273dc


        var carousel = document.querySelector('.carousel'),
    carouselList = document.querySelector('.carousel-viewport ul')
    carouselItems =  document.querySelectorAll('.carousel-viewport ul li'),
    carouselLength = carouselItems.length,
    paginationList =  document.querySelector('.carousel-pagination ul'),
    carouselPrevious = document.querySelector('.carousel .carousel-previous'),
    carouselNext = document.querySelector('.carousel .carousel-next'),
    currentPage = 0,
    fps = 60/1000;

function sizeCarouselElements () {
  var windowWidth = window.innerWidth;
  carouselList.style.width = windowWidth * carouselLength + 'px';  
  for(var i = 0; i < carouselLength; i++) carouselItems[i].style.width = windowWidth + 'px';
}

function generateCarouselPagination () {
  for(var i = 0; i < carouselLength; i++) {
    var paginationItem = document.createElement('li');
    paginationList.appendChild(paginationItem);
  }
  paginationList.firstChild.className = 'active';
}

function updateCarouselPagination () {
  var paginationChildren = paginationList.childNodes;
  for(var i = 0; i < paginationChildren.length; i++) paginationChildren[i].className = '';
  paginationChildren[currentPage].className = 'active';
}

function handleCarouselPreviousClicked () {
  if (currentPage <= 0){
   		currentPage=carouselLength- 1 ;
   		animateViewToCurrentPage();
   		updateCarouselPagination();
   		return;
  }
  currentPage--;
  animateViewToCurrentPage();
  updateCarouselPagination();
}

function handleCarouselNextClicked () {
  if (currentPage >= carouselLength - 1){
   		currentPage=0;
   		animateViewToCurrentPage();
   		updateCarouselPagination();
   		return;
  }
  currentPage++;
  animateViewToCurrentPage();
  updateCarouselPagination();
}

function setViewToCurrentPage () {
  carouselList.className = '';
  carouselList.style.left = -(window.innerWidth * currentPage) + 'px';
}

function animateViewToCurrentPage () {
  carouselList.className = 'animate';
  carouselList.style.left = -(window.innerWidth * currentPage) + 'px';
}

sizeCarouselElements();
generateCarouselPagination();
window.addEventListener('resize', sizeCarouselElements);
window.addEventListener('resize', setViewToCurrentPage);
carouselPrevious.addEventListener('click', handleCarouselPreviousClicked);
carouselNext.addEventListener('click', handleCarouselNextClicked);