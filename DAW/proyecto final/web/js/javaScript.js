if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

  console.log('width < 1280px')
  window.sr =  ScrollReveal();
  sr.reveal('.navbar', {
    duration: 3000,     
  });
  sr.reveal('.titulo', {
    duration: 3000,       
  });
  sr.reveal('.enlace', {
    duration: 3000,
  });  
}
else{

  window.sr =  ScrollReveal();
  sr.reveal('.navbar', {
    duration: 3000,
    origin: 'top', 
    distance: '100px'      
  });
  sr.reveal('.titulo', {
    duration: 3000,
    origin: 'right',
    distance: '300px'       
  });

  sr.reveal('.enlace', {
    duration: 3000,
  });
}

      
