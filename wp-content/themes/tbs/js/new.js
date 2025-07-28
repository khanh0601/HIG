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
