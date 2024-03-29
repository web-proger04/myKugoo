<?php
$db = new PDO("mysql:host=localhost;dbname=mykugoo", "root", "");

// карточки товара
$infoCard = [];

if ($query = $db->query("SELECT * FROM `info-card`")) {
   $infoCard = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
   print_r($db->errorInfo());
}

// статьи в блоге
$infoBlogArticles = [];

if ($query = $db->query("SELECT * FROM `blog-articles`")) {
   $infoBlogArticles = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
   print_r($db->errorInfo());
}

// частые вопросы
$infoQuestions = [];

if ($query = $db->query("SELECT * FROM `questions`")) {
   $infoQuestions = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
   print_r($db->errorInfo());
}

// популярные товары
$infoPopularProducts = [];

if ($query = $db->query("SELECT * FROM `popular-product`")) {
   $infoPopularProducts = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
   print_r($db->errorInfo());
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kugoo</title>
   <link rel="icon" href="/img/logo/Kugoo.svg" type="image/svg">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&family=Roboto:ital,wght@0,300;0,500;0,700;1,400&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="/css/global.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
   <script defer src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
   <script defer src="/js/basket.js"></script>
   <script defer src="/js/rowFeedbackSlider.js"></script>
   <script defer src="/js/sliderReviews.js"></script>
   <script defer src="/js/catalog-modal.js"></script>
   <script defer src="/js/pricesTabs.js"></script>
   <script defer src="/js/blogArticlesSlider.js"></script>
   <script defer src="/js/accordion.js"></script>
   <script defer src="/js/tel.js"></script>
   <script defer src="/js/tel-input.js"></script>
   <script defer src="/js/popups.js"></script>
</head>

<body>

   <!-- pages -->
   <div class="pages">

      <!-- header -->
      <header class="header">
         <div class="header__container container">
            <div class="header__top-header top-header">
               <nav class="top-header__menu">
                  <ul class="top-header__list">
                     <li class="top-header__item">
                        <a href="#" class="top-header__link underline">
                           Сервис
                        </a>
                     </li>
                     <li class="top-header__item">
                        <a href="#" class="top-header__link underline">
                           Сотрудничество
                        </a>
                     </li>
                     <li class="top-header__item">
                        <p class="top-header__text order-call underline">
                           Заказать звонок
                        </p>
                     </li>
                  </ul>
               </nav>
               <ul class="top-header__icons-link icons-link">
                  <li class="icons-link__item">
                     <a href="#">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <g clip-path="url(#clip0_213_955)">
                              <path
                                 d="M8.54256 9.03967C8.35957 9.22278 8.06282 9.22278 7.87971 9.03967L5.74959 6.90955C5.6617 6.82165 5.61226 6.70239 5.61226 6.57812C5.61226 6.45373 5.6617 6.33459 5.74959 6.24658L6.12825 5.86804L5.01607 4.75586L4.10493 5.66699C3.79829 5.97363 3.79842 6.47253 4.10493 6.77917L8.01009 10.6846C8.15767 10.8322 8.35518 10.9133 8.56624 10.9133C8.7773 10.9133 8.97481 10.832 9.12239 10.6844L10.0335 9.77344L8.92134 8.66113L8.54256 9.03967Z"
                                 fill="#5D6C7B" class="purple"></path>
                              <path
                                 d="M15.3276 5.64722C15.3276 4.14441 14.7388 2.72791 13.6692 1.65845C12.5997 0.588989 11.1832 0 9.68054 0H6.33447C6.33447 0 6.33447 0 6.33435 0C4.83179 0 3.41528 0.588989 2.34595 1.65833C1.27649 2.72778 0.6875 4.14441 0.6875 5.64709V8.27722C0.6875 9.44092 1.04248 10.5604 1.71411 11.5146C2.30664 12.3564 3.10352 13.0139 4.03259 13.4309V14.9417C4.03259 15.7228 4.46997 15.9999 4.84448 16C5.11206 16 5.37976 15.8679 5.64026 15.6075L7.32324 13.9243H9.68066C11.1833 13.9243 12.5999 13.3353 13.6693 12.2659C14.7388 11.1964 15.3278 9.77991 15.3278 8.27722L15.3276 5.64722ZM11.0293 10.1049L9.78662 11.3474C9.46191 11.6721 9.02905 11.8507 8.56763 11.8507C8.1062 11.8507 7.67334 11.672 7.34863 11.3474L3.44336 7.44202C2.77136 6.76978 2.77136 5.67615 3.44336 5.00403L4.68604 3.76147C4.77393 3.67346 4.89307 3.62415 5.01746 3.62415C5.14172 3.62415 5.26099 3.67346 5.34888 3.76147L7.12402 5.53662C7.21191 5.62451 7.26123 5.74377 7.26123 5.86804C7.26123 5.99231 7.21191 6.11157 7.1239 6.19946L6.74536 6.578L8.21265 8.04529L8.59131 7.66663C8.77441 7.48364 9.07117 7.48364 9.25415 7.66675L11.0293 9.44189C11.1173 9.52979 11.1666 9.64905 11.1666 9.77332C11.1666 9.89771 11.1173 10.017 11.0293 10.1049ZM7.65259 4.55066C7.65259 4.29187 7.86243 4.08191 8.12134 4.08191C9.74548 4.08191 11.0669 5.4032 11.0669 7.02722C11.0669 7.28613 10.8571 7.49597 10.5981 7.49597C10.3394 7.49597 10.1294 7.28613 10.1294 7.02722C10.1294 5.92017 9.22864 5.01941 8.12134 5.01941C7.86243 5.01941 7.65259 4.80957 7.65259 4.55066ZM12.6063 7.49622C12.3474 7.49622 12.1376 7.28625 12.1376 7.02747C12.1377 5.95459 11.7198 4.94604 10.9613 4.18738C10.2026 3.42883 9.19409 3.01099 8.12122 3.01099C7.86243 3.01099 7.65247 2.80115 7.65247 2.54224C7.65247 2.28345 7.86243 2.07349 8.12122 2.07349C9.44446 2.07349 10.6885 2.58887 11.6241 3.52454C12.5599 4.46021 13.0752 5.70422 13.0751 7.02747C13.0751 7.28625 12.8652 7.49622 12.6063 7.49622Z"
                                 fill="#5D6C7B" class="purple"></path>
                           </g>
                           <defs>
                              <clipPath id="clip0_213_955">
                                 <rect width="16" height="16" fill="white"></rect>
                              </clipPath>
                           </defs>
                        </svg>
                     </a>
                  </li>
                  <li class="icons-link__item">
                     <a href="#">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <g clip-path="url(#clip0_213_958)">
                              <path class="green"
                                 d="M7.99571 0.00488666C3.58004 0.0058236 0.00119302 3.58621 0.00212996 8.00188C0.00244228 9.53088 0.441214 11.0277 1.26635 12.3149L0.0224305 15.5424C-0.0438116 15.714 0.0416378 15.9069 0.213286 15.9731C0.25167 15.9879 0.292427 15.9955 0.333559 15.9955C0.371724 15.9956 0.409608 15.9891 0.445493 15.9761L3.77686 14.7868C7.52502 17.1212 12.4559 15.9751 14.7903 12.2269C17.1247 8.47875 15.9786 3.54789 12.2304 1.21352C10.9598 0.422171 9.49261 0.00341878 7.99571 0.00488666Z"
                                 fill="#5D6C7B"></path>
                              <path
                                 d="M11.8055 9.36609C11.8055 9.36609 10.9894 8.96633 10.4783 8.69983C9.90002 8.40201 9.22042 8.95968 8.90061 9.27683C8.40288 9.08563 7.94827 8.79705 7.5634 8.42799C7.19428 8.04319 6.9057 7.58858 6.71456 7.09078C7.03172 6.77031 7.58805 6.09137 7.29156 5.51306C7.02838 5.00136 6.6253 4.18519 6.6253 4.18519C6.56874 4.07294 6.45384 4.00208 6.32813 4.00195H5.66187C4.69157 4.16954 3.98608 5.01617 3.9962 6.00077C3.9962 7.04681 5.24812 9.0563 6.0923 9.90112C6.93649 10.7459 8.94596 11.9972 9.99265 11.9972C10.9773 12.0073 11.8239 11.3018 11.9915 10.3316V9.66529C11.9916 9.53824 11.9195 9.42221 11.8055 9.36609Z"
                                 fill="#F7F7F7"></path>
                           </g>
                           <defs>
                              <clipPath id="clip0_213_958">
                                 <rect width="16" height="16" fill="white"></rect>
                              </clipPath>
                           </defs>
                        </svg>
                     </a>
                  </li>
                  <li class="icons-link__item">
                     <a href="#">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <g clip-path="url(#clip0_213_961)">
                              <path class="blue"
                                 d="M6.27812 10.1211L6.01345 13.8438C6.39212 13.8438 6.55612 13.6811 6.75279 13.4858L8.52812 11.7891L12.2068 14.4831C12.8815 14.8591 13.3568 14.6611 13.5388 13.8624L15.9535 2.54777L15.9541 2.5471C16.1681 1.54977 15.5935 1.15977 14.9361 1.40443L0.742785 6.83843C-0.225881 7.21443 -0.211215 7.75443 0.578119 7.9991L4.20679 9.12777L12.6355 3.85377C13.0321 3.5911 13.3928 3.73643 13.0961 3.9991L6.27812 10.1211Z"
                                 fill="#5D6C7B"></path>
                           </g>
                           <defs>
                              <clipPath id="clip0_213_961">
                                 <rect width="16" height="16" fill="white"></rect>
                              </clipPath>
                           </defs>
                        </svg>
                     </a>
                  </li>
               </ul>
               <div class="top-header__tel-block tel-block">
                  <a href="tel:+7 (800) 505-54-61" class="tel-block__link">
                     +7 (800) 505-54-61
                  </a>
                  <button class="tel-block__button" type="button">
                     +
                  </button>
                  <ul class="tel-block__popup">
                     <li class="tel-block__item">
                        <p class="tel-block__subtitle">
                           Сервисный центр
                        </p>
                        <a href="#" class="tel-block__link tel-block__link_big">
                           + 7 (499) 350 76 92
                        </a>
                     </li>
                     <li class="tel-block__item">
                        <p class="tel-block__subtitle">
                           Оптовый отдел
                        </p>
                        <a href="#" class="tel-block__link tel-block__link_big">
                           +7 (499) 281-64-52
                        </a>
                        <p class="tel-block__time">
                           пн-сб <time>10:00</time> - <time>19:00</time>
                        </p>
                     </li>
                     <li class="tel-block__item">
                        <p class="tel-block__subtitle">
                           Отдел рекламаций и претензий
                        </p>
                        <a href="#" class="tel-block__link tel-block__link_big">
                           +7 (499) 350-76-92
                        </a>
                        <p class="tel-block__time">
                           пн-сб <time>10:00</time> - <time>19:00</time>
                        </p>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <span class="header__arrow"></span>
         <div class="header__container container">
            <div class="header__middle-header middle-header">
               <div class="middle-header__links">
                  <a href="/index.php" class="middle-header__logo logo">
                     KUGOO
                  </a>
                  <button type="button" class="middle-header__button button button_purple">
                     <div class="middle-header__burger">
                        <span></span>
                     </div>
                     <span>Каталог</span>
                  </button>
                  <div class="middle-header__catalog-modal catalog-modal">
                     <nav class="catalog-modal__menu">
                        <ul class="catalog-modal__list">
                           <li class="catalog-modal__item catalog-modal__item_electric-scooters">
                              <a href="#" class="catalog-modal__link">
                                 <svg class="catalog-modal__icon" width="16" height="17" viewBox="0 0 16 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_521_19169)">
                                       <path
                                          d="M10.9689 13.3374H5.02734C5.17262 13.687 5.25299 14.0701 5.25299 14.4716C5.25299 14.8731 5.17262 15.2562 5.02734 15.6058H10.9689C10.8236 15.2562 10.7432 14.8731 10.7432 14.4716C10.7432 14.0701 10.8236 13.687 10.9689 13.3374V13.3374Z"
                                          fill="#5D6C7B" />
                                       <path
                                          d="M13.8348 11.5091L12.6858 0.5H9.57422V1.43744H11.8411L12.9037 11.6187C13.161 11.5456 13.4325 11.5064 13.713 11.5064C13.7538 11.5064 13.7944 11.5074 13.8348 11.5091Z"
                                          fill="#5D6C7B" />
                                       <path
                                          d="M15.7398 14.4724C15.7398 13.3541 14.83 12.4443 13.7117 12.4443C12.5934 12.4443 11.6836 13.3541 11.6836 14.4724C11.6836 15.5907 12.5934 16.5005 13.7117 16.5005C14.83 16.5005 15.7398 15.5907 15.7398 14.4724Z"
                                          fill="#5D6C7B" />
                                       <path
                                          d="M7.99956 8.08978C8.73951 8.08978 9.45265 8.40132 9.95615 8.94447L10.6436 8.30717C9.96334 7.57325 8.99959 7.15234 7.99956 7.15234C6.99952 7.15234 6.03577 7.57325 5.35547 8.30717L6.04296 8.94447C6.54646 8.40129 7.2596 8.08978 7.99956 8.08978V8.08978Z"
                                          fill="#5D6C7B" />
                                       <path
                                          d="M6.50781 9.74653L7.28305 10.2736C7.44425 10.0365 7.71124 9.89496 7.99725 9.89496C8.28326 9.89496 8.55025 10.0365 8.71146 10.2736L9.48669 9.74653C9.15081 9.25247 8.594 8.95752 7.99725 8.95752C7.40051 8.95752 6.8437 9.2525 6.50781 9.74653Z"
                                          fill="#5D6C7B" />
                                       <path
                                          d="M4.31793 14.4724C4.31793 13.3541 3.40814 12.4443 2.28984 12.4443C1.17154 12.4443 0.261719 13.3541 0.261719 14.4724C0.261719 15.5907 1.1715 16.5005 2.28981 16.5005C3.40811 16.5005 4.31793 15.5907 4.31793 14.4724Z"
                                          fill="#5D6C7B" />
                                    </g>
                                    <defs>
                                       <clipPath id="clip0_521_19169">
                                          <rect width="16" height="16" fill="white" transform="translate(0 0.5)" />
                                       </clipPath>
                                    </defs>
                                 </svg>
                                 <p class="catalog-modal__title">
                                    Электросамокаты
                                 </p>
                              </a>
                              <ul class="catalog-modal__info-modal-catalog info-modal-catalog info-modal-catalog_electric-scooters">
                                 <li class="info-modal-catalog__item">
                                    <ul class="info-modal-catalog__desk">
                                       <li class="info-modal-catalog__subtitle">
                                          Особенности
                                       </li>
                                       <li class="info-modal-catalog__text">
                                          Внедорожный
                                       </li>
                                       <li class="info-modal-catalog__text">
                                          Городской
                                       </li>
                                       <li class="info-modal-catalog__text">
                                          Зимний
                                       </li>
                                       <li class="info-modal-catalog__text">
                                          С сиденьем
                                       </li>
                                       <li class="info-modal-catalog__text">
                                          Без сиденья
                                       </li>
                                    </ul>
                                    <ul class="info-modal-catalog__desk">
                                       <li class="info-modal-catalog__subtitle">
                                          Для кого
                                       </li>
                                       <li class="info-modal-catalog__text">
                                          Для детей и подростков
                                       </li>
                                       <li class="info-modal-catalog__text">
                                          Для взрослых
                                       </li>
                                       <li class="info-modal-catalog__text">
                                          Для пенсионеров
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li class="catalog-modal__item catalog-modal__item_scooters">
                              <a href="#" class="catalog-modal__link">
                                 <svg class="catalog-modal__icon" width="16" height="17" viewBox="0 0 16 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_521_19177)">
                                       <path
                                          d="M9.57304 5.26829L10.4347 4.89349L8.83378 0.890625H6.51172V1.82997H8.19753L9.57304 5.26829Z"
                                          fill="#5D6C7B" />
                                       <path
                                          d="M14.2558 11.2713C13.6083 9.76645 12.2059 6.50817 11.713 5.36279L9.01365 6.53666L9.6643 8.04901L7.34036 12.163H5.9805C5.9805 10.4077 4.59434 9.15712 3.02188 9.15712H0V10.0965H3.02188C4.08803 10.0965 5.04116 10.9381 5.04116 12.163H4.49289C3.85382 11.302 2.70312 10.9269 1.66045 11.3098C0.773708 11.6329 0.0898641 12.4683 0.0350689 13.5003C-0.0560476 15.1921 1.54178 16.4646 3.15808 16.0197C3.67409 15.8772 4.15222 15.5653 4.49289 15.1063H8.79008L11.0148 11.1864C11.4409 12.1765 11.4735 12.2457 11.4744 12.2529C10.8648 13.1518 10.928 14.3351 11.5871 15.1674C12.5155 16.3588 14.3178 16.432 15.3398 15.3148C16.5854 13.9716 15.9817 11.8029 14.2558 11.2713Z"
                                          fill="#5D6C7B" />
                                    </g>
                                    <defs>
                                       <clipPath id="clip0_521_19177">
                                          <rect width="16" height="16" fill="white" transform="translate(0 0.5)" />
                                       </clipPath>
                                    </defs>
                                 </svg>
                                 <p class="catalog-modal__title">
                                    Электроскутеры
                                 </p>
                              </a>
                              <ul class="catalog-modal__info-modal-catalog info-modal-catalog info-modal-catalog_scooters">
                                 <li class="info-modal-catalog__item">
                                    <ul class="info-modal-catalog__desk">
                                       <li class="info-modal-catalog__subtitle">
                                          Особенности
                                       </li>
                                       <li class="info-modal-catalog__text">
                                          Электроскутеры
                                       </li>
                                    </ul>
                                    <ul class="info-modal-catalog__desk">
                                       <li class="info-modal-catalog__subtitle">
                                          Для кого
                                       </li>
                                       <li class="info-modal-catalog__text">
                                          Электроскутеры
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li class="catalog-modal__item catalog-modal__item_electric-bicycles">
                              <a href="#" class="catalog-modal__link">
                                 <svg class="catalog-modal__icon" width="16" height="17" viewBox="0 0 16 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_521_19198)">
                                       <path
                                          d="M12.2965 7.10321L11.4513 4.54837H12.161C12.4449 4.54837 12.6771 4.31611 12.6771 4.03224C12.6771 3.74837 12.4449 3.51611 12.161 3.51611H10.7384C10.3868 3.51611 10.1384 3.86127 10.2481 4.19353L10.7546 5.72579L10.3868 6.19353H5.98037L5.41585 5.25805H5.54488C5.82876 5.25805 6.06101 5.02579 6.06101 4.74192C6.06101 4.45805 5.82876 4.22579 5.54488 4.22579H3.93198C3.64811 4.22579 3.41585 4.45805 3.41585 4.74192C3.41585 5.02579 3.64811 5.25805 3.93198 5.25805H4.2094L6.92876 9.77418H6.36101C5.96101 7.28386 2.84166 6.11934 0.938433 8.02256C-0.316406 9.2774 -0.319632 11.2871 0.938433 12.5419C2.79327 14.3968 5.93521 13.3516 6.35779 10.8064H7.83843C7.9965 10.8064 8.14811 10.7322 8.24488 10.6097L11.1417 6.90644L11.3126 7.42579C10.2836 7.96127 9.57714 9.03869 9.57714 10.2742C9.57714 12.0451 11.0159 13.4839 12.7868 13.4839C14.5578 13.4839 15.9997 12.0451 15.9997 10.2742C15.9997 8.31934 14.2513 6.79998 12.2965 7.10321ZM4.56747 9.77418C4.36101 9.20321 3.81263 8.79676 3.17069 8.79676C2.35134 8.79676 1.68359 9.46127 1.68359 10.2839C1.68359 11.1032 2.34811 11.771 3.17069 11.771C3.80617 11.771 4.34811 11.371 4.56101 10.8097H5.3094C5.07392 11.7516 4.21908 12.4548 3.20295 12.4548C2.00617 12.4548 1.03198 11.4806 1.03198 10.2839C1.03198 9.08708 2.00617 8.11289 3.20295 8.11289C4.22553 8.11289 5.08359 8.82256 5.31263 9.77418H4.56747ZM7.89972 9.3774L6.60295 7.22579H9.58037L7.89972 9.3774ZM12.79 12.4516C11.59 12.4516 10.6126 11.4742 10.6126 10.2742C10.6126 9.49353 11.0255 8.80644 11.6449 8.42256L11.8739 9.11289C11.5288 9.38385 11.3062 9.80644 11.3062 10.2806C11.3062 11.1 11.9707 11.7677 12.7933 11.7677C13.6159 11.7677 14.2804 11.1032 14.2804 10.2806C14.2804 9.48063 13.6513 8.82902 12.8578 8.79676L12.6288 8.10321C13.9029 8.00644 14.9707 9.01934 14.9707 10.2742C14.9675 11.4742 13.99 12.4516 12.79 12.4516Z"
                                          fill="#5D6C7B" />
                                    </g>
                                    <defs>
                                       <clipPath id="clip0_521_19198">
                                          <rect width="16" height="16" fill="white" transform="translate(0 0.5)" />
                                       </clipPath>
                                    </defs>
                                 </svg>
                                 <p class="catalog-modal__title">
                                    Электровелосипеды
                                 </p>
                              </a>
                              <ul class="catalog-modal__info-modal-catalog info-modal-catalog info-modal-catalog_electric-bicycles">
                                 <li class="info-modal-catalog__item">
                                    <ul class="info-modal-catalog__desk">
                                       <li class="info-modal-catalog__subtitle">
                                          Особенности
                                       </li>
                                       <li class="info-modal-catalog__text">
                                          Электровелосипеды
                                       </li>
                                    </ul>
                                    <ul class="info-modal-catalog__desk">
                                       <li class="info-modal-catalog__subtitle">
                                          Для кого
                                       </li>
                                       <li class="info-modal-catalog__text">
                                          Электровелосипеды
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li class="catalog-modal__item catalog-modal__item_robot-cleaner">
                              <a href="#" class="catalog-modal__link">
                                 <svg class="catalog-modal__icon" width="16" height="17" viewBox="0 0 16 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_521_19188)">
                                       <path
                                          d="M2.69141 2.51941L3.52783 3.35583C4.76782 2.27502 6.33777 1.68469 7.99854 1.68469C8.70691 1.68469 9.39856 1.79248 10.0553 1.99939C10.0675 2.00269 10.0795 2.00647 10.0913 2.01086C10.9607 2.29016 11.7678 2.74438 12.4692 3.35583L13.3057 2.51941C11.8925 1.26392 10.0332 0.5 7.99854 0.5C5.96387 0.5 4.10461 1.26392 2.69141 2.51941Z"
                                          fill="#5D6C7B" />
                                       <path
                                          d="M13.9806 3.19287L13.1442 4.0293C14.2251 5.26929 14.8153 6.83923 14.8153 8.5C14.8153 10.3204 14.1064 12.0319 12.8192 13.3192C11.532 14.6064 9.82043 15.3153 8 15.3153C6.17957 15.3153 4.46814 14.6064 3.18079 13.3192C1.89355 12.0319 1.18469 10.3204 1.18469 8.5C1.18469 6.83923 1.7749 5.26929 2.85583 4.0293L2.01941 3.19287C0.763916 4.60608 0 6.46533 0 8.5C0 12.9113 3.58875 16.5 8 16.5C12.4113 16.5 16 12.9113 16 8.5C16 6.46533 15.2361 4.60608 13.9806 3.19287Z"
                                          fill="#5D6C7B" />
                                       <path
                                          d="M8.00085 2.63721C7.49878 2.63721 7.01135 2.70068 6.5459 2.81995C6.55481 3.83789 6.54297 8.19092 6.54297 8.38855C6.54297 8.96899 6.74072 9.51514 7.26782 9.82153C7.70581 10.0762 8.27917 10.0793 8.71997 9.82947C9.27783 9.51331 9.4176 8.99805 9.45044 8.43665C9.45764 8.31311 9.45874 3.65955 9.45874 2.82068C8.99255 2.70093 8.50403 2.63721 8.00085 2.63721ZM8.00085 8.97632C7.73389 8.97632 7.53625 8.75818 7.52466 8.50012C7.51318 8.24292 7.75183 8.02393 8.00085 8.02393C8.26782 8.02393 8.46545 8.24207 8.47705 8.50012C8.48853 8.75732 8.24988 8.97632 8.00085 8.97632Z"
                                          fill="#5D6C7B" />
                                       <path
                                          d="M5.58936 3.15576C3.5553 4.07678 2.13672 6.12585 2.13672 8.50012C2.13672 11.7329 4.76672 14.363 7.99963 14.363C11.2325 14.363 13.8625 11.7329 13.8625 8.50012C13.8625 6.12585 12.444 4.07678 10.4099 3.15576V6.03113V7.96228C10.4099 8.41064 10.4374 8.87036 10.2928 9.30237C9.90955 10.4484 8.75342 11.126 7.56787 10.9298C6.42798 10.7413 5.59985 9.69751 5.58936 8.55969C5.57983 7.53308 5.58936 6.5061 5.58936 5.47961C5.58936 4.70496 5.58936 3.93042 5.58936 3.15576Z"
                                          fill="#5D6C7B" />
                                    </g>
                                    <defs>
                                       <clipPath id="clip0_521_19188">
                                          <rect width="16" height="16" fill="white" transform="translate(0 0.5)" />
                                       </clipPath>
                                    </defs>
                                 </svg>
                                 <p class="catalog-modal__title">
                                    Робот-пылесосы
                                 </p>
                              </a>
                              <ul class="catalog-modal__info-modal-catalog info-modal-catalog info-modal-catalog_robot-cleaner">
                                 <li class="info-modal-catalog__item">
                                    <ul class="info-modal-catalog__desk">
                                       <li class="info-modal-catalog__subtitle">
                                          Особенности
                                       </li>
                                       <li class="info-modal-catalog__text">
                                          Робот-пылесосы
                                       </li>
                                    </ul>
                                    <ul class="info-modal-catalog__desk">
                                       <li class="info-modal-catalog__subtitle">
                                          Для кого
                                       </li>
                                       <li class="info-modal-catalog__text">
                                          Робот-пылесосы
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li class="catalog-modal__item catalog-modal__item_scales">
                              <a href="#" class="catalog-modal__link">
                                 <svg class="catalog-modal__icon" width="16" height="17" viewBox="0 0 16 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_521_19194)">
                                       <path
                                          d="M13.5229 0.5H2.47709C1.11122 0.5 0 1.61122 0 2.97709V14.0229C0 15.3888 1.11122 16.5 2.47709 16.5H13.5229C14.8888 16.5 16 15.3888 16 14.0229V2.97709C16 1.61122 14.8888 0.5 13.5229 0.5ZM12.2359 4.92691L10.4613 6.70172C10.2782 6.88481 9.98153 6.88472 9.79847 6.70181C9.31747 6.221 8.67878 5.95625 8 5.95625C7.32122 5.95625 6.68253 6.22103 6.20153 6.70181C6.01844 6.88475 5.72172 6.88475 5.53866 6.70172L3.76406 4.92691C3.58103 4.74384 3.58106 4.44706 3.76409 4.264C4.89622 3.13184 6.40056 2.50834 8 2.50834C9.59944 2.50834 11.1038 3.13184 12.2359 4.26403C12.4189 4.44706 12.419 4.74384 12.2359 4.92691Z"
                                          fill="#5D6C7B" />
                                       <path
                                          d="M4.77344 4.61049L5.89216 5.72934C6.49544 5.26831 7.22875 5.01874 7.99997 5.01874C8.77119 5.01874 9.5045 5.26831 10.1078 5.72934L11.2265 4.61049C10.3209 3.8563 9.19172 3.4458 7.99997 3.4458C6.80822 3.4458 5.679 3.8563 4.77344 4.61049Z"
                                          fill="#5D6C7B" />
                                    </g>
                                    <defs>
                                       <clipPath id="clip0_521_19194">
                                          <rect width="16" height="16" fill="white" transform="translate(0 0.5)" />
                                       </clipPath>
                                    </defs>
                                 </svg>
                                 <p class="catalog-modal__title">
                                    Весы
                                 </p>
                              </a>
                              <ul class="catalog-modal__info-modal-catalog info-modal-catalog info-modal-catalog_scales">
                                 <li class="info-modal-catalog__item">
                                    <ul class="info-modal-catalog__desk">
                                       <li class="info-modal-catalog__subtitle">
                                          Особенности
                                       </li>
                                       <li class="info-modal-catalog__text">
                                          Весы
                                       </li>
                                    </ul>
                                    <ul class="info-modal-catalog__desk">
                                       <li class="info-modal-catalog__subtitle">
                                          Для кого
                                       </li>
                                       <li class="info-modal-catalog__text">
                                          Весы
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <form action="#" method="get" class="middle-header__form-header form-header">
                  <select name="" id="" class="form-header__selects" tabindex="1">
                     <option value="Везде" class="form-header__select">
                        Везде
                     </option>
                     <option value="Самокаты" class="form-header__select">
                        Самокаты
                     </option>
                     <option value="Самокаты" class="form-header__select">
                        Аксессуары
                     </option>
                  </select>
                  <input type="text" name="search" required tabindex="2" placeholder="Искать самокат KUGO"
                     class="form-header__input">
                  <button class="form-header__button" type="submit" tabindex="3">
                     <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M15.9519 14.8499L10.758 9.65596C11.564 8.61396 11.9999 7.33997 11.9999 5.99997C11.9999 4.39598 11.374 2.89199 10.242 1.75799C9.10996 0.623997 7.60197 0 5.99997 0C4.39798 0 2.88999 0.625997 1.75799 1.75799C0.623997 2.88999 0 4.39598 0 5.99997C0 7.60197 0.625997 9.10996 1.75799 10.242C2.88999 11.376 4.39598 11.9999 5.99997 11.9999C7.33997 11.9999 8.61196 11.564 9.65396 10.76L14.8479 15.9519C14.8632 15.9672 14.8812 15.9793 14.9012 15.9875C14.9211 15.9958 14.9424 16 14.9639 16C14.9855 16 15.0068 15.9958 15.0267 15.9875C15.0466 15.9793 15.0647 15.9672 15.0799 15.9519L15.9519 15.0819C15.9672 15.0667 15.9793 15.0486 15.9875 15.0287C15.9958 15.0088 16 14.9875 16 14.9659C16 14.9444 15.9958 14.9231 15.9875 14.9032C15.9793 14.8833 15.9672 14.8652 15.9519 14.8499ZM9.16796 9.16796C8.31996 10.014 7.19597 10.48 5.99997 10.48C4.80398 10.48 3.67998 10.014 2.83199 9.16796C1.98599 8.31996 1.51999 7.19597 1.51999 5.99997C1.51999 4.80398 1.98599 3.67798 2.83199 2.83199C3.67998 1.98599 4.80398 1.51999 5.99997 1.51999C7.19597 1.51999 8.32196 1.98399 9.16796 2.83199C10.014 3.67998 10.48 4.80398 10.48 5.99997C10.48 7.19597 10.014 8.32196 9.16796 9.16796Z"
                           fill="white" />
                     </svg>
                  </button>
               </form>
               <ul class="middle-header__row">
                  <li class="middle-header__item">
                     <button type="button">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <mask id="path-1-inside-1_7825_20528" fill="white">
                              <path
                                 d="M19.4141 11.2663H18.7766L16.7349 6.31856C17.0208 6.27958 17.2413 6.03466 17.2413 5.73754C17.2413 5.41333 16.979 5.15049 16.6554 5.15049H11.6177C11.3769 4.48044 10.7363 4 9.98559 4C9.23488 4 8.59422 4.48048 8.3534 5.15049H3.34465C3.02105 5.15049 2.75871 5.41333 2.75871 5.73754C2.75871 6.03466 2.97926 6.27958 3.26512 6.31856L1.22344 11.2663H0.585938C0.262344 11.2663 0 11.5291 0 11.8533C0 14.1398 1.85668 16 4.13883 16C6.42098 16 8.27766 14.1398 8.27766 11.8533C8.27766 11.5291 8.01531 11.2663 7.69172 11.2663H7.05418L5.01504 6.32458H8.3534C8.59422 6.99464 9.23484 7.47508 9.98559 7.47508C10.7363 7.47508 11.3769 6.99464 11.6177 6.32458H14.985L12.9459 11.2663H12.3083C11.9847 11.2663 11.7224 11.5291 11.7224 11.8533C11.7224 14.1398 13.5791 16 15.8612 16C18.1434 16 20 14.1398 20 11.8533C20 11.5291 19.7377 11.2663 19.4141 11.2663ZM4.13883 14.8259C2.70332 14.8259 1.5027 13.7993 1.22996 12.4404H7.0477C6.77496 13.7993 5.57434 14.8259 4.13883 14.8259ZM5.78613 11.2663H2.49152L4.13883 7.27423L5.78613 11.2663ZM9.98555 6.30098C9.67543 6.30098 9.42316 6.04824 9.42316 5.73754C9.42316 5.42683 9.67543 5.17409 9.98555 5.17409C10.2956 5.17409 10.5479 5.42683 10.5479 5.73754C10.5479 6.04824 10.2957 6.30098 9.98555 6.30098ZM15.8612 7.27423L17.5085 11.2663H14.2139L15.8612 7.27423ZM15.8612 14.8259C14.4257 14.8259 13.225 13.7993 12.9523 12.4404H18.77C18.4973 13.7993 17.2966 14.8259 15.8612 14.8259Z" />
                           </mask>
                           <path
                              d="M19.4141 11.2663H18.7766L16.7349 6.31856C17.0208 6.27958 17.2413 6.03466 17.2413 5.73754C17.2413 5.41333 16.979 5.15049 16.6554 5.15049H11.6177C11.3769 4.48044 10.7363 4 9.98559 4C9.23488 4 8.59422 4.48048 8.3534 5.15049H3.34465C3.02105 5.15049 2.75871 5.41333 2.75871 5.73754C2.75871 6.03466 2.97926 6.27958 3.26512 6.31856L1.22344 11.2663H0.585938C0.262344 11.2663 0 11.5291 0 11.8533C0 14.1398 1.85668 16 4.13883 16C6.42098 16 8.27766 14.1398 8.27766 11.8533C8.27766 11.5291 8.01531 11.2663 7.69172 11.2663H7.05418L5.01504 6.32458H8.3534C8.59422 6.99464 9.23484 7.47508 9.98559 7.47508C10.7363 7.47508 11.3769 6.99464 11.6177 6.32458H14.985L12.9459 11.2663H12.3083C11.9847 11.2663 11.7224 11.5291 11.7224 11.8533C11.7224 14.1398 13.5791 16 15.8612 16C18.1434 16 20 14.1398 20 11.8533C20 11.5291 19.7377 11.2663 19.4141 11.2663ZM4.13883 14.8259C2.70332 14.8259 1.5027 13.7993 1.22996 12.4404H7.0477C6.77496 13.7993 5.57434 14.8259 4.13883 14.8259ZM5.78613 11.2663H2.49152L4.13883 7.27423L5.78613 11.2663ZM9.98555 6.30098C9.67543 6.30098 9.42316 6.04824 9.42316 5.73754C9.42316 5.42683 9.67543 5.17409 9.98555 5.17409C10.2956 5.17409 10.5479 5.42683 10.5479 5.73754C10.5479 6.04824 10.2957 6.30098 9.98555 6.30098ZM15.8612 7.27423L17.5085 11.2663H14.2139L15.8612 7.27423ZM15.8612 14.8259C14.4257 14.8259 13.225 13.7993 12.9523 12.4404H18.77C18.4973 13.7993 17.2966 14.8259 15.8612 14.8259Z"
                              fill="#282739" />
                           <path
                              d="M18.7766 11.2663L15.079 12.7921L16.1 15.2663H18.7766V11.2663ZM16.7349 6.31856L16.1946 2.35522L11.0611 3.05512L13.0374 7.84433L16.7349 6.31856ZM11.6177 5.15049L7.85347 6.50339L8.80485 9.15049H11.6177V5.15049ZM8.3534 5.15049V9.15049H11.1662L12.1176 6.50345L8.3534 5.15049ZM3.26512 6.31856L6.96268 7.84435L8.93891 3.05522L3.80556 2.35523L3.26512 6.31856ZM1.22344 11.2663V15.2663H3.90002L4.921 12.7921L1.22344 11.2663ZM7.05418 11.2663L3.35661 12.7921L4.37757 15.2663H7.05418V11.2663ZM5.01504 6.32458V2.32458H-0.962677L1.31747 7.85035L5.01504 6.32458ZM8.3534 6.32458L12.1177 4.97169L11.1663 2.32458H8.3534V6.32458ZM11.6177 6.32458V2.32458H8.80485L7.85347 4.97169L11.6177 6.32458ZM14.985 6.32458L18.6826 7.85034L20.9627 2.32458L14.985 2.32458V6.32458ZM12.9459 11.2663V15.2663H15.6225L16.6434 12.7921L12.9459 11.2663ZM1.22996 12.4404V8.44039H-3.65259L-2.69183 13.2275L1.22996 12.4404ZM7.0477 12.4404L10.9695 13.2275L11.9302 8.44039H7.0477V12.4404ZM5.78613 11.2663V15.2663H11.7639L9.4837 9.74052L5.78613 11.2663ZM2.49152 11.2663L-1.20604 9.74052L-3.48623 15.2663H2.49152V11.2663ZM4.13883 7.27423L7.83639 5.74845L4.13883 -3.21221L0.441262 5.74845L4.13883 7.27423ZM15.8612 7.27423L19.5587 5.74845L15.8612 -3.21221L12.1636 5.74845L15.8612 7.27423ZM17.5085 11.2663V15.2663H23.4862L21.206 9.74052L17.5085 11.2663ZM14.2139 11.2663L10.5163 9.74052L8.23612 15.2663H14.2139V11.2663ZM12.9523 12.4404V8.44039H8.06975L9.03051 13.2275L12.9523 12.4404ZM18.77 12.4404L22.6918 13.2275L23.6526 8.44039H18.77V12.4404ZM19.4141 7.2663H18.7766V15.2663H19.4141V7.2663ZM22.4741 9.74053L20.4325 4.79279L13.0374 7.84433L15.079 12.7921L22.4741 9.74053ZM17.2753 10.2819C19.5145 9.97659 21.2413 8.06373 21.2413 5.73754H13.2413C13.2413 4.00559 14.5271 2.58257 16.1946 2.35522L17.2753 10.2819ZM21.2413 5.73754C21.2413 3.21132 19.1952 1.15049 16.6554 1.15049V9.15049C14.7627 9.15049 13.2413 7.61534 13.2413 5.73754H21.2413ZM16.6554 1.15049H11.6177V9.15049H16.6554V1.15049ZM15.382 3.7976C14.5916 1.5985 12.4857 0 9.98559 0V8C8.98691 8 8.1622 7.36238 7.85347 6.50339L15.382 3.7976ZM9.98559 0C7.48551 0 5.37954 1.59853 4.58916 3.79753L12.1176 6.50345C11.8089 7.36243 10.9843 8 9.98559 8V0ZM8.3534 1.15049H3.34465V9.15049H8.3534V1.15049ZM3.34465 1.15049C0.804792 1.15049 -1.24129 3.21132 -1.24129 5.73754H6.75871C6.75871 7.61534 5.23732 9.15049 3.34465 9.15049V1.15049ZM-1.24129 5.73754C-1.24129 8.06397 0.48576 9.97658 2.72468 10.2819L3.80556 2.35523C5.47276 2.58257 6.75871 4.00536 6.75871 5.73754H-1.24129ZM-0.432443 4.79276L-2.47412 9.7405L4.921 12.7921L6.96268 7.84435L-0.432443 4.79276ZM1.22344 7.2663H0.585938V15.2663H1.22344V7.2663ZM0.585938 7.2663C-1.95392 7.2663 -4 9.32713 -4 11.8533H4C4 13.7311 2.47861 15.2663 0.585938 15.2663V7.2663ZM-4 11.8533C-4 16.3418 -0.359583 20 4.13883 20V12C4.11623 12 4.10308 11.9962 4.09233 11.9916C4.07884 11.9859 4.06166 11.9753 4.04471 11.9583C4.02775 11.9414 4.01642 11.9233 4.00988 11.9079C4.00449 11.8951 4 11.8792 4 11.8533H-4ZM4.13883 20C8.63724 20 12.2777 16.3418 12.2777 11.8533H4.27766C4.27766 11.8792 4.27317 11.8951 4.26777 11.9079C4.26124 11.9233 4.2499 11.9414 4.23295 11.9583C4.216 11.9753 4.19882 11.9859 4.18533 11.9916C4.17458 11.9962 4.16142 12 4.13883 12V20ZM12.2777 11.8533C12.2777 9.32713 10.2316 7.2663 7.69172 7.2663V15.2663C5.79905 15.2663 4.27766 13.7311 4.27766 11.8533H12.2777ZM7.69172 7.2663H7.05418V15.2663H7.69172V7.2663ZM10.7518 9.74054L8.71261 4.79882L1.31747 7.85035L3.35661 12.7921L10.7518 9.74054ZM5.01504 10.3246H8.3534V2.32458H5.01504V10.3246ZM4.58913 7.67748C5.37952 9.87663 7.48552 11.4751 9.98559 11.4751V3.47508C10.9842 3.47508 11.8089 4.11264 12.1177 4.97169L4.58913 7.67748ZM9.98559 11.4751C12.4857 11.4751 14.5916 9.87658 15.382 7.67748L7.85347 4.97169C8.1622 4.1127 8.98691 3.47508 9.98559 3.47508V11.4751ZM11.6177 10.3246H14.985V2.32458H11.6177V10.3246ZM11.2874 4.79882L9.24829 9.74054L16.6434 12.7921L18.6826 7.85034L11.2874 4.79882ZM12.9459 7.2663H12.3083V15.2663H12.9459V7.2663ZM12.3083 7.2663C9.76846 7.2663 7.72238 9.32713 7.72238 11.8533H15.7224C15.7224 13.7311 14.201 15.2663 12.3083 15.2663V7.2663ZM7.72238 11.8533C7.72238 16.3418 11.3628 20 15.8612 20V12C15.8386 12 15.8255 11.9962 15.8147 11.9916C15.8012 11.9859 15.784 11.9753 15.7671 11.9583C15.7501 11.9414 15.7388 11.9233 15.7323 11.9079C15.7269 11.8951 15.7224 11.8792 15.7224 11.8533H7.72238ZM15.8612 20C20.3597 20 24 16.3418 24 11.8533H16C16 11.8792 15.9955 11.8951 15.9901 11.9079C15.9836 11.9234 15.9722 11.9414 15.9553 11.9584C15.9383 11.9753 15.9212 11.9859 15.9077 11.9916C15.897 11.9962 15.8838 12 15.8612 12V20ZM24 11.8533C24 9.32713 21.9539 7.2663 19.4141 7.2663V15.2663C17.5214 15.2663 16 13.7311 16 11.8533H24ZM4.13883 10.8259C4.65422 10.8259 5.05846 11.1884 5.15176 11.6533L-2.69183 13.2275C-2.05307 16.4102 0.752424 18.8259 4.13883 18.8259V10.8259ZM1.22996 16.4404H7.0477V8.44039H1.22996V16.4404ZM3.1259 11.6533C3.2192 11.1884 3.62344 10.8259 4.13883 10.8259V18.8259C7.52523 18.8259 10.3307 16.4102 10.9695 13.2275L3.1259 11.6533ZM5.78613 7.2663H2.49152V15.2663H5.78613V7.2663ZM6.18909 12.7921L7.83639 8.80001L0.441262 5.74845L-1.20604 9.74052L6.18909 12.7921ZM0.441262 8.80001L2.08857 12.7921L9.4837 9.74052L7.83639 5.74845L0.441262 8.80001ZM9.98555 2.30098C11.8917 2.30098 13.4232 3.84623 13.4232 5.73754H5.42316C5.42316 8.25025 7.45917 10.301 9.98555 10.301V2.30098ZM13.4232 5.73754C13.4232 7.62884 11.8917 9.17409 9.98555 9.17409V1.17409C7.45917 1.17409 5.42316 3.22483 5.42316 5.73754H13.4232ZM9.98555 9.17409C8.07954 9.17409 6.54793 7.62902 6.54793 5.73754H14.5479C14.5479 3.22465 12.5117 1.17409 9.98555 1.17409V9.17409ZM6.54793 5.73754C6.54793 3.84623 8.0794 2.30098 9.98555 2.30098V10.301C12.5119 10.301 14.5479 8.25025 14.5479 5.73754H6.54793ZM12.1636 8.80001L13.8109 12.7921L21.206 9.74052L19.5587 5.74845L12.1636 8.80001ZM17.5085 7.2663H14.2139V15.2663H17.5085V7.2663ZM17.9114 12.7921L19.5587 8.80001L12.1636 5.74845L10.5163 9.74052L17.9114 12.7921ZM15.8612 10.8259C16.3766 10.8259 16.7808 11.1884 16.8741 11.6533L9.03051 13.2275C9.66928 16.4102 12.4748 18.8259 15.8612 18.8259V10.8259ZM12.9523 16.4404H18.77V8.44039H12.9523V16.4404ZM14.8482 11.6533C14.9415 11.1884 15.3458 10.8259 15.8612 10.8259V18.8259C19.2475 18.8259 22.0531 16.4102 22.6918 13.2275L14.8482 11.6533Z"
                              fill="#282739" mask="url(#path-1-inside-1_7825_20528)" />
                        </svg>
                     </button>
                  </li>
                  <li class="middle-header__item">
                     <button type="button">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M17.9951 5.51484C17.7344 4.90528 17.3586 4.35291 16.8886 3.88864C16.4182 3.42298 15.8637 3.05293 15.2551 2.79861C14.624 2.53385 13.9471 2.39833 13.2637 2.39992C12.305 2.39992 11.3696 2.66506 10.5568 3.16588C10.3623 3.28569 10.1775 3.41727 10.0025 3.56065C9.8275 3.41727 9.64276 3.28569 9.44829 3.16588C8.63542 2.66506 7.70004 2.39992 6.74132 2.39992C6.05096 2.39992 5.382 2.53347 4.74998 2.79861C4.13935 3.05393 3.58901 3.4212 3.11646 3.88864C2.64584 4.35239 2.2699 4.90489 2.00994 5.51484C1.73963 6.14922 1.60156 6.82287 1.60156 7.51617C1.60156 8.17019 1.7338 8.8517 1.99633 9.54499C2.21608 10.1244 2.53111 10.7254 2.93366 11.3322C3.57151 12.2926 4.44856 13.2943 5.53757 14.3097C7.34222 15.9929 9.12937 17.1555 9.20521 17.2027L9.6661 17.5012C9.87029 17.6328 10.1328 17.6328 10.337 17.5012L10.7979 17.2027C10.8737 17.1536 12.6589 15.9929 14.4655 14.3097C15.5545 13.2943 16.4316 12.2926 17.0694 11.3322C17.472 10.7254 17.789 10.1244 18.0068 9.54499C18.2693 8.8517 18.4015 8.17019 18.4015 7.51617C18.4035 6.82287 18.2654 6.14922 17.9951 5.51484V5.51484ZM10.0025 15.9477C10.0025 15.9477 3.07951 11.4678 3.07951 7.51617C3.07951 5.51484 4.71886 3.89257 6.74132 3.89257C8.16287 3.89257 9.39579 4.69388 10.0025 5.86443C10.6093 4.69388 11.8422 3.89257 13.2637 3.89257C15.2862 3.89257 16.9255 5.51484 16.9255 7.51617C16.9255 11.4678 10.0025 15.9477 10.0025 15.9477Z"
                              fill="#282739" />
                        </svg>
                     </button>
                  </li>
                  <li class="middle-header__item middle-header__item_basket">
                     <button type="button">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <g clip-path="url(#clip0_7825_20534)">
                              <path
                                 d="M19.1523 7.25427H15.0031L12.6756 1.92486C12.5462 1.62833 12.2008 1.49282 11.9042 1.62239C11.6076 1.75189 11.4722 2.09732 11.6017 2.39388L13.7244 7.25431H6.27564L8.3983 2.39388C8.52779 2.09732 8.3924 1.75193 8.09584 1.62239C7.79932 1.49282 7.45385 1.62825 7.32439 1.92486L4.99689 7.25427H0.847715C0.304942 7.25427 -0.0978707 7.74564 0.0208793 8.26286L2.20584 17.7797C2.2926 18.1575 2.63611 18.4261 3.03268 18.4261H16.9674C17.3639 18.4261 17.7074 18.1575 17.7942 17.7797L19.9792 8.26286C20.0979 7.74568 19.6951 7.25427 19.1523 7.25427V7.25427ZM5.10713 9.0513C5.02885 9.0513 4.94928 9.03552 4.87291 9.00216C4.57635 8.87267 4.44092 8.52728 4.57045 8.23068L5.01061 7.22278H6.28936L5.64436 8.69966C5.54822 8.91993 5.33299 9.0513 5.10713 9.0513ZM7.07033 15.3011C7.07033 15.6247 6.80799 15.8871 6.48439 15.8871C6.1608 15.8871 5.89846 15.6247 5.89846 15.3011V11.0043C5.89846 10.6807 6.1608 10.4183 6.48439 10.4183C6.80799 10.4183 7.07033 10.6807 7.07033 11.0043V15.3011ZM10.586 15.3011C10.586 15.6247 10.3236 15.8871 10 15.8871C9.67643 15.8871 9.41408 15.6247 9.41408 15.3011V11.0043C9.41408 10.6807 9.67643 10.4183 10 10.4183C10.3236 10.4183 10.586 10.6807 10.586 11.0043V15.3011ZM14.1016 15.3011C14.1016 15.6247 13.8392 15.8871 13.5156 15.8871C13.1921 15.8871 12.9297 15.6247 12.9297 15.3011V11.0043C12.9297 10.6807 13.1921 10.4183 13.5156 10.4183C13.8392 10.4183 14.1016 10.6807 14.1016 11.0043V15.3011ZM15.1271 9.00216C15.0508 9.03552 14.9712 9.0513 14.8929 9.0513C14.6671 9.0513 14.4518 8.91997 14.3556 8.6997L13.7106 7.22282H14.9894L15.4296 8.23072C15.5591 8.52728 15.4237 8.87267 15.1271 9.00216Z"
                                 fill="#6F73EE" />
                           </g>
                           <defs>
                              <clipPath id="clip0_7825_20534">
                                 <rect width="20" height="20" fill="white" />
                              </clipPath>
                           </defs>
                        </svg>
                        <p>Корзина</p>
                     </button>
                     <div class="middle-header__basket basket">
                        <div class="basket__content">
                           <div class="basket__header">
                              <p class="basket__title">
                                 В вашей корзине
                              </p>
                              <p class="basket__text">
                                 <span class="basket__quantity">0</span> товар(а)
                              </p>
                           </div>
                           <ul class="basket__list"></ul>
                           <div class="basket__footer">
                              <div class="basket__info">
                                 <p class="basket__subtitle">
                                    Сумма:
                                 </p>
                                 <span class="basket__fullprice">
                                    0 ₽
                                 </span>
                              </div>
                              <button class="basket__button button_purple">
                                 Оформить заказ
                              </button>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="header__bottom-header bottom-header">
            <div class="bottom-header__container container">
               <nav class="bottom-header__menu">
                  <ul class="bottom-header__list">
                     <li class="bottom-header__item">
                        <a href="#" class="bottom-header__link">
                           О магазине
                        </a>
                     </li>
                     <li class="bottom-header__item">
                        <a href="#" class="bottom-header__link bottom-header__link_text">
                           Доставка и оплата
                        </a>
                     </li>
                     <li class="bottom-header__item">
                        <a href="#" class="bottom-header__link">
                           Тест-драйв
                        </a>
                     </li>
                     <li class="bottom-header__item">
                        <a href="#" class="bottom-header__link">
                           Блог
                        </a>
                     </li>
                     <li class="bottom-header__item">
                        <a href="#" class="bottom-header__link">
                           Контакты
                        </a>
                     </li>
                     <li class="bottom-header__item">
                        <a href="#" class="bottom-header__link bottom-header__link_icon">
                           Акции
                        </a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
      </header>
      <!-- header -->

      <!-- main -->
      <main class="main">

         <!-- scooters-banner -->
         <section class="scooters-banner">
            <div class="scooters-banner__container container">
               <div class="scooters-banner__offer">
                  <p class="scooters-banner__subtitle">
                     Новинка
                  </p>
                  <h2 class="scooters-banner__big-title big-title">
                     Электросамокаты Kugoo Kirin от официального дилера
                  </h2>
                  <p class="scooters-banner__text">
                     с бесплатной доставкой по РФ от 1 дня
                  </p>
                  <a href="/pages/product-catalog.php" class="scooters-banner__button button">
                     Перейти в католог
                  </a>
               </div>
               <div class="scooters-banner__image">
                  <img src="/img/scooters-banner/scooters-banner-image.png"
                     alt="Электросамокаты Kugoo Kirin от официального дилера">
               </div>
               <p class="scooters-banner__big-text">kirin</p>
               <a href="#" class="scooters-banner__link">
                  <p class="scooters-banner__button-top">
                     Тест-драйв и обучение
                  </p>
                  <p class="scooters-banner__button-bottom">
                     Бесплатно
                  </p>
                  <div class="scooters-banner__line">
                     <div class="scooters-banner__circle scooters-banner__circle_1"></div>
                     <div class="scooters-banner__circle scooters-banner__circle_2"></div>
                  </div>
               </a>
            </div>
         </section>
         <!-- scooters-banner -->

         <!-- triggers -->
         <div class="triggers">
            <div class="triggers__container container">
               <ul class="triggers__list">
                  <li class="triggers__item">
                     <h3 class="triggers__middle-title middle-title">
                        Гарантия 1 год
                     </h3>
                     <p class="triggers__text">
                        на весь ассортимент
                     </p>
                  </li>
                  <li class="triggers__item">
                     <h3 class="triggers__middle-title middle-title">
                        рассрочка
                     </h3>
                     <p class="triggers__text">
                        от 6 месяцев
                     </p>
                  </li>
                  <li class="triggers__item">
                     <h3 class="triggers__middle-title middle-title">
                        Подарки
                     </h3>
                     <p class="triggers__text">
                        и бонусам к покупкам
                     </p>
                  </li>
               </ul>
               <div class="triggers__reviews">
                  <div class="triggers__icon">
                     <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="56" height="56" rx="5" fill="#FC3F1D" />
                        <path
                           d="M37 43H32.0066V17.9198H29.7769C25.6942 17.9198 23.5587 19.9912 23.5587 23.0824C23.5587 26.5879 25.0347 28.2132 28.081 30.2846L30.5934 32.0055L23.3702 43H18L24.5008 33.1846C20.7636 30.4758 18.6595 27.8308 18.6595 23.3692C18.6595 17.7923 22.4909 14 29.7455 14H36.9686V43H37Z"
                           fill="white" />
                     </svg>
                  </div>
                  <div class="triggers__info">
                     <p class="triggers__subtitle">
                        Яндекс отзывы
                     </p>
                     <svg class="triggers__star" width="14" height="13" viewBox="0 0 14 13" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                           fill="#FFD12E" />
                     </svg>
                     <span class="triggers__estimation">
                        4,9
                     </span>
                  </div>
               </div>
            </div>
         </div>
         <!-- triggers -->

         <!-- electric-scooters -->
         <section class="electric-scooters">
            <div class="electric-scooters__container container">
               <div class="electric-scooters__header">
                  <h2 class="electric-scooters__big-title big-title">
                     Электросамокаты
                  </h2>
                  <ul class="electric-scooters__list">
                     <li class="electric-scooters__item">
                        <button class="electric-scooters__button electric-scooters__button_active">
                           Хиты продаж
                        </button>
                     </li>
                     <li class="electric-scooters__item">
                        <button class="electric-scooters__button">
                           Для города
                        </button>
                     </li>
                     <li class="electric-scooters__item">
                        <button class="electric-scooters__button">
                           Для взрослых
                        </button>
                     </li>
                     <li class="electric-scooters__item">
                        <button class="electric-scooters__button">
                           Для детей
                        </button>
                     </li>
                  </ul>
               </div>
               <div class="electric-scooters__product-card product-card">
                  <?php foreach ($infoCard as $infoCardItem): ?>
                  <article class="product-card__content">
                     <div class="product-card__header">
                        <span class="product-card__subtitle product-card__subtitle_hit">
                           <?= $infoCardItem['hype'] ?>
                        </span>
                        <button type="button" class="product-card__icon-card icon-card icon-card_no-bg">
                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <mask id="path-1-inside-1_7825_20528" fill="white">
                                 <path
                                    d="M19.4141 11.2663H18.7766L16.7349 6.31856C17.0208 6.27958 17.2413 6.03466 17.2413 5.73754C17.2413 5.41333 16.979 5.15049 16.6554 5.15049H11.6177C11.3769 4.48044 10.7363 4 9.98559 4C9.23488 4 8.59422 4.48048 8.3534 5.15049H3.34465C3.02105 5.15049 2.75871 5.41333 2.75871 5.73754C2.75871 6.03466 2.97926 6.27958 3.26512 6.31856L1.22344 11.2663H0.585938C0.262344 11.2663 0 11.5291 0 11.8533C0 14.1398 1.85668 16 4.13883 16C6.42098 16 8.27766 14.1398 8.27766 11.8533C8.27766 11.5291 8.01531 11.2663 7.69172 11.2663H7.05418L5.01504 6.32458H8.3534C8.59422 6.99464 9.23484 7.47508 9.98559 7.47508C10.7363 7.47508 11.3769 6.99464 11.6177 6.32458H14.985L12.9459 11.2663H12.3083C11.9847 11.2663 11.7224 11.5291 11.7224 11.8533C11.7224 14.1398 13.5791 16 15.8612 16C18.1434 16 20 14.1398 20 11.8533C20 11.5291 19.7377 11.2663 19.4141 11.2663ZM4.13883 14.8259C2.70332 14.8259 1.5027 13.7993 1.22996 12.4404H7.0477C6.77496 13.7993 5.57434 14.8259 4.13883 14.8259ZM5.78613 11.2663H2.49152L4.13883 7.27423L5.78613 11.2663ZM9.98555 6.30098C9.67543 6.30098 9.42316 6.04824 9.42316 5.73754C9.42316 5.42683 9.67543 5.17409 9.98555 5.17409C10.2956 5.17409 10.5479 5.42683 10.5479 5.73754C10.5479 6.04824 10.2957 6.30098 9.98555 6.30098ZM15.8612 7.27423L17.5085 11.2663H14.2139L15.8612 7.27423ZM15.8612 14.8259C14.4257 14.8259 13.225 13.7993 12.9523 12.4404H18.77C18.4973 13.7993 17.2966 14.8259 15.8612 14.8259Z" />
                              </mask>
                              <path
                                 d="M19.4141 11.2663H18.7766L16.7349 6.31856C17.0208 6.27958 17.2413 6.03466 17.2413 5.73754C17.2413 5.41333 16.979 5.15049 16.6554 5.15049H11.6177C11.3769 4.48044 10.7363 4 9.98559 4C9.23488 4 8.59422 4.48048 8.3534 5.15049H3.34465C3.02105 5.15049 2.75871 5.41333 2.75871 5.73754C2.75871 6.03466 2.97926 6.27958 3.26512 6.31856L1.22344 11.2663H0.585938C0.262344 11.2663 0 11.5291 0 11.8533C0 14.1398 1.85668 16 4.13883 16C6.42098 16 8.27766 14.1398 8.27766 11.8533C8.27766 11.5291 8.01531 11.2663 7.69172 11.2663H7.05418L5.01504 6.32458H8.3534C8.59422 6.99464 9.23484 7.47508 9.98559 7.47508C10.7363 7.47508 11.3769 6.99464 11.6177 6.32458H14.985L12.9459 11.2663H12.3083C11.9847 11.2663 11.7224 11.5291 11.7224 11.8533C11.7224 14.1398 13.5791 16 15.8612 16C18.1434 16 20 14.1398 20 11.8533C20 11.5291 19.7377 11.2663 19.4141 11.2663ZM4.13883 14.8259C2.70332 14.8259 1.5027 13.7993 1.22996 12.4404H7.0477C6.77496 13.7993 5.57434 14.8259 4.13883 14.8259ZM5.78613 11.2663H2.49152L4.13883 7.27423L5.78613 11.2663ZM9.98555 6.30098C9.67543 6.30098 9.42316 6.04824 9.42316 5.73754C9.42316 5.42683 9.67543 5.17409 9.98555 5.17409C10.2956 5.17409 10.5479 5.42683 10.5479 5.73754C10.5479 6.04824 10.2957 6.30098 9.98555 6.30098ZM15.8612 7.27423L17.5085 11.2663H14.2139L15.8612 7.27423ZM15.8612 14.8259C14.4257 14.8259 13.225 13.7993 12.9523 12.4404H18.77C18.4973 13.7993 17.2966 14.8259 15.8612 14.8259Z"
                                 fill="#282739" />
                              <path
                                 d="M18.7766 11.2663L15.079 12.7921L16.1 15.2663H18.7766V11.2663ZM16.7349 6.31856L16.1946 2.35522L11.0611 3.05512L13.0374 7.84433L16.7349 6.31856ZM11.6177 5.15049L7.85347 6.50339L8.80485 9.15049H11.6177V5.15049ZM8.3534 5.15049V9.15049H11.1662L12.1176 6.50345L8.3534 5.15049ZM3.26512 6.31856L6.96268 7.84435L8.93891 3.05522L3.80556 2.35523L3.26512 6.31856ZM1.22344 11.2663V15.2663H3.90002L4.921 12.7921L1.22344 11.2663ZM7.05418 11.2663L3.35661 12.7921L4.37757 15.2663H7.05418V11.2663ZM5.01504 6.32458V2.32458H-0.962677L1.31747 7.85035L5.01504 6.32458ZM8.3534 6.32458L12.1177 4.97169L11.1663 2.32458H8.3534V6.32458ZM11.6177 6.32458V2.32458H8.80485L7.85347 4.97169L11.6177 6.32458ZM14.985 6.32458L18.6826 7.85034L20.9627 2.32458L14.985 2.32458V6.32458ZM12.9459 11.2663V15.2663H15.6225L16.6434 12.7921L12.9459 11.2663ZM1.22996 12.4404V8.44039H-3.65259L-2.69183 13.2275L1.22996 12.4404ZM7.0477 12.4404L10.9695 13.2275L11.9302 8.44039H7.0477V12.4404ZM5.78613 11.2663V15.2663H11.7639L9.4837 9.74052L5.78613 11.2663ZM2.49152 11.2663L-1.20604 9.74052L-3.48623 15.2663H2.49152V11.2663ZM4.13883 7.27423L7.83639 5.74845L4.13883 -3.21221L0.441262 5.74845L4.13883 7.27423ZM15.8612 7.27423L19.5587 5.74845L15.8612 -3.21221L12.1636 5.74845L15.8612 7.27423ZM17.5085 11.2663V15.2663H23.4862L21.206 9.74052L17.5085 11.2663ZM14.2139 11.2663L10.5163 9.74052L8.23612 15.2663H14.2139V11.2663ZM12.9523 12.4404V8.44039H8.06975L9.03051 13.2275L12.9523 12.4404ZM18.77 12.4404L22.6918 13.2275L23.6526 8.44039H18.77V12.4404ZM19.4141 7.2663H18.7766V15.2663H19.4141V7.2663ZM22.4741 9.74053L20.4325 4.79279L13.0374 7.84433L15.079 12.7921L22.4741 9.74053ZM17.2753 10.2819C19.5145 9.97659 21.2413 8.06373 21.2413 5.73754H13.2413C13.2413 4.00559 14.5271 2.58257 16.1946 2.35522L17.2753 10.2819ZM21.2413 5.73754C21.2413 3.21132 19.1952 1.15049 16.6554 1.15049V9.15049C14.7627 9.15049 13.2413 7.61534 13.2413 5.73754H21.2413ZM16.6554 1.15049H11.6177V9.15049H16.6554V1.15049ZM15.382 3.7976C14.5916 1.5985 12.4857 0 9.98559 0V8C8.98691 8 8.1622 7.36238 7.85347 6.50339L15.382 3.7976ZM9.98559 0C7.48551 0 5.37954 1.59853 4.58916 3.79753L12.1176 6.50345C11.8089 7.36243 10.9843 8 9.98559 8V0ZM8.3534 1.15049H3.34465V9.15049H8.3534V1.15049ZM3.34465 1.15049C0.804792 1.15049 -1.24129 3.21132 -1.24129 5.73754H6.75871C6.75871 7.61534 5.23732 9.15049 3.34465 9.15049V1.15049ZM-1.24129 5.73754C-1.24129 8.06397 0.48576 9.97658 2.72468 10.2819L3.80556 2.35523C5.47276 2.58257 6.75871 4.00536 6.75871 5.73754H-1.24129ZM-0.432443 4.79276L-2.47412 9.7405L4.921 12.7921L6.96268 7.84435L-0.432443 4.79276ZM1.22344 7.2663H0.585938V15.2663H1.22344V7.2663ZM0.585938 7.2663C-1.95392 7.2663 -4 9.32713 -4 11.8533H4C4 13.7311 2.47861 15.2663 0.585938 15.2663V7.2663ZM-4 11.8533C-4 16.3418 -0.359583 20 4.13883 20V12C4.11623 12 4.10308 11.9962 4.09233 11.9916C4.07884 11.9859 4.06166 11.9753 4.04471 11.9583C4.02775 11.9414 4.01642 11.9233 4.00988 11.9079C4.00449 11.8951 4 11.8792 4 11.8533H-4ZM4.13883 20C8.63724 20 12.2777 16.3418 12.2777 11.8533H4.27766C4.27766 11.8792 4.27317 11.8951 4.26777 11.9079C4.26124 11.9233 4.2499 11.9414 4.23295 11.9583C4.216 11.9753 4.19882 11.9859 4.18533 11.9916C4.17458 11.9962 4.16142 12 4.13883 12V20ZM12.2777 11.8533C12.2777 9.32713 10.2316 7.2663 7.69172 7.2663V15.2663C5.79905 15.2663 4.27766 13.7311 4.27766 11.8533H12.2777ZM7.69172 7.2663H7.05418V15.2663H7.69172V7.2663ZM10.7518 9.74054L8.71261 4.79882L1.31747 7.85035L3.35661 12.7921L10.7518 9.74054ZM5.01504 10.3246H8.3534V2.32458H5.01504V10.3246ZM4.58913 7.67748C5.37952 9.87663 7.48552 11.4751 9.98559 11.4751V3.47508C10.9842 3.47508 11.8089 4.11264 12.1177 4.97169L4.58913 7.67748ZM9.98559 11.4751C12.4857 11.4751 14.5916 9.87658 15.382 7.67748L7.85347 4.97169C8.1622 4.1127 8.98691 3.47508 9.98559 3.47508V11.4751ZM11.6177 10.3246H14.985V2.32458H11.6177V10.3246ZM11.2874 4.79882L9.24829 9.74054L16.6434 12.7921L18.6826 7.85034L11.2874 4.79882ZM12.9459 7.2663H12.3083V15.2663H12.9459V7.2663ZM12.3083 7.2663C9.76846 7.2663 7.72238 9.32713 7.72238 11.8533H15.7224C15.7224 13.7311 14.201 15.2663 12.3083 15.2663V7.2663ZM7.72238 11.8533C7.72238 16.3418 11.3628 20 15.8612 20V12C15.8386 12 15.8255 11.9962 15.8147 11.9916C15.8012 11.9859 15.784 11.9753 15.7671 11.9583C15.7501 11.9414 15.7388 11.9233 15.7323 11.9079C15.7269 11.8951 15.7224 11.8792 15.7224 11.8533H7.72238ZM15.8612 20C20.3597 20 24 16.3418 24 11.8533H16C16 11.8792 15.9955 11.8951 15.9901 11.9079C15.9836 11.9234 15.9722 11.9414 15.9553 11.9584C15.9383 11.9753 15.9212 11.9859 15.9077 11.9916C15.897 11.9962 15.8838 12 15.8612 12V20ZM24 11.8533C24 9.32713 21.9539 7.2663 19.4141 7.2663V15.2663C17.5214 15.2663 16 13.7311 16 11.8533H24ZM4.13883 10.8259C4.65422 10.8259 5.05846 11.1884 5.15176 11.6533L-2.69183 13.2275C-2.05307 16.4102 0.752424 18.8259 4.13883 18.8259V10.8259ZM1.22996 16.4404H7.0477V8.44039H1.22996V16.4404ZM3.1259 11.6533C3.2192 11.1884 3.62344 10.8259 4.13883 10.8259V18.8259C7.52523 18.8259 10.3307 16.4102 10.9695 13.2275L3.1259 11.6533ZM5.78613 7.2663H2.49152V15.2663H5.78613V7.2663ZM6.18909 12.7921L7.83639 8.80001L0.441262 5.74845L-1.20604 9.74052L6.18909 12.7921ZM0.441262 8.80001L2.08857 12.7921L9.4837 9.74052L7.83639 5.74845L0.441262 8.80001ZM9.98555 2.30098C11.8917 2.30098 13.4232 3.84623 13.4232 5.73754H5.42316C5.42316 8.25025 7.45917 10.301 9.98555 10.301V2.30098ZM13.4232 5.73754C13.4232 7.62884 11.8917 9.17409 9.98555 9.17409V1.17409C7.45917 1.17409 5.42316 3.22483 5.42316 5.73754H13.4232ZM9.98555 9.17409C8.07954 9.17409 6.54793 7.62902 6.54793 5.73754H14.5479C14.5479 3.22465 12.5117 1.17409 9.98555 1.17409V9.17409ZM6.54793 5.73754C6.54793 3.84623 8.0794 2.30098 9.98555 2.30098V10.301C12.5119 10.301 14.5479 8.25025 14.5479 5.73754H6.54793ZM12.1636 8.80001L13.8109 12.7921L21.206 9.74052L19.5587 5.74845L12.1636 8.80001ZM17.5085 7.2663H14.2139V15.2663H17.5085V7.2663ZM17.9114 12.7921L19.5587 8.80001L12.1636 5.74845L10.5163 9.74052L17.9114 12.7921ZM15.8612 10.8259C16.3766 10.8259 16.7808 11.1884 16.8741 11.6533L9.03051 13.2275C9.66928 16.4102 12.4748 18.8259 15.8612 18.8259V10.8259ZM12.9523 16.4404H18.77V8.44039H12.9523V16.4404ZM14.8482 11.6533C14.9415 11.1884 15.3458 10.8259 15.8612 10.8259V18.8259C19.2475 18.8259 22.0531 16.4102 22.6918 13.2275L14.8482 11.6533Z"
                                 fill="#282739" mask="url(#path-1-inside-1_7825_20528)" />
                           </svg>
                        </button>
                     </div>
                     <a href="<?= $infoCardItem['link'] ?>" class="product-card__image">
                        <img src="<?= $infoCardItem['image'] ?>" alt="Самокат">
                     </a>
                     <div class="product-card__info">
                        <a href="<?= $infoCardItem['link'] ?>" class="product-card__title">
                           <?= $infoCardItem['title'] ?>
                        </a>
                        <ul class="product-card__desk-list desk-list">
                           <li class="desk-list__item">
                              <svg class="desk-list__icon" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M16.5 3.75001V2.99999C16.5 2.58655 16.1638 2.25 15.75 2.25H13.5C13.0862 2.25 12.75 2.58655 12.75 2.99999V3.74998H12.5303L12.2198 3.43944C11.9407 3.16002 11.554 2.99999 11.1592 2.99999H6.84081C6.44604 2.99999 6.05932 3.16002 5.78025 3.43944L5.46971 3.74998H5.24999V2.99999C5.24999 2.58655 4.91382 2.25 4.5 2.25H2.25C1.83618 2.25 1.50001 2.58655 1.50001 2.99999V3.74998C0.673102 3.75001 0 4.42273 0 5.24999V14.25C0 15.0773 0.673102 15.75 1.50001 15.75H16.5C17.3269 15.75 18 15.0773 18 14.25V5.24999C18 4.42273 17.3269 3.75001 16.5 3.75001ZM4.12499 7.49999H2.62501C2.41773 7.49999 2.25 7.33226 2.25 7.12498C2.25 6.91773 2.41773 6.75 2.62501 6.75H4.12502C4.3323 6.75 4.50004 6.91773 4.50004 7.12501C4.5 7.33229 4.33227 7.49999 4.12499 7.49999ZM15.375 7.49999H15V7.875C15 8.08228 14.8322 8.25001 14.625 8.25001C14.4177 8.25001 14.25 8.08228 14.25 7.875V7.49999H13.8749C13.6677 7.49999 13.4999 7.33226 13.4999 7.12498C13.4999 6.9177 13.6677 6.74996 13.8749 6.74996H14.25V6.37495C14.25 6.16767 14.4177 5.99994 14.625 5.99994C14.8322 5.99994 15 6.16767 15 6.37495V6.75H15.375C15.5823 6.75 15.75 6.91773 15.75 7.12501C15.75 7.33229 15.5823 7.49999 15.375 7.49999Z"
                                    fill="#5D6C7B" />
                              </svg>
                              <span class="desk-list__text">
                                 <?= $infoCardItem['accumulator'] ?> mAh
                              </span>
                           </li>
                           <li class="desk-list__item">
                              <svg class="desk-list__icon" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M14.224 0.260732C14.1407 0.101188 13.9756 0 13.7955 0H6.72992C6.51625 0 6.32795 0.141421 6.26681 0.346092L3.74286 8.80412C3.69918 8.95043 3.72721 9.10792 3.81843 9.23032C3.90965 9.35277 4.05337 9.42405 4.20596 9.42405H8.16763L6.57164 17.4212C6.52519 17.6538 6.65434 17.8862 6.87653 17.9691C6.93193 17.9898 6.98908 18 7.04544 18C7.21495 18 7.37746 17.9106 7.46554 17.7559L13.6896 6.82597C13.7748 6.67634 13.774 6.49172 13.6875 6.34287C13.601 6.19402 13.4418 6.10147 13.2697 6.10147H10.4671L14.1919 0.760267C14.2949 0.612563 14.3073 0.420397 14.224 0.260732Z"
                                    fill="#5D6C7B" />
                              </svg>
                              <span class="desk-list__text">
                                 <?= $infoCardItem['power'] ?> л.с.
                              </span>
                           </li>
                           <li class="desk-list__item">
                              <svg class="desk-list__icon" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M8.47243 4.56419V1.23584C6.43963 1.35252 4.53332 2.14245 3.01172 3.49853L5.36494 5.85175C6.25052 5.11452 7.32585 4.66895 8.47243 4.56419V4.56419Z"
                                    fill="#5D6C7B" />
                                 <path
                                    d="M4.61876 6.59732L2.26557 4.24414C0.908332 5.76531 0.117422 7.67176 0 9.70505H3.32849C3.43396 8.55822 3.88044 7.48283 4.61876 6.59732Z"
                                    fill="#5D6C7B" />
                                 <path
                                    d="M14.6692 9.70505H17.9977C17.8802 7.67176 17.0894 5.76531 15.7321 4.24414L13.3789 6.59732C14.1172 7.4828 14.5637 8.55822 14.6692 9.70505V9.70505Z"
                                    fill="#5D6C7B" />
                                 <path
                                    d="M14.6696 10.7598C14.4951 12.6757 13.4434 13.8447 13.0258 14.2622C12.8195 14.4685 12.8195 14.803 13.0258 15.0093L14.6259 16.6094C14.729 16.7126 14.8642 16.7641 14.9994 16.7641C15.1346 16.7641 15.2697 16.7126 15.3729 16.6094C16.9523 15.0302 17.8732 12.9695 17.9992 10.7598H14.6696Z"
                                    fill="#5D6C7B" />
                                 <path
                                    d="M3.27189 13.7856C3.41919 13.5541 3.64215 13.2055 3.90962 12.7931C3.63544 12.2496 3.40358 11.5721 3.32965 10.7598H0C0.126035 12.9695 1.04695 15.0302 2.62628 16.6094C2.72943 16.7126 2.8646 16.7642 2.99978 16.7642C3.13495 16.7642 3.27016 16.7126 3.37331 16.6094L3.92119 16.0615C3.76249 15.9851 3.61607 15.8819 3.48785 15.7537C2.95952 15.2253 2.87068 14.416 3.27189 13.7856V13.7856Z"
                                    fill="#5D6C7B" />
                                 <path
                                    d="M9.52734 1.23584V4.56419C10.6739 4.66895 11.7493 5.11449 12.6348 5.85175L14.9881 3.49853C13.4665 2.14241 11.5601 1.35252 9.52734 1.23584V1.23584Z"
                                    fill="#5D6C7B" />
                                 <path
                                    d="M7.82725 9.06949C7.01106 9.88568 4.44992 13.8968 4.16059 14.3515C4.02787 14.56 4.05783 14.8327 4.23259 15.0075C4.40735 15.1823 4.68006 15.2123 4.88861 15.0795C5.34328 14.7902 9.35448 12.2291 10.1707 11.4129C10.8167 10.7668 10.8167 9.71559 10.1707 9.06953C9.5246 8.42346 8.47332 8.42343 7.82725 9.06949V9.06949Z"
                                    fill="#5D6C7B" />
                              </svg>
                              <span class="desk-list__text">
                                 <?= $infoCardItem['speedometer'] ?> км.ч
                              </span>
                           </li>
                           <li class="desk-list__item">
                              <svg class="desk-list__icon" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#clip0_7825_20553)">
                                    <path
                                       d="M14.4525 5.35819L15.5303 4.28044L14.4698 3.21956L13.3168 4.3725C12.2636 3.62609 11.0345 3.16607 9.75 3.0375V1.5H11.25V0H6.75V1.5H8.25V3.0375C6.96551 3.16607 5.73644 3.62609 4.68319 4.3725L3.53025 3.21956L2.46975 4.28044L3.5475 5.35819C2.54149 6.42334 1.86948 7.75982 1.61448 9.20259C1.35947 10.6454 1.53263 12.1312 2.11257 13.4767C2.69252 14.8222 3.65384 15.9683 4.87783 16.7736C6.10182 17.5788 7.53487 18.008 9 18.008C10.4651 18.008 11.8982 17.5788 13.1222 16.7736C14.3462 15.9683 15.3075 14.8222 15.8874 13.4767C16.4674 12.1312 16.6405 10.6454 16.3855 9.20259C16.1305 7.75982 15.4585 6.42334 14.4525 5.35819V5.35819ZM9 16.5C7.81332 16.5 6.65328 16.1481 5.66658 15.4888C4.67989 14.8295 3.91085 13.8925 3.45673 12.7961C3.0026 11.6997 2.88378 10.4933 3.11529 9.32946C3.3468 8.16557 3.91825 7.09647 4.75736 6.25736C5.59648 5.41824 6.66558 4.8468 7.82946 4.61529C8.99335 4.38378 10.1997 4.5026 11.2961 4.95672C12.3925 5.41085 13.3295 6.17988 13.9888 7.16658C14.6481 8.15327 15 9.31331 15 10.5C14.9982 12.0908 14.3655 13.6158 13.2407 14.7407C12.1158 15.8655 10.5908 16.4982 9 16.5V16.5Z"
                                       fill="#5D6C7B" />
                                    <path
                                       d="M9 6V10.5H4.5C4.5 11.39 4.76392 12.26 5.25839 13.0001C5.75285 13.7401 6.45566 14.3169 7.27792 14.6575C8.10019 14.9981 9.00499 15.0872 9.87791 14.9135C10.7508 14.7399 11.5526 14.3113 12.182 13.682C12.8113 13.0526 13.2399 12.2508 13.4135 11.3779C13.5872 10.505 13.4981 9.60019 13.1575 8.77792C12.8169 7.95566 12.2401 7.25285 11.5001 6.75839C10.76 6.26392 9.89002 6 9 6V6Z"
                                       fill="#5D6C7B" />
                                 </g>
                                 <defs>
                                    <clipPath id="clip0_7825_20553">
                                       <rect width="18" height="18" fill="white" />
                                    </clipPath>
                                 </defs>
                              </svg>
                              <span class="desk-list__text">
                                 <?= $infoCardItem['time'] ?> час(ов)
                              </span>
                           </li>
                        </ul>
                        <div class="product-card__footer">
                           <div class="product-card__price-card price-card">
                              <span class="price-card__old">
                                 <?= $infoCardItem['old-price'] ?> ₽
                              </span>
                              <span class="price-card__numb">
                                 <?= $infoCardItem['new-price'] ?> ₽
                              </span>
                           </div>
                           <div class="product-card__icons">
                              <button type="button"
                                 class="product-card__icon icon-card icon-card_basket icon-card_border">
                                 <svg width="151" height="151" viewBox="0 0 151 151" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_7827_40218)">
                                       <path d="M21.5 59H37H117H133H143L126.5 131H24L8 59H21.5Z" fill="white" />
                                       <path
                                          d="M148.758 54.5798C146.764 52.0783 143.773 50.6432 140.551 50.6432H111.47L95.701 14.5351C94.7233 12.2963 92.1156 11.2732 89.8766 12.2515C87.6375 13.2291 86.615 15.8371 87.593 18.0762L101.816 50.6435H49.1844L63.407 18.0762C64.3847 15.8371 63.3625 13.2294 61.1235 12.2515C58.8847 11.2732 56.2767 12.2957 55.299 14.5351L39.5299 50.6435H10.4494C7.22708 50.6435 4.23569 52.0783 2.24172 54.5801C0.284323 57.0362 -0.43794 60.1937 0.26014 63.2438L15.7898 131.076C16.8743 135.812 21.0642 139.12 25.9791 139.12H125.021C129.936 139.12 134.126 135.812 135.21 131.076L150.74 63.2435C151.438 60.1934 150.716 57.0359 148.758 54.5798ZM125.021 130.272H25.9791C25.2279 130.272 24.57 129.78 24.4145 129.101L8.88484 61.2692C8.76303 60.7369 8.96741 60.3364 9.16088 60.0943C9.34019 59.869 9.7463 59.4912 10.4494 59.4912H35.6661L34.5074 62.1446C33.5297 64.3836 34.5519 66.9913 36.7909 67.9693C37.3672 68.2211 37.9677 68.3403 38.559 68.3403C40.2642 68.3403 41.8892 67.3485 42.6153 65.686L45.3207 59.4918H105.68L108.385 65.686C109.111 67.3488 110.736 68.3403 112.442 68.3403C113.033 68.3403 113.633 68.2211 114.21 67.9693C116.449 66.9916 117.471 64.3836 116.493 62.1446L115.335 59.4912H140.551C141.254 59.4912 141.66 59.869 141.84 60.0943C142.033 60.3367 142.238 60.7372 142.116 61.269L126.586 129.101C126.43 129.78 125.772 130.272 125.021 130.272Z"
                                          fill="#6F73EE" />
                                       <path
                                          d="M148.758 54.5798C146.764 52.0783 143.773 50.6432 140.551 50.6432H111.47L95.701 14.5351C94.7233 12.2963 92.1156 11.2732 89.8766 12.2515C87.6375 13.2291 86.615 15.8371 87.593 18.0762L101.816 50.6435H49.1844L63.407 18.0762C64.3847 15.8371 63.3625 13.2294 61.1235 12.2515C58.8847 11.2732 56.2767 12.2957 55.299 14.5351L39.5299 50.6435H10.4494C7.22708 50.6435 4.23569 52.0783 2.24172 54.5801C0.284323 57.0362 -0.43794 60.1937 0.26014 63.2438L15.7898 131.076C16.8743 135.812 21.0642 139.12 25.9791 139.12H125.021C129.936 139.12 134.126 135.812 135.21 131.076L150.74 63.2435C151.438 60.1934 150.716 57.0359 148.758 54.5798ZM125.021 130.272H25.9791C25.2279 130.272 24.57 129.78 24.4145 129.101L8.88484 61.2692C8.76303 60.7369 8.96741 60.3364 9.16088 60.0943C9.34019 59.869 9.7463 59.4912 10.4494 59.4912H35.6661L34.5074 62.1446C33.5297 64.3836 34.5519 66.9913 36.7909 67.9693C37.3672 68.2211 37.9677 68.3403 38.559 68.3403C40.2642 68.3403 41.8892 67.3485 42.6153 65.686L45.3207 59.4918H105.68L108.385 65.686C109.111 67.3488 110.736 68.3403 112.442 68.3403C113.033 68.3403 113.633 68.2211 114.21 67.9693C116.449 66.9916 117.471 64.3836 116.493 62.1446L115.335 59.4912H140.551C141.254 59.4912 141.66 59.869 141.84 60.0943C142.033 60.3367 142.238 60.7372 142.116 61.269L126.586 129.101C126.43 129.78 125.772 130.272 125.021 130.272Z"
                                          stroke="#6F73EE" />
                                       <path class="white"
                                          d="M48.9551 78.6621C46.5119 78.6621 44.5312 80.6428 44.5312 83.0859V115.527C44.5312 117.97 46.5119 119.951 48.9551 119.951C51.3982 119.951 53.3789 117.97 53.3789 115.527V83.0859C53.3789 80.6428 51.3985 78.6621 48.9551 78.6621Z"
                                          fill="#6F73EE" />
                                       <path class="white"
                                          d="M48.9551 78.6621C46.5119 78.6621 44.5312 80.6428 44.5312 83.0859V115.527C44.5312 117.97 46.5119 119.951 48.9551 119.951C51.3982 119.951 53.3789 117.97 53.3789 115.527V83.0859C53.3789 80.6428 51.3985 78.6621 48.9551 78.6621Z"
                                          stroke="#6F73EE" />
                                       <path class="white"
                                          d="M75.502 78.6621C73.0588 78.6621 71.0781 80.6428 71.0781 83.0859V115.527C71.0781 117.97 73.0588 119.951 75.502 119.951C77.9451 119.951 79.9258 117.97 79.9258 115.527V83.0859C79.9258 80.6428 77.9451 78.6621 75.502 78.6621Z"
                                          fill="#6F73EE" />
                                       <path class="white"
                                          d="M75.502 78.6621C73.0588 78.6621 71.0781 80.6428 71.0781 83.0859V115.527C71.0781 117.97 73.0588 119.951 75.502 119.951C77.9451 119.951 79.9258 117.97 79.9258 115.527V83.0859C79.9258 80.6428 77.9451 78.6621 75.502 78.6621Z"
                                          stroke="#6F73EE" />
                                       <path class="white"
                                          d="M102.041 78.6621C99.5979 78.6621 97.6172 80.6428 97.6172 83.0859V115.527C97.6172 117.97 99.5979 119.951 102.041 119.951C104.484 119.951 106.465 117.97 106.465 115.527V83.0859C106.465 80.6428 104.484 78.6621 102.041 78.6621Z"
                                          fill="#6F73EE" />
                                       <path class="white"
                                          d="M102.041 78.6621C99.5979 78.6621 97.6172 80.6428 97.6172 83.0859V115.527C97.6172 117.97 99.5979 119.951 102.041 119.951C104.484 119.951 106.465 117.97 106.465 115.527V83.0859C106.465 80.6428 104.484 78.6621 102.041 78.6621Z"
                                          stroke="#6F73EE" />
                                    </g>
                                    <defs>
                                       <clipPath id="clip0_7827_40218">
                                          <rect width="151" height="151" fill="white" />
                                       </clipPath>
                                    </defs>
                                 </svg>
                              </button>
                              <button type="button" class="product-card__icon-card icon-card icon-card_border">
                                 <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M17.9951 5.51484C17.7344 4.90528 17.3586 4.35291 16.8886 3.88864C16.4182 3.42298 15.8637 3.05293 15.2551 2.79861C14.624 2.53385 13.9471 2.39833 13.2637 2.39992C12.305 2.39992 11.3696 2.66506 10.5568 3.16588C10.3623 3.28569 10.1775 3.41727 10.0025 3.56065C9.8275 3.41727 9.64276 3.28569 9.44829 3.16588C8.63542 2.66506 7.70004 2.39992 6.74132 2.39992C6.05096 2.39992 5.382 2.53347 4.74998 2.79861C4.13935 3.05393 3.58901 3.4212 3.11646 3.88864C2.64584 4.35239 2.2699 4.90489 2.00994 5.51484C1.73963 6.14922 1.60156 6.82287 1.60156 7.51617C1.60156 8.17019 1.7338 8.8517 1.99633 9.54499C2.21608 10.1244 2.53111 10.7254 2.93366 11.3322C3.57151 12.2926 4.44855 13.2943 5.53757 14.3097C7.34222 15.9929 9.12937 17.1555 9.20521 17.2027L9.6661 17.5012C9.87029 17.6328 10.1328 17.6328 10.337 17.5012L10.7979 17.2027C10.8737 17.1536 12.6589 15.9929 14.4655 14.3097C15.5545 13.2943 16.4316 12.2926 17.0694 11.3322C17.472 10.7254 17.789 10.1244 18.0068 9.54499C18.2693 8.8517 18.4015 8.17019 18.4015 7.51617C18.4035 6.82287 18.2654 6.14922 17.9951 5.51484ZM10.0025 15.9477C10.0025 15.9477 3.07951 11.4678 3.07951 7.51617C3.07951 5.51484 4.71886 3.89257 6.74132 3.89257C8.16287 3.89257 9.39579 4.69388 10.0025 5.86443C10.6093 4.69388 11.8422 3.89257 13.2637 3.89257C15.2862 3.89257 16.9255 5.51484 16.9255 7.51617C16.9255 11.4678 10.0025 15.9477 10.0025 15.9477Z"
                                       fill="#6F73EE" />
                                    <path
                                       d="M3.99986 4.00041C6.0995 2.60065 8.35221 3.39493 9.55275 4.17364C9.8961 4.02094 10.6335 3.80368 12 3.5C16.5 2.5 16.5 5 17.5 6.5C18.3 7.7 17.1667 10 16.5 11L9.99986 17L2.99986 10.5C2.3332 9.00014 1.59986 5.60041 3.99986 4.00041Z" />
                                 </svg>
                              </button>
                           </div>
                        </div>
                     </div>
                     <a href="<?= $infoCardItem['link'] ?>" class="product-card__button button_purple">
                        Купить в 1 клик
                     </a>
                  </article>
                  <?php endforeach; ?>
               </div>
               <a href="#" class="electric-scooters__link button button_border">
                  Смотреть все
               </a>
            </div>
         </section>
         <!-- electric-scooters -->

         <!-- row-blocks -->
         <article class="row-blocks">
            <div class="row-blocks__container container">
               <ul class="row-blocks__list">
                  <li class="row-blocks__item">
                     <div class="row-blocks__info">
                        <h3 class="row-blocks__middle-title middle-title">
                           Подбор модели электросамоката
                        </h3>
                        <p class="row-blocks__text">
                           Пройдите тест и выберите электросамокат по своим критериям
                        </p>
                        <a href="#" class="row-blocks__link link-arrow underline_purple">
                           Подобрать модель
                        </a>
                     </div>
                     <div class="row-blocks__image row-blocks__image_1">
                        <img src="/img/row-blocks/row-blocks-image1.png" alt="Подбор модели электросамоката">
                     </div>
                  </li>
                  <li class="row-blocks__item">
                     <div class="row-blocks__info">
                        <h3 class="row-blocks__middle-title middle-title">
                           Сервисное
                           обслуживание
                        </h3>
                        <p class="row-blocks__text">
                           Крупнейший сервисный центр <br> в России для продуктов Kugoo
                        </p>
                        <a href="#" class="row-blocks__link link-arrow underline_purple">
                           Подобрать модель
                        </a>
                     </div>
                     <div class="row-blocks__image row-blocks__image_2">
                        <img src="/img/row-blocks/row-blocks-image2.png" alt="Сервисное
                        обслуживание">
                     </div>
                  </li>
               </ul>
            </div>
         </article>
         <!-- row-blocks -->

         <!-- preview -->
         <article class="preview">
            <div class="preview__container">
               <div class="preview__image preview__image_1">
                  <img src="/img/preview/preview-image1.png"
                     alt="Бесплатная доставка электросамокатов по России до 01.09">
               </div>
               <div class="preview__info">
                  <p class="preview__subtitle preview__subtitle_stock preview__subtitle_service">
                     Акция
                  </p>
                  <h2 class="preview__big-title big-title">
                     Бесплатная доставка <br> электросамокатов <br> по России до 01.09
                  </h2>
                  <a href="#" class="preview__button button">
                     Подробнее
                  </a>
               </div>
            </div>
         </article>
         <!-- preview -->

         <!-- popular-categories -->
         <section class="popular-categories">
            <div class="popular-categories__container container">
               <div class="popular-categories__header">
                  <h2 class="popular-categories__big-title big-title">
                     Популярные категории
                  </h2>
                  <article class="popular-categories__block-manager block-manager">
                     <div class="block-manager__image">
                        <img src="/img/manager-image/manager-icon.png" alt="Менеджер">
                     </div>
                     <div class="block-manager__info">
                        <p class="block-manager__text">
                           Менеджер ответит на любой ваш вопрос о продуктах Kugoo
                        </p>
                        <button class="block-manager__button order-call underline_purple">
                           Задать вопрос
                        </button>
                     </div>
                  </article>
               </div>
               <div class="popular-categories__row">
                  <a href="#" class="popular-categories__link">
                     <article class="popular-categories__item">
                        <p class="popular-categories__subtitle">
                           Электросамокаты
                        </p>
                        <p class="popular-categories__text">
                           от 29 900 ₽
                        </p>
                     </article>
                     <img src="/img/popular-categories/electric-scooter.png" alt="Электроскутеры"
                        class="popular-categories__image">
                  </a>
                  <a href="#" class="popular-categories__link">
                     <article class="popular-categories__item">
                        <p class="popular-categories__subtitle">
                           Электровелосипеды
                        </p>
                        <p class="popular-categories__text">
                           от 29 900 ₽
                        </p>
                     </article>
                     <img src="/img/popular-categories/electric-bicycles.png" alt="Электровелосипеды"
                        class="popular-categories__image">
                  </a>
                  <a href="#" class="popular-categories__link">
                     <article class="popular-categories__item">
                        <p class="popular-categories__subtitle">
                           Весы
                        </p>
                        <p class="popular-categories__text">
                           от 29 900 ₽
                        </p>
                     </article>
                     <img src="/img/popular-categories/scales.png" alt="Весы" class="popular-categories__image">
                  </a>
                  <a href="#" class="popular-categories__link">
                     <article class="popular-categories__item">
                        <p class="popular-categories__subtitle">
                           Робот-пылесоссы
                        </p>
                        <p class="popular-categories__text">
                           от 29 900 ₽
                        </p>
                     </article>
                     <img src="/img/popular-categories/robot-vacuum-cleaners.png" alt="Робот-пылесоссы"
                        class="popular-categories__image">
                  </a>
                  <a href="#" class="popular-categories__link">
                     <article class="popular-categories__item">
                        <p class="popular-categories__subtitle">
                           Электровелосипеды
                        </p>
                        <p class="popular-categories__text">
                           от 29 900 ₽
                        </p>
                     </article>
                     <img src="/img/popular-categories/electric-bicycles.png" alt="Электровелосипеды"
                        class="popular-categories__image">
                  </a>
                  <a href="#" class="popular-categories__link">
                     <article class="popular-categories__item">
                        <p class="popular-categories__subtitle">
                           Весы
                        </p>
                        <p class="popular-categories__text">
                           от 29 900 ₽
                        </p>
                     </article>
                     <img src="/img/popular-categories/scales.png" alt="Весы" class="popular-categories__image">
                  </a>
                  <a href="#" class="popular-categories__link">
                     <article class="popular-categories__item">
                        <p class="popular-categories__subtitle">
                           Робот-пылесоссы
                        </p>
                        <p class="popular-categories__text">
                           от 29 900 ₽
                        </p>
                     </article>
                     <img src="/img/popular-categories/robot-vacuum-cleaners.png" alt="Робот-пылесоссы"
                        class="popular-categories__image">
                  </a>
                  <a href="#" class="popular-categories__link">
                     <article class="popular-categories__item">
                        <p class="popular-categories__subtitle">
                           Электровелосипеды
                        </p>
                        <p class="popular-categories__text">
                           от 29 900 ₽
                        </p>
                     </article>
                     <img src="/img/popular-categories/electric-bicycles.png" alt="Электровелосипеды"
                        class="popular-categories__image">
                  </a>
               </div>
               <a href="#" class="popular-categories__button button button_border">
                  Смотреть все
               </a>
            </div>
         </section>
         <!-- popular-categories -->
         
         <!-- kugoo-russia -->
         <article class="kugoo-russia">
            <div class="kugoo-russia__container">
               <div class="kugoo-russia__image">
                  <img src="/img/kugoo-russia/happy-company.png" alt="Веселая компания людей с нашим самокатом">
                  <div class="kugoo-russia__test-drive test-drive">
                     <div class="test-drive__info">
                        <p class="test-drive__subtitle">
                           Тест-драйв в Москве
                        </p>
                        <p class="test-drive__text">
                           Оцените все преимущества <br> самокатов лично
                        </p>
                     </div>
                     <a href="#" class="test-drive__button-detailed button-detailed">
                        Подробнее
                     </a>
                  </div>
               </div>
               <div class="kugoo-russia__info">
                  <h2 class="kugoo-russia__big-title big-title">
                     Kugoo-Russia — первый официальный дилер Kugoo Kirin в России
                  </h2>
                  <p class="kugoo-russia__purpose">
                     Наша цель предоставить полный ассортимент современной продукции Kugoo Kirin, которая улучшает и
                     упрощает жизнь. Стремимся подарить комфорт и эмоции, поэтому помогаем с выбором и внимательно
                     относимся к сервисному обслуживанию.
                  </p>
                  <div class="kugoo-russia__block">
                     <p class="kugoo-russia__subtitle">
                        Специализируемся исключительно на бренде Kugoo, поэтому вы получите:
                     </p>
                     <ul class="kugoo-russia__list">
                        <li class="kugoo-russia__item">
                           <div class="kugoo-russia__icon">
                              <img src="/img/kugoo-russia/icon.svg" alt="Иконка">
                           </div>
                           <p class="kugoo-russia__text">
                              цены от завода-изготовителя Jilong;
                           </p>
                        </li>
                        <li class="kugoo-russia__item">
                           <div class="kugoo-russia__icon">
                              <img src="/img/kugoo-russia/icon.svg" alt="Иконка">
                           </div>
                           <p class="kugoo-russia__text">
                              бесплатный тест-драйв самокатов;
                           </p>
                        </li>
                        <li class="kugoo-russia__item">
                           <div class="kugoo-russia__icon">
                              <img src="/img/kugoo-russia/icon.svg" alt="Иконка">
                           </div>
                           <p class="kugoo-russia__text">
                              фирменную гарантию 1 год;
                           </p>
                        </li>
                        <li class="kugoo-russia__item">
                           <div class="kugoo-russia__icon">
                              <img src="/img/kugoo-russia/icon.svg" alt="Иконка">
                           </div>
                           <p class="kugoo-russia__text">
                              ремонт и обслуживание от 1 дня в собственном сервисном центре;
                           </p>
                        </li>
                        <li class="kugoo-russia__item">
                           <div class="kugoo-russia__icon">
                              <img src="/img/kugoo-russia/icon.svg" alt="Иконка">
                           </div>
                           <p class="kugoo-russia__text">
                              более 1 000 запчастей и аксессуаров в наличии
                           </p>
                        </li>
                     </ul>
                     <a href="#" class="kugoo-russia__link underline_purple">
                        Смотреть сертификат
                     </a>
                  </div>
               </div>
            </div>
         </article>
         <!-- kugoo-russia -->

         <!-- favorable-prices -->
         <section class="favorable-prices">
            <div class="favorable-prices__container container">
               <div class="favorable-prices__header">
                  <h2 class="favorable-prices__big-title big-title">
                     Предлагаем самые выгодные цены
                     на продукты Kugoo за счет прямых поставок
                  </h2>
                  <p class="favorable-prices__subtitle">
                     и заботимся об удобстве покупателей
                  </p>
               </div>
               <div class="favorable-prices__prices-tabs prices-tabs">
                  <div class="prices-tabs__buttons">
                     <button class="prices-tabs__button button" data-prices-tab="#pricesTab1">
                        Интернет-магазин
                     </button>
                     <button class="prices-tabs__button button" data-prices-tab="#pricesTab2">
                        Сервисный центр
                     </button>
                  </div>
                  <ul class="prices-tabs__list" id="pricesTab1">
                     <li class="prices-tabs__item">
                        <div class="prices-tabs__icon">
                           <svg class="prices-tabs__icon" width="25" height="25" viewBox="0 0 25 25" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_199_2303)">
                                 <path
                                    d="M23.9404 9.0679H18.7539L15.8446 2.40613C15.6827 2.03548 15.251 1.86609 14.8802 2.02805C14.5095 2.18992 14.3403 2.62171 14.5022 2.99241L17.1555 9.06795H7.84456L10.4979 2.99241C10.6597 2.62171 10.4905 2.18997 10.1198 2.02805C9.74915 1.86609 9.31731 2.03538 9.15549 2.40613L6.24612 9.0679H1.05964C0.381177 9.0679 -0.122338 9.68211 0.0260991 10.3286L2.7573 22.2246C2.86575 22.697 3.29514 23.0327 3.79085 23.0327H21.2092C21.7049 23.0327 22.1343 22.697 22.2428 22.2246L24.974 10.3286C25.1224 9.68216 24.6188 9.0679 23.9404 9.0679ZM6.38391 11.3142C6.28606 11.3142 6.1866 11.2945 6.09114 11.2528C5.72044 11.0909 5.55115 10.6592 5.71306 10.2884L6.26326 9.02854H7.86169L7.05544 10.8746C6.93528 11.15 6.66624 11.3142 6.38391 11.3142ZM8.83792 19.1265C8.83792 19.531 8.50999 19.8589 8.10549 19.8589C7.701 19.8589 7.37307 19.531 7.37307 19.1265V13.7554C7.37307 13.3509 7.701 13.023 8.10549 13.023C8.50999 13.023 8.83792 13.3509 8.83792 13.7554V19.1265ZM13.2324 19.1265C13.2324 19.531 12.9045 19.8589 12.5 19.8589C12.0955 19.8589 11.7676 19.531 11.7676 19.1265V13.7554C11.7676 13.3509 12.0955 13.023 12.5 13.023C12.9045 13.023 13.2324 13.3509 13.2324 13.7554V19.1265ZM17.627 19.1265C17.627 19.531 17.299 19.8589 16.8946 19.8589C16.4901 19.8589 16.1621 19.531 16.1621 19.1265V13.7554C16.1621 13.3509 16.4901 13.023 16.8946 13.023C17.299 13.023 17.627 13.3509 17.627 13.7554V19.1265ZM18.9089 11.2528C18.8135 11.2945 18.714 11.3142 18.6161 11.3142C18.3338 11.3142 18.0648 11.15 17.9446 10.8747L17.1383 9.02859H18.7367L19.2869 10.2885C19.4489 10.6592 19.2796 11.0909 18.9089 11.2528Z"
                                    fill="#6F73EE" />
                              </g>
                              <defs>
                                 <clipPath id="clip0_199_2303">
                                    <rect width="25" height="25" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>
                        <p class="prices-tabs__subtitle">
                           Х товаров в каталоге
                        </p>
                        <p class="prices-tabs__text">
                           Выбирайте товар, который подходит по цене и характеристикам. Если товара нет в наличии — мы
                           сообщим вам о его поступлении.
                        </p>
                     </li>
                     <li class="prices-tabs__item">
                        <div class="prices-tabs__icon">
                           <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_199_2341)">
                                 <path
                                    d="M20.3125 16.6667C17.7281 16.6667 15.625 14.5635 15.625 11.9792C15.625 9.39479 17.7281 7.29167 20.3125 7.29167H22.9167V5.98958C22.9167 4.40937 21.6323 3.125 20.0521 3.125H2.86458C1.28438 3.125 0 4.40937 0 5.98958V19.0104C0 20.5906 1.28438 21.875 2.86458 21.875H20.0521C21.6323 21.875 22.9167 20.5906 22.9167 19.0104V16.6667H20.3125Z"
                                    fill="#6F73EE" />
                                 <path
                                    d="M24.2187 8.85419H20.3125C18.5896 8.85419 17.1875 10.2563 17.1875 11.9792C17.1875 13.7021 18.5896 15.1042 20.3125 15.1042H24.2187C24.65 15.1042 25 14.7542 25 14.3229V9.63544C25 9.20419 24.65 8.85419 24.2187 8.85419ZM20.3125 13.0209C19.7375 13.0209 19.2708 12.5542 19.2708 11.9792C19.2708 11.4042 19.7375 10.9375 20.3125 10.9375C20.8875 10.9375 21.3542 11.4042 21.3542 11.9792C21.3542 12.5542 20.8875 13.0209 20.3125 13.0209Z"
                                    fill="#6F73EE" />
                              </g>
                              <defs>
                                 <clipPath id="clip0_199_2341">
                                    <rect width="25" height="25" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>

                        </div>
                        <p class="prices-tabs__subtitle">
                           5 способов оплаты
                        </p>
                        <p class="prices-tabs__text">
                           Вы можете оплатить покупку наличными, картой, онлайн на сайте, через интернет-банкинг или в
                           кредит от «Сбербанка».
                        </p>
                     </li>
                     <li class="prices-tabs__item">
                        <div class="prices-tabs__icon">
                           <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_199_2344)">
                                 <path
                                    d="M25 12.5141L22.8604 9.72694L23.339 6.2641L20.0732 4.96905L18.7782 1.70329L15.3153 2.18189L12.5 0.0140991L9.71284 2.15374L6.25 1.67514L4.95495 4.9409L1.68919 6.23595L2.16779 9.69878L0 12.5141L2.13964 15.3013L1.66104 18.7641L4.9268 20.0591L6.22185 23.3249L9.68468 22.8463L12.4718 24.9859L15.259 22.8463L18.7218 23.3249L20.0169 20.0591L23.2827 18.7359L22.8041 15.2731L25 12.5141ZM11.4865 16.5682L7.31982 13.1335L8.22072 12.0355L11.3176 14.5693L16.6104 8.46005L17.6802 9.3891L11.4865 16.5682Z"
                                    fill="#6F73EE" />
                              </g>
                              <defs>
                                 <clipPath id="clip0_199_2344">
                                    <rect width="25" height="25" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>
                        <p class="prices-tabs__subtitle">
                           Полная документация <br> и гарантия 1 год
                        </p>
                        <p class="prices-tabs__text">
                           При покупке вам выдается кассовый чек, товарный чек и гарантийный талон – эти документы дают
                           право на гарантийное обслуживание.
                        </p>
                     </li>
                     <li class="prices-tabs__item">
                        <div class="prices-tabs__icon">
                           <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_199_2363)">
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.4024 6.49967V0.732231C18.4024 0.327873 18.0746 0 17.6702 0H12.7254V5.56831C12.7254 6.09436 12.1645 6.49948 11.6159 6.19602L9.22466 4.98524L6.78516 6.22044C6.29363 6.46877 5.72524 6.10085 5.72562 5.56831L5.72429 0H0.779106C0.374748 0 0.046875 0.327873 0.046875 0.732231V17.6233C0.046875 18.0277 0.374748 18.3556 0.779106 18.3556H10.3273C9.87983 17.1701 9.60994 15.9914 9.60994 14.9408C9.60994 10.1448 13.5986 6.30722 18.4024 6.49967Z"
                                    fill="#6F73EE" />
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.55261 3.51429L11.2597 4.3787V0H7.1875V4.3787L8.89343 3.51505C9.09332 3.41377 9.33708 3.40576 9.55261 3.51429Z"
                                    fill="#6F73EE" />
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.0578 7.95728C14.2011 7.95728 11.0742 11.0842 11.0742 14.9408C11.0742 16.7837 12.1175 19.2148 13.4485 21.2006C14.8786 23.3343 16.7093 25 18.0578 25C19.4063 25 21.237 23.3343 22.6671 21.2006C23.998 19.2148 25.0414 16.7837 25.0414 14.9408C25.0415 11.0842 21.9146 7.95728 18.0578 7.95728ZM18.0578 17.6287C16.5737 17.6287 15.3701 16.4251 15.3701 14.9408C15.3701 13.4567 16.5737 12.2534 18.0578 12.2534C19.5419 12.2534 20.7454 13.4567 20.7454 14.9408C20.7454 16.4251 19.5421 17.6287 18.0578 17.6287Z"
                                    fill="#6F73EE" />
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19.2821 14.9408C19.2821 15.6164 18.7345 16.164 18.0589 16.164C17.3835 16.164 16.8359 15.6164 16.8359 14.9408C16.8359 14.2654 17.3835 13.7178 18.0589 13.7178C18.7345 13.7178 19.2821 14.2654 19.2821 14.9408Z"
                                    fill="#6F73EE" />
                              </g>
                              <defs>
                                 <clipPath id="clip0_199_2363">
                                    <rect width="25" height="25" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>
                        <p class="prices-tabs__subtitle">
                           Отправка заказа день в день
                        </p>
                        <p class="prices-tabs__text">
                           Отправляем заказы по всей России день в день или забирайте товар самостоятельно в магазинах в
                           Москве, Санкт-Петербурге и Краснодаре
                        </p>
                     </li>
                     <li class="prices-tabs__item">
                        <div class="prices-tabs__icon">
                           <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_199_2369)">
                                 <path
                                    d="M10.8546 9.70644C11.819 8.66043 12.3503 7.25734 12.3503 5.75522C12.3503 2.89523 10.3075 0 6.40246 0C4.58512 0 3.05198 0.624205 1.96855 1.80509C1.00885 2.85126 0.480469 4.25404 0.480469 5.75522C0.480469 8.61552 2.51463 11.5106 6.40246 11.5106C8.22658 11.5107 9.76643 10.8869 10.8546 9.70644ZM6.40246 2.67599C8.54211 2.67599 9.51655 4.27322 9.51655 5.75725C9.51655 6.56452 9.24491 7.31183 8.75122 7.86127C8.20046 8.47495 7.40005 8.79945 6.43716 8.79945C4.2434 8.79945 3.24401 7.20237 3.24401 5.7185C3.24401 4.2043 4.22078 2.67599 6.40246 2.67599Z"
                                    fill="#6F73EE" />
                                 <path
                                    d="M20.6066 2.22015C20.2527 2.22655 19.7695 2.44719 19.5328 2.71033L1.96559 22.242C1.72896 22.5053 1.89659 22.8744 2.25048 22.8744H4.54973C4.90362 22.8744 5.38632 22.6586 5.62256 22.3951L23.0812 2.86736C23.3174 2.6036 23.3017 2.17447 22.7169 2.17462L20.6066 2.22015Z"
                                    fill="#6F73EE" />
                                 <path
                                    d="M18.6843 13.7083C16.902 13.7083 15.3979 14.321 14.335 15.4793C13.3936 16.5052 12.875 17.8816 12.875 19.3542C12.875 22.1598 14.8705 25 18.6843 25C20.4742 25 21.9844 24.3879 23.052 23.2301C23.9982 22.2039 24.5192 20.8274 24.5192 19.3542C24.5192 16.5487 22.515 13.7083 18.6843 13.7083ZM18.7187 22.4091C16.5844 22.4091 15.6119 20.8064 15.6119 19.3179C15.6119 18.5073 15.8834 17.7571 16.3767 17.2056C16.9266 16.5901 17.7245 16.2649 18.6843 16.2649C20.8188 16.2649 21.7909 17.8673 21.7909 19.3563C21.7909 20.1667 21.5193 20.917 21.0264 21.4685C20.4763 22.0839 19.6783 22.4091 18.7187 22.4091Z"
                                    fill="#6F73EE" />
                              </g>
                              <defs>
                                 <clipPath id="clip0_199_2369">
                                    <rect width="25" height="25" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>
                        <p class="prices-tabs__subtitle">
                           Рассрочка без переплат
                        </p>
                        <p class="prices-tabs__text">
                           В нашем магазине можно приобрести любой товар в рассрочку.
                        </p>
                        <a href="#" class="prices-tabs__link">
                           Подробнее про условия рассрочки
                        </a>
                     </li>
                     <li class="prices-tabs__block-link block-link">
                        <p class="block-link__subtitle">
                           Больше в каталоге
                        </p>
                        <a href="#" class="block-link__button underline_purple link-arrow">
                           Перейти
                        </a>
                        <img class="block-link__image block-link__image_1"
                           src="/img/favorable-prices/electric-scooter-image.png" alt="Электрический самокат">
                     </li>
                  </ul>
                  <ul class="prices-tabs__list" id="pricesTab2">
                     <li class="prices-tabs__item">
                        <div class="prices-tabs__icon">
                           <svg class="prices-tabs__icon" width="25" height="25" viewBox="0 0 25 25" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_199_2303)">
                                 <path
                                    d="M23.9404 9.0679H18.7539L15.8446 2.40613C15.6827 2.03548 15.251 1.86609 14.8802 2.02805C14.5095 2.18992 14.3403 2.62171 14.5022 2.99241L17.1555 9.06795H7.84456L10.4979 2.99241C10.6597 2.62171 10.4905 2.18997 10.1198 2.02805C9.74915 1.86609 9.31731 2.03538 9.15549 2.40613L6.24612 9.0679H1.05964C0.381177 9.0679 -0.122338 9.68211 0.0260991 10.3286L2.7573 22.2246C2.86575 22.697 3.29514 23.0327 3.79085 23.0327H21.2092C21.7049 23.0327 22.1343 22.697 22.2428 22.2246L24.974 10.3286C25.1224 9.68216 24.6188 9.0679 23.9404 9.0679ZM6.38391 11.3142C6.28606 11.3142 6.1866 11.2945 6.09114 11.2528C5.72044 11.0909 5.55115 10.6592 5.71306 10.2884L6.26326 9.02854H7.86169L7.05544 10.8746C6.93528 11.15 6.66624 11.3142 6.38391 11.3142ZM8.83792 19.1265C8.83792 19.531 8.50999 19.8589 8.10549 19.8589C7.701 19.8589 7.37307 19.531 7.37307 19.1265V13.7554C7.37307 13.3509 7.701 13.023 8.10549 13.023C8.50999 13.023 8.83792 13.3509 8.83792 13.7554V19.1265ZM13.2324 19.1265C13.2324 19.531 12.9045 19.8589 12.5 19.8589C12.0955 19.8589 11.7676 19.531 11.7676 19.1265V13.7554C11.7676 13.3509 12.0955 13.023 12.5 13.023C12.9045 13.023 13.2324 13.3509 13.2324 13.7554V19.1265ZM17.627 19.1265C17.627 19.531 17.299 19.8589 16.8946 19.8589C16.4901 19.8589 16.1621 19.531 16.1621 19.1265V13.7554C16.1621 13.3509 16.4901 13.023 16.8946 13.023C17.299 13.023 17.627 13.3509 17.627 13.7554V19.1265ZM18.9089 11.2528C18.8135 11.2945 18.714 11.3142 18.6161 11.3142C18.3338 11.3142 18.0648 11.15 17.9446 10.8747L17.1383 9.02859H18.7367L19.2869 10.2885C19.4489 10.6592 19.2796 11.0909 18.9089 11.2528Z"
                                    fill="#6F73EE" />
                              </g>
                              <defs>
                                 <clipPath id="clip0_199_2303">
                                    <rect width="25" height="25" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>
                        <p class="prices-tabs__subtitle">
                           Ремонт от 1 дня
                        </p>
                        <p class="prices-tabs__text">
                           Устраним любую неисправность. Обычно делаем это
                           за 1-3 дня, если ремонт сложный — предупредим заранее.
                        </p>
                     </li>
                     <li class="prices-tabs__item">
                        <div class="prices-tabs__icon">
                           <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_199_2341)">
                                 <path
                                    d="M20.3125 16.6667C17.7281 16.6667 15.625 14.5635 15.625 11.9792C15.625 9.39479 17.7281 7.29167 20.3125 7.29167H22.9167V5.98958C22.9167 4.40937 21.6323 3.125 20.0521 3.125H2.86458C1.28438 3.125 0 4.40937 0 5.98958V19.0104C0 20.5906 1.28438 21.875 2.86458 21.875H20.0521C21.6323 21.875 22.9167 20.5906 22.9167 19.0104V16.6667H20.3125Z"
                                    fill="#6F73EE" />
                                 <path
                                    d="M24.2187 8.85419H20.3125C18.5896 8.85419 17.1875 10.2563 17.1875 11.9792C17.1875 13.7021 18.5896 15.1042 20.3125 15.1042H24.2187C24.65 15.1042 25 14.7542 25 14.3229V9.63544C25 9.20419 24.65 8.85419 24.2187 8.85419ZM20.3125 13.0209C19.7375 13.0209 19.2708 12.5542 19.2708 11.9792C19.2708 11.4042 19.7375 10.9375 20.3125 10.9375C20.8875 10.9375 21.3542 11.4042 21.3542 11.9792C21.3542 12.5542 20.8875 13.0209 20.3125 13.0209Z"
                                    fill="#6F73EE" />
                              </g>
                              <defs>
                                 <clipPath id="clip0_199_2341">
                                    <rect width="25" height="25" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>

                        </div>
                        <p class="prices-tabs__subtitle">
                           Гидроизоляция для долгой службы
                        </p>
                        <p class="prices-tabs__text">
                           Покроем электросамокат изнутри специальным веществом, которое предотвратит попадание влаги и
                           позволит кататься в любое время года.
                        </p>
                     </li>
                     <li class="prices-tabs__item">
                        <div class="prices-tabs__icon">
                           <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_199_2344)">
                                 <path
                                    d="M25 12.5141L22.8604 9.72694L23.339 6.2641L20.0732 4.96905L18.7782 1.70329L15.3153 2.18189L12.5 0.0140991L9.71284 2.15374L6.25 1.67514L4.95495 4.9409L1.68919 6.23595L2.16779 9.69878L0 12.5141L2.13964 15.3013L1.66104 18.7641L4.9268 20.0591L6.22185 23.3249L9.68468 22.8463L12.4718 24.9859L15.259 22.8463L18.7218 23.3249L20.0169 20.0591L23.2827 18.7359L22.8041 15.2731L25 12.5141ZM11.4865 16.5682L7.31982 13.1335L8.22072 12.0355L11.3176 14.5693L16.6104 8.46005L17.6802 9.3891L11.4865 16.5682Z"
                                    fill="#6F73EE" />
                              </g>
                              <defs>
                                 <clipPath id="clip0_199_2344">
                                    <rect width="25" height="25" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>
                        <p class="prices-tabs__subtitle">
                           Ремонтируем только то, <br> что сломалось
                        </p>
                        <p class="prices-tabs__text">
                           Не навязываем услуги, диагностируем и заранее обговариваем стоимость ремонта.
                        </p>
                     </li>
                     <li class="prices-tabs__item">
                        <div class="prices-tabs__icon">
                           <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_199_2363)">
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.4024 6.49967V0.732231C18.4024 0.327873 18.0746 0 17.6702 0H12.7254V5.56831C12.7254 6.09436 12.1645 6.49948 11.6159 6.19602L9.22466 4.98524L6.78516 6.22044C6.29363 6.46877 5.72524 6.10085 5.72562 5.56831L5.72429 0H0.779106C0.374748 0 0.046875 0.327873 0.046875 0.732231V17.6233C0.046875 18.0277 0.374748 18.3556 0.779106 18.3556H10.3273C9.87983 17.1701 9.60994 15.9914 9.60994 14.9408C9.60994 10.1448 13.5986 6.30722 18.4024 6.49967Z"
                                    fill="#6F73EE" />
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.55261 3.51429L11.2597 4.3787V0H7.1875V4.3787L8.89343 3.51505C9.09332 3.41377 9.33708 3.40576 9.55261 3.51429Z"
                                    fill="#6F73EE" />
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.0578 7.95728C14.2011 7.95728 11.0742 11.0842 11.0742 14.9408C11.0742 16.7837 12.1175 19.2148 13.4485 21.2006C14.8786 23.3343 16.7093 25 18.0578 25C19.4063 25 21.237 23.3343 22.6671 21.2006C23.998 19.2148 25.0414 16.7837 25.0414 14.9408C25.0415 11.0842 21.9146 7.95728 18.0578 7.95728ZM18.0578 17.6287C16.5737 17.6287 15.3701 16.4251 15.3701 14.9408C15.3701 13.4567 16.5737 12.2534 18.0578 12.2534C19.5419 12.2534 20.7454 13.4567 20.7454 14.9408C20.7454 16.4251 19.5421 17.6287 18.0578 17.6287Z"
                                    fill="#6F73EE" />
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19.2821 14.9408C19.2821 15.6164 18.7345 16.164 18.0589 16.164C17.3835 16.164 16.8359 15.6164 16.8359 14.9408C16.8359 14.2654 17.3835 13.7178 18.0589 13.7178C18.7345 13.7178 19.2821 14.2654 19.2821 14.9408Z"
                                    fill="#6F73EE" />
                              </g>
                              <defs>
                                 <clipPath id="clip0_199_2363">
                                    <rect width="25" height="25" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>
                        <p class="prices-tabs__subtitle">
                           Даем гарантию 14 дней на ремонт
                        </p>
                     </li>
                     <li class="prices-tabs__item">
                        <div class="prices-tabs__icon">
                           <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_199_2369)">
                                 <path
                                    d="M10.8546 9.70644C11.819 8.66043 12.3503 7.25734 12.3503 5.75522C12.3503 2.89523 10.3075 0 6.40246 0C4.58512 0 3.05198 0.624205 1.96855 1.80509C1.00885 2.85126 0.480469 4.25404 0.480469 5.75522C0.480469 8.61552 2.51463 11.5106 6.40246 11.5106C8.22658 11.5107 9.76643 10.8869 10.8546 9.70644ZM6.40246 2.67599C8.54211 2.67599 9.51655 4.27322 9.51655 5.75725C9.51655 6.56452 9.24491 7.31183 8.75122 7.86127C8.20046 8.47495 7.40005 8.79945 6.43716 8.79945C4.2434 8.79945 3.24401 7.20237 3.24401 5.7185C3.24401 4.2043 4.22078 2.67599 6.40246 2.67599Z"
                                    fill="#6F73EE" />
                                 <path
                                    d="M20.6066 2.22015C20.2527 2.22655 19.7695 2.44719 19.5328 2.71033L1.96559 22.242C1.72896 22.5053 1.89659 22.8744 2.25048 22.8744H4.54973C4.90362 22.8744 5.38632 22.6586 5.62256 22.3951L23.0812 2.86736C23.3174 2.6036 23.3017 2.17447 22.7169 2.17462L20.6066 2.22015Z"
                                    fill="#6F73EE" />
                                 <path
                                    d="M18.6843 13.7083C16.902 13.7083 15.3979 14.321 14.335 15.4793C13.3936 16.5052 12.875 17.8816 12.875 19.3542C12.875 22.1598 14.8705 25 18.6843 25C20.4742 25 21.9844 24.3879 23.052 23.2301C23.9982 22.2039 24.5192 20.8274 24.5192 19.3542C24.5192 16.5487 22.515 13.7083 18.6843 13.7083ZM18.7187 22.4091C16.5844 22.4091 15.6119 20.8064 15.6119 19.3179C15.6119 18.5073 15.8834 17.7571 16.3767 17.2056C16.9266 16.5901 17.7245 16.2649 18.6843 16.2649C20.8188 16.2649 21.7909 17.8673 21.7909 19.3563C21.7909 20.1667 21.5193 20.917 21.0264 21.4685C20.4763 22.0839 19.6783 22.4091 18.7187 22.4091Z"
                                    fill="#6F73EE" />
                              </g>
                              <defs>
                                 <clipPath id="clip0_199_2369">
                                    <rect width="25" height="25" fill="white" />
                                 </clipPath>
                              </defs>
                           </svg>
                        </div>
                        <p class="prices-tabs__subtitle">
                           Оригинальные запчасти
                        </p>
                        <p class="prices-tabs__text">
                           Благодаря прямой связи с производителем имеем в наличии все необходимые новые комплектующие
                           для ремонта.
                        </p>
                     </li>
                     <li class="prices-tabs__block-link block-link">
                        <p class="block-link__subtitle">
                           Больше в сервисе
                        </p>
                        <a href="#" class="block-link__button">
                           Перейти
                        </a>
                        <img class="block-link__image block-link__image_2" src="/img/favorable-prices/drill-image.png"
                           alt="Дрель">
                     </li>
                  </ul>
               </div>
            </div>
         </section>
         <!-- favorable-prices -->

         <!-- user-feedback -->
         <article class="user-feedback">
            <div class="user-feedback__container">
               <div class="user-feedback__header">
                  <h2 class="user-feedback__big-title big-title">
                     Отзывы и фото реальных покупателей
                  </h2>
                  <a href="#" class="user-feedback__link-arrow link-arrow underline_purple">
                     Читать отзывы на Яндекс
                  </a>
               </div>
               <div class="user-feedback__row-feedback row-feedback swiper">
                  <div class="row-feedback__wrapper swiper-wrapper">
                     <article class="row-feedback__item row-feedback__item_medium swiper-slide">
                        <img class="row-feedback__image" src="/img/user-feedback/man6.png" alt="Отзыв от клиента">
                        <div class="row-feedback__header">
                           <div class="row-feedback__avatar">
                              <img src="/img/user-feedback/илья.м-аватар.png" alt="Аватарка пользователя">
                           </div>
                           <div class="row-feedback__info">
                              <p class="row-feedback__name">
                                 Илья М.
                              </p>
                              <p class="row-feedback__subtitle">
                                 Знаток города 2 уровня
                              </p>
                           </div>
                        </div>
                        <div class="row-feedback__sub-block">
                           <ul class="row-feedback__rating">
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                           </ul>
                           <time datetime="23.09.2022" class="row-feedback__date">
                              23 сентября 2022
                           </time>
                        </div>
                        <p class="row-feedback__impression">
                           Магазин очень понравился, быстро обслужили, персонал хорошо знает свой товар, вежливо и
                           грамотно
                           консультирует, ассортимент внушительный, а если чего нет сейчас в наличии, то можно без
                           проблем
                           заказать на сайте, так что всем рекомендую!
                        </p>
                     </article>
                     <article class="row-feedback__item row-feedback__item_medium swiper-slide">
                        <img class="row-feedback__image" src="/img/user-feedback/man1.png" alt="Отзыв от клиента">
                        <div class="row-feedback__header">
                           <div class="row-feedback__avatar">
                              <img src="/img/user-feedback/илья.м-аватар.png" alt="Аватарка пользователя">
                           </div>
                           <div class="row-feedback__info">
                              <p class="row-feedback__name">
                                 Илья М.
                              </p>
                              <p class="row-feedback__subtitle">
                                 Знаток города 2 уровня
                              </p>
                           </div>
                        </div>
                        <div class="row-feedback__sub-block">
                           <ul class="row-feedback__rating">
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                           </ul>
                           <time datetime="23.09.2022" class="row-feedback__date">
                              23 сентября 2022
                           </time>
                        </div>
                        <p class="row-feedback__impression">
                           Магазин очень понравился, быстро обслужили, персонал хорошо знает свой товар, вежливо и
                           грамотно
                           консультирует, ассортимент внушительный, а если чего нет сейчас в наличии, то можно без
                           проблем
                           заказать на сайте, так что всем рекомендую!
                        </p>
                     </article>
                     <article class="row-feedback__item row-feedback__item_big swiper-slide">
                        <img class="row-feedback__image" src="/img/user-feedback/илья.м.png" alt="Отзыв от клиента">
                        <div class="row-feedback__header">
                           <div class="row-feedback__avatar">
                              <img src="/img/user-feedback/илья.м-аватар.png" alt="Аватарка пользователя">
                           </div>
                           <div class="row-feedback__info">
                              <p class="row-feedback__name">
                                 Илья М.
                              </p>
                              <p class="row-feedback__subtitle">
                                 Знаток города 2 уровня
                              </p>
                           </div>
                        </div>
                        <div class="row-feedback__sub-block">
                           <ul class="row-feedback__rating">
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                           </ul>
                           <time datetime="23.09.2022" class="row-feedback__date">
                              23 сентября 2022
                           </time>
                        </div>
                        <p class="row-feedback__impression">
                           Магазин очень понравился, быстро обслужили, персонал хорошо знает свой товар, вежливо и
                           грамотно
                           консультирует, ассортимент внушительный, а если чего нет сейчас в наличии, то можно без
                           проблем
                           заказать на сайте, так что всем рекомендую!
                        </p>
                     </article>
                     <article class="row-feedback__item row-feedback__item_big swiper-slide">
                        <img class="row-feedback__image" src="/img/user-feedback/man3.png" alt="Отзыв от клиента">
                        <div class="row-feedback__header">
                           <div class="row-feedback__avatar">
                              <img src="/img/user-feedback/илья.м-аватар.png" alt="Аватарка пользователя">
                           </div>
                           <div class="row-feedback__info">
                              <p class="row-feedback__name">
                                 Илья М.
                              </p>
                              <p class="row-feedback__subtitle">
                                 Знаток города 2 уровня
                              </p>
                           </div>
                        </div>
                        <div class="row-feedback__sub-block">
                           <ul class="row-feedback__rating">
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                           </ul>
                           <time datetime="23.09.2022" class="row-feedback__date">
                              23 сентября 2022
                           </time>
                        </div>
                        <p class="row-feedback__impression">
                           Магазин очень понравился, быстро обслужили, персонал хорошо знает свой товар, вежливо и
                           грамотно
                           консультирует, ассортимент внушительный, а если чего нет сейчас в наличии, то можно без
                           проблем
                           заказать на сайте, так что всем рекомендую!
                        </p>
                     </article>
                     <article class="row-feedback__item row-feedback__item_medium swiper-slide">
                        <img class="row-feedback__image" src="/img/user-feedback/man2.png" alt="Отзыв от клиента">
                        <div class="row-feedback__header">
                           <div class="row-feedback__avatar">
                              <img src="/img/user-feedback/илья.м-аватар.png" alt="Аватарка пользователя">
                           </div>
                           <div class="row-feedback__info">
                              <p class="row-feedback__name">
                                 Илья М.
                              </p>
                              <p class="row-feedback__subtitle">
                                 Знаток города 2 уровня
                              </p>
                           </div>
                        </div>
                        <div class="row-feedback__sub-block">
                           <ul class="row-feedback__rating">
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                           </ul>
                           <time datetime="23.09.2022" class="row-feedback__date">
                              23 сентября 2022
                           </time>
                        </div>
                        <p class="row-feedback__impression">
                           Магазин очень понравился, быстро обслужили, персонал хорошо знает свой товар, вежливо и
                           грамотно
                           консультирует, ассортимент внушительный, а если чего нет сейчас в наличии, то можно без
                           проблем
                           заказать на сайте, так что всем рекомендую!
                        </p>
                     </article>
                  </div>
               </div>

               <div class="user-feedback__row-feedback row-feedback swiper">
                  <div class="row-feedback__wrapper swiper-wrapper">
                     <article class="row-feedback__item row-feedback__item_medium swiper-slide">
                        <img class="row-feedback__image" src="/img/user-feedback/man1.png" alt="Отзыв от клиента">
                        <div class="row-feedback__header">
                           <div class="row-feedback__avatar">
                              <img src="/img/user-feedback/илья.м-аватар.png" alt="Аватарка пользователя">
                           </div>
                           <div class="row-feedback__info">
                              <p class="row-feedback__name">
                                 Илья М.
                              </p>
                              <p class="row-feedback__subtitle">
                                 Знаток города 2 уровня
                              </p>
                           </div>
                        </div>
                        <div class="row-feedback__sub-block">
                           <ul class="row-feedback__rating">
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                           </ul>
                           <time datetime="23.09.2022" class="row-feedback__date">
                              23 сентября 2022
                           </time>
                        </div>
                        <p class="row-feedback__impression">
                           Магазин очень понравился, быстро обслужили, персонал хорошо знает свой товар, вежливо и
                           грамотно
                           консультирует, ассортимент внушительный, а если чего нет сейчас в наличии, то можно без
                           проблем
                           заказать на сайте, так что всем рекомендую!
                        </p>
                     </article>
                     <article class="row-feedback__item row-feedback__item_medium swiper-slide">
                        <img class="row-feedback__image" src="/img/user-feedback/man2.png" alt="Отзыв от клиента">
                        <div class="row-feedback__header">
                           <div class="row-feedback__avatar">
                              <img src="/img/user-feedback/илья.м-аватар.png" alt="Аватарка пользователя">
                           </div>
                           <div class="row-feedback__info">
                              <p class="row-feedback__name">
                                 Илья М.
                              </p>
                              <p class="row-feedback__subtitle">
                                 Знаток города 2 уровня
                              </p>
                           </div>
                        </div>
                        <div class="row-feedback__sub-block">
                           <ul class="row-feedback__rating">
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                           </ul>
                           <time datetime="23.09.2022" class="row-feedback__date">
                              23 сентября 2022
                           </time>
                        </div>
                        <p class="row-feedback__impression">
                           Магазин очень понравился, быстро обслужили, персонал хорошо знает свой товар, вежливо и
                           грамотно
                           консультирует, ассортимент внушительный, а если чего нет сейчас в наличии, то можно без
                           проблем
                           заказать на сайте, так что всем рекомендую!
                        </p>
                     </article>
                     <article class="row-feedback__item row-feedback__item_big swiper-slide">
                        <img class="row-feedback__image" src="/img/user-feedback/man7.png" alt="Отзыв от клиента">
                        <div class="row-feedback__header">
                           <div class="row-feedback__avatar">
                              <img src="/img/user-feedback/илья.м-аватар.png" alt="Аватарка пользователя">
                           </div>
                           <div class="row-feedback__info">
                              <p class="row-feedback__name">
                                 Илья М.
                              </p>
                              <p class="row-feedback__subtitle">
                                 Знаток города 2 уровня
                              </p>
                           </div>
                        </div>
                        <div class="row-feedback__sub-block">
                           <ul class="row-feedback__rating">
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                           </ul>
                           <time datetime="23.09.2022" class="row-feedback__date">
                              23 сентября 2022
                           </time>
                        </div>
                        <p class="row-feedback__impression">
                           Магазин очень понравился, быстро обслужили, персонал хорошо знает свой товар, вежливо и
                           грамотно
                           консультирует, ассортимент внушительный, а если чего нет сейчас в наличии, то можно без
                           проблем
                           заказать на сайте, так что всем рекомендую!
                        </p>
                     </article>
                     <article class="row-feedback__item row-feedback__item_medium swiper-slide">
                        <img class="row-feedback__image" src="/img/user-feedback/man4.png" alt="Отзыв от клиента">
                        <div class="row-feedback__header">
                           <div class="row-feedback__avatar">
                              <img src="/img/user-feedback/илья.м-аватар.png" alt="Аватарка пользователя">
                           </div>
                           <div class="row-feedback__info">
                              <p class="row-feedback__name">
                                 Илья М.
                              </p>
                              <p class="row-feedback__subtitle">
                                 Знаток города 2 уровня
                              </p>
                           </div>
                        </div>
                        <div class="row-feedback__sub-block">
                           <ul class="row-feedback__rating">
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                           </ul>
                           <time datetime="23.09.2022" class="row-feedback__date">
                              23 сентября 2022
                           </time>
                        </div>
                        <p class="row-feedback__impression">
                           Магазин очень понравился, быстро обслужили, персонал хорошо знает свой товар, вежливо и
                           грамотно
                           консультирует, ассортимент внушительный, а если чего нет сейчас в наличии, то можно без
                           проблем
                           заказать на сайте, так что всем рекомендую!
                        </p>
                     </article>
                     <article class="row-feedback__item row-feedback__item_medium swiper-slide">
                        <img class="row-feedback__image" src="/img/user-feedback/man5.png" alt="Отзыв от клиента">
                        <div class="row-feedback__header">
                           <div class="row-feedback__avatar">
                              <img src="/img/user-feedback/илья.м-аватар.png" alt="Аватарка пользователя">
                           </div>
                           <div class="row-feedback__info">
                              <p class="row-feedback__name">
                                 Илья М.
                              </p>
                              <p class="row-feedback__subtitle">
                                 Знаток города 2 уровня
                              </p>
                           </div>
                        </div>
                        <div class="row-feedback__sub-block">
                           <ul class="row-feedback__rating">
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                           </ul>
                           <time datetime="23.09.2022" class="row-feedback__date">
                              23 сентября 2022
                           </time>
                        </div>
                        <p class="row-feedback__impression">
                           Магазин очень понравился, быстро обслужили, персонал хорошо знает свой товар, вежливо и
                           грамотно
                           консультирует, ассортимент внушительный, а если чего нет сейчас в наличии, то можно без
                           проблем
                           заказать на сайте, так что всем рекомендую!
                        </p>
                     </article>
                     <article class="row-feedback__item row-feedback__item_small swiper-slide">
                        <img class="row-feedback__image" src="/img/user-feedback/man8.png" alt="Отзыв от клиента">
                        <div class="row-feedback__header">
                           <div class="row-feedback__avatar">
                              <img src="/img/user-feedback/илья.м-аватар.png" alt="Аватарка пользователя">
                           </div>
                           <div class="row-feedback__info">
                              <p class="row-feedback__name">
                                 Илья М.
                              </p>
                              <p class="row-feedback__subtitle">
                                 Знаток города 2 уровня
                              </p>
                           </div>
                        </div>
                        <div class="row-feedback__sub-block">
                           <ul class="row-feedback__rating">
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                           </ul>
                           <time datetime="23.09.2022" class="row-feedback__date">
                              23 сентября 2022
                           </time>
                        </div>
                        <p class="row-feedback__impression">
                           Магазин очень понравился, быстро обслужили, персонал хорошо знает свой товар, вежливо и
                           грамотно
                           консультирует, ассортимент внушительный, а если чего нет сейчас в наличии, то можно без
                           проблем
                           заказать на сайте, так что всем рекомендую!
                        </p>
                     </article>
                     <article class="row-feedback__item row-feedback__item_big swiper-slide">
                        <img class="row-feedback__image" src="/img/user-feedback/man3.png" alt="Отзыв от клиента">
                        <div class="row-feedback__header">
                           <div class="row-feedback__avatar">
                              <img src="/img/user-feedback/илья.м-аватар.png" alt="Аватарка пользователя">
                           </div>
                           <div class="row-feedback__info">
                              <p class="row-feedback__name">
                                 Илья М.
                              </p>
                              <p class="row-feedback__subtitle">
                                 Знаток города 2 уровня
                              </p>
                           </div>
                        </div>
                        <div class="row-feedback__sub-block">
                           <ul class="row-feedback__rating">
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                              <li class="user-feedback__icon">
                                 <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7 0L8.84741 4.45726L13.6574 4.83688L9.98917 7.97124L11.1145 12.6631L7 10.143L2.8855 12.6631L4.01083 7.97124L0.342604 4.83688L5.15259 4.45726L7 0Z"
                                       fill="#FFD12E" />
                                 </svg>
                              </li>
                           </ul>
                           <time datetime="23.09.2022" class="row-feedback__date">
                              23 сентября 2022
                           </time>
                        </div>
                        <p class="row-feedback__impression">
                           Магазин очень понравился, быстро обслужили, персонал хорошо знает свой товар, вежливо и
                           грамотно
                           консультирует, ассортимент внушительный, а если чего нет сейчас в наличии, то можно без
                           проблем
                           заказать на сайте, так что всем рекомендую!
                        </p>
                     </article>
                  </div>
               </div>
            </div>
         </article>
         <!-- user-feedback -->

         <!-- video-reviews -->
         <article class="video-reviews">
            <div class="video-reviews__container container">
               <div class="video-reviews__header">
                  <div class="video-reviews__info">
                     <h2 class="video-reviews__big-title big-title">
                        Видеообзоры
                     </h2>
                     <a href="#" class="video-reviews__link-arrow link-arrow underline_purple">
                        Смотреть все видеообзоры
                     </a>
                  </div>
                  <p class="video-reviews__text">
                     Узнайте больше о самокатах Kugoo и посмотрите сравнительные обзоры разных моделей на нашем
                     YouTube-канале.
                  </p>
               </div>
               <div class="video-reviews__wrapper">
                  <div class="video-reviews__slider-reviews slider-reviews swiper">
                     <div class="slider-reviews__wrapper swiper-wrapper">
                        <article class="slider-reviews__slide swiper-slide">
                           <div class="slider-reviews__video slider-reviews__video-bg1">
                              <button class="slider-reviews__button" type="button">
                                 <svg width="21" height="24" viewBox="0 0 21 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M19.6133 11.1911C20.2799 11.576 20.2799 12.5382 19.6133 12.9231L1.78471 23.2165C1.11804 23.6014 0.284709 23.1202 0.284709 22.3504L0.28471 1.76377C0.28471 0.993967 1.11804 0.512845 1.78471 0.897745L19.6133 11.1911Z"
                                       fill="#6F73EE" />
                                 </svg>
                              </button>
                           </div>
                           <p class="slider-reviews__text">
                              Крутой и городской? <br> Обзор Kugoo XS Plus
                           </p>
                        </article>
                        <article class="slider-reviews__slide swiper-slide">
                           <div class="slider-reviews__video slider-reviews__video-bg2">
                              <button class="slider-reviews__button" type="button">
                                 <svg width="21" height="24" viewBox="0 0 21 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M19.6133 11.1911C20.2799 11.576 20.2799 12.5382 19.6133 12.9231L1.78471 23.2165C1.11804 23.6014 0.284709 23.1202 0.284709 22.3504L0.28471 1.76377C0.28471 0.993967 1.11804 0.512845 1.78471 0.897745L19.6133 11.1911Z"
                                       fill="#6F73EE" />
                                 </svg>
                              </button>
                           </div>
                           <p class="slider-reviews__text">
                              Крутой и городской? <br> Обзор Kugoo XS Plus
                           </p>
                        </article>
                        <article class="slider-reviews__slide swiper-slide">
                           <div class="slider-reviews__video slider-reviews__video-bg3">
                              <button class="slider-reviews__button" type="button">
                                 <svg width="21" height="24" viewBox="0 0 21 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M19.6133 11.1911C20.2799 11.576 20.2799 12.5382 19.6133 12.9231L1.78471 23.2165C1.11804 23.6014 0.284709 23.1202 0.284709 22.3504L0.28471 1.76377C0.28471 0.993967 1.11804 0.512845 1.78471 0.897745L19.6133 11.1911Z"
                                       fill="#6F73EE" />
                                 </svg>
                              </button>
                           </div>
                           <p class="slider-reviews__text">
                              Крутой и городской? <br> Обзор Kugoo XS Plus
                           </p>
                        </article>
                     </div>
                  </div>
                  <button type="button" class="slider-reviews__next">
                     <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                           d="M2.04103 0.357965L9.64981 8.1358C10.1167 8.61308 10.1167 9.38692 9.64981 9.8642L2.04103 17.642C1.57411 18.1193 0.817098 18.1193 0.350185 17.642C-0.116728 17.1647 -0.116728 16.3909 0.350185 15.9136L7.11355 9L0.350185 2.08637C-0.116728 1.60909 -0.116728 0.835252 0.350185 0.357965C0.817098 -0.119322 1.57411 -0.119322 2.04103 0.357965Z"
                           fill="white" />
                     </svg>
                  </button>
               </div>
            </div>
         </article>
         <!-- video-reviews -->

         <!-- blog-articles -->
         <article class="blog-articles">
            <div class="blog-articles__container container">
               <h2 class="blog-articles__big-title big-title">
                  Новые статьи в блоге
               </h2>
               <div class="blog-articles__slider-blog slider-blog swiper">
                  <div class="slider-blog__wrapper swiper-wrapper">

                  <?php foreach ($infoBlogArticles as $infoBlogArticlesItem): ?>
                     <article class="slider-blog__slide swiper-slide">
                        <a href="<?= $infoBlogArticlesItem['link'] ?>" class="slider-blog__image">
                           <img src="<?= $infoBlogArticlesItem['image'] ?>" alt="Photo">
                        </a>
                        <div class="slider-blog__info">
                           <a href="<?= $infoBlogArticlesItem['link'] ?>" class="slider-blog__title">
                              <?= $infoBlogArticlesItem['title'] ?>
                           </a>
                           <p class="slider-blog__text">
                              <?= $infoBlogArticlesItem['text'] ?>
                           </p>
                           <div class="slider-blog__footer">
                              <div class="slider-blog__date-blog date-blog">
                                 <div class="date-blog__icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M17 6.28125C17 5.23719 17 4.50678 17 4.4375C17 3.66209 16.3692 3.03125 15.5938 3.03125H15.4062V4.75C15.4062 5.00887 15.1964 5.21875 14.9375 5.21875C14.6786 5.21875 14.4688 5.00887 14.4688 4.75C14.4688 4.22378 14.4688 2.774 14.4688 2.25C14.4688 1.99112 14.2589 1.78125 14 1.78125C13.7411 1.78125 13.5312 1.99112 13.5312 2.25V3.03125H10.4062V4.75C10.4062 5.00887 10.1964 5.21875 9.9375 5.21875C9.67863 5.21875 9.46875 5.00887 9.46875 4.75C9.46875 4.22378 9.46875 2.774 9.46875 2.25C9.46875 1.99112 9.25887 1.78125 9 1.78125C8.74113 1.78125 8.53125 1.99112 8.53125 2.25V3.03125H5.40625V4.75C5.40625 5.00887 5.19637 5.21875 4.9375 5.21875C4.67863 5.21875 4.46875 5.00887 4.46875 4.75C4.46875 4.22378 4.46875 2.774 4.46875 2.25C4.46875 1.99112 4.25887 1.78125 4 1.78125C3.74113 1.78125 3.53125 1.99112 3.53125 2.25V3.03125H2.40625C1.63084 3.03125 1 3.66209 1 4.4375V6.28125H17Z"
                                          fill="#5D6C7B" />
                                       <path
                                          d="M1 7.21875V14.8125C1 15.5879 1.63084 16.2188 2.40625 16.2188H15.5938C16.3692 16.2188 17 15.5879 17 14.8125C17 14.6117 17 10.2246 17 7.21875C16.7083 7.21875 1.16138 7.21875 1 7.21875ZM5.5 13.7188H4.5C4.24113 13.7188 4.03125 13.5089 4.03125 13.25C4.03125 12.9911 4.24113 12.7812 4.5 12.7812H5.5C5.75887 12.7812 5.96875 12.9911 5.96875 13.25C5.96875 13.5089 5.75887 13.7188 5.5 13.7188ZM5.5 11.7188H4.5C4.24113 11.7188 4.03125 11.5089 4.03125 11.25C4.03125 10.9911 4.24113 10.7812 4.5 10.7812H5.5C5.75887 10.7812 5.96875 10.9911 5.96875 11.25C5.96875 11.5089 5.75887 11.7188 5.5 11.7188ZM5.5 9.71875H4.5C4.24113 9.71875 4.03125 9.50887 4.03125 9.25C4.03125 8.99112 4.24113 8.78125 4.5 8.78125H5.5C5.75887 8.78125 5.96875 8.99112 5.96875 9.25C5.96875 9.50887 5.75887 9.71875 5.5 9.71875ZM9.5 13.7188H8.5C8.24113 13.7188 8.03125 13.5089 8.03125 13.25C8.03125 12.9911 8.24113 12.7812 8.5 12.7812H9.5C9.75887 12.7812 9.96875 12.9911 9.96875 13.25C9.96875 13.5089 9.75887 13.7188 9.5 13.7188ZM9.5 11.7188H8.5C8.24113 11.7188 8.03125 11.5089 8.03125 11.25C8.03125 10.9911 8.24113 10.7812 8.5 10.7812H9.5C9.75887 10.7812 9.96875 10.9911 9.96875 11.25C9.96875 11.5089 9.75887 11.7188 9.5 11.7188ZM9.5 9.71875H8.5C8.24113 9.71875 8.03125 9.50887 8.03125 9.25C8.03125 8.99112 8.24113 8.78125 8.5 8.78125H9.5C9.75887 8.78125 9.96875 8.99112 9.96875 9.25C9.96875 9.50887 9.75887 9.71875 9.5 9.71875ZM13.5 13.7188H12.5C12.2411 13.7188 12.0312 13.5089 12.0312 13.25C12.0312 12.9911 12.2411 12.7812 12.5 12.7812H13.5C13.7589 12.7812 13.9688 12.9911 13.9688 13.25C13.9688 13.5089 13.7589 13.7188 13.5 13.7188ZM13.5 11.7188H12.5C12.2411 11.7188 12.0312 11.5089 12.0312 11.25C12.0312 10.9911 12.2411 10.7812 12.5 10.7812H13.5C13.7589 10.7812 13.9688 10.9911 13.9688 11.25C13.9688 11.5089 13.7589 11.7188 13.5 11.7188ZM13.5 9.71875H12.5C12.2411 9.71875 12.0312 9.50887 12.0312 9.25C12.0312 8.99112 12.2411 8.78125 12.5 8.78125H13.5C13.7589 8.78125 13.9688 8.99112 13.9688 9.25C13.9688 9.50887 13.7589 9.71875 13.5 9.71875Z"
                                          fill="#5D6C7B" />
                                    </svg>
                                 </div>
                                 <time class="date-blog__time" datetime="06.12.2022">
                                    <?= $infoBlogArticlesItem['date'] ?>
                                 </time>
                              </div>
                              <div class="slider-blog__views-blog views-blog">
                                 <div class="views-blog__icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M9 10.125C9.62132 10.125 10.125 9.62132 10.125 9C10.125 8.37868 9.62132 7.875 9 7.875C8.37868 7.875 7.875 8.37868 7.875 9C7.875 9.62132 8.37868 10.125 9 10.125Z"
                                          fill="#5D6C7B" />
                                       <path
                                          d="M16.4016 8.62503C15.9216 7.79253 13.2816 3.61503 8.79657 3.75003C4.64907 3.85503 2.24907 7.50003 1.59657 8.62503C1.53075 8.73904 1.49609 8.86837 1.49609 9.00003C1.49609 9.13168 1.53075 9.26101 1.59657 9.37503C2.06907 10.1925 4.59658 14.25 9.01408 14.25H9.20158C13.3491 14.145 15.7566 10.5 16.4016 9.37503C16.4674 9.26101 16.5021 9.13168 16.5021 9.00003C16.5021 8.86837 16.4674 8.73904 16.4016 8.62503ZM8.99907 11.625C8.4799 11.625 7.97238 11.4711 7.5407 11.1826C7.10902 10.8942 6.77257 10.4842 6.57389 10.0046C6.37521 9.52491 6.32323 8.99711 6.42451 8.48791C6.5258 7.97871 6.77581 7.51098 7.14292 7.14387C7.51003 6.77676 7.97776 6.52675 8.48696 6.42546C8.99616 6.32418 9.52396 6.37616 10.0036 6.57484C10.4833 6.77352 10.8932 7.10998 11.1817 7.54165C11.4701 7.97333 11.6241 8.48085 11.6241 9.00003C11.6241 9.69622 11.3475 10.3639 10.8552 10.8562C10.3629 11.3485 9.69527 11.625 8.99907 11.625Z"
                                          fill="#5D6C7B" />
                                    </svg>
                                 </div>
                                 <span class="views-blog__numb">
                                    <?= $infoBlogArticlesItem['viewing'] ?>
                                 </span>
                              </div>
                           </div>
                        </div>
                     </article>
                     <?php endforeach; ?>
                     
                  </div>
                  <button type="button" class="slider-blog__button">
                     <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                           d="M2.04103 0.357965L9.64981 8.1358C10.1167 8.61308 10.1167 9.38692 9.64981 9.8642L2.04103 17.642C1.57411 18.1193 0.817098 18.1193 0.350185 17.642C-0.116728 17.1647 -0.116728 16.3909 0.350185 15.9136L7.11355 9L0.350185 2.08637C-0.116728 1.60909 -0.116728 0.835252 0.350185 0.357965C0.817098 -0.119322 1.57411 -0.119322 2.04103 0.357965Z"
                           fill="white" />
                     </svg>
                  </button>
               </div>
            </div>
         </article>
         <!-- blog-articles -->

         <!-- what -->
         <article class="what">
            <div class="what__container container">
               <h2 class="what__big-title big-title">
                  Отвечаем на вопросы покупателей
               </h2>
               <ul class="what__accordion accordion">

               <?php foreach ($infoQuestions as $infoQuestionsItem): ?>
                  <li class="accordion__item">
                     <div class="accordion__header">
                        <p class="accordion__question">
                           <?= $infoQuestionsItem['question']?>
                        </p>  
                        <svg class="accordion__icon" width="21" height="20" viewBox="0 0 21 20" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <g clip-path="url(#clip0_207_2653)">
                              <path
                                 d="M10.1406 10H0.140625M10.1406 20V10V20ZM10.1406 10V0V10ZM10.1406 10H20.1406H10.1406Z"
                                 stroke="#282739" stroke-width="2" />
                           </g>
                           <defs>
                              <clipPath id="clip0_207_2653">
                                 <rect width="20" height="20" fill="white" transform="translate(0.140625)" />
                              </clipPath>
                           </defs>
                        </svg>
                     </div>
                     <div class="accordion__answer">
                        <p class="accordion__text">
                           <?= $infoQuestionsItem['answer']?>
                        </p>  
                     </div>
                  </li>
                  <?php endforeach; ?>
               </ul>
            </div>
         </article>
         <!-- what -->

         <!-- often-buy -->
         <section class="often-buy">
            <div class="often-buy__container container">
               <h2 class="often-buy__big-title big-title">
                  часто покупают
               </h2>
               <div class="often-buy__product-card product-card">
               <?php foreach ($infoPopularProducts as $infoPopularProductsItem): ?>
                  <article class="product-card__content">
                     <div class="product-card__header">
                        <span class="product-card__subtitle product-card__subtitle_hit">
                           <?= $infoPopularProductsItem['hype']?>
                        </span>  
                        <button type="button" class="product-card__icon-card icon-card icon-card_no-bg">
                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <mask id="path-1-inside-1_7825_20528" fill="white">
                                 <path
                                    d="M19.4141 11.2663H18.7766L16.7349 6.31856C17.0208 6.27958 17.2413 6.03466 17.2413 5.73754C17.2413 5.41333 16.979 5.15049 16.6554 5.15049H11.6177C11.3769 4.48044 10.7363 4 9.98559 4C9.23488 4 8.59422 4.48048 8.3534 5.15049H3.34465C3.02105 5.15049 2.75871 5.41333 2.75871 5.73754C2.75871 6.03466 2.97926 6.27958 3.26512 6.31856L1.22344 11.2663H0.585938C0.262344 11.2663 0 11.5291 0 11.8533C0 14.1398 1.85668 16 4.13883 16C6.42098 16 8.27766 14.1398 8.27766 11.8533C8.27766 11.5291 8.01531 11.2663 7.69172 11.2663H7.05418L5.01504 6.32458H8.3534C8.59422 6.99464 9.23484 7.47508 9.98559 7.47508C10.7363 7.47508 11.3769 6.99464 11.6177 6.32458H14.985L12.9459 11.2663H12.3083C11.9847 11.2663 11.7224 11.5291 11.7224 11.8533C11.7224 14.1398 13.5791 16 15.8612 16C18.1434 16 20 14.1398 20 11.8533C20 11.5291 19.7377 11.2663 19.4141 11.2663ZM4.13883 14.8259C2.70332 14.8259 1.5027 13.7993 1.22996 12.4404H7.0477C6.77496 13.7993 5.57434 14.8259 4.13883 14.8259ZM5.78613 11.2663H2.49152L4.13883 7.27423L5.78613 11.2663ZM9.98555 6.30098C9.67543 6.30098 9.42316 6.04824 9.42316 5.73754C9.42316 5.42683 9.67543 5.17409 9.98555 5.17409C10.2956 5.17409 10.5479 5.42683 10.5479 5.73754C10.5479 6.04824 10.2957 6.30098 9.98555 6.30098ZM15.8612 7.27423L17.5085 11.2663H14.2139L15.8612 7.27423ZM15.8612 14.8259C14.4257 14.8259 13.225 13.7993 12.9523 12.4404H18.77C18.4973 13.7993 17.2966 14.8259 15.8612 14.8259Z" />
                              </mask>
                              <path
                                 d="M19.4141 11.2663H18.7766L16.7349 6.31856C17.0208 6.27958 17.2413 6.03466 17.2413 5.73754C17.2413 5.41333 16.979 5.15049 16.6554 5.15049H11.6177C11.3769 4.48044 10.7363 4 9.98559 4C9.23488 4 8.59422 4.48048 8.3534 5.15049H3.34465C3.02105 5.15049 2.75871 5.41333 2.75871 5.73754C2.75871 6.03466 2.97926 6.27958 3.26512 6.31856L1.22344 11.2663H0.585938C0.262344 11.2663 0 11.5291 0 11.8533C0 14.1398 1.85668 16 4.13883 16C6.42098 16 8.27766 14.1398 8.27766 11.8533C8.27766 11.5291 8.01531 11.2663 7.69172 11.2663H7.05418L5.01504 6.32458H8.3534C8.59422 6.99464 9.23484 7.47508 9.98559 7.47508C10.7363 7.47508 11.3769 6.99464 11.6177 6.32458H14.985L12.9459 11.2663H12.3083C11.9847 11.2663 11.7224 11.5291 11.7224 11.8533C11.7224 14.1398 13.5791 16 15.8612 16C18.1434 16 20 14.1398 20 11.8533C20 11.5291 19.7377 11.2663 19.4141 11.2663ZM4.13883 14.8259C2.70332 14.8259 1.5027 13.7993 1.22996 12.4404H7.0477C6.77496 13.7993 5.57434 14.8259 4.13883 14.8259ZM5.78613 11.2663H2.49152L4.13883 7.27423L5.78613 11.2663ZM9.98555 6.30098C9.67543 6.30098 9.42316 6.04824 9.42316 5.73754C9.42316 5.42683 9.67543 5.17409 9.98555 5.17409C10.2956 5.17409 10.5479 5.42683 10.5479 5.73754C10.5479 6.04824 10.2957 6.30098 9.98555 6.30098ZM15.8612 7.27423L17.5085 11.2663H14.2139L15.8612 7.27423ZM15.8612 14.8259C14.4257 14.8259 13.225 13.7993 12.9523 12.4404H18.77C18.4973 13.7993 17.2966 14.8259 15.8612 14.8259Z"
                                 fill="#282739" />
                              <path
                                 d="M18.7766 11.2663L15.079 12.7921L16.1 15.2663H18.7766V11.2663ZM16.7349 6.31856L16.1946 2.35522L11.0611 3.05512L13.0374 7.84433L16.7349 6.31856ZM11.6177 5.15049L7.85347 6.50339L8.80485 9.15049H11.6177V5.15049ZM8.3534 5.15049V9.15049H11.1662L12.1176 6.50345L8.3534 5.15049ZM3.26512 6.31856L6.96268 7.84435L8.93891 3.05522L3.80556 2.35523L3.26512 6.31856ZM1.22344 11.2663V15.2663H3.90002L4.921 12.7921L1.22344 11.2663ZM7.05418 11.2663L3.35661 12.7921L4.37757 15.2663H7.05418V11.2663ZM5.01504 6.32458V2.32458H-0.962677L1.31747 7.85035L5.01504 6.32458ZM8.3534 6.32458L12.1177 4.97169L11.1663 2.32458H8.3534V6.32458ZM11.6177 6.32458V2.32458H8.80485L7.85347 4.97169L11.6177 6.32458ZM14.985 6.32458L18.6826 7.85034L20.9627 2.32458L14.985 2.32458V6.32458ZM12.9459 11.2663V15.2663H15.6225L16.6434 12.7921L12.9459 11.2663ZM1.22996 12.4404V8.44039H-3.65259L-2.69183 13.2275L1.22996 12.4404ZM7.0477 12.4404L10.9695 13.2275L11.9302 8.44039H7.0477V12.4404ZM5.78613 11.2663V15.2663H11.7639L9.4837 9.74052L5.78613 11.2663ZM2.49152 11.2663L-1.20604 9.74052L-3.48623 15.2663H2.49152V11.2663ZM4.13883 7.27423L7.83639 5.74845L4.13883 -3.21221L0.441262 5.74845L4.13883 7.27423ZM15.8612 7.27423L19.5587 5.74845L15.8612 -3.21221L12.1636 5.74845L15.8612 7.27423ZM17.5085 11.2663V15.2663H23.4862L21.206 9.74052L17.5085 11.2663ZM14.2139 11.2663L10.5163 9.74052L8.23612 15.2663H14.2139V11.2663ZM12.9523 12.4404V8.44039H8.06975L9.03051 13.2275L12.9523 12.4404ZM18.77 12.4404L22.6918 13.2275L23.6526 8.44039H18.77V12.4404ZM19.4141 7.2663H18.7766V15.2663H19.4141V7.2663ZM22.4741 9.74053L20.4325 4.79279L13.0374 7.84433L15.079 12.7921L22.4741 9.74053ZM17.2753 10.2819C19.5145 9.97659 21.2413 8.06373 21.2413 5.73754H13.2413C13.2413 4.00559 14.5271 2.58257 16.1946 2.35522L17.2753 10.2819ZM21.2413 5.73754C21.2413 3.21132 19.1952 1.15049 16.6554 1.15049V9.15049C14.7627 9.15049 13.2413 7.61534 13.2413 5.73754H21.2413ZM16.6554 1.15049H11.6177V9.15049H16.6554V1.15049ZM15.382 3.7976C14.5916 1.5985 12.4857 0 9.98559 0V8C8.98691 8 8.1622 7.36238 7.85347 6.50339L15.382 3.7976ZM9.98559 0C7.48551 0 5.37954 1.59853 4.58916 3.79753L12.1176 6.50345C11.8089 7.36243 10.9843 8 9.98559 8V0ZM8.3534 1.15049H3.34465V9.15049H8.3534V1.15049ZM3.34465 1.15049C0.804792 1.15049 -1.24129 3.21132 -1.24129 5.73754H6.75871C6.75871 7.61534 5.23732 9.15049 3.34465 9.15049V1.15049ZM-1.24129 5.73754C-1.24129 8.06397 0.48576 9.97658 2.72468 10.2819L3.80556 2.35523C5.47276 2.58257 6.75871 4.00536 6.75871 5.73754H-1.24129ZM-0.432443 4.79276L-2.47412 9.7405L4.921 12.7921L6.96268 7.84435L-0.432443 4.79276ZM1.22344 7.2663H0.585938V15.2663H1.22344V7.2663ZM0.585938 7.2663C-1.95392 7.2663 -4 9.32713 -4 11.8533H4C4 13.7311 2.47861 15.2663 0.585938 15.2663V7.2663ZM-4 11.8533C-4 16.3418 -0.359583 20 4.13883 20V12C4.11623 12 4.10308 11.9962 4.09233 11.9916C4.07884 11.9859 4.06166 11.9753 4.04471 11.9583C4.02775 11.9414 4.01642 11.9233 4.00988 11.9079C4.00449 11.8951 4 11.8792 4 11.8533H-4ZM4.13883 20C8.63724 20 12.2777 16.3418 12.2777 11.8533H4.27766C4.27766 11.8792 4.27317 11.8951 4.26777 11.9079C4.26124 11.9233 4.2499 11.9414 4.23295 11.9583C4.216 11.9753 4.19882 11.9859 4.18533 11.9916C4.17458 11.9962 4.16142 12 4.13883 12V20ZM12.2777 11.8533C12.2777 9.32713 10.2316 7.2663 7.69172 7.2663V15.2663C5.79905 15.2663 4.27766 13.7311 4.27766 11.8533H12.2777ZM7.69172 7.2663H7.05418V15.2663H7.69172V7.2663ZM10.7518 9.74054L8.71261 4.79882L1.31747 7.85035L3.35661 12.7921L10.7518 9.74054ZM5.01504 10.3246H8.3534V2.32458H5.01504V10.3246ZM4.58913 7.67748C5.37952 9.87663 7.48552 11.4751 9.98559 11.4751V3.47508C10.9842 3.47508 11.8089 4.11264 12.1177 4.97169L4.58913 7.67748ZM9.98559 11.4751C12.4857 11.4751 14.5916 9.87658 15.382 7.67748L7.85347 4.97169C8.1622 4.1127 8.98691 3.47508 9.98559 3.47508V11.4751ZM11.6177 10.3246H14.985V2.32458H11.6177V10.3246ZM11.2874 4.79882L9.24829 9.74054L16.6434 12.7921L18.6826 7.85034L11.2874 4.79882ZM12.9459 7.2663H12.3083V15.2663H12.9459V7.2663ZM12.3083 7.2663C9.76846 7.2663 7.72238 9.32713 7.72238 11.8533H15.7224C15.7224 13.7311 14.201 15.2663 12.3083 15.2663V7.2663ZM7.72238 11.8533C7.72238 16.3418 11.3628 20 15.8612 20V12C15.8386 12 15.8255 11.9962 15.8147 11.9916C15.8012 11.9859 15.784 11.9753 15.7671 11.9583C15.7501 11.9414 15.7388 11.9233 15.7323 11.9079C15.7269 11.8951 15.7224 11.8792 15.7224 11.8533H7.72238ZM15.8612 20C20.3597 20 24 16.3418 24 11.8533H16C16 11.8792 15.9955 11.8951 15.9901 11.9079C15.9836 11.9234 15.9722 11.9414 15.9553 11.9584C15.9383 11.9753 15.9212 11.9859 15.9077 11.9916C15.897 11.9962 15.8838 12 15.8612 12V20ZM24 11.8533C24 9.32713 21.9539 7.2663 19.4141 7.2663V15.2663C17.5214 15.2663 16 13.7311 16 11.8533H24ZM4.13883 10.8259C4.65422 10.8259 5.05846 11.1884 5.15176 11.6533L-2.69183 13.2275C-2.05307 16.4102 0.752424 18.8259 4.13883 18.8259V10.8259ZM1.22996 16.4404H7.0477V8.44039H1.22996V16.4404ZM3.1259 11.6533C3.2192 11.1884 3.62344 10.8259 4.13883 10.8259V18.8259C7.52523 18.8259 10.3307 16.4102 10.9695 13.2275L3.1259 11.6533ZM5.78613 7.2663H2.49152V15.2663H5.78613V7.2663ZM6.18909 12.7921L7.83639 8.80001L0.441262 5.74845L-1.20604 9.74052L6.18909 12.7921ZM0.441262 8.80001L2.08857 12.7921L9.4837 9.74052L7.83639 5.74845L0.441262 8.80001ZM9.98555 2.30098C11.8917 2.30098 13.4232 3.84623 13.4232 5.73754H5.42316C5.42316 8.25025 7.45917 10.301 9.98555 10.301V2.30098ZM13.4232 5.73754C13.4232 7.62884 11.8917 9.17409 9.98555 9.17409V1.17409C7.45917 1.17409 5.42316 3.22483 5.42316 5.73754H13.4232ZM9.98555 9.17409C8.07954 9.17409 6.54793 7.62902 6.54793 5.73754H14.5479C14.5479 3.22465 12.5117 1.17409 9.98555 1.17409V9.17409ZM6.54793 5.73754C6.54793 3.84623 8.0794 2.30098 9.98555 2.30098V10.301C12.5119 10.301 14.5479 8.25025 14.5479 5.73754H6.54793ZM12.1636 8.80001L13.8109 12.7921L21.206 9.74052L19.5587 5.74845L12.1636 8.80001ZM17.5085 7.2663H14.2139V15.2663H17.5085V7.2663ZM17.9114 12.7921L19.5587 8.80001L12.1636 5.74845L10.5163 9.74052L17.9114 12.7921ZM15.8612 10.8259C16.3766 10.8259 16.7808 11.1884 16.8741 11.6533L9.03051 13.2275C9.66928 16.4102 12.4748 18.8259 15.8612 18.8259V10.8259ZM12.9523 16.4404H18.77V8.44039H12.9523V16.4404ZM14.8482 11.6533C14.9415 11.1884 15.3458 10.8259 15.8612 10.8259V18.8259C19.2475 18.8259 22.0531 16.4102 22.6918 13.2275L14.8482 11.6533Z"
                                 fill="#282739" mask="url(#path-1-inside-1_7825_20528)" />
                           </svg>
                        </button>
                     </div>
                     <a href="<?= $infoPopularProductsItem['link']?>" class="product-card__image">
                        <img src="<?= $infoPopularProductsItem['image']?>" alt="Самокат">
                     </a>  
                     <div class="product-card__info">
                        <a href="<?= $infoPopularProductsItem['link']?>" class="product-card__title">
                           <?= $infoPopularProductsItem['title']?>  
                        </a>  
                        <ul class="product-card__desk-list desk-list">
                           <li class="desk-list__item">
                              <svg class="desk-list__icon" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M16.5 3.75001V2.99999C16.5 2.58655 16.1638 2.25 15.75 2.25H13.5C13.0862 2.25 12.75 2.58655 12.75 2.99999V3.74998H12.5303L12.2198 3.43944C11.9407 3.16002 11.554 2.99999 11.1592 2.99999H6.84081C6.44604 2.99999 6.05932 3.16002 5.78025 3.43944L5.46971 3.74998H5.24999V2.99999C5.24999 2.58655 4.91382 2.25 4.5 2.25H2.25C1.83618 2.25 1.50001 2.58655 1.50001 2.99999V3.74998C0.673102 3.75001 0 4.42273 0 5.24999V14.25C0 15.0773 0.673102 15.75 1.50001 15.75H16.5C17.3269 15.75 18 15.0773 18 14.25V5.24999C18 4.42273 17.3269 3.75001 16.5 3.75001ZM4.12499 7.49999H2.62501C2.41773 7.49999 2.25 7.33226 2.25 7.12498C2.25 6.91773 2.41773 6.75 2.62501 6.75H4.12502C4.3323 6.75 4.50004 6.91773 4.50004 7.12501C4.5 7.33229 4.33227 7.49999 4.12499 7.49999ZM15.375 7.49999H15V7.875C15 8.08228 14.8322 8.25001 14.625 8.25001C14.4177 8.25001 14.25 8.08228 14.25 7.875V7.49999H13.8749C13.6677 7.49999 13.4999 7.33226 13.4999 7.12498C13.4999 6.9177 13.6677 6.74996 13.8749 6.74996H14.25V6.37495C14.25 6.16767 14.4177 5.99994 14.625 5.99994C14.8322 5.99994 15 6.16767 15 6.37495V6.75H15.375C15.5823 6.75 15.75 6.91773 15.75 7.12501C15.75 7.33229 15.5823 7.49999 15.375 7.49999Z"
                                    fill="#5D6C7B" />
                              </svg>
                              <span class="desk-list__text">
                                 <?= $infoPopularProductsItem['accumulator']?> mAh
                              </span>  
                           </li>
                           <li class="desk-list__item">
                              <svg class="desk-list__icon" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M14.224 0.260732C14.1407 0.101188 13.9756 0 13.7955 0H6.72992C6.51625 0 6.32795 0.141421 6.26681 0.346092L3.74286 8.80412C3.69918 8.95043 3.72721 9.10792 3.81843 9.23032C3.90965 9.35277 4.05337 9.42405 4.20596 9.42405H8.16763L6.57164 17.4212C6.52519 17.6538 6.65434 17.8862 6.87653 17.9691C6.93193 17.9898 6.98908 18 7.04544 18C7.21495 18 7.37746 17.9106 7.46554 17.7559L13.6896 6.82597C13.7748 6.67634 13.774 6.49172 13.6875 6.34287C13.601 6.19402 13.4418 6.10147 13.2697 6.10147H10.4671L14.1919 0.760267C14.2949 0.612563 14.3073 0.420397 14.224 0.260732Z"
                                    fill="#5D6C7B" />
                              </svg>
                              <span class="desk-list__text">
                                 <?= $infoPopularProductsItem['power']?> л.с.
                              </span>  
                           </li>
                           <li class="desk-list__item">
                              <svg class="desk-list__icon" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M8.47243 4.56419V1.23584C6.43963 1.35252 4.53332 2.14245 3.01172 3.49853L5.36494 5.85175C6.25052 5.11452 7.32585 4.66895 8.47243 4.56419V4.56419Z"
                                    fill="#5D6C7B" />
                                 <path
                                    d="M4.61876 6.59732L2.26557 4.24414C0.908332 5.76531 0.117422 7.67176 0 9.70505H3.32849C3.43396 8.55822 3.88044 7.48283 4.61876 6.59732Z"
                                    fill="#5D6C7B" />
                                 <path
                                    d="M14.6692 9.70505H17.9977C17.8802 7.67176 17.0894 5.76531 15.7321 4.24414L13.3789 6.59732C14.1172 7.4828 14.5637 8.55822 14.6692 9.70505V9.70505Z"
                                    fill="#5D6C7B" />
                                 <path
                                    d="M14.6696 10.7598C14.4951 12.6757 13.4434 13.8447 13.0258 14.2622C12.8195 14.4685 12.8195 14.803 13.0258 15.0093L14.6259 16.6094C14.729 16.7126 14.8642 16.7641 14.9994 16.7641C15.1346 16.7641 15.2697 16.7126 15.3729 16.6094C16.9523 15.0302 17.8732 12.9695 17.9992 10.7598H14.6696Z"
                                    fill="#5D6C7B" />
                                 <path
                                    d="M3.27189 13.7856C3.41919 13.5541 3.64215 13.2055 3.90962 12.7931C3.63544 12.2496 3.40358 11.5721 3.32965 10.7598H0C0.126035 12.9695 1.04695 15.0302 2.62628 16.6094C2.72943 16.7126 2.8646 16.7642 2.99978 16.7642C3.13495 16.7642 3.27016 16.7126 3.37331 16.6094L3.92119 16.0615C3.76249 15.9851 3.61607 15.8819 3.48785 15.7537C2.95952 15.2253 2.87068 14.416 3.27189 13.7856V13.7856Z"
                                    fill="#5D6C7B" />
                                 <path
                                    d="M9.52734 1.23584V4.56419C10.6739 4.66895 11.7493 5.11449 12.6348 5.85175L14.9881 3.49853C13.4665 2.14241 11.5601 1.35252 9.52734 1.23584V1.23584Z"
                                    fill="#5D6C7B" />
                                 <path
                                    d="M7.82725 9.06949C7.01106 9.88568 4.44992 13.8968 4.16059 14.3515C4.02787 14.56 4.05783 14.8327 4.23259 15.0075C4.40735 15.1823 4.68006 15.2123 4.88861 15.0795C5.34328 14.7902 9.35448 12.2291 10.1707 11.4129C10.8167 10.7668 10.8167 9.71559 10.1707 9.06953C9.5246 8.42346 8.47332 8.42343 7.82725 9.06949V9.06949Z"
                                    fill="#5D6C7B" />
                              </svg>
                              <span class="desk-list__text">
                                 <?= $infoPopularProductsItem['speedometer']?> км/ч
                              </span>  
                           </li>
                           <li class="desk-list__item">
                              <svg class="desk-list__icon" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#clip0_7825_20553)">
                                    <path
                                       d="M14.4525 5.35819L15.5303 4.28044L14.4698 3.21956L13.3168 4.3725C12.2636 3.62609 11.0345 3.16607 9.75 3.0375V1.5H11.25V0H6.75V1.5H8.25V3.0375C6.96551 3.16607 5.73644 3.62609 4.68319 4.3725L3.53025 3.21956L2.46975 4.28044L3.5475 5.35819C2.54149 6.42334 1.86948 7.75982 1.61448 9.20259C1.35947 10.6454 1.53263 12.1312 2.11257 13.4767C2.69252 14.8222 3.65384 15.9683 4.87783 16.7736C6.10182 17.5788 7.53487 18.008 9 18.008C10.4651 18.008 11.8982 17.5788 13.1222 16.7736C14.3462 15.9683 15.3075 14.8222 15.8874 13.4767C16.4674 12.1312 16.6405 10.6454 16.3855 9.20259C16.1305 7.75982 15.4585 6.42334 14.4525 5.35819V5.35819ZM9 16.5C7.81332 16.5 6.65328 16.1481 5.66658 15.4888C4.67989 14.8295 3.91085 13.8925 3.45673 12.7961C3.0026 11.6997 2.88378 10.4933 3.11529 9.32946C3.3468 8.16557 3.91825 7.09647 4.75736 6.25736C5.59648 5.41824 6.66558 4.8468 7.82946 4.61529C8.99335 4.38378 10.1997 4.5026 11.2961 4.95672C12.3925 5.41085 13.3295 6.17988 13.9888 7.16658C14.6481 8.15327 15 9.31331 15 10.5C14.9982 12.0908 14.3655 13.6158 13.2407 14.7407C12.1158 15.8655 10.5908 16.4982 9 16.5V16.5Z"
                                       fill="#5D6C7B" />
                                    <path
                                       d="M9 6V10.5H4.5C4.5 11.39 4.76392 12.26 5.25839 13.0001C5.75285 13.7401 6.45566 14.3169 7.27792 14.6575C8.10019 14.9981 9.00499 15.0872 9.87791 14.9135C10.7508 14.7399 11.5526 14.3113 12.182 13.682C12.8113 13.0526 13.2399 12.2508 13.4135 11.3779C13.5872 10.505 13.4981 9.60019 13.1575 8.77792C12.8169 7.95566 12.2401 7.25285 11.5001 6.75839C10.76 6.26392 9.89002 6 9 6V6Z"
                                       fill="#5D6C7B" />
                                 </g>
                                 <defs>
                                    <clipPath id="clip0_7825_20553">
                                       <rect width="18" height="18" fill="white" />
                                    </clipPath>
                                 </defs>
                              </svg>
                              <span class="desk-list__text">
                                 <?= $infoPopularProductsItem['time']?> часов
                              </span>  
                           </li>
                        </ul>
                        <div class="product-card__footer">
                           <div class="product-card__price-card price-card">
                              <span class="price-card__old">
                                 <?= $infoPopularProductsItem['old-price']?> ₽
                              </span>  
                              <span class="price-card__numb">
                                 <?= $infoPopularProductsItem['new-price']?> ₽
                              </span>  
                           </div>
                           <div class="product-card__icons">
                              <button type="button"
                                 class="product-card__icon-card icon-card icon-card_basket icon-card_border">
                                 <svg width="151" height="151" viewBox="0 0 151 151" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_7827_40218)">
                                       <path d="M21.5 59H37H117H133H143L126.5 131H24L8 59H21.5Z" fill="white" />
                                       <path
                                          d="M148.758 54.5798C146.764 52.0783 143.773 50.6432 140.551 50.6432H111.47L95.701 14.5351C94.7233 12.2963 92.1156 11.2732 89.8766 12.2515C87.6375 13.2291 86.615 15.8371 87.593 18.0762L101.816 50.6435H49.1844L63.407 18.0762C64.3847 15.8371 63.3625 13.2294 61.1235 12.2515C58.8847 11.2732 56.2767 12.2957 55.299 14.5351L39.5299 50.6435H10.4494C7.22708 50.6435 4.23569 52.0783 2.24172 54.5801C0.284323 57.0362 -0.43794 60.1937 0.26014 63.2438L15.7898 131.076C16.8743 135.812 21.0642 139.12 25.9791 139.12H125.021C129.936 139.12 134.126 135.812 135.21 131.076L150.74 63.2435C151.438 60.1934 150.716 57.0359 148.758 54.5798ZM125.021 130.272H25.9791C25.2279 130.272 24.57 129.78 24.4145 129.101L8.88484 61.2692C8.76303 60.7369 8.96741 60.3364 9.16088 60.0943C9.34019 59.869 9.7463 59.4912 10.4494 59.4912H35.6661L34.5074 62.1446C33.5297 64.3836 34.5519 66.9913 36.7909 67.9693C37.3672 68.2211 37.9677 68.3403 38.559 68.3403C40.2642 68.3403 41.8892 67.3485 42.6153 65.686L45.3207 59.4918H105.68L108.385 65.686C109.111 67.3488 110.736 68.3403 112.442 68.3403C113.033 68.3403 113.633 68.2211 114.21 67.9693C116.449 66.9916 117.471 64.3836 116.493 62.1446L115.335 59.4912H140.551C141.254 59.4912 141.66 59.869 141.84 60.0943C142.033 60.3367 142.238 60.7372 142.116 61.269L126.586 129.101C126.43 129.78 125.772 130.272 125.021 130.272Z"
                                          fill="#6F73EE" />
                                       <path
                                          d="M148.758 54.5798C146.764 52.0783 143.773 50.6432 140.551 50.6432H111.47L95.701 14.5351C94.7233 12.2963 92.1156 11.2732 89.8766 12.2515C87.6375 13.2291 86.615 15.8371 87.593 18.0762L101.816 50.6435H49.1844L63.407 18.0762C64.3847 15.8371 63.3625 13.2294 61.1235 12.2515C58.8847 11.2732 56.2767 12.2957 55.299 14.5351L39.5299 50.6435H10.4494C7.22708 50.6435 4.23569 52.0783 2.24172 54.5801C0.284323 57.0362 -0.43794 60.1937 0.26014 63.2438L15.7898 131.076C16.8743 135.812 21.0642 139.12 25.9791 139.12H125.021C129.936 139.12 134.126 135.812 135.21 131.076L150.74 63.2435C151.438 60.1934 150.716 57.0359 148.758 54.5798ZM125.021 130.272H25.9791C25.2279 130.272 24.57 129.78 24.4145 129.101L8.88484 61.2692C8.76303 60.7369 8.96741 60.3364 9.16088 60.0943C9.34019 59.869 9.7463 59.4912 10.4494 59.4912H35.6661L34.5074 62.1446C33.5297 64.3836 34.5519 66.9913 36.7909 67.9693C37.3672 68.2211 37.9677 68.3403 38.559 68.3403C40.2642 68.3403 41.8892 67.3485 42.6153 65.686L45.3207 59.4918H105.68L108.385 65.686C109.111 67.3488 110.736 68.3403 112.442 68.3403C113.033 68.3403 113.633 68.2211 114.21 67.9693C116.449 66.9916 117.471 64.3836 116.493 62.1446L115.335 59.4912H140.551C141.254 59.4912 141.66 59.869 141.84 60.0943C142.033 60.3367 142.238 60.7372 142.116 61.269L126.586 129.101C126.43 129.78 125.772 130.272 125.021 130.272Z"
                                          stroke="#6F73EE" />
                                       <path class="white"
                                          d="M48.9551 78.6621C46.5119 78.6621 44.5312 80.6428 44.5312 83.0859V115.527C44.5312 117.97 46.5119 119.951 48.9551 119.951C51.3982 119.951 53.3789 117.97 53.3789 115.527V83.0859C53.3789 80.6428 51.3985 78.6621 48.9551 78.6621Z"
                                          fill="#6F73EE" />
                                       <path class="white"
                                          d="M48.9551 78.6621C46.5119 78.6621 44.5312 80.6428 44.5312 83.0859V115.527C44.5312 117.97 46.5119 119.951 48.9551 119.951C51.3982 119.951 53.3789 117.97 53.3789 115.527V83.0859C53.3789 80.6428 51.3985 78.6621 48.9551 78.6621Z"
                                          stroke="#6F73EE" />
                                       <path class="white"
                                          d="M75.502 78.6621C73.0588 78.6621 71.0781 80.6428 71.0781 83.0859V115.527C71.0781 117.97 73.0588 119.951 75.502 119.951C77.9451 119.951 79.9258 117.97 79.9258 115.527V83.0859C79.9258 80.6428 77.9451 78.6621 75.502 78.6621Z"
                                          fill="#6F73EE" />
                                       <path class="white"
                                          d="M75.502 78.6621C73.0588 78.6621 71.0781 80.6428 71.0781 83.0859V115.527C71.0781 117.97 73.0588 119.951 75.502 119.951C77.9451 119.951 79.9258 117.97 79.9258 115.527V83.0859C79.9258 80.6428 77.9451 78.6621 75.502 78.6621Z"
                                          stroke="#6F73EE" />
                                       <path class="white"
                                          d="M102.041 78.6621C99.5979 78.6621 97.6172 80.6428 97.6172 83.0859V115.527C97.6172 117.97 99.5979 119.951 102.041 119.951C104.484 119.951 106.465 117.97 106.465 115.527V83.0859C106.465 80.6428 104.484 78.6621 102.041 78.6621Z"
                                          fill="#6F73EE" />
                                       <path class="white"
                                          d="M102.041 78.6621C99.5979 78.6621 97.6172 80.6428 97.6172 83.0859V115.527C97.6172 117.97 99.5979 119.951 102.041 119.951C104.484 119.951 106.465 117.97 106.465 115.527V83.0859C106.465 80.6428 104.484 78.6621 102.041 78.6621Z"
                                          stroke="#6F73EE" />
                                    </g>
                                    <defs>
                                       <clipPath id="clip0_7827_40218">
                                          <rect width="151" height="151" fill="white" />
                                       </clipPath>
                                    </defs>
                                 </svg>
                              </button>
                              <button type="button" class="product-card__icon-card icon-card icon-card_border">
                                 <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M17.9951 5.51484C17.7344 4.90528 17.3586 4.35291 16.8886 3.88864C16.4182 3.42298 15.8637 3.05293 15.2551 2.79861C14.624 2.53385 13.9471 2.39833 13.2637 2.39992C12.305 2.39992 11.3696 2.66506 10.5568 3.16588C10.3623 3.28569 10.1775 3.41727 10.0025 3.56065C9.8275 3.41727 9.64276 3.28569 9.44829 3.16588C8.63542 2.66506 7.70004 2.39992 6.74132 2.39992C6.05096 2.39992 5.382 2.53347 4.74998 2.79861C4.13935 3.05393 3.58901 3.4212 3.11646 3.88864C2.64584 4.35239 2.2699 4.90489 2.00994 5.51484C1.73963 6.14922 1.60156 6.82287 1.60156 7.51617C1.60156 8.17019 1.7338 8.8517 1.99633 9.54499C2.21608 10.1244 2.53111 10.7254 2.93366 11.3322C3.57151 12.2926 4.44855 13.2943 5.53757 14.3097C7.34222 15.9929 9.12937 17.1555 9.20521 17.2027L9.6661 17.5012C9.87029 17.6328 10.1328 17.6328 10.337 17.5012L10.7979 17.2027C10.8737 17.1536 12.6589 15.9929 14.4655 14.3097C15.5545 13.2943 16.4316 12.2926 17.0694 11.3322C17.472 10.7254 17.789 10.1244 18.0068 9.54499C18.2693 8.8517 18.4015 8.17019 18.4015 7.51617C18.4035 6.82287 18.2654 6.14922 17.9951 5.51484ZM10.0025 15.9477C10.0025 15.9477 3.07951 11.4678 3.07951 7.51617C3.07951 5.51484 4.71886 3.89257 6.74132 3.89257C8.16287 3.89257 9.39579 4.69388 10.0025 5.86443C10.6093 4.69388 11.8422 3.89257 13.2637 3.89257C15.2862 3.89257 16.9255 5.51484 16.9255 7.51617C16.9255 11.4678 10.0025 15.9477 10.0025 15.9477Z"
                                       fill="#6F73EE" />
                                    <path
                                       d="M3.99986 4.00041C6.0995 2.60065 8.35221 3.39493 9.55275 4.17364C9.8961 4.02094 10.6335 3.80368 12 3.5C16.5 2.5 16.5 5 17.5 6.5C18.3 7.7 17.1667 10 16.5 11L9.99986 17L2.99986 10.5C2.3332 9.00014 1.59986 5.60041 3.99986 4.00041Z" />
                                 </svg>
                              </button>
                           </div>
                        </div>
                     </div>
                     <a href="<?= $infoPopularProductsItem['link']?>" class="product-card__button button_purple">
                        Купить в 1 клик  
                     </a>
                  </article>
                  <?php endforeach; ?>
               </div>
            </div>
         </section>
         <!-- often-buy -->

      </main>

      <!-- footer -->
      <footer class="footer">
         <div class="footer__feedback feedback">
            <div class="feedback__container container">
               <p class="feedback__title">
                  Оставьте свою почту и станьте первым, <br> кто получит скидку на новые самокаты
               </p>
               <form action="#" class="feedback__form-feedback form-feedback" method="get">
                  <input type="email" class="form-feedback__input" placeholder="Введите Ваш email" name="email" required
                     tabindex="1">
                  <button class="form-feedback__button button" type="submit">
                     Подписаться
                  </button>
               </form>
            </div>
         </div>
         <div class="footer__container container">
            <div class="footer__content">
               <ul class="footer__row">
                  <li class="footer__item-footer item-footer">
                     <p class="item-footer__subject">
                        Каталог товаров
                     </p>
                     <ul class="item-footer__list">
                        <li class="item-footer__link">
                           <a class="underline" href="#">
                              Электросамокаты
                           </a>
                        </li>
                        <li class="item-footer__link">
                           <a class="underline" href="№">
                              Электроскутеры
                           </a>
                        </li>
                        <li class="item-footer__link">
                           <a class="underline" href="#">
                              Электровелосипеды
                           </a>
                        </li>
                        <li class="item-footer__link">
                           <a class="underline" href="#">
                              Электровелосипеды
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="footer__item-footer item-footer">
                     <p class="item-footer__subject">
                        Покупателям
                     </p>
                     <div class="item-footer__lists item-footer__lists_flex">
                        <ul class="item-footer__list">
                           <li class="item-footer__link">
                              <a class="underline" href="#">
                                 Сервисный центр
                              </a>
                           </li>
                           <li class="item-footer__link">
                              <a class="underline" href="#">
                                 Доставка и оплата
                              </a>
                           </li>
                           <li class="item-footer__link">
                              <a class="underline" href="#">
                                 Рассрочка
                              </a>
                           </li>
                           <li class="item-footer__link">
                              <a class="underline" href="#">
                                 Тест-драйв
                              </a>
                           </li>
                        </ul>
                        <ul class="item-footer__list">
                           <li class="item-footer__link">
                              <a class="underline" href="#">
                                 Блог
                              </a>
                           </li>
                           <li class="item-footer__link">
                              <a class="underline" href="#">
                                 Сотрудничество
                              </a>
                           </li>
                           <li class="item-footer__link">
                              <a class="underline" href="#">
                                 Контакты
                              </a>
                           </li>
                           <li class="item-footer__link">
                              <a class="underline" href="#">
                                 Акции
                              </a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li class="footer__item-footer item-footer">
                     <p class="item-footer__subject">
                        Контакты
                     </p>
                     <div class="item-footer__lists item-footer__lists_grid">
                        <ul class="item-footer__list">
                           <li class="item-footer__info-footer info-footer">
                              <address class="info-footer__block">
                                 <p class="info-footer__subtitle">
                                    Call-центр
                                 </p>
                                 <a href="tel:+7 (800) 505-54-61" class="info-footer__tel">
                                    +7 (800) 505-54-61
                                 </a>
                                 <p class="info-footer__text">
                                    Пн-Вс <time>10:00</time> - <time>20:00</time>
                                 </p>
                              </address>
                           </li>
                        </ul>
                        <ul class="item-footer__list item-footer__list_big">
                           <li class="item-footer__info-footer info-footer">
                              <address class="info-footer__block">
                                 <p class="info-footer__subtitle">
                                    Сервисный центр
                                 </p>
                                 <a href="tel:+7 (800) 505-54-61" class="info-footer__tel">
                                    +7 (499) 350-76-92
                                 </a>
                                 <p class="info-footer__text">
                                    Пн-Вс <time>10:00</time> - <time>20:00</time>
                                 </p>
                              </address>
                           </li>
                        </ul>
                        <ul class="item-footer__list">
                           <li class="item-footer__info-footer info-footer">
                              <address class="info-footer__block">
                                 <p class="info-footer__street">
                                    Магазин в Москве <br>
                                    ул. Ткацкая, 5 стр. 16
                                 </p>
                                 <a href="tel:+7 (499) 406 15 87" class="info-footer__tel info-footer__tel_small">
                                    +7 (499) 406 15 87
                                 </a>
                              </address>
                           </li>
                        </ul>
                        <ul class="item-footer__list">
                           <li class="item-footer__info-footer info-footer">
                              <address class="info-footer__block">
                                 <p class="info-footer__street">
                                    Магазин в Санкт- <br> Петербург <br> ул. Фрунзе, 2
                                 </p>
                                 <a href="tel:+7 (499) 406 15 87" class="info-footer__tel info-footer__tel_small">
                                    +7 (499) 406 15 87
                                 </a>
                              </address>
                           </li>
                        </ul>
                        <ul class="item-footer__list">
                           <li class="item-footer__info-footer info-footer">
                              <address class="info-footer__block">
                                 <p class="info-footer__street">
                                    Магазин в Краснодаре <br>
                                    ул. Восточно- <br> Кругликовская, 86
                                 </p>
                                 <a href="tel:+7 (800) 505 54 61" class="info-footer__tel info-footer__tel_small">
                                    +7 (800) 505 54 61
                                 </a>
                              </address>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li class="footer__item-footer item-footer">
                     <p class="item-footer__order order-call underline_purple">
                        Заказать звонок
                     </p>
                  </li>
               </ul>
               <div class="footer__media">
                  <a href="/index.php" class="footer__logo logo">
                     Kugoo
                  </a>
                  <div class="footer__downloads">
                     <a href="#" class="footer__download">
                        <svg width="131" height="31" viewBox="0 0 131 31" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M108.93 25.6939H111.019V11.7H108.93V25.6939ZM127.744 16.7409L125.35 22.808H125.278L122.793 16.7409H120.543L124.269 25.2208L122.145 29.9376H124.324L130.067 16.7409H127.744ZM115.898 24.1045C115.213 24.1045 114.26 23.7625 114.26 22.916C114.26 21.8359 115.448 21.4218 116.474 21.4218C117.393 21.4218 117.824 21.6199 118.382 21.8902C118.22 23.1862 117.104 24.1045 115.898 24.1045V24.1045ZM116.15 16.4348C114.638 16.4348 113.072 17.1012 112.424 18.5774L114.278 19.3514C114.674 18.5774 115.411 18.3251 116.186 18.3251C117.266 18.3251 118.364 18.9736 118.382 20.1258V20.2696C118.004 20.0536 117.195 19.7296 116.204 19.7296C114.206 19.7296 112.171 20.8275 112.171 22.8801C112.171 24.7525 113.81 25.9589 115.645 25.9589C117.05 25.9589 117.824 25.3288 118.311 24.5908H118.382V25.6708H120.398V20.3055C120.398 17.8214 118.545 16.4348 116.15 16.4348V16.4348ZM103.241 18.4444H100.27V13.6477H103.241C104.803 13.6477 105.689 14.9406 105.689 16.046C105.689 17.1305 104.803 18.4444 103.241 18.4444ZM103.188 11.7H98.1828V25.6939H100.27V20.3921H103.188C105.503 20.3921 107.778 18.716 107.778 16.046C107.778 13.3761 105.503 11.7 103.188 11.7ZM75.8954 24.1071C74.4524 24.1071 73.2442 22.8989 73.2442 21.2395C73.2442 19.5626 74.4524 18.3361 75.8954 18.3361C77.3201 18.3361 78.4382 19.5626 78.4382 21.2395C78.4382 22.8989 77.3201 24.1071 75.8954 24.1071V24.1071ZM78.2939 17.5245H78.2217C77.753 16.9656 76.8508 16.4606 75.7149 16.4606C73.3344 16.4606 71.1524 18.5525 71.1524 21.2395C71.1524 23.9086 73.3344 25.9825 75.7149 25.9825C76.8508 25.9825 77.753 25.4774 78.2217 24.9007H78.2939V25.5859C78.2939 27.4076 77.3201 28.3814 75.7511 28.3814C74.4708 28.3814 73.6772 27.4614 73.3523 26.6861L71.5311 27.4434C72.0541 28.7058 73.4428 30.2568 75.7511 30.2568C78.2038 30.2568 80.2777 28.8138 80.2777 25.2973V16.7492H78.2939V17.5245ZM81.7202 25.6939H83.8122V11.6996H81.7202V25.6939ZM86.8961 21.0773C86.842 19.2377 88.3208 18.3002 89.3847 18.3002C90.2148 18.3002 90.9178 18.7147 91.1518 19.3103L86.8961 21.0773ZM93.3884 19.4904C92.9921 18.4261 91.7831 16.4606 89.3125 16.4606C86.8599 16.4606 84.8222 18.3903 84.8222 21.2216C84.8222 23.8907 86.842 25.9825 89.5469 25.9825C91.7294 25.9825 92.9921 24.648 93.5148 23.8727L91.8917 22.7904C91.351 23.5841 90.6111 24.1071 89.5469 24.1071C88.483 24.1071 87.7257 23.62 87.2386 22.6645L93.6044 20.0313L93.3884 19.4904ZM42.6702 17.9215V19.9412H47.5032C47.3589 21.0773 46.9802 21.9068 46.4031 22.4839C45.7 23.1875 44.5998 23.9628 42.6702 23.9628C39.6945 23.9628 37.3683 21.5643 37.3683 18.5887C37.3683 15.6131 39.6945 13.2144 42.6702 13.2144C44.2753 13.2144 45.4472 13.8457 46.313 14.6573L47.7376 13.2327C46.5295 12.0783 44.9242 11.1946 42.6702 11.1946C38.5943 11.1946 35.168 14.513 35.168 18.5887C35.168 22.6645 38.5943 25.9825 42.6702 25.9825C44.8705 25.9825 46.5295 25.2615 47.8277 23.9086C49.1623 22.574 49.5773 20.6986 49.5773 19.1839C49.5773 18.7147 49.5413 18.2822 49.4688 17.9215H42.6702ZM55.072 24.1071C53.6289 24.1071 52.3845 22.9168 52.3845 21.2216C52.3845 19.5083 53.6289 18.3361 55.072 18.3361C56.5144 18.3361 57.7589 19.5083 57.7589 21.2216C57.7589 22.9168 56.5144 24.1071 55.072 24.1071V24.1071ZM55.072 16.4606C52.4387 16.4606 50.2926 18.4624 50.2926 21.2216C50.2926 23.9628 52.4387 25.9825 55.072 25.9825C57.7047 25.9825 59.8508 23.9628 59.8508 21.2216C59.8508 18.4624 57.7047 16.4606 55.072 16.4606ZM65.4972 24.1071C64.0547 24.1071 62.8102 22.9168 62.8102 21.2216C62.8102 19.5083 64.0547 18.3361 65.4972 18.3361C66.9398 18.3361 68.1842 19.5083 68.1842 21.2216C68.1842 22.9168 66.9398 24.1071 65.4972 24.1071ZM65.4972 16.4606C62.864 16.4606 60.7183 18.4624 60.7183 21.2216C60.7183 23.9628 62.864 25.9825 65.4972 25.9825C68.13 25.9825 70.2761 23.9628 70.2761 21.2216C70.2761 18.4624 68.13 16.4606 65.4972 16.4606Z"
                              fill="#282739" />
                           <path
                              d="M0.991857 28.3691L0.908684 28.2896C0.582937 27.9449 0.390625 27.4097 0.390625 26.7167V26.8798V2.12306C0.390625 2.12082 0.390625 2.11914 0.390625 2.11735C0.390625 2.11948 0.390625 2.12127 0.390625 2.12351V2.28705C0.390625 1.53661 0.614841 0.97131 0.990512 0.632355L14.8597 14.5012L0.991857 28.3691ZM0.390625 2.11601C0.390625 2.05433 0.392304 1.99444 0.395438 1.93545C0.392304 1.994 0.390625 2.05433 0.390625 2.11601ZM0.395438 1.93277C0.395438 1.93198 0.395437 1.93108 0.395773 1.93019C0.395437 1.93108 0.395438 1.93198 0.395438 1.93277ZM0.395773 1.92493C0.395773 1.92448 0.395773 1.92403 0.395773 1.92359C0.395773 1.92403 0.395773 1.92448 0.395773 1.92493Z"
                              fill="url(#paint0_linear_176_9)" />
                           <path
                              d="M19.4817 19.2891L19.5872 19.2292L25.0643 16.1171C25.5865 15.8203 25.9345 15.4604 26.1081 15.0795C25.935 15.4604 25.5868 15.8207 25.0643 16.1176L19.5872 19.2296L19.4817 19.2891V19.2891ZM19.4831 19.1251L14.8594 14.5006L19.4826 9.8769L25.0643 13.0479C25.7731 13.4507 26.1711 13.9698 26.2375 14.5001C26.2375 14.5006 26.2375 14.5015 26.2375 14.5023C26.1711 15.0314 25.7731 15.5509 25.0643 15.9536L19.4831 19.1251"
                              fill="url(#paint1_linear_176_9)" />
                           <path
                              d="M1.97493 28.8975C1.58751 28.8975 1.24945 28.7715 0.985827 28.5337L0.986277 28.5332C1.2499 28.7711 1.5884 28.8975 1.97583 28.8975C2.00941 28.8975 2.04355 28.8966 2.07814 28.8949C2.0431 28.8966 2.00851 28.8975 1.97493 28.8975V28.8975ZM1.97538 28.7335C1.58796 28.7339 1.2499 28.6075 0.986277 28.3697V28.3693L14.8541 14.5014L19.4778 19.1259L3.22945 28.3579C2.77989 28.6128 2.35396 28.7335 1.97538 28.7335V28.7335ZM0.982358 28.5306C0.957843 28.5084 0.933776 28.4847 0.910156 28.4602L0.982358 28.5306Z"
                              fill="url(#paint2_linear_176_9)" />
                           <path
                              d="M14.8575 14.501L0.988281 0.632135C1.2519 0.39471 1.58951 0.268777 1.97649 0.268777C2.35608 0.268777 2.78235 0.389897 3.2328 0.645233L19.4807 9.87728L14.8575 14.501V14.501ZM19.5853 9.77284L3.2328 0.481797C2.78235 0.226349 2.35608 0.105232 1.97649 0.105232C1.9747 0.105232 1.97347 0.105232 1.97168 0.105232C1.97392 0.105232 1.97559 0.105232 1.97828 0.105232C2.35697 0.105232 2.7828 0.225902 3.2328 0.48135L19.5853 9.77284V9.77284Z"
                              fill="url(#paint3_linear_176_9)" />
                           <path
                              d="M2.08129 28.8945C2.43323 28.8744 2.82289 28.7533 3.23259 28.5211L19.4796 19.2895L3.23259 28.5211C2.82323 28.7537 2.43323 28.8744 2.08129 28.8945V28.8945ZM0.988974 28.5333L0.985505 28.5303C0.986736 28.5312 0.988078 28.5324 0.988974 28.5333ZM0.913303 28.4599L0.90625 28.4529V28.4525C0.908937 28.4551 0.911064 28.4576 0.913303 28.4599Z"
                              fill="white" />
                           <path d="M19.4766 19.2891L19.582 19.2292L19.4766 19.2891Z"
                              fill="url(#paint4_linear_176_9)" />
                           <defs>
                              <linearGradient id="paint0_linear_176_9" x1="13.6299" y1="1.86191" x2="-5.15646"
                                 y2="20.6483" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#00A0FF" />
                                 <stop offset="0.00657445" stop-color="#00A1FF" />
                                 <stop offset="0.2601" stop-color="#00BEFF" />
                                 <stop offset="0.5122" stop-color="#00D2FF" />
                                 <stop offset="0.7604" stop-color="#00DFFF" />
                                 <stop offset="1" stop-color="#00E3FF" />
                              </linearGradient>
                              <linearGradient id="paint1_linear_176_9" x1="27.1012" y1="14.5013" x2="0.0149757"
                                 y2="14.5013" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#FFE000" />
                                 <stop offset="0.4087" stop-color="#FFBD00" />
                                 <stop offset="0.7754" stop-color="#FFA500" />
                                 <stop offset="1" stop-color="#FF9C00" />
                              </linearGradient>
                              <linearGradient id="paint2_linear_176_9" x1="17.013" y1="17.0707" x2="-8.46273"
                                 y2="42.5464" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#FF3A44" />
                                 <stop offset="1" stop-color="#C31162" />
                              </linearGradient>
                              <linearGradient id="paint3_linear_176_9" x1="-2.60646" y1="-7.69074" x2="8.76947"
                                 y2="3.68519" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#32A071" />
                                 <stop offset="0.0685" stop-color="#2DA771" />
                                 <stop offset="0.4762" stop-color="#15CF74" />
                                 <stop offset="0.8009" stop-color="#06E775" />
                                 <stop offset="1" stop-color="#00F076" />
                              </linearGradient>
                              <linearGradient id="paint4_linear_176_9" x1="27.0961" y1="14.5014" x2="0.00945489"
                                 y2="14.5014" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="#CCB300" />
                                 <stop offset="0.4087" stop-color="#CC9700" />
                                 <stop offset="0.7754" stop-color="#CC8400" />
                                 <stop offset="1" stop-color="#CC7D00" />
                              </linearGradient>
                           </defs>
                        </svg>
                     </a>
                     <a href="#" class="footer__download">
                        <svg width="113" height="30" viewBox="0 0 113 30" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M17.5846 14.3753C17.5971 13.3988 17.8565 12.4414 18.3385 11.5921C18.8205 10.7429 19.5096 10.0293 20.3415 9.51787C19.813 8.76311 19.1158 8.14197 18.3053 7.70379C17.4947 7.26561 16.5932 7.02245 15.6723 6.99364C13.7077 6.78743 11.8032 8.16917 10.8021 8.16917C9.78169 8.16917 8.24037 7.01411 6.58061 7.04826C5.50704 7.08294 4.46076 7.39513 3.54372 7.9544C2.62667 8.51367 1.87014 9.30096 1.34782 10.2395C-0.914678 14.1568 0.772946 19.9139 2.94027 23.0803C4.02463 24.6308 5.29194 26.3628 6.9502 26.3013C8.5729 26.234 9.17895 25.2666 11.1377 25.2666C13.0782 25.2666 13.6468 26.3013 15.3387 26.2623C17.08 26.234 18.177 24.7049 19.2234 23.1397C20.0025 22.0349 20.602 20.8139 20.9997 19.5218C19.9881 19.094 19.1248 18.3778 18.5175 17.4626C17.9102 16.5474 17.5857 15.4737 17.5846 14.3753Z"
                              fill="#282739" />
                           <path
                              d="M14.3879 4.91126C15.3373 3.77155 15.8051 2.30665 15.6918 0.827637C14.2413 0.979978 12.9015 1.6732 11.9393 2.76918C11.4688 3.3046 11.1085 3.92749 10.8789 4.60224C10.6494 5.277 10.555 5.99038 10.6013 6.70162C11.3268 6.70909 12.0445 6.55184 12.7004 6.24172C13.3563 5.9316 13.9333 5.4767 14.3879 4.91126V4.91126Z"
                              fill="#282739" />
                           <path
                              d="M37.0469 22.5321H31.7218L30.443 26.3081H28.1875L33.2313 12.3379H35.5747L40.6185 26.3081H38.3246L37.0469 22.5321ZM32.2733 20.7897H36.4943L34.4135 14.6615H34.3552L32.2733 20.7897Z"
                              fill="#282739" />
                           <path
                              d="M51.5124 21.2159C51.5124 24.381 49.8183 26.4146 47.2617 26.4146C46.6141 26.4485 45.9701 26.2993 45.4033 25.9841C44.8365 25.669 44.37 25.2006 44.057 24.6326H44.0087V29.6775H41.918V16.1226H43.9417V17.8167H43.9801C44.3074 17.2514 44.7819 16.7855 45.353 16.4684C45.924 16.1513 46.5704 15.995 47.2233 16.016C49.8084 16.016 51.5124 18.0595 51.5124 21.2159ZM49.3634 21.2159C49.3634 19.1538 48.2978 17.798 46.6718 17.798C45.0744 17.798 43.9999 19.1823 43.9999 21.2159C43.9999 23.2681 45.0744 24.6425 46.6718 24.6425C48.2978 24.6425 49.3634 23.2967 49.3634 21.2159H49.3634Z"
                              fill="#282739" />
                           <path
                              d="M62.7238 21.2159C62.7238 24.381 61.0292 26.4146 58.4727 26.4146C57.8251 26.4485 57.181 26.2993 56.6142 25.9841C56.0475 25.669 55.5809 25.2006 55.268 24.6326H55.2196V29.6775H53.1289V16.1226H55.1526V17.8167H55.191C55.5184 17.2514 55.9928 16.7855 56.5639 16.4684C57.135 16.1513 57.7813 15.995 58.4342 16.016C61.0193 16.016 62.7238 18.0595 62.7238 21.2159ZM60.5744 21.2159C60.5744 19.1538 59.5087 17.798 57.8827 17.798C56.2853 17.798 55.2108 19.1823 55.2108 21.2159C55.2108 23.2681 56.2853 24.6425 57.8827 24.6425C59.5087 24.6425 60.5744 23.2967 60.5744 21.2159V21.2159Z"
                              fill="#282739" />
                           <path
                              d="M70.1324 22.4157C70.2873 23.8011 71.6331 24.7107 73.4722 24.7107C75.2344 24.7107 76.5022 23.801 76.5022 22.5519C76.5022 21.4675 75.7376 20.8183 73.9271 20.3733L72.1165 19.9371C69.5512 19.3175 68.3603 18.1178 68.3603 16.171C68.3603 13.7606 70.4609 12.105 73.4426 12.105C76.3957 12.105 78.4194 13.7606 78.4875 16.171H76.377C76.2507 14.7769 75.0982 13.9353 73.414 13.9353C71.7298 13.9353 70.5773 14.7868 70.5773 16.026C70.5773 17.0137 71.3134 17.5949 73.1141 18.0398L74.6532 18.4177C77.5196 19.0955 78.7094 20.2469 78.7094 22.2904C78.7094 24.904 76.6286 26.541 73.3173 26.541C70.2191 26.541 68.1273 24.9425 67.9922 22.4156L70.1324 22.4157Z"
                              fill="#282739" />
                           <path
                              d="M83.2222 13.7124V16.1228H85.1591V17.7784H83.2222V23.3936C83.2222 24.2659 83.61 24.6724 84.4614 24.6724C84.6914 24.6684 84.9209 24.6522 85.1492 24.624V26.2697C84.7664 26.3413 84.3773 26.3737 83.9879 26.3664C81.9258 26.3664 81.1216 25.5919 81.1216 23.6165V17.7784H79.6406V16.1228H81.1215V13.7124H83.2222Z"
                              fill="#282739" />
                           <path
                              d="M86.2812 21.2161C86.2812 18.0114 88.1687 15.9976 91.1119 15.9976C94.0651 15.9976 95.9437 18.0113 95.9437 21.2161C95.9437 24.4296 94.0749 26.4346 91.1119 26.4346C88.15 26.4346 86.2812 24.4296 86.2812 21.2161ZM93.8135 21.2161C93.8135 19.0177 92.806 17.7202 91.1119 17.7202C89.4178 17.7202 88.4104 19.0276 88.4104 21.2161C88.4104 23.4232 89.4178 24.7108 91.1119 24.7108C92.806 24.7108 93.8135 23.4232 93.8135 21.2161H93.8135Z"
                              fill="#282739" />
                           <path
                              d="M97.6641 16.1225H99.6581V17.8561H99.7065C99.8414 17.3147 100.159 16.8362 100.605 16.5011C101.051 16.166 101.599 15.9946 102.156 16.0159C102.397 16.0151 102.638 16.0413 102.873 16.0939V18.0495C102.569 17.9566 102.251 17.9139 101.933 17.9232C101.63 17.9108 101.327 17.9644 101.046 18.0801C100.765 18.1959 100.512 18.3711 100.305 18.5937C100.098 18.8163 99.9417 19.0811 99.8467 19.3699C99.7517 19.6586 99.7204 19.9645 99.7548 20.2665V26.3079H97.6641L97.6641 16.1225Z"
                              fill="#282739" />
                           <path
                              d="M112.512 23.3167C112.231 25.1656 110.43 26.4346 108.126 26.4346C105.163 26.4346 103.324 24.4493 103.324 21.2644C103.324 18.0696 105.173 15.9976 108.038 15.9976C110.856 15.9976 112.629 17.9333 112.629 21.0216V21.7379H105.435V21.8643C105.401 22.2391 105.448 22.6167 105.572 22.972C105.696 23.3274 105.894 23.6523 106.154 23.9251C106.413 24.198 106.727 24.4126 107.075 24.5547C107.424 24.6968 107.799 24.7631 108.175 24.7493C108.669 24.7956 109.165 24.6811 109.588 24.423C110.012 24.1649 110.341 23.7769 110.527 23.3166L112.512 23.3167ZM105.445 20.2767H110.537C110.555 19.9397 110.504 19.6024 110.387 19.286C110.269 18.9697 110.087 18.6811 109.852 18.4383C109.618 18.1956 109.336 18.004 109.023 17.8755C108.711 17.747 108.376 17.6844 108.038 17.6917C107.698 17.6896 107.36 17.755 107.045 17.8841C106.73 18.0132 106.444 18.2034 106.203 18.4437C105.962 18.6841 105.771 18.9698 105.64 19.2844C105.51 19.599 105.444 19.9363 105.445 20.2767V20.2767Z"
                              fill="#282739" />
                        </svg>
                     </a>
                  </div>
                  <ul class="footer__socials-footer socials-footer">
                     <li class="socials-footer__item">
                        <a href="#" class="socials-footer__link">
                           <div class="socials-footer__icon">
                              <img src="/img/footer/vk.svg" alt="VK">
                           </div>
                           <div class="socials-footer__info">
                              <p class="socials-footer__subtitle">
                                 Вконтакте
                              </p>
                              <p class="socials-footer__numb">
                                 3 300
                              </p>
                           </div>
                        </a>
                     </li>
                     <li class="socials-footer__item">
                        <a href="#" class="socials-footer__link">
                           <div class="socials-footer__icon">
                              <img src="/img/footer/insta.svg" alt="Instagram">
                           </div>
                           <div class="socials-footer__info">
                              <p class="socials-footer__subtitle">
                                 Instagram
                              </p>
                              <p class="socials-footer__numb">
                                 10 602
                              </p>
                           </div>
                        </a>
                     </li>
                     <li class="socials-footer__item">
                        <a href="#" class="socials-footer__link">
                           <div class="socials-footer__icon">
                              <img src="/img/footer/youtube.svg" alt="YouTube">
                           </div>
                           <div class="socials-footer__info">
                              <p class="socials-footer__subtitle">
                                 YouTube
                              </p>
                              <p class="socials-footer__numb">
                                 3 603
                              </p>
                           </div>
                        </a>
                     </li>
                     <li class="socials-footer__item">
                        <a href="#" class="socials-footer__link">
                           <div class="socials-footer__icon">
                              <img src="/img/footer/telegram.svg" alt="Telegram">
                           </div>
                           <div class="socials-footer__info">
                              <p class="socials-footer__subtitle">
                                 Telegram
                              </p>
                              <p class="socials-footer__numb">
                                 432
                              </p>
                           </div>
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="footer__bottom-footer bottom-footer">
                  <div class="bottom-footer__info">
                     <a href="#" class="bottom-footer__link underline">
                        Реквизиты
                     </a>
                     <a href="#" class="bottom-footer__link underline">
                        Политика конфиденциальности
                     </a>
                  </div>
                  <ul class="bottom-footer__list">
                     <li class="bottom-footer__item">
                        <a href="#" class="bottom-footer__link">
                           <img src="/img/footer/GooglePay.svg" alt="GooglePay">
                        </a>
                     </li>
                     <li class="bottom-footer__item">
                        <a href="#" class="bottom-footer__link">
                           <img src="/img/footer/ApplePay.svg" alt="ApplePay">
                        </a>
                     </li>
                     <li class="bottom-footer__item">
                        <a href="#" class="bottom-footer__link">
                           <img src="/img/footer/visa-logo.svg" alt="Visa">
                        </a>
                     </li>
                     <li class="bottom-footer__item">
                        <a href="#" class="bottom-footer__link">
                           <img src="/img/footer/Mastercard.svg" alt="Mastercard">
                        </a>
                     </li>
                     <li class="bottom-footer__item">
                        <a href="#" class="bottom-footer__link">
                           <img src="/img/footer/Maestro.svg" alt="Maestro">
                        </a>
                     </li>
                     <li class="bottom-footer__item">
                        <a href="#" class="bottom-footer__link">
                           <img src="/img/footer/Webmoney.svg" alt="Webmoney">
                        </a>
                     </li>
                     <li class="bottom-footer__item">
                        <a href="#" class="bottom-footer__link">
                           <img src="/img/footer/Qiwi.svg" alt="Qiwi">
                        </a>
                     </li>
                  </ul>
                  <ul class="bottom-footer__socials">
                     <li class="bottom-footer__subtitle">
                        Online чат:
                     </li>
                     <ul class="bottom-footer__icons-link icons-link">
                        <li class="icons-link__item">
                           <a href="#">
                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#clip0_213_955)">
                                    <path
                                       d="M8.54256 9.03967C8.35957 9.22278 8.06282 9.22278 7.87971 9.03967L5.74959 6.90955C5.6617 6.82165 5.61226 6.70239 5.61226 6.57812C5.61226 6.45373 5.6617 6.33459 5.74959 6.24658L6.12825 5.86804L5.01607 4.75586L4.10493 5.66699C3.79829 5.97363 3.79842 6.47253 4.10493 6.77917L8.01009 10.6846C8.15767 10.8322 8.35518 10.9133 8.56624 10.9133C8.7773 10.9133 8.97481 10.832 9.12239 10.6844L10.0335 9.77344L8.92134 8.66113L8.54256 9.03967Z"
                                       fill="#5D6C7B" class="purple" />
                                    <path
                                       d="M15.3276 5.64722C15.3276 4.14441 14.7388 2.72791 13.6692 1.65845C12.5997 0.588989 11.1832 0 9.68054 0H6.33447C6.33447 0 6.33447 0 6.33435 0C4.83179 0 3.41528 0.588989 2.34595 1.65833C1.27649 2.72778 0.6875 4.14441 0.6875 5.64709V8.27722C0.6875 9.44092 1.04248 10.5604 1.71411 11.5146C2.30664 12.3564 3.10352 13.0139 4.03259 13.4309V14.9417C4.03259 15.7228 4.46997 15.9999 4.84448 16C5.11206 16 5.37976 15.8679 5.64026 15.6075L7.32324 13.9243H9.68066C11.1833 13.9243 12.5999 13.3353 13.6693 12.2659C14.7388 11.1964 15.3278 9.77991 15.3278 8.27722L15.3276 5.64722ZM11.0293 10.1049L9.78662 11.3474C9.46191 11.6721 9.02905 11.8507 8.56763 11.8507C8.1062 11.8507 7.67334 11.672 7.34863 11.3474L3.44336 7.44202C2.77136 6.76978 2.77136 5.67615 3.44336 5.00403L4.68604 3.76147C4.77393 3.67346 4.89307 3.62415 5.01746 3.62415C5.14172 3.62415 5.26099 3.67346 5.34888 3.76147L7.12402 5.53662C7.21191 5.62451 7.26123 5.74377 7.26123 5.86804C7.26123 5.99231 7.21191 6.11157 7.1239 6.19946L6.74536 6.578L8.21265 8.04529L8.59131 7.66663C8.77441 7.48364 9.07117 7.48364 9.25415 7.66675L11.0293 9.44189C11.1173 9.52979 11.1666 9.64905 11.1666 9.77332C11.1666 9.89771 11.1173 10.017 11.0293 10.1049ZM7.65259 4.55066C7.65259 4.29187 7.86243 4.08191 8.12134 4.08191C9.74548 4.08191 11.0669 5.4032 11.0669 7.02722C11.0669 7.28613 10.8571 7.49597 10.5981 7.49597C10.3394 7.49597 10.1294 7.28613 10.1294 7.02722C10.1294 5.92017 9.22864 5.01941 8.12134 5.01941C7.86243 5.01941 7.65259 4.80957 7.65259 4.55066ZM12.6063 7.49622C12.3474 7.49622 12.1376 7.28625 12.1376 7.02747C12.1377 5.95459 11.7198 4.94604 10.9613 4.18738C10.2026 3.42883 9.19409 3.01099 8.12122 3.01099C7.86243 3.01099 7.65247 2.80115 7.65247 2.54224C7.65247 2.28345 7.86243 2.07349 8.12122 2.07349C9.44446 2.07349 10.6885 2.58887 11.6241 3.52454C12.5599 4.46021 13.0752 5.70422 13.0751 7.02747C13.0751 7.28625 12.8652 7.49622 12.6063 7.49622Z"
                                       fill="#5D6C7B" class="purple" />
                                 </g>
                                 <defs>
                                    <clipPath id="clip0_213_955">
                                       <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                 </defs>
                              </svg>
                           </a>
                        </li>
                        <li class="icons-link__item">
                           <a href="#">
                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#clip0_213_958)">
                                    <path class="green"
                                       d="M7.99571 0.00488666C3.58004 0.0058236 0.00119302 3.58621 0.00212996 8.00188C0.00244228 9.53088 0.441214 11.0277 1.26635 12.3149L0.0224305 15.5424C-0.0438116 15.714 0.0416378 15.9069 0.213286 15.9731C0.25167 15.9879 0.292427 15.9955 0.333559 15.9955C0.371724 15.9956 0.409608 15.9891 0.445493 15.9761L3.77686 14.7868C7.52502 17.1212 12.4559 15.9751 14.7903 12.2269C17.1247 8.47875 15.9786 3.54789 12.2304 1.21352C10.9598 0.422171 9.49261 0.00341878 7.99571 0.00488666Z"
                                       fill="#5D6C7B" />
                                    <path
                                       d="M11.8055 9.36609C11.8055 9.36609 10.9894 8.96633 10.4783 8.69983C9.90002 8.40201 9.22042 8.95968 8.90061 9.27683C8.40288 9.08563 7.94827 8.79705 7.5634 8.42799C7.19428 8.04319 6.9057 7.58858 6.71456 7.09078C7.03172 6.77031 7.58805 6.09137 7.29156 5.51306C7.02838 5.00136 6.6253 4.18519 6.6253 4.18519C6.56874 4.07294 6.45384 4.00208 6.32813 4.00195H5.66187C4.69157 4.16954 3.98608 5.01617 3.9962 6.00077C3.9962 7.04681 5.24812 9.0563 6.0923 9.90112C6.93649 10.7459 8.94596 11.9972 9.99265 11.9972C10.9773 12.0073 11.8239 11.3018 11.9915 10.3316V9.66529C11.9916 9.53824 11.9195 9.42221 11.8055 9.36609Z"
                                       fill="#F7F7F7" />
                                 </g>
                                 <defs>
                                    <clipPath id="clip0_213_958">
                                       <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                 </defs>
                              </svg>
                           </a>
                        </li>
                        <li class="icons-link__item">
                           <a href="#">
                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#clip0_213_961)">
                                    <path class="blue"
                                       d="M6.27812 10.1211L6.01345 13.8438C6.39212 13.8438 6.55612 13.6811 6.75279 13.4858L8.52812 11.7891L12.2068 14.4831C12.8815 14.8591 13.3568 14.6611 13.5388 13.8624L15.9535 2.54777L15.9541 2.5471C16.1681 1.54977 15.5935 1.15977 14.9361 1.40443L0.742785 6.83843C-0.225881 7.21443 -0.211215 7.75443 0.578119 7.9991L4.20679 9.12777L12.6355 3.85377C13.0321 3.5911 13.3928 3.73643 13.0961 3.9991L6.27812 10.1211Z"
                                       fill="#5D6C7B" />
                                 </g>
                                 <defs>
                                    <clipPath id="clip0_213_961">
                                       <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                 </defs>
                              </svg>
                           </a>
                        </li>
                     </ul>
                  </ul>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer -->

   </div>
   <!-- pages -->

   <!-- modals -->
   <div class="popup popup_tel">
      <div class="popup__container">
         <div class="popup__burger">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
               <rect x="15.5859" y="1.44336" width="20" height="1.05263" transform="rotate(135 15.5859 1.44336)"
                  fill="#5D6C7B" />
               <rect x="15.1406" y="15.8491" width="20" height="0.999999" transform="rotate(-135 15.1406 15.8491)"
                  fill="#5D6C7B" />
            </svg>
         </div>
         <div class="popup__content">
            <div class="popup__info">
               <h3 class="popup__middle-title middle-title">
                  Менеджер позвонит <br>
                  вам в течение 5 минут
               </h3>
               <p class="popup__text">
                  ответит на все вопросы и проконсультирует <br>
                  по продуктам Kugoo
               </p>
               <form action="#" method="get" class="popup__form-tel form-tel">
                  <input type="tel" class="form-tel__input" required tabindex="1" name="tel"
                     placeholder="+7 (___) __ - __ - __">
                  <button class="form-tel__button button button_purple" type="submit">
                     Позвоните мне
                  </button>
                  <label class="form-tel__footer">
                     <input type="checkbox" class="form-tel__check">
                     <p class="form-tel__text">
                        Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и <span
                           class="form-tel__text_purple">политикой конфиденциальности</span>
                     </p>
                  </label>
               </form>
            </div>
            <div class="popup__image">
               <img src="/img/manager-image/manager.png" alt="Менеджер">
            </div>
         </div>
      </div>
   </div>
   <!-- modals -->

</body>

</html>