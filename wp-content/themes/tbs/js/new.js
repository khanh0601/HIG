$(document).ready(function () {
  // 1. Khi người dùng click vào tab
  $('.new__hero__menu__item').on('click', function (e) {
    e.preventDefault();
    const attr = $(this).attr('data-tab');
    $('.new__hero__menu__item').removeClass('active');
    $(this).addClass('active');
    $('.new_content_item').fadeOut();
    $('.new_content_item[data-tab="' + attr + '"]').fadeIn();
    $('.new__hero__content__smalltitle').fadeOut();
    $('.new__hero__content__smalltitle[data-tab="' + attr + '"]').fadeIn();
  });

  // 2. Khi trang load: kiểm tra URL để chọn tab tương ứng
  const urlParams = new URLSearchParams(window.location.search);
    const tabParam = urlParams.get('tab');

  let tabToActivate = null;

  if (tabParam === 'truyen-thong') {
    tabToActivate = 'news';
  } else if (tabParam === 'su-kien') {
    tabToActivate = 'event';
  } else if (urlParams.has('news_page')) {
    tabToActivate = 'news';
  } else if (urlParams.has('event_page')) {
    tabToActivate = 'event';
  }

  if (tabToActivate) {
    document.querySelectorAll('.new__hero__menu__item').forEach(item => item.classList.remove('active'));
    const activeMenuItem = document.querySelector(`.new__hero__menu__item[data-tab="${tabToActivate}"]`);
    if (activeMenuItem) activeMenuItem.classList.add('active');

    document.querySelectorAll('.new_content_item').forEach(item => item.classList.remove('active'));
    const activeContentItem = document.querySelector(`.new_content_item[data-tab="${tabToActivate}"]`);
    if (activeContentItem) activeContentItem.classList.add('active');
  }

  if (urlParams.has('event_page')) {
    // Active tab SỰ KIỆN
    $('.new__hero__menu__item').removeClass('active');
    $('.new__hero__menu__item[data-tab="event"]').addClass('active');
    $('.new_content_item').removeClass('active');
    $('.new_content_item[data-tab="event"]').addClass('active');
  } else if (urlParams.has('news_page')) {
    // Active tab TRUYỀN THÔNG (nếu muốn, có thể thêm đoạn này cho đồng nhất)
    $('.new__hero__menu__item').removeClass('active');
    $('.new__hero__menu__item[data-tab="news"]').addClass('active');
    $('.new_content_item').removeClass('active');
    $('.new_content_item[data-tab="news"]').addClass('active');
  }
});
