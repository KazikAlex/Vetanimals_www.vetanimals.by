// 'use strict'


$('.services-wrapper').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: $('.prev-servises'),
  nextArrow: $('.next-services'),
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

$('.patient-wrapper').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow: $('.prev-patient'),
  nextArrow: $('.next-patient'),
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

$('.specialists-wrapper').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: $('.prev-specialist'),
  nextArrow: $('.next-specialist'),
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

$('.news-wrapper').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: $('.prev-news'),
  nextArrow: $('.next-news'),
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});


var sub = document.getElementById('menu-menu-1'),
    ham = document.getElementById('hamb'),
    divTop = document.getElementById('top'),
    divMiddle = document.getElementById('middle'),
    divBottom = document.getElementById('bottom'),
    // mainSub = document.getElementById('main-sub'),
    desc = document.getElementById('description_btn'),
    pr = document.getElementById('price_btn'),
    cont = document.getElementById('content'),
    tab = document.getElementById('table'),
    form = document.getElementById('hiddden_form'),
    m_btn = document.getElementById('main-btn'),
    f_close = document.getElementById('form-close'),
    sub_btn = document.getElementById('subm'),
    thanks = document.getElementById('thanks'),
    submit = document.getElementById('subm'),
    t_close = document.getElementById('thanks-close'),
    subm_1 = document.getElementById('subm1'),
    thanks_1 = document.getElementById('thanks1');
    

  ham.addEventListener('click', function () {
    if (sub.style.display == 'block') {
        sub.style.display = 'none';
        divTop.style.transform = 'rotate(0deg)';
        divTop.style.position = 'relative';
        divMiddle.style.transform = 'rotate(0deg)';
        divMiddle.style.position = 'relative';
        divBottom.style.display = 'block';
        divBottom.style.transform = 'rotate(0deg)';
        divBottom.style.position = 'relative';
        // mainSub.style.padding = '74px 0 0 0';
    }else {
        sub.style.display = 'block';
        divTop.style.transform = 'rotate(45deg)';
        divTop.style.position = 'absolute';
        divTop.style.top = '6%';
        divMiddle.style.transform = 'rotate(-45deg)';
        divMiddle.style.position = 'absolute';
        divMiddle.style.top = '6%';
        divBottom.style.display = 'none';
        // mainSub.style.padding = '250px 0 0 0';
        sub.addEventListener('click', function () {
            sub.style.display = 'none';
            divTop.style.transform = 'rotate(0deg)';
            divTop.style.position = 'relative';
            divMiddle.style.transform = 'rotate(0deg)';
            divMiddle.style.position = 'relative';
            divBottom.style.display = 'block';
            divBottom.style.transform = 'rotate(0deg)';
            divBottom.style.position = 'relative';
        });
      }  
    });


    



    if (pr != null) 
      pr.addEventListener('click', function () {
        if (cont.style.display == 'none') {
            cont.style.display = 'block';
            tab.style.display = 'none';
            desc.classList.add('active');
            pr.classList.remove('active');
            
        }else {
            tab.style.display = 'block';
            cont.style.display = 'none';
            pr.classList.add('active');
            desc.classList.remove('active');
            desc.addEventListener('click', function (){
              if (tab.style.display == 'none') {
                  tab.style.display = 'block';
                  cont.style.display = 'none';
                  pr.classList.add('active');
                  desc.classList.remove('active');
              }else {
                cont.style.display = 'block';
                tab.style.display = 'none';
                desc.classList.add('active');
                pr.classList.remove('active');
              }
            });
        }
      });


    

  if ( m_btn != null ) {
    m_btn.addEventListener('click', function () {
      if (form.style.display == 'block') {
        form.style.display = 'none';
      }else {
        form.style.display = 'block';
      }
    });
  }
    
  if ( f_close != null) {
    f_close.addEventListener('click', function () {
      form.style.display = 'none';
    });
  }

  if ( submit != null) {
      submit.addEventListener('click', function () {
        form.style.display = 'none';
        thanks.style.display = 'block';
    });
  }
  
  if ( t_close != null) {
    t_close.addEventListener('click', function () {
      thanks.style.display = 'none';
    });
  }
  
  if ( subm_1 != null) {
    subm_1.addEventListener('click', function () {
      thanks_1.style.display = 'block';
  });
}

if ( t_close != null) {
  t_close.addEventListener('click', function () {
    thanks_1.style.display = 'none';
  });
}
  
  
  

  
