<?php
/**
 * Template Name: Văn hóa tập đoàn
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
wp_enqueue_style('van-hoa-style', get_template_directory_uri() . '/css/van-hoa-tap-doan.css', array(), '2.3.1');
get_header();
?>
<section class="hero-banner position-relative">
      <img
        src="/wp-content/uploads/2025/07/banner.gif"
        alt="Banner"
        class="w-100 img-banner"
      />
      <div class="hero-content container text-left text-white">
        <h5 class="fs-36">Văn Hoá Tập Đoàn</h5>
        <h1 class="fs-64" id="bannerTitle">Văn Hoá<br />Doanh Nghiệp</h1>
      </div>
      <nav class="tabs-menu">
        <ul class="tabs-menu-wrapper">
          <li class="tabs-menu-item tab-title-1 active">
            <a href="javascript:void(0)" class="tabs-menu-item-link fs-18"
              >Văn Hóa Doanh Nghiệp</a
            >
          </li>
          <li class="tabs-menu-item tab-title-2">
            <a href="javascript:void(0)" class="tabs-menu-item-link fs-18"
              >Trách Nhiệm Xã Hội</a
            >
          </li>
          <li class="tabs-menu-item tab-title-3">
            <a href="javascript:void(0)" class="tabs-menu-item-link fs-18"
              >Đối Tác & Khách Hàng</a
            >
          </li>
        </ul>
      </nav>
    </section>
    <div class="tab-content-1">
      <div class="highway-container">
        <div class="highway-overlay"></div>
        <div class="container">
          <div class="highway-content" data-aos="fade-up">
            <div class="highway-header">
              <div class="highway-title-section">
                <h1 class="highway-main-title section-title">
                  HIGHWAY - Con đường rộng mở cho những hành trình vươn xa
                </h1>
              </div>

              <div class="highway-description-section">
                <div class="highway-description">
                  Văn hóa doanh nghiệp tại H Đông Dương không chỉ là tập hợp các
                  giá trị mà còn là nền tảng vững chắc để xây dựng tương lai.
                  Một “cao tốc” để có thể đi nhanh và đi xa phải được kiến tạo
                  trên nền móng bền vững và chắc chắn, cũng giống như cách chúng
                  tôi theo đuổi triết lý tạo giá trị dài hạn, phát triển bền
                  vững và đồng hành cùng nhau tiến xa hơn mỗi ngày.
                </div>

                <div class="highway-vision">
                  Mỗi chữ cái là một lời cam kết, mỗi hành động là một phần của
                  hành trình kiến tạo nên những giá trị khác biệt.
                </div>
              </div>
            </div>

            <!-- <div class="highway-footer">
              <div class="highway-footer-text">
                Văn hóa HIGHWAY không chỉ được thể hiện bằng tài năng mà được
                lan tỏa qua từng hành vi, quyết định và dự án mà HIG để lại
                trong lòng dự án, từng con người.
              </div>
            </div> -->
          </div>
        </div>
        <div class="highway-watermark">
          <div class="highway-watermark-item">
            <img src="/wp-content/uploads/2025/07/logo-white.png" alt="" />
            <div>HIGHWAY</div>
          </div>
        </div>
      </div>

      <div class="highway-blocks">
        <span class="highway-block-text" data-aos="fade-down">
          <div class="container">
            Văn hóa HIGHWAY không chỉ được thể hiện bằng lời nói, mà được lan
            tỏa qua từng hành vi, quyết định và dấu ấn mà HIG để lại trong từng
            dự án, từng con người.
          </div>
        </span>
        <div class="highway-block flip-card" data-aos="fade-up">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <div class="flip-card-bg-image"></div>
              <div class="highway-block-char">H</div>
              <div class="highway-block-category">Harmony</div>
              <div class="highway-block-title">Hài hòa & Đồng lòng</div>
            </div>
            <div class="flip-card-back">
              <div class="flip-card-bg-image"></div>
              <div class="highway-block-category">Harmony</div>
              <div class="highway-block-title">Hài hòa & Đồng lòng</div>
              <div class="highway-block-description">
                Chúng tôi đề cao sự đoàn kết nội bộ và sự phối hợp chặt chẽ giữa
                các đơn vị thành viên. Mọi cá nhân đều là một phần không thể
                thiếu trong hành trình phát triển chung, cùng tạo nên giá trị
                toàn diện và hài hòa với cộng đồng, môi trường và xã hội.
              </div>
            </div>
          </div>
        </div>
        <div class="highway-block flip-card" data-aos="fade-up">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <div class="flip-card-bg-image"></div>
              <div class="highway-block-char">I</div>
              <div class="highway-block-category">Integrity</div>
              <div class="highway-block-title">Chính trực & Trách nhiệm</div>
            </div>
            <div class="flip-card-back">
              <div class="flip-card-bg-image"></div>
              <div class="highway-block-category">Integrity</div>
              <div class="highway-block-title">
                Chính trực & Trách nhiệm
              </div>
              <div class="highway-block-description">
                Luôn trung thực, minh bạch và tuân thủ đạo đức nghề nghiệp trong
                mọi hành vi và quyết định. Chúng tôi cam kết nói đúng, làm đúng
                và giữ đúng lời hứa với đối tác, khách hàng và đồng nghiệp.
              </div>
            </div>
          </div>
        </div>
        <div class="highway-block flip-card" data-aos="fade-up">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <div class="flip-card-bg-image"></div>
              <div class="highway-block-char">G</div>
              <div class="highway-block-category">Growth</div>
              <div class="highway-block-title">Phát triển không ngừng</div>
            </div>
            <div class="flip-card-back">
              <div class="flip-card-bg-image"></div>
              <div class="highway-block-category">Growth</div>
              <div class="highway-block-title">Phát triển không ngừng</div>
              <div class="highway-block-description">
                Chúng tôi coi trọng tinh thần học hỏi, đổi mới và cầu tiến. Mỗi
                thành viên HIG đều có cơ hội phát triển nghề nghiệp và cá nhân
                trong một môi trường khuyến khích sáng tạo, tư duy chiến lược và
                khát vọng vươn tầm.
              </div>
            </div>
          </div>
        </div>
        <div class="highway-block flip-card" data-aos="fade-up">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <div class="flip-card-bg-image"></div>
              <div class="highway-block-char">H</div>
              <div class="highway-block-category">Humanity</div>
              <div class="highway-block-title">Nhân văn</div>
            </div>
            <div class="flip-card-back">
              <div class="flip-card-bg-image"></div>
              <div class="highway-block-category">Humanity</div>
              <div class="highway-block-title">Nhân văn</div>
              <div class="highway-block-description">
                Chúng tôi luôn đặt con người trong mọi quyết định và hành động
                với mục tiêu không chỉ triển khai các dự án thành công, mà còn
                lan toả những giá trị tốt đẹp đến cộng đồng và góp phần cải
                thiện chất lượng cuộc sống một cách bền vững.
              </div>
            </div>
          </div>
        </div>
        <div class="highway-block flip-card" data-aos="fade-up">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <div class="flip-card-bg-image"></div>
              <div class="highway-block-char">W</div>
              <div class="highway-block-category">Win Together</div>
              <div class="highway-block-title">Chiến thắng cùng nhau</div>
            </div>
            <div class="flip-card-back">
              <div class="flip-card-bg-image"></div>
              <div class="highway-block-category">Win Together</div>
              <div class="highway-block-title">Chiến thắng cùng nhau</div>
              <div class="highway-block-description">
                HIG tin vào nguyên tắc "win-win" trong mọi mối quan hệ hợp tác.
                Thành công của khách hàng, đối tác và cộng đồng cũng chính là
                thành công của chúng tôi. Cùng nhau, chúng ta kiến tạo nên những
                giá trị bền vững.
              </div>
            </div>
          </div>
        </div>
        <div class="highway-block flip-card" data-aos="fade-up">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <div class="flip-card-bg-image"></div>
              <div class="highway-block-char">A</div>
              <div class="highway-block-category">Accountability</div>
              <div class="highway-block-title">Làm chủ & Cam kết</div>
            </div>
            <div class="flip-card-back">
              <div class="flip-card-bg-image"></div>
              <div class="highway-block-category">Accountability</div>
              <div class="highway-block-title">Làm chủ & Cam kết</div>
              <div class="highway-block-description">
                Chúng tôi làm việc với tinh thần trách nhiệm cao nhất: 
                dám nghĩ - dám làm - dám chịu trách nhiệm. Chủ động trong hành động, 
                không đổ lỗi, không thoái thác và luôn tìm giải pháp tối ưu để 
                đạt mục tiêu đã đề ra.
              </div>
            </div>
          </div>
        </div>
        <div class="highway-block flip-card" data-aos="fade-up">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <div class="flip-card-bg-image"></div>
              <div class="highway-block-char">Y</div>
              <div class="highway-block-category">Yes to Challenge</div>
              <div class="highway-block-title">Sẵn sàng vượt giới hạn</div>
            </div>
            <div class="flip-card-back">
              <div class="flip-card-bg-image"></div>
              <div class="highway-block-category">Yes to Challenge</div>
              <div class="highway-block-title">Sẵn sàng vượt giới hạn</div>
              <div class="highway-block-description">
                Luôn giữ tinh thần tích cực và đón nhận thử thách như những cơ
                hội để bứt phá. HIG khuyến khích sự dũng cảm, linh hoạt và khả
                năng thích nghi trước mọi thay đổi của thị trường và môi trường
                kinh doanh.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-content-2">
      <div class="intro-section base-section">
        <div class="intro-section-bg"></div>
        <div class="container" data-aos="fade-up">
          <div class="intro-section-title section-title">
            Chúng tôi xác định rõ
          </div>
          <div class="intro-section-description">
            Phát triển kinh doanh phải gắn liền với phát triển cộng đồng, bảo vệ
            môi trường và giữ gìn giá trị văn hóa - xã hội.
            <br />
            <br />
            Đây không chỉ là định hướng chiến lược mà còn là lời cam kết dài hạn
            thể hiện tinh thần trách nhiệm và tầm nhìn của một doanh nghiệp phát
            triển bền vững.
          </div>
        </div>
      </div>
      <div class="development-section base-section">
        <div class="container">
          <div class="development-section-title" data-aos="fade-up">
            PHÁT TRIỂN BỀN VỮNG
          </div>
          <div
            class="development-section-sub"
            data-aos="fade-up"
            data-aos-duration="2000"
            data-aos-delay="100"
          >
            <div class="development-section-sub-title section-title">
              Từ triết lý đến hành động
            </div>
            <div class="development-section-sub-description">
              Chúng tôi cam kết triển khai các dự án và hoạt động kinh doanh dựa
              trên ba trụ cột
            </div>
          </div>
          <div class="development-section-boxes">
            <div
              class="development-section-box"
              data-aos="fade-up"
              data-aos-duration="2000"
              data-aos-delay="100"
            >
              <div class="development-section-box-bg">
                <img
                  src="/wp-content/uploads/2025/07/icon-development-1.png"
                  alt=""
                />
              </div>
              <div class="development-section-box-icon">
                <img
                  src="/wp-content/uploads/2025/07/icon-development-1.png"
                  alt=""
                />
              </div>
              <div class="development-section-box-text-title">Kinh tế</div>
              <div class="development-section-box-text-description">
                Tạo ra giá trị thực cho khách hàng, nhà đầu tư và đối tác; đảm
                bảo hiệu quả tài chính và sự minh bạch trong mọi giao dịch.
              </div>
            </div>
            <div
              class="development-section-box"
              data-aos="fade-up"
              data-aos-duration="2000"
              data-aos-delay="300"
            >
              <div class="development-section-box-bg">
                <img
                  src="/wp-content/uploads/2025/07/icon-development-2.png"
                  alt=""
                />
              </div>
              <div class="development-section-box-icon">
                <img
                  src="/wp-content/uploads/2025/07/icon-development-2.png"
                  alt=""
                />
              </div>
              <div class="development-section-box-text-title">Xã hội</div>
              <div class="development-section-box-text-description">
                Góp phần nâng cao chất lượng sống, thúc đẩy phát triển địa
                phương nơi Tập đoàn H Đông Dương đầu tư và hoạt động.
              </div>
            </div>
            <div
              class="development-section-box"
              data-aos="fade-up"
              data-aos-duration="2000"
              data-aos-delay="500"
            >
              <div class="development-section-box-bg">
                <img
                  src="/wp-content/uploads/2025/07/icon-development-3.png"
                  alt=""
                />
              </div>

              <div class="development-section-box-icon">
                <img
                  src="/wp-content/uploads/2025/07/icon-development-3.png"
                  alt=""
                />
              </div>
              <div class="development-section-box-text-title">Môi trường</div>
              <div class="development-section-box-text-description">
                Tôn trọng và gìn giữ môi trường tự nhiên, hướng đến tiêu chuẩn
                phát triển xanh - sạch - hiện đại.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="community-section">
        <div class="community-section-bg"></div>
        <div class="container">
          <div class="community-section-head" data-aos="fade-up">
            <div class="community-section-title section-title">
              Trách nhiệm với <br>cộng đồng
            </div>
            <div class="community-section-description">
              Tập đoàn H Đông Dương thường xuyên triển khai các chương trình
              hành động cộng đồng có chiều sâu và thực tế, cụ thể
            </div>
          </div>
          <div
            class="community-section-box option-1"
            data-aos="fade-up"
            data-aos-duration="2000"
            data-aos-delay="400"
          >
            <div class="community-section-box-buttons">
              <div class="community-section-box-button option-1 selected">
                <div class="community-section-box-button-icon">
                  <img src="/wp-content/uploads/2025/07/building.png" alt="" />
                  <div class="community-section-box-button-icon-line"></div>
                </div>
                <div class="community-section-box-button-text">
                  Đồng hành với các địa phương trong xây dựng cơ sở hạ tầng và
                  cải thiện chất lượng sống cho người dân.
                </div>
              </div>
              <div class="community-section-box-button option-2">
                <div class="community-section-box-button-icon">
                  <img src="/wp-content/uploads/2025/07/agreement.png" alt="" />
                  <div class="community-section-box-button-icon-line"></div>
                </div>
                <div class="community-section-box-button-text">
                  Hợp tác với chính quyền và tổ chức xã hội để nâng cao nhận
                  thức cộng đồng về môi trường và phát triển bền vững.
                </div>
              </div>
            </div>
            <div class="community-section-box-circle">
              <div class="community-section-box-circle-1"></div>
              <div class="community-section-box-circle-2"></div>
            </div>
            <div class="community-section-box-buttons">
              <div class="community-section-box-button option-3">
                <div class="community-section-box-button-icon">
                  <img src="/wp-content/uploads/2025/07/culture.png" alt="" />
                  <div class="community-section-box-button-icon-line"></div>
                </div>
                <div class="community-section-box-button-text">
                  Tài trợ và phối hợp tổ chức các hoạt động thiện nguyện, học
                  bổng giáo dục, hỗ trợ vùng sâu vùng xa.
                </div>
              </div>
              <div class="community-section-box-button option-4">
                <div class="community-section-box-button-icon">
                  <img src="/wp-content/uploads/2025/07/users.png" alt="" />
                  <div class="community-section-box-button-icon-line"></div>
                </div>
                <div class="community-section-box-button-text">
                  Ưu tiên tuyển dụng lao động tại địa phương và đào tạo nghề cho
                  người dân sinh sống gần dự án.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="quote-section">
        <div class="quote-section-bg"></div>
        <div class="container">
          <div class="quote-section-content">
            <img
              class="quote-section-content-image"
              src="/wp-content/uploads/2025/07/quote-left.png"
              alt=""
              data-aos="fade-right"
            />
            <div class="quote-section-content-text" data-aos="fade-up">
              Với định hướng lấy phát triển bền vững làm trung tâm, Tập đoàn H
              Đông Dương cam kết không ngừng đổi mới và tiên phong trong những
              thay đổi mang hướng tích cực, không chỉ cho khách hàng mà còn cho
              cộng đồng và thế hệ tương lai.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-content-3">
      <div class="partner-intro-section base-section">
        <div class="container" data-aos="fade-up">
          <div class="partner-intro-section-title section-title">
            Tại H Đông Dương,<br />chúng tôi xác định rằng
          </div>
          <div class="partner-intro-section-description">
            Đối tác chiến lược không đơn thuần là người đồng hành, mà chính là
            những mắt xích quan trọng trong quá trình mở rộng hệ sinh thái đầu
            tư, gia tăng giá trị dài hạn và tạo nên những lợi thế cạnh tranh bền
            vững.
            <br />
            <br />
            Trong bối cảnh thị trường ngày càng toàn cầu hóa, năng lực phát
            triển của một tập đoàn không chỉ nằm ở nội lực tài chính hay đội ngũ
            quản trị, mà còn ở khả năng liên kết giá trị, chia sẻ tầm nhìn &
            đồng kiến tạo cơ hội với các đối tác uy tín trong và ngoài nước.
            <br /><br />
            Với triết lý "Đồng hành kiến tạo - Gắn kết vươn xa", H Đông Dương
            luôn trân trọng và cam kết xây dựng quan hệ hợp tác bền vững, minh
            bạch và đôi bên cùng phát triển với các đối tác chiến lược trên hành
            trình chinh phục những cột mốc mới.
          </div>
        </div>
      </div>
      <div class="partner-list-section">
        <div class="container">
          <div
            class="partner-list-section-title section-title"
            data-aos="fade-up"
          >
            Đối tác của chúng tôi
          </div>
          <div class="partner-list-section-items partner-list-section-items-1">
            <img
              src="/wp-content/uploads/2025/07/partner-land.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
            <img
              src="/wp-content/uploads/2025/07/partner-gs.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
            <img
              src="/wp-content/uploads/2025/07/partner-parkcity.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
          </div>
          <div class="partner-list-section-items partner-list-section-items-2">
            <img
              src="/wp-content/uploads/2025/07/partner-vcp.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
            <img
              src="/wp-content/uploads/2025/07/partner-lienviet.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
            <img
              src="/wp-content/uploads/2025/07/partner-sac.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
            <img
              src="/wp-content/uploads/2025/07/partner-mb.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
            <img
              src="/wp-content/uploads/2025/07/partner-vietinbank.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
          </div>
          <div class="partner-list-section-items partner-list-section-items-3">
            <img
              src="/wp-content/uploads/2025/07/partner-comba.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
            <img
              src="/wp-content/uploads/2025/07/partner-huawei.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
            <img
              src="/wp-content/uploads/2025/07/partner-viettel.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
            <img
              src="/wp-content/uploads/2025/07/partner-mobi.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />

            <img
              src="/wp-content/uploads/2025/07/partner-vina.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
          </div>
        </div>
      </div>
      <div class="partner-marquee-container">
        <div class="partner-marquee-bg"></div>
        <div class="partner-marquee">
          <div class="partner-marquee-text">
            ĐỒNG HÀNH KIẾN TẠO - VỮNG BƯỚC VƯƠN XA
          </div>
        </div>
      </div>
      <div class="client-list-section">
        <div class="container">
          <div
            class="client-list-section-title section-title"
            data-aos="fade-up"
          >
            Khách hàng của chúng tôi
          </div>
          <div class="partner-list-section-items partner-list-section-items-1">
            <img
              src="/wp-content/uploads/2025/07/partner-land.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
            <img
              src="/wp-content/uploads/2025/07/partner-gs.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
            <img
              src="/wp-content/uploads/2025/07/partner-parkcity.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
          </div>
          <div class="partner-list-section-items partner-list-section-items-2">
            <img
              src="/wp-content/uploads/2025/07/partner-vcp.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
            <img
              src="/wp-content/uploads/2025/07/partner-lienviet.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
            <img
              src="/wp-content/uploads/2025/07/partner-sac.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
            <img
              src="/wp-content/uploads/2025/07/partner-mb.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
            <img
              src="/wp-content/uploads/2025/07/partner-vietinbank.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
          </div>
          <div class="partner-list-section-items partner-list-section-items-3">
            <img
              src="/wp-content/uploads/2025/07/partner-comba.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
            <img
              src="/wp-content/uploads/2025/07/partner-huawei.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
            <img
              src="/wp-content/uploads/2025/07/partner-viettel.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
            <img
              src="/wp-content/uploads/2025/07/partner-mobi.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />

            <img
              src="/wp-content/uploads/2025/07/partner-vina.png"
              alt=""
              class="partner-list-section-item"
              data-aos="zoom-in"
              data-aos-duration="2000"
            />
          </div>
        </div>
      </div>
    </div>
    
<?php get_footer(); ?>
<script>
  function Marquee(selector, speed) {
  const parentSelector = document.querySelector(selector);
  const clone = parentSelector.innerHTML;
  const firstElement = parentSelector.children[0];
  let i = 0;

  const cloneTimes = 20;
  for (let i = 0; i < cloneTimes; i++) {
    parentSelector.insertAdjacentHTML('beforeend', clone);
  }

  setInterval(function () {
    firstElement.style.marginLeft = `-${i}px`;
    if (i > firstElement.clientWidth * cloneTimes) {
      i = 0;
    }
    i = i + speed;
  }, 0);
}

$(document).ready(function () {
  AOS.init({
    duration: 1000,
    offset: 100,
  });

  $('.tabs-menu-item-link').click(function () {
    console.log('Tab clicked:', $(this).attr('href'));
    console.log('Text:', $(this).text());
    var navText = $(this).text();
    $('#bannerTitle').text(navText);
  });

  Marquee('.highway-watermark', 0.7);
  Marquee('.partner-marquee', 1);

  $('.community-section-box-button').click(function () {
    // Remove 'selected' class from all buttons
    $('.community-section-box-button').removeClass('selected');

    // Add 'selected' class to clicked button
    $(this).addClass('selected');

    // Get the option class (option-1, option-2, etc.) from clicked button
    let optionClass = $(this)
      .attr('class')
      .split(' ')
      .find(cls => cls.startsWith('option-'));

    // Remove any existing option classes from parent
    $('.community-section-box').removeClass(function (index, className) {
      return (className.match(/option-\d/g) || []).join(' ');
    });

    // Add the corresponding option class to parent
    $('.community-section-box').addClass(optionClass);
  });

  $('.flip-card').on('click', function () {
    $(this).toggleClass('show');
  });
});
</script>