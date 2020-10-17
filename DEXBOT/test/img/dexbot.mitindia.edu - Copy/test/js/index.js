
// variables
var $header_top = $('.header-top');
var $nav = $('nav');



// toggle menu 
$header_top.find('a').on('click', function() {
  $(this).parent().toggleClass('open-menu');
});



// fullpage customization
$('#fullpage').fullpage({
  sectionsColor: ['#B8AE9C', '#348899', '#F2AE72', '#5C832F', '#B8B89F'],
  sectionSelector: '.vertical-scrolling',
  slideSelector: '.horizontal-scrolling',
  navigation: false,
  slidesNavigation: false,
  controlArrows: false,
  anchors: ['firstSection', 'secondSection', 'thirdSection'],
  menu: '#menu',
  
  onLeave: function(index, nextIndex, direction){
		if(index ==2 && nextIndex == 3 ){
			return false;
		}
	},
	
	afterSlideLoad: function( anchorLink, index, slideAnchor, slideIndex) {
    if(anchorLink == 'firstSection' && slideIndex == 1) {
      $.fn.fullpage.setAllowScrolling(true, 'down');
    }
	if(anchorLink == 'firstSection' && slideIndex == 2) {
      $.fn.fullpage.setAllowScrolling(true, 'down');
    }
    if(anchorLink == 'firstSection' && slideIndex == 3) {
      $.fn.fullpage.setAllowScrolling(false, 'right, down');
    }
	else if(anchorLink == 'firstSection' && slideIndex == 0 ) {
      $.fn.fullpage.setAllowScrolling(false, 'down');
    } 
	
  },
  /*onSlideLeave: function( anchorLink, index, slideIndex, direction) {
	if(anchorLink == 'firstSection' && slideIndex == 0) {
      $.fn.fullpage.setAllowScrolling(true, 'down');
      
    }  
    if(anchorLink == 'firstSection' && slideIndex == 3) {
      $.fn.fullpage.setAllowScrolling(true, 'down');
    }
  } */
	
	
});