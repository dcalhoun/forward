$ ->
  # $('#featured-slides').find('img').on 'click', goToURL

  $('.carousel').carouFredSel
    # debug         : true
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
  window.location.href = url

# openMission = (event) ->
#   event.preventDefault()
#   $(this).removeClass('closed').addClass('open')
#   $('section#mission').animate({height: 275})
#   # $('section#mission p').html(mission)
#   $('#close-mission').fadeIn()

# closeMission = (event) ->
#   event.preventDefault()
#   $('#wrapper-mission').removeClass('open').addClass('closed')
#   $('section#mission').animate({height: 35})
#   # $('section#mission p').html(mission_condensed)
#   $(this).fadeOut()
