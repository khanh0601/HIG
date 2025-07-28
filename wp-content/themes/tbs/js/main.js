$(document).ready(function () {
  $(document).ready(function () {
    $('.stat').each(function () {
      let $this = $(this);
      let countTo = $this.attr('data-count');
      $({ countNum: 0 }).animate({ countNum: countTo }, {
        duration: 2000,
        easing: 'swing',
        step: function () {
          $this.text(Math.floor(this.countNum) + "+");
        },
        complete: function () {
          $this.text(this.countNum + "+");
        }
      });
    });
  });

  $('.projects_detail').slick({
    dots: false,
    arrows: false,
    margin: 10,
    infinite: true,
    speed: 500,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

  $('.client-grid').slick({
    dots: false,
    arrows: false,
    margin: 10,
    infinite: true,
    speed: 500,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3
        }
      }
    ]
  });


  if (window.innerWidth <= 768) {
    $('.text-muted').find('br').remove();
  }


  const backToTop = $('#backToTop')
  const amountScrolled = 300

  $(window).scroll(() => {
    $(window).scrollTop() >= amountScrolled
      ? backToTop.fadeIn('fast')
      : backToTop.fadeOut('fast')
  })

  backToTop.click(() => {
    $('body, html').animate({
      scrollTop: 0
    }, 600)
    return false
  })


  // $('.news_slide').slick({
  //     dots: false,
  //     arrows: false,
  //     margin: 10,
  //     infinite: true,
  //     speed: 500,
  //     slidesToShow: 4,
  //     slidesToScroll: 1,
  //     responsive: [
  //         {
  //             breakpoint: 768,
  //             settings: {
  //                 slidesToShow: 1
  //             }
  //         }
  //     ]
  // });


  // header

  let lastScrollTop = 0;
  let header = $('#mainHeader');

  $(window).on('scroll', function () {
    let currentScroll = $(this).scrollTop();

    if (currentScroll > lastScrollTop) {
      // Cuộn xuống → ẩn header
      header.removeClass('header-visible').addClass('header-hidden');
    } else if (currentScroll < lastScrollTop && currentScroll > 0) {
      // Cuộn lên (và đã cuộn khỏi top) → hiện header + nền xanh
      header.removeClass('header-hidden').addClass('header-visible');
    } else if (currentScroll === 0) {
      // Quay lại đầu trang → reset về trong suốt
      header.removeClass('header-visible header-hidden');
    }

    lastScrollTop = currentScroll;
  });

  $('.mobile-menu-toggle').click(function () {
    $('.mobile-menu').addClass('active');
    $('.mobile-menu-overlay').addClass('active');
  });

  $('.close-menu, .mobile-menu-overlay').click(function () {
    $('.mobile-menu').removeClass('active');
    $('.mobile-menu-overlay').removeClass('active');
  });
  // Function to trigger animations for tab content
  function triggerTabAnimations(tabContent) {
    const animatedElements = tabContent.querySelectorAll('[data-animate]');

    animatedElements.forEach((element, index) => {
      setTimeout(() => {
        element.classList.add('animated');
      }, index * 300); // Stagger animations by 300ms
    });
  }
  // end header

  function animateOnScroll() {
    // Get all animated elements
    const elements = document.querySelectorAll('[data-animate]');
    const windowHeight = window.innerHeight;
    const triggerOffset = 150;

    elements.forEach(el => {
      // Check if element is in viewport
      const positionFromTop = el.getBoundingClientRect().top;

      if (positionFromTop < windowHeight - triggerOffset) {
        // Check if element is in an active tab
        const tabContent = el.closest('.tab-content-intro, .tab-content-team, .tab-content-ecoSystem');

        if (tabContent) {
          // Only animate if the tab is active
          if (tabContent.classList.contains('active')) {
            el.classList.add('animated');
          }
        } else {
          // For elements outside tabs, animate normally
          el.classList.add('animated');
        }
      }
    });
  }

  // Make triggerTabAnimations globally available
  window.triggerTabAnimations = triggerTabAnimations;

  window.addEventListener('scroll', animateOnScroll);
  window.addEventListener('load', animateOnScroll);


});

$(document).ready(function () {
  $('.tab-content-2, .tab-content-3').hide();
  $('.tab-content-1').show();
  $('.tabs-menu-item').on('click', function (e) {
    e.preventDefault();

    const $clickedTab = $(this);
    const $allTabs = $('.tabs-menu-item');
    const $allTabContents = $('.tab-content-1, .tab-content-2, .tab-content-3');
    if ($clickedTab.hasClass('active')) {
      return;
    }
    let targetContent;
    if ($clickedTab.hasClass('tab-title-1')) {
      targetContent = $('.tab-content-1');
    } else if ($clickedTab.hasClass('tab-title-2')) {
      targetContent = $('.tab-content-2');
    } else if ($clickedTab.hasClass('tab-title-3')) {
      targetContent = $('.tab-content-3');
    }
    $allTabs.removeClass('active');
    $clickedTab.addClass('active');
    $allTabContents.fadeOut(0, function () {
      $('div.aos-init.aos-animate').removeClass('aos-animate');
      targetContent.fadeIn(0, function () {
        AOS.refresh();
      });
    });

    $('.tabs-menu-item').hover(
      function () {
        $(this).addClass('hover-effect');
      },
      function () {
        $(this).removeClass('hover-effect');
      }
    );

    $(document).on('keydown', function (e) {
      const $activeTabs = $('.tabs-menu-item.active');
      let $nextTab;

      if (e.keyCode === 37) {
        // Left arrow
        $nextTab = $activeTabs.prev('.tabs-menu-item');
        if ($nextTab.length === 0) {
          $nextTab = $('.tabs-menu-item').last();
        }
        $nextTab.trigger('click');
      } else if (e.keyCode === 39) {
        // Right arrow
        $nextTab = $activeTabs.next('.tabs-menu-item');
        if ($nextTab.length === 0) {
          $nextTab = $('.tabs-menu-item').first();
        }
        $nextTab.trigger('click');
      }
    });
  });
});
