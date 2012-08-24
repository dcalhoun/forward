$ ->
  $('#featured-slides').find('img').on 'click', goToURL

  $('.carousel').carouFredSel
    auto          : false
    align         : 'center'
    circular      : true
    items:
      height      : 266
      minimum     : 1
      visible:
        min       : 3
        max       : 3
      width       : 400
    next:
      button      : '.next'
    prev:
      button      : '.prev'
    responsive    : true
    scroll:
      duration    : 1000
      pauseOnHover: true
    width         : '100%'

goToURL = () ->
  url = $(this).attr('data-url')
  window.location.href = url unless !url
