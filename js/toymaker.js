
$(function() {
  smoothScroll(1000);
  projectsBelt();
  articleBelt();
  loadProjectContent();
});

function smoothScroll (duration) {
  $('a[href^="#"]').on('click', function(event) {
    var target = $( $(this).attr('href') );
    if( target.length ) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, duration);
    }
  });
}

function projectsBelt() {
  $('.thumb-unit').on('click', function(event) {
    var $this = $(this),
        $project = '.project-' + $this.attr('class').split(' ')[1].split('-').pop();
    $($project).show();
    $('.thumb-container').hide();
    $('.projects-container').show();
    $('html, body').animate({
      scrollTop: $('#projects').offset().top
    }, 1000);

  });
  $('.projects-return').on('click', function(event) {
    $('.thumb-container').show();
    $('.projects-container').hide();
    $('*[class^="project-"]').hide();
  });
}

function articleBelt() {
  $('.article-unit').on('click', function(event) {
    var $this = $(this),
        $article = '.' + $this.attr('class').split(' ')[1];
    $('.article-unit:not('+$article+')').hide();
    $($article).css({'width':'100%','max-width':'1000px'});
    $('.articles-return').show();
    $('html, body').animate({
      scrollTop: $('#articles').offset().top
    }, 1000);
  });
  $('.articles-return').on('click', function(event) {
    $('.articles-return').hide();
    $('.article-unit').css({'width':'270px','max-width':'270px'});
    $('.article-unit').show(200);
  });
}

function loadProjectContent() {

    $.ajaxSetup({cache:false});
    $(".thumb-unit").click(function(){
        var post_link = $(this).attr("href");

        $("#project-content").html("Loading...");
        $("#project-content").load(post_link);
    return false;
    });

}
