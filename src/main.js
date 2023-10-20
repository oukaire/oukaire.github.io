if ('addEventListener' in window) {
    window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
    document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
}

const flip = (which) => {
	$(which).toggleClass('flipped');
}

// $(function(){
//   $('.flipper').click(function(e){
//     e.preventDefault();
//     if($(this).attr('href') != '#'){
//       $('.back section').hide();
//       $($(this).attr('href')).show();
//     }
//     $("#card").toggleClass('flipped');
//   });
// })
