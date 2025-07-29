$(document).ready(function() {
const viewport = {
  w: window.innerWidth,
  h: window.innerHeight,
};
function projectHero() {
  let lastIndex = 0;
  let scrollbar = $(window).width() > 767 ? ".project_hero_control_progress.hidden-mob" : '.project_hero_swiper .project_hero_control_progress';
  let swiperHero = new Swiper(".project_hero_swiper", {
    slidesPerView: 1,
    spaceBetween: parseRem(20),
    scrollbar: {
      el: scrollbar,
    },
    navigation: {
      nextEl: ".project_hero_control_next",
      prevEl: ".project_hero_control_prev",
    },
    on: {
      slideChange: function () {
        activeTitle(this.activeIndex)
        lastIndex = this.activeIndex;
        const activeSlide = this.slides[this.activeIndex];
        let dataTitle = $(activeSlide).attr('data-title');
        $('.project_hero_content_btn').attr('data-scroll', dataTitle);
        console.log('Slide changed! Index hiện tại là:', this.activeIndex);
      }
    }
  });
  let title = new SplitType('.project_hero_content_title', { types: 'lines, words', lineClass: 'klc-line' })
  let sub = new SplitType('.project_hero_content_sub', { types: 'lines, words', lineClass: 'kl-line' })
  let label = new SplitType('.project_hero_content_label', { types: 'lines, words', lineClass: 'kl-line' })
  gsap.set('.project_hero_content_title .word', { yPercent: 101, autoAlpha: 0 })
  gsap.set('.project_hero_content_sub .word', { yPercent: 100 })
  gsap.set('.project_hero_content_label .word', { yPercent: 100 })
  gsap.set('.project_hero_content_btn ', { y: 40, autoAlpha: 0 })
  gsap.set('.project_hero_control ', { y: 40, autoAlpha: 0 })
  gsap.set('.project_hero_content_btn ', { y: 40, autoAlpha: 0 })
  gsap.set('.project_hero_swiper_slide ', { x: -40, autoAlpha: 0 })
  gsap.set('.project_hero_bg_inner.active ', { scale: 1.3 })
  let height = $('.project_hero_content_title').eq(0).outerHeight(true);
  $('.project_hero_content_title_wrap').height(height);
  function activeTitle(index) {
    let height = $('.project_hero_content_title').eq(index).outerHeight(true);
    $('.project_hero_bg_inner').removeClass('active');
    $('.project_hero_bg_inner').eq(index).addClass('active');
    gsap.fromTo($('.project_hero_bg_inner').eq(index).find('img'), { scale: 1.3 }, { scale: 1, duration: 1, easing: 'power4.in' })
    $('.project_hero_content_title_wrap').height(height);
    if (index > lastIndex) {
      gsap.to('.project_hero_content_title.active .word', { yPercent: -100, autoAlpha: 0, stagger: .025 })
      gsap.to($('.project_hero_content_title').eq(index).find('.word'), { yPercent: 0, autoAlpha: 1, stagger: .025 })
    }
    else {
      gsap.to('.project_hero_content_title.active .word', { yPercent: 100, autoAlpha: 0, stagger: .025 })
      gsap.to($('.project_hero_content_title').eq(index).find('.word'), { yPercent: 0, autoAlpha: 1, stagger: .025 })
    }
    $('.project_hero_content_title').removeClass('active')
    $('.project_hero_content_title').eq(index).addClass('active')
  }
  let tl = new gsap.timeline({
    onStart: () => {
      $('.df_hide_onload').removeClass('df_hide_onload');
    },
  });
  tl
    .to('.project_hero_content_label .word', { yPercent: 0, duration: .6, stagger: .02 })
    .to('.project_hero_content_title:first-child .word', { yPercent: 0, autoAlpha: 1, duration: .6, stagger: .025 }, '<=.4')
    .to('.project_hero_bg_inner.active', { scale: 1, duration: 2 }, '<=0')
    .to('.project_hero_content_sub .word', { yPercent: 0, duration: .4, stagger: .015 }, '<=.2')
    .to('.project_hero_swiper_slide', { x: 0, autoAlpha: 1, duration: .6, stagger: .1 }, '<=0')
    .to('.project_hero_content_btn', { y: 0, autoAlpha: 1, duration: .6, stagger: .015 }, '<=0')
    .to('.project_hero_control', { y: 0, autoAlpha: 1, duration: .6, stagger: .015 }, '<=.2')
}
projectHero();
function projectIntro() {
  new MasterTimeline({
    triggerInit: '.project__intro',
    scrollTrigger: { trigger: '.project__intro' },
    tweenArr: [
      new ScaleInset({ el: $('.project__intro__left ').get(0) }),
      new FadeSplitText({ el: $('.project__intro__right__subtitle').get(0), onMask: true, headingType: true }),
      new FadeSplitText({ el: $('.project__intro__right__smalltitle').get(0), onMask: true, headingType: true }),
      ...$('.project__intro__right__des p').map((idx, el) => new FadeIn({ el: el })),
    ]
  })
}
projectIntro();
function projectIntroShow() {
  new MasterTimeline({
    triggerInit: this.triggerEl,
    scrollTrigger: { trigger: '.project__intro__show' },
    tweenArr: [
      new FadeSplitText({ el: $('.project__intro__show__title').get(0), onMask: true, headingType: true }),
    ]
  })
  $('.project__intro__show__card').each((idx, item) => {

    new MasterTimeline({
      triggerInit: item,
      scrollTrigger: { trigger: item },
      tweenArr: [
        new FadeIn({ el: item }),
        new ScaleInset({ el: $(item).find('.project__intro__show__card__img').get(0) }),
        ...$(item).find('.project__intro__show__card__des p').map((idx, el) => new FadeSplitText({ el: el })),
      ]
    })
  })
}
projectIntroShow();
function projectRealstate() {
  $('.project__realestate__menu__item ').each((idx, item) => {
    new MasterTimeline({
      triggerInit: item,
      scrollTrigger: { trigger: item },
      tweenArr: [
        new FadeSplitText({ el: $(item).find('span').get(0), onMask: true })
      ]
    })
  })
  new MasterTimeline({
    triggerInit: '.project__realestate',
    scrollTrigger: { trigger: '.project__realestate' },
    tweenArr: [
      new FadeSplitText({ el: $('.project__realestate__subtitle').get(0), onMask: true }),
    ]
  })
  let lastIndex = 0;
  let title = new SplitType('.project__realestate__smalltitle', { types: 'lines, words', lineClass: 'kl-line' })
  gsap.set('.project__realestate__smalltitle .word', { yPercent: 100, autoAlpha: 0 });
  let tl = new gsap.timeline({
    scrollTrigger: {
      trigger: '.project__realestate',
      start: 'top top+=65%',
    },
  })
  tl.to('.project__realestate__smalltitle:first-child .word', { yPercent: 0, autoAlpha: 1 })
  .fromTo('.project__realestate__title__bg', {autoAlpha: 0, scale: .9}, {autoAlpha:1, scale: 1, duration: 1.4})
   $('.project__realestate__detail__item ').each((idx, item) => {
    let tlItem = gsap.timeline({
      scrollTrigger: {
                    trigger: item,
                    start: 'top top+=70%',
      }, 
      onComplete: () => {
          $(item).find('.project__realestate__detail__item__img img').addClass('active');
          console.log('khanh')
        }
    })
    new MasterTimeline({
      triggerInit: item,
      scrollTrigger: { trigger: item },
      timeline: tlItem,
      tweenArr: [
        new FadeIn({el: item}),
        new ScaleInset({ el: $(item).find('.project__realestate__detail__item__img').get(0) }),
        new FadeSplitText({ el: $(item).find('.project__realestate__detail__item__des__subtitle').get(0), onMask: true, delay: .2}),
        new FadeSplitText({ el: $(item).find('.project__realestate__detail__item__des__locate').get(0), onMask: true}),
        new FadeSplitText({ el: $(item).find('.project__realestate__detail__item__des__link').get(0), onMask: true})
      ]
    })
  })
  function activeTitle(index) {
    if (index > lastIndex) {
      gsap.to('.project__realestate__smalltitle.active .word', { yPercent: -100, autoAlpha: 1, stagger: .025 })
      gsap.to($('.project__realestate__smalltitle').eq(index).find('.word'), { yPercent: 0, autoAlpha: 1, stagger: .025 })
    }
    else {
      gsap.to('.project__realestate__smalltitle.active .word', { yPercent: 100, autoAlpha: 0, stagger: .025 })
      gsap.to($('.project__realestate__smalltitle').eq(index).find('.word'), { yPercent: 0, autoAlpha: 1, stagger: .025 })
    }
    $('.project__realestate__smalltitle').removeClass('active')
    $('.project__realestate__smalltitle').eq(index).addClass('active')
  }
  $('.project__realestate__menu__item').on('click', function () {
    let index = $(this).index();
    lastIndex = index;
    $('.project__realestate__menu__item').removeClass('active')
    $(this).addClass('active');
    activeTitle(index);
    $('.project__realestate__detail__inner').removeClass('active');
    $('.project__realestate__detail__inner').eq(index).addClass('active');
    $('.project__realestate__detail__inner.active').show(500);
  })
  if ($(window).width() < 991) {
    $('.project__realestate__menu').addClass('swiper')
    $('.project__realestate__menu__inner').addClass('swiper-wrapper')
    $('.project__realestate__menu__item').addClass('swiper-slide');
    let swiperTab = new Swiper(".project__realestate__menu", {
      slidesPerView: 'auto'
    });
  }
}
projectRealstate();
function projectCTA() {
    new MasterTimeline({
    triggerInit: '.project__cta',
    scrollTrigger: { trigger: '.project__cta' },
    tweenArr: [
      new FadeSplitText({ el: $('.project__cta__subtitle').get(0), onMask: true }),
      new FadeSplitText({ el: $('.project__cta__smalltitle').get(0), onMask: true }),
      new FadeSplitText({ el: $('.project__cta__des').get(0), onMask: true }),
      new FadeIn ({el: '.project__cta__right__contact'})
    ]
  })
}

projectCTA();
});