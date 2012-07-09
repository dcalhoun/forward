mission = '<span class="black">This is no Sunday kind of church.</span> We are a culture of Christians that believe church is an everyday everywhere kind of thing. We are always open. We are seekers helping seekers know Jesus\' love. We believe love requires action. We believe that it\'s not enough to be merely hearers of the word. We must be doers. We are passionate about serving, because we can see the needs of people, our city &amp; the world. We are equipped because we have Jesus, and all we need is Jesus. We are passionate about change because we experience transformation through Christ. This no Sunday kind of church. We are a movement of love, and a movement of love never stops. It\'s everyday, every hour into eternity.'
mission_condensed = '<span class="black">This is no Sunday kind of church.</span> We are a culture...'

$ ->
  $('.dropdown-toggle').dropdown()
  $('.alert').alert()
  $('#wrapper-mission').on 'click', openMission
  $('#close-mission').on 'click', closeMission
  $('#featured-slides').find('img').on 'click', goToURL

  $('.carousel').carouFredSel
    auto          : false
    align         : 'center'
    circular      : true
    items:
      height      : 266
      minimum     : 1
      visible:
        min       : 1
        max       : 3
      width       : 400
    next:
      button      : '.next'
      key         : 'right'
    prev:
      button      : '.prev'
      key         : 'left'
    responsive    : true
    scroll:
      duration    : 1000
      pauseOnHover: true
      mousewheel  : true
      wipe        : true
    width         : '100%'

goToURL = () ->
  url = $(this).attr('data-url')
  window.location.href = url

openMission = (event) ->
  event.preventDefault()
  $(this).removeClass('closed').addClass('open')
  $('section#mission').animate({height: 275})
  # $('section#mission p').html(mission)
  $('#close-mission').fadeIn()

closeMission = (event) ->
  event.preventDefault()
  $('#wrapper-mission').removeClass('open').addClass('closed')
  $('section#mission').animate({height: 35})
  # $('section#mission p').html(mission_condensed)
  $(this).fadeOut()
