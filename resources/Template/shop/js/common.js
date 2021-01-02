jQuery.extend(jQuery.validator.messages, {
  required: 'Xin mời nhập thông tin.',
  remote: 'Please fix this field.',
  email: 'Email không hợp lệ.',
  url: 'Please enter a valid URL.',
  date: 'Please enter a valid date.',
  dateISO: 'Please enter a valid date (ISO).',
  number: 'Please enter a valid number.',
  digits: 'Please enter only digits.',
  creditcard: 'Please enter a valid credit card number.',
  equalTo: 'Please enter the same value again.',
  accept: 'Please enter a value with a valid extension.',
  maxlength: jQuery.validator.format(
    'Please enter no more than {0} characters.'
  ),
  minlength: jQuery.validator.format('Vui lòng nhập it nhất {0} ký tự.'),
  rangelength: jQuery.validator.format(
    'Please enter a value between {0} and {1} characters long.'
  ),
  range: jQuery.validator.format('Please enter a value between {0} and {1}.'),
  max: jQuery.validator.format(
    'Please enter a value less than or equal to {0}.'
  ),
  min: jQuery.validator.format(
    'Please enter a value greater than or equal to {0}.'
  ),
})
;(function($) {
  'use strict'
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    },
  })

  $(document).ready(function() {
    // SMOOTH SCROLL
    $('.header a[href*="#"]:not([href="#"])').on('click', function() {
      if (
        location.pathname.replace(/^\//, '') ===
          this.pathname.replace(/^\//, '') &&
        location.hostname === this.hostname
      ) {
        var target = $(this.hash)
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']')
        if ($(window).width() <= 991) {
          $('.navbar-collapse').collapse('hide')
          if (target.length) {
            $('html, body').animate(
              {
                scrollTop: target.offset().top - 60,
              },
              1000
            )
            return false
          }
        }
        if (target.length) {
          $('html, body').animate(
            {
              scrollTop: target.offset().top - 90,
            },
            1000
          )
          return false
        }
      }
    })

    async function addToCart(productId, quantity = 1) {
      showLoadingProgress()
      await $.ajax({
        type: 'post',
        url: 'api/add-to-cart',
        data: { productId, quantity },
        success(response) {
          setTimeout(() => {
            $('.spinner-wrap').hide()
            $.notify('Add to cart successfully', {
              align: 'right',
              verticalAlign: 'bottom',
              type: 'success',
            })
            updateCart(response.cart)
          }, 800)
        },
        error(error) {
          setTimeout(() => {
            $('.spinner-wrap').hide()
            $.notify(error.responseJSON.error, {
              align: 'right',
              verticalAlign: 'top',
              type: 'danger',
            })
          }, 800)
        },
      })
    }

    function updateCart(cart) {
      $('.cart-header-price').text(
        ` ${new Intl.NumberFormat().format(cart.total)} VND`
      )

      const { items } = cart

      $('.cart-items').empty()
      $.each(items, (i, n) => {
        $('.cart-items').append(
          `<div class="cart-item">
                                  <div class="cart-item-img-wrap">
                                    <img src="/storage/${
                                      items[i].item.image
                                    }" alt="cart">
                                  </div>
                                  <div class="cart-item-descr" data-product-id=${
                                    items[i].item.id
                                  }>
                                    <h5>${items[i].item.name}</h5>
                                    <span>${
                                      items[i].quantity
                                    } X ${new Intl.NumberFormat().format(
            items[i].item.price
          )} VND</span>
                                  </div>
                                  <div class="close-btn close-cart">
                                  </div>
                                </div>`
        )
      })
    }

    function subQuantityFromCart(productId) {
      showLoadingProgress()
      $.ajax({
        type: 'post',
        url: 'api/sub-quantity',
        data: { productId },
        success(response) {
          setTimeout(() => {
            hideLoadingProgress()
            updateCart(response.cart)
          }, 800)
        },
      })
    }

    $('.more-temp').on('click', function() {
      const quantity = parseInt($('#modalQuantity').val()) + 1
      $('#modalQuantity').val(quantity)
      $('#modalQuantity').change()
    })

    $('.less-temp').on('click', function() {
      let quantity = parseInt($('#modalQuantity').val()) - 1
      quantity = quantity <= 0 ? 1 : quantity

      $('#modalQuantity').val(quantity)
      $('#modalQuantity').change()
    })

    $('.btn-add-to-cart').on('click', async function() {
      const productId = $('#modalQuantity').data('product-id')
      const quantity = $('#modalQuantity').val()
      await addToCart(productId, quantity)
      setTimeout(function() {
        $('#card-item-modal').modal('hide')
      }, 800)
    })

    $(document).on('click', '.close-cart', function() {
      const cartItem = $(this).closest('.cart-item')
      const productId = cartItem.find('.cart-item-descr').data('product-id')
      $('.spinner-wrap').show()

      $.ajax({
        url: 'api/remove-from-cart',
        type: 'post',
        data: {
          productId,
        },
        success(response) {
          setTimeout(() => {
            $('.spinner-wrap').hide()
            cartItem.remove()
            updateCart(response.cart)
          }, 800)
        },
      })
    })

    $('.remove-item').on('click', function() {
      if (confirm('Bạn có muốn xóa sản phẩm này khỏi giỏ hàng không?')) {
        const cartDesc = $(this).closest('.cart-table-descr')

        const productId = cartDesc.find('input.item-id').val()
        const quantity = cartDesc.find('input.item-quantity').val()
        const price = cartDesc.find('input.item-quantity').data('price')

        $.ajax({
          url: 'api/remove-from-cart',
          type: 'post',
          data: {
            productId,
          },
          success(response) {
            const totalPrice =
              parseInt($('.cart-total-price').data('total-price')) -
              parseInt(quantity) * parseInt(price)

            $('.cart-total-price').data('total-price', totalPrice)
            $('.cart-total-price').text(
              `${new Intl.NumberFormat().format(totalPrice)} VND`
            )

            cartDesc.remove()
            updateCart(response.cart)
          },
        })
      }
    })

    // PRODUCTS COUNT
    $('.less-n').on('click', async function() {
      const productId = $(this)
        .closest('.quantity-wrap')
        .find('.item-id')
        .val()

      var $quantity = $(this)
        .parent()
        .find('input.item-quantity')
      var count = parseInt($quantity.val()) - 1
      if (count >= 1) {
        await subQuantityFromCart(productId)

        setTimeout(() => {
          const price = $(this)
            .closest('.quantity-wrap')
            .find('.item-quantity')
            .data('price')
          const totalPrice =
            parseInt($('.cart-total-price').data('total-price')) -
            parseInt(price)
          $('.cart-total-price').data('total-price', totalPrice)
          $('.cart-total-price').text(
            `${new Intl.NumberFormat().format(totalPrice)} VND`
          )
          count = count < 1 ? 1 : count
          $quantity.val(count)
          $quantity.change()
        }, 800)
      }

      return false
    })

    $('.more-n').on('click', async function() {
      const productId = $(this)
        .closest('.quantity-wrap')
        .find('.item-id')
        .val()

      await addToCart(productId)

      setTimeout(() => {
        var $quantity = $(this)
          .parent()
          .find('input.item-quantity')
        $quantity.val(parseInt($quantity.val()) + 1)
        $quantity.change()
        const price = $(this)
          .closest('.quantity-wrap')
          .find('.item-quantity')
          .data('price')

        const totalPrice =
          parseInt($('.cart-total-price').data('total-price')) + parseInt(price)

        $('.cart-total-price').data('total-price', totalPrice)
        $('.cart-total-price').text(
          `${new Intl.NumberFormat().format(totalPrice)} VND`
        )
      }, 800)

      return false
    })

    // PAGE-SCROLL ACTIONS
    var headerFixed
    $('.scroll-top').hide()

    $(window).on('scroll', function() {
      if ($(window).scrollTop() >= 10) {
        $('.navbar').addClass('scroll-header')
        $('.scroll-top').fadeIn()
      } else {
        $('.navbar').removeClass('scroll-header')
        $('.scroll-top').fadeOut()
      }
    })
    $('.scroll-top').on('click', function() {
      $('html, body').animate({ scrollTop: 0 }, 1000)
      return false
    })

    // CLICK FUNCTIONS
    $('#search').on('click', function() {
      $('.search-form').toggleClass('on')
    })
    $('.navbar-toggler').on('click', function() {
      $('.navbar').toggleClass('header-up-bg')
    })

    $('.close-form').on('click', function() {
      $('.search-form').removeClass('on')
      return false
    })

    $('#cart').on('click', function() {
      $('.cart-popup').toggleClass('on')
      return false
    })

    $(window).on('scroll', function() {
      $('.cart-popup').removeClass('on')
      $('.search-form').removeClass('on')
    })

    //SLIDER PRODUCTS SLIDER
    if ($('.slider-products').length) {
      $('.slider-products').slick({
        infinite: true,
        slidesToShow: 4,
        nextArrow:
          '<div class="nextArrow"><i class="fa fa-angle-right"></i></div>',
        prevArrow:
          '<div class="prevArrow"><i class="fa fa-angle-left"></i></div>',
        responsive: [
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 3,
            },
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 2,
            },
          },
          {
            breakpoint: 575,
            settings: {
              infinite: true,
              slidesToShow: 1,
              nextArrow:
                '<div class="nextArrow"><i class="fa fa-angle-right"></i></div>',
              prevArrow:
                '<div class="prevArrow"><i class="fa fa-angle-left"></i></div>',
            },
          },
        ],
      })
    }

    // NEWS SLIDER
    if ($('.news-slider').length) {
      $('.news-slider').slick({
        infinite: true,
        slidesToShow: 2,
        nextArrow:
          '<div class="nextArrowNews"><i class="fa fa-angle-right"></i></div>',
        prevArrow:
          '<div class="prevArrowNews"><i class="fa fa-angle-left"></i></div>',
        responsive: [
          {
            breakpoint: 767,
            settings: {
              infinite: true,
              slidesToShow: 1,
              nextArrow:
                '<div class="nextArrowNews"><i class="fa fa-angle-right"></i></div>',
              prevArrow:
                '<div class="prevArrowNews"><i class="fa fa-angle-left"></i></div>',
            },
          },
        ],
      })
    }

    // TESTIMONIALS SLIDER
    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-nav',
      swipe: false,
      autoplay: true,
      autoplaySpeed: 10000,
    })
    $('.slider-nav').slick({
      slidesToShow: 3,
      asNavFor: '.slider-for',
      focusOnSelect: true,
      arrows: false,
      centerMode: true,
      swipe: false,
    })

    //CARD ITEM SLIDER
    $('.shop-slider-for').slick({
      swipe: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.shop-slider-nav',
    })
    $('.shop-slider-nav').slick({
      slidesToShow: 5,
      asNavFor: '.shop-slider-for',
      focusOnSelect: true,
      arrows: false,
    })

    // SHOP SINGLE LIGHTBOX
    if ($('.card-item-modal-slider-for').length) {
      $('.card-item-modal-slider-for').slickLightbox({
        src: 'src',
        itemSelector: '.slider-for-img-wrap img',
      })
    }

    $('.add-to-cart').click(function() {
      const productId = $(this).data('product-id')

      addToCart(productId)
    })

    // $('.more').click(async function() {

    // })

    // $('.less').click(function () {
    //     const input = $(this).closest('.quantity-wrap').find('.item-quantity');
    //     const quantity = input.val();

    // })

    $('.item-quantity').change(function() {
      const price = $(this).data('price')
      const quantity = $(this).val()
      $(this)
        .closest('.cart-table-descr')
        .find('.total-price')
        .text(` ${new Intl.NumberFormat().format(price * quantity)} VND`)

      if (quantity == 1) {
        $(this)
          .closest('.cart-table-descr')
          .find('.total-price').disable
      }
    })

    $('#modalQuantity').change(function() {
      const quantity = $(this).val() < 1 ? 1 : $(this).val()
      const subtotal =
        parseInt(quantity) *
        parseInt($('#modalProductPromotionPrice').data('price'))
      $('#modalSubtotal').text(
        `${new Intl.NumberFormat().format(subtotal)} VND`
      )
    })

    $('#selectOrderType').change(function() {
      console.log($(this).val())
      window.location = $(this).val()
    })

    $('.open-detail').click(async function() {
      //   $('#card-item-modal').data('product-id', )
      const productId = $(this).data('product-id')
      $('#modalSlideProductImage').empty()
      $('#modalSliderNav').empty()
      await $('.modal-slider-for').slick('removeSlide', null, null, true)
      await $('.modal-slider-nav').slick('removeSlide', null, null, true)
      await $.ajax({
        type: 'get',
        url: `/api/products/detail/${productId}`,
        success: function(response) {
          const { product } = response

          product.images.forEach(item => {
            $('#modalSlideProductImage').append(`
              <div class="card-item-modal-slider-for-item">
                    <div class="slider-for-img-wrap">
                      <img src="/storage/${item.url}" alt="slider">
                      <ul class="label">
                        <li class="label-new">new</li>
                      </ul>
                    </div>
                  </div>

                    `)
            $('#modalSliderNav').append(`
                    <div class="card-item-modal-slider-nav-item">
                      <div class="slider-nav-img-wrap">
                        <img src="/storage/${item.url}" alt="face">
                      </div>
                    </div>
                    `)
          })
          $('#modalProductName').text(product.name)
          $('#modalProductCategory').text(product.category.name)
          $('#modalProductDescription').text(product.description)
          if (product.is_sale) {
            $('#modalProductUnitPrice').show()
            $('#modalProductUnitPrice').text(product.unit_price)
            $('#modalProductPromotionPrice').text(
              `${new Intl.NumberFormat().format(product.promotion_price)} VND`
            )
            $('#modalProductPromotionPrice').data(
              'price',
              `${product.promotion_price}`
            )
          } else {
            $('#modalProductPromotionPrice').text(
              `${new Intl.NumberFormat().format(product.unit_price)} VND`
            )
            $('#modalProductPromotionPrice').data(
              'price',
              `${product.unit_price}`
            )
            $('#modalProductUnitPrice').hide()
          }
          $('#modalProductUnit').text(`/ 1 ${product.unit}`)
          $('#modalSubtotal').text(
            `${new Intl.NumberFormat().format(
              $('#modalProductPromotionPrice').data('price')
            )} VND`
          )
          $('#modalQuantity').val(1)
          $('#modalQuantity').data('productId', product.id)
          $('#modalProductQuantity').text(product.quantity)
        },
      })

      $('#card-item-modal').modal()
    })

    //CARD ITEM MODAL SLIDER
    if ($('#card-item-modal').length) {
      $('#card-item-modal').on('shown.bs.modal', function(e) {
        $('.modal-slider-for')
          .slick('getSlick')
          .refresh()
        $('.modal-slider-nav')
          .slick('getSlick')
          .refresh()
      })
      $('.modal-slider-for').slick({
        swipe: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.modal-slider-nav',
      })
      $('.modal-slider-nav').slick({
        slidesToShow: 5,
        asNavFor: '.modal-slider-for',
        focusOnSelect: true,
        arrows: false,
      })
    }

    // SHOP SHUFFLE
    if ($('#shuffle-grid').length) {
      var Shuffle = window.shuffle
      var myShuffle = new Shuffle(document.getElementById('shuffle-grid'), {
        itemSelector: '.shuffle-item',
        sizer: '.shuffle-item',
        speed: 400,
        easing: 'ease',
      })
      myShuffle.update()
      $('.shuffle-buttons-list a').on('click', function() {
        $('.shuffle-buttons-list a').removeClass('active')
        $(this).addClass('active')
        var catName = $(this).attr('data-group')
        myShuffle.filter(catName, Shuffle)
        myShuffle.update()
      })
    }

    // COUNTDOWN TIMER BIG
    if ($('.countdown_timer').length) {
      let timer = $('#timerMain').data('countdown-time')
      $('.countdown_timer').ClassyCountdown({
        theme: 'white',
        end: $.now() + timer,
        labelsOptions: {
          style:
            'display:block; font-size:10px; line-height: 1; margin-top:5px',
        },
        style: {
          element: '',
          textResponsive: 0.5,
          days: {
            gauge: {
              thickness: 0.04,
              bgColor: '#787878',
              fgColor: '#bac570',
            },
            textCSS:
              "font-family:'Lato'; font-size:10px; font-weight:900; color:#787878;",
          },
          hours: {
            gauge: {
              thickness: 0.05,
              bgColor: '#787878',
              fgColor: '#bac570',
            },
            textCSS:
              "font-family:'Lato'; font-size:10px; font-weight:900; color:#787878;",
          },
          minutes: {
            gauge: {
              thickness: 0.05,
              bgColor: '#787878',
              fgColor: '#bac570',
            },
            textCSS:
              "font-family:'Lato'; font-size:10px; font-weight:900; color:#787878;",
          },
          seconds: {
            gauge: {
              thickness: 0.05,
              bgColor: '#787878',
              fgColor: '#bac570',
            },
            textCSS:
              "font-family:'Lato'; font-size:10px; font-weight:900; color:#787878;",
          },
        },
      })
    }

    // COUNTDOWN TIMER SMALL
    if ($('.countdown_timer_sm').length) {
      $('.countdown_timer_sm').each(function() {
        $(this).ClassyCountdown(classyCountdown($(this).data('countdown-time')))
      })
    }

    function classyCountdown(time) {
      return {
        theme: 'white',
        end: $.now() + time,
        labelsOptions: {
          style: 'display:block; font-size:8px; line-height: 1; margin-top:5px',
        },
        style: {
          element: '',
          textResponsive: 0.5,
          days: {
            gauge: {
              thickness: 0.1,
              bgColor: '#787878',
              fgColor: '#bac570',
            },
            textCSS:
              "font-family:'Lato'; font-size:200px; font-weight:900; color:#787878;",
          },
          hours: {
            gauge: {
              thickness: 0.1,
              bgColor: '#787878',
              fgColor: '#bac570',
            },
            textCSS:
              "font-family:'Lato'; font-size:200px; font-weight:900; color:#787878;",
          },
          minutes: {
            gauge: {
              thickness: 0.1,
              bgColor: '#787878',
              fgColor: '#bac570',
            },
            textCSS:
              "font-family:'Lato'; font-size:200px; font-weight:900; color:#787878;",
          },
          seconds: {
            gauge: {
              thickness: 0.1,
              bgColor: '#787878',
              fgColor: '#bac570',
            },
            textCSS:
              "font-family:'Lato'; font-size:200px; font-weight:900; color:#787878;",
          },
        },
      }
    }

    // CHECKOUT STEPS
    if ($('#checkout_steps').length) {
      var form = $('#checkout_steps').show()
      form
        .steps({
          headerTag: 'h4',
          bodyTag: 'fieldset',
          transitionEffect: 'fade',
          labels: {
            cancel: 'Cancel',
            current: 'current step:',
            pagination: 'Pagination',
            finish: 'Checkout',
            next: 'Continue',
            previous: 'Back',
            loading: 'Loading ...',
          },
          onStepChanging: function(event, currentIndex, newIndex) {
            if (currentIndex > newIndex) {
              return true
            }
            if (currentIndex < newIndex) {
              form.find('.body:eq(' + newIndex + ') label.error').remove()
              form
                .find('.body:eq(' + newIndex + ') .error')
                .removeClass('error')
            }
            form.validate().settings.ignore = ':disabled,:hidden'
            const flg = form.valid()

            if (flg) {
              $('#checkoutName').text($('#inputName').val())
              $('#checkoutEmail').text($('#inputEmail').val())
              $('#checkoutPhone').text($('#inputPhone').val())
              $('#checkoutAddress').text($('#inputAddress').val())
            }

            return flg
          },
          onStepChanged: function(event, currentIndex, priorIndex) {},
          onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ':disabled'
            return form.valid()
          },
          onFinished: function(event, currentIndex) {
            showLoadingProgress()
            $('#checkout_steps').submit()
          },
        })
        .validate({
          errorPlacement: function errorPlacement(error, element) {
            element.before(error)
          },
          rules: {
            confirm: {
              equalTo: '#password-2',
            },
          },
        })
    }

    function showLoadingProgress() {
      $('.spinner-wrap').show()
    }

    function hideLoadingProgress() {
      $('.spinner-wrap').hide()
    }

    //CALENDAR
    if ($('#my-calendar').length) {
      $('#my-calendar').zabuto_calendar({
        language: 'en',
        weekstartson: 0,
        today: true,
      })
    }

    // GOOGLE MAPS
    if ($('#map').length) {
      var map
      map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 51.492548, lng: -0.1324631 },
        zoom: 15,
      })
      var marker = new google.maps.Marker({
        position: { lat: 51.494784, lng: -0.159385 },
        map: map,
        icon: 'img/map-marker.png',
      })
    }
  })
})(jQuery)
