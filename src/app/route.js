import $ from 'jquery';

export const route = () => {
  console.log('dd');
  $('.circle-click').on('click', () => {
    // $('.overlay').fadeIn();
    $('.popup')
      .empty()
      .append('<h2>Voici ma popup</h2><p>Elle apparait et disparait!</p>')
      .css('display', 'block');
  });

  $('.popup').on('click', () => {
    $('.popup').fadeOut();
  });
};
