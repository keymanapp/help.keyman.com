var loadedCount = 50;

function loaded(){

  if(typeof($) == 'undefined') {
    if(--loadedCount <= 0) return;
    window.setTimeout(loaded, 100);
    return;
  }
  $('#testimonial').click(function(){
    location.href="http://www.tavultesoft.com/testimonials.php";
  });
  
  // Email subscribe form
  $('.subscribe').click(function(){
    $('#mc-embedded-subscribe-form').submit();
  });    

  // Popup close
  $('#popup-close').click(function(){
    $('.popup').fadeOut(300);
  });
  $(document).keyup(function(e) {
    if (e.keyCode == 27) {
      $('.popup').fadeOut(300);
    }   // esc
  });
  $(document).mouseup(function (e)
  {
    var container = $('.popup');
    if (!container.is(e.target) && container.has(e.target).length === 0){
      $('.popup').fadeOut(300);
    }
  });
  
  // Scrolling top menu functionality (Non touch devices only)
  var 
    device = $(document.body).data('device'),
    scrollFix = function(e) {
      var scroller_anchor = $(".header").height();
      if ($(this).scrollTop() >= scroller_anchor && $('#top-menu1').css('position') != 'fixed'){
        $('#top-menu1').addClass('faded-menu');
        $('#top-menu-icon,#top-menu-icon2').fadeIn();
        $('#toc').addClass('fixed');
      }else if ($(this).scrollTop() < (scroller_anchor + 1) && $('#top-menu1').css('position') != 'absolute'){
        $('#top-menu1').removeClass('faded-menu');
        $('#top-menu-icon,#top-menu-icon2').hide();
        $('#toc').removeClass('fixed');
      }
    };
    
  if (device != 'Android' && device != 'iPhone' && device != 'iPad') {
    $(window).scroll(scrollFix);
  }
  
  
  // Touch device menu functionality
  if (device == 'Android' || device == 'iPhone' || device == 'iPad') {
    $('#show-phone-menu').click(function(event){
      if ($("#phone-menu").css("display") == "none") {
        $("#phone-menu").show();
      }else{
        $("body").css("overflow","auto");
        $("#phone-menu").hide();
      }	
    });
  }
  
  // Footer to bottom of page
  var link = $('.footer');
  if(link.length > 0) {
    var offset = link.offset().top;
    var diff = $(window).height() - (offset + link.height());
    if (diff > 0) {
      link.css('margin-top', diff);
    }
  }

  /*!
   * toc - jQuery Table of Contents Plugin
   * v0.3.2
   * http://projects.jga.me/toc/
   * copyright Greg Allen 2014
   * MIT License
  */
  /*!
   * smooth-scroller - Javascript lib to handle smooth scrolling
   * v0.1.2
   * https://github.com/firstandthird/smooth-scroller
   * copyright First+Third 2014
   * MIT License
  */
  //smooth-scroller.js

  (function($) {
    $.fn.smoothScroller = function(options) {
      options = $.extend({}, $.fn.smoothScroller.defaults, options);
      var el = $(this);

      $(options.scrollEl).animate({
        scrollTop: el.offset().top - $(options.scrollEl).offset().top - options.offset
      }, options.speed, options.ease, function() {
        var hash = el.attr('id');

        if(hash.length) {
          if(history.pushState) {
            history.pushState(null, null, '#' + hash);
          } else {
            document.location.hash = hash;
          }
        }

        el.trigger('smoothScrollerComplete');
      });

      return this;
    };

    $.fn.smoothScroller.defaults = {
      speed: 400,
      ease: 'swing',
      scrollEl: 'body,html',
      offset: 0
    };

    $('body').on('click', '[data-smoothscroller]', function(e) {
      e.preventDefault();
      var href = $(this).attr('href');

      if(href.indexOf('#') === 0) {
        $(href).smoothScroller();
      }
    });
  }(jQuery));

  (function($) {
  var verboseIdCache = {};
  $.fn.toc = function(options) {
    var self = this;
    var opts = $.extend({}, jQuery.fn.toc.defaults, options);

    var container = $(opts.container);
    var headings = $(opts.selectors, container);
    var headingOffsets = [];
    var activeClassName = opts.activeClass;
    
    if(opts.filter) headings = headings.filter(opts.filter);

    var scrollTo = function(e, callback) {
      if (opts.smoothScrolling && typeof opts.smoothScrolling === 'function') {
        e.preventDefault();
        var elScrollTo = $(e.target).attr('href');

        opts.smoothScrolling(elScrollTo, opts, callback);
      }
      $('li', self).removeClass(activeClassName);
      $(e.target).parent().addClass(activeClassName);
    };

    //highlight on scroll
    var timeout;
    var highlightOnScroll = function(e) {
      if (timeout) {
        clearTimeout(timeout);
      }
      timeout = setTimeout(function() {
        var top = $(window).scrollTop(),
          highlighted, closest = Number.MAX_VALUE, index = 0;
        
        for (var i = 0, c = headingOffsets.length; i < c; i++) {
          var currentClosest = Math.abs(headingOffsets[i] - top);
          if (currentClosest < closest) {
            index = i;
            closest = currentClosest;
          }
        }
        
        $('li', self).removeClass(activeClassName);
        highlighted = $('li:eq('+ index +')', self).addClass(activeClassName);
        opts.onHighlight(highlighted);      
      }, 50);
    };
    if (opts.highlightOnScroll) {
      $(window).bind('scroll', highlightOnScroll);
      highlightOnScroll();
    }

    return this.each(function() {
      //build TOC
      var el = $(this);
      var ul = $(opts.listType);

      headings.each(function(i, heading) {
        var $h = $(heading);
        headingOffsets.push($h.offset().top - opts.highlightOffset);

        var anchorName = opts.anchorName(i, heading, opts.prefix);

        //add anchor
        if(heading.id !== anchorName) {
          var anchor = $('<span/>').attr('id', anchorName).insertBefore($h);
        }

        //build TOC item
        var a = $('<a/>')
          .text(opts.headerText(i, heading, $h))
          .attr('href', '#' + anchorName)
          .bind('click', function(e) {
            $(window).unbind('scroll', highlightOnScroll);
            scrollTo(e, function() {
              $(window).bind('scroll', highlightOnScroll);
            });
            el.trigger('selected', $(this).attr('href'));
          });

        var li = $('<li/>')
          .addClass(opts.itemClass(i, heading, $h, opts.prefix))
          .append(a);

        ul.append(li);
      });
      el.html(ul);
    });
  };


  jQuery.fn.toc.defaults = {
    container: 'body',
    listType: '<ul/>',
    selectors: 'h1,h2,h3',
    smoothScrolling: function(target, options, callback) {
      $(target).smoothScroller({
        offset: options.scrollToOffset,
        speed: 100
      }).on('smoothScrollerComplete', function() {
        callback();
      });
    },
    scrollToOffset: 0,
    prefix: 'toc',
    activeClass: 'toc-active',
    onHighlight: function() {},
    highlightOnScroll: true,
    highlightOffset: 100,
    anchorName: function(i, heading, prefix) {
      if(heading.id.length) {
        return heading.id;
      }

      var candidateId = $(heading).text().replace(/[^a-z0-9]/ig, ' ').replace(/\s+/g, '-').toLowerCase();
      if (verboseIdCache[candidateId]) {
        var j = 2;
        
        while(verboseIdCache[candidateId + j]) {
          j++;
        }
        candidateId = candidateId + '-' + j;
        
      }
      verboseIdCache[candidateId] = true;

      return prefix + '-' + candidateId;
    },
    headerText: function(i, heading, $heading) {
      return $heading.text();
    },
    itemClass: function(i, heading, $heading, prefix) {
      return prefix + '-' + $heading[0].tagName.toLowerCase();
    }

  };

  })(jQuery);
  
/**
  Build Table of Contents after page content is loaded
*/
  $(function() {
    $('#toc-content').toc({
      'selectors': 'h1,h2,h3,h4',
      'container': 'article',
      'scrollToOffset' : 120,
      'filter' : function(index, element) { return $(element).parents('.tip,.note,aside').length == 0; }
    });
    
    if($('#toc-content li').length >= 2 && ['developer','keyboard'].indexOf($('body').data('section')) >= 0) {
      $('.column-right').addClass('show-toc');
    } 

    $(window).resize(function() {
      $('#toc').css('max-height', window.innerHeight-180 + 'px');
    });
    
    $('#toc').css('max-height', window.innerHeight-180 + 'px');
    scrollFix();
  });

}

loaded();

