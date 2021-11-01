$(window).click(function(e) {
  //Hide the menus if visible
  if (!e.target.closest('.btn-book')) {
  $('.btn-book').removeClass('open-menu')
  $('.material-icons-outlined').removeClass('rotate-quarter')
  }
});


$('.btn-book').click(function() {
  if ($(this).hasClass('open-menu')) {
  $(this).children('.menu-book').blur()
  $(this).removeClass('open-menu')
  $(this).find('.material-icons-outlined').removeClass('rotate-quarter')

} else {
  $(this).children('.menu-book').focus()
  $(this).addClass('open-menu')
  $(this).find('.material-icons-outlined').addClass('rotate-quarter')

}
})


$('.dropdown-book').click(function(e) {
  const value = $(e.target).attr('value') ? $(e.target).attr('value') : 'Select'

  value === 'Select' && $('.dropdown .show .menu-book').addClass('text-warning')
  value > 0 && $('.dropdown .show .menu-book').removeClass('text-warning')
  $('.dropdown .show .menu-book').val(value)
  $('.dropdown .show .menu-book').attr('value', value)
})


const currYear = moment().format('YYYY')
const currDate = moment().format('MM-DD-YYYY')

$('input[name="date"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    minDate: currDate,
    maxDate: '12/31/'+ (parseInt(currYear) + 1),
    startDate: parseInt(currDate),
    minYear: parseInt(currYear),
    maxYear: parseInt(currYear) + 1,
    isInvalidDate: function(date) {
    if (date.day() == 0 || date.day() == 6)
      return true;
    return false;
  }
  });


