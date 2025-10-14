var loadedCount = 50;

function loaded(){

  if(typeof($) == 'undefined') {
    if(--loadedCount <= 0) return;
    window.setTimeout(loaded, 100);
    return;
  }

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
  var offset = link.offset().top;
  var diff = $(window).height() - (offset + link.height());
  if (diff > 0) {
    link.css('margin-top',diff);
  }

  function loadKeymanWebKeyboard(keyboardName) {
    // Insert keyboard into osk div

    // Ensure that the Web engine itself fetches the cloud metadata about the keyboard
    // so that the OSK knows about the fonts.
    keyman.addKeyboards(keyboardName).then(function () {
      // Ensure that the keyboard has been fetched.
      //
      // Note:  INTERNAL API - not documented.  This loads the keyboard (given
      // the `addKeyboards` call), but does not _activate_ it.
      return keyman.keyboardRequisitioner.cache.fetchKeyboard(keyboardName);
    }).then(function () {
      var addKeyboards = function(element, platform) {
        var
          osk = $(element),
          states = osk.data('states'),
          addKeyboard = function(name, platform, title) {

            // TODO: These hacks are pretty awful
            keyman.getOskWidth = function() {
              return platform == 'desktop' ? 960 :
                      platform == 'phone' ? 520 : 720;
            };

            keyman.getOskHeight = function() {
              return platform == 'desktop' ? 320 :
                      platform == 'phone' ? 240 : 360;
            };

            var note = null;

            var kbd = keyman.BuildVisualKeyboard(keyboardName, 1, platform, name);
            if (kbd) {
              osk.append('<h3>'+title+'</h3>', kbd);
              if(note) osk.append(note);
            }

            keyman.getOskWidth = keyman.getOskHeight = null;
          },
          toTitleCase = function(str) {
            return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
          };

        if(osk.length == 0) return; // no place for it
        if(!states) states='default shift';
        states=states.split(' ');
        var title = platform == 'desktop' ? {
          'default':'Unshifted',
          'leftalt':'Left Alt',
          'rightalt':'AltGr (Right Alt)',
          'alt':'Alt',
          'leftctrl':'Left Control',
          'rightctrl':'Right Control',
          'ctrl':'Control',
          'ctrl-alt':'Control+Alt',
          'leftctrl-leftalt':'Left Control+Left Alt',
          'rightctrl-rightalt':'Right Control+Right Alt',
          'leftctrl-leftalt-shift':'Left Control+Left Alt+Shift',
          'rightctrl-rightalt-shift':'Right Control+Right Alt+Shift',
          'shift':'Shifted',
          'shift-alt':'Alt+Shift',
          'shift-ctrl':'Control+Shift',
          'shift-ctrl-alt':'Control+Alt+Shift',
          'leftalt-shift':'Left Alt+Shift',
          'rightalt-shift':'AltGr (Right Alt)+Shift',
          'leftctrl-shift':'Left Control+Shift',
          'rightctrl-shift':'Right Control+Shift'
        } : null;
        for(var i in states) {
          if(!title) {
            addKeyboard(states[i], platform, toTitleCase(states[i]));
          } else if(title[states[i]]) {
            addKeyboard(states[i], platform, title[states[i]]);
          }
        }
      };

      addKeyboards('#osk', 'desktop');
      addKeyboards('#osk-phone', 'phone');
      addKeyboards('#osk-tablet', 'tablet');
    }).catch(function(e) {
      console.error(e);
    });
    //var keyboardPath = keyman.util.getOption('keyboards') + keyboardName + '/' + keyboardVersion + '/' + keyboardName + '-' + keyboardVersion + '.js';
  }

  (function() {
    var fontFamily = null, fontSource = null;
    var url = location.pathname.split('/');
    var keyboardName = url[url.length-3]; //, keyboardVersion = url[url.length-2];

    // This retrieves font info from latest version of keyboard; we don't currently have that available for earlier versions. No worries.
    // TODO: this would be better integrated into using KeymanWeb to retrieve this information directly. However, it will do for now.

    function getFirstTTF(a) {
      var ttfPattern = /\.(ttf|otf|woff)$/i;
      if(typeof a == 'string') {
        return a.match(ttfPattern) ? a : null;
      }

      // a is an array
      for(var o in a) {
        if(a[o].match(ttfPattern)) return a[o];
      }
      return null;
    }

    // Even with KMW loading the fonts for itself, we wish for them to be available on all page elements,
    // not just in Web's OSK.
    // TODO: consider using the retrieved stub to get that in future
    $.ajax({
      url: keymanHosts.api + '/keyboard/' + keyboardName,
      success:function(data) {
        if(typeof data != 'object') return;

        if(data.platformSupport?.desktopWeb || data.platformSupport?.mobileWeb) {
          loadKeymanWebKeyboard(keyboardName);
        }

        for(var lang in data.languages) {
          if(data.languages[lang].font) {
            // pick the first font
            fontFamily = data.languages[lang].font.family;
            fontSource = getFirstTTF(data.languages[lang].font.source);
            if(!fontSource) continue;
            var fontType = fontSource.match(/\.woff$/i) ? 'woff' : 'truetype';
            // Add the font information
            $('head').append($(
"<style>\n"+
"@font-face {\n"+
"	font-family:\""+fontFamily+"\";\n"+
"	font-style:normal;\n"+
"	font-weight:normal;\n"+
"	src:url('" + keymanHosts.s + "/font/deploy/"+fontSource+"') format('"+fontType+"');\n"+
"}\n"+
".kmw-key-text { font-family: \""+fontFamily+"\"; }\n"+
"</style>"
));
            return;
          }
        }
      }
    });
  })();

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
      'scrollToOffset' : 40,
      'filter' : function(index, element) { return $(element).parents('.tip,.note').length == 0; }
    });

    if($('#toc-content li').length >= 2 && ['developer','keyboard'].indexOf($('body').data('section')) >= 0) {
      $('.column-right').addClass('show-toc');
    }

    $(window).resize(function() {
      $('#toc').css('max-height', window.innerHeight-180 + 'px');
    });

    $('#toc').css('max-height', window.innerHeight-180 + 'px');
    scrollFix();

    // If the location hash is a #toc- anchor, the browser won't scroll it
    // into view on page load, because the anchor is defined too late. So let's
    // scroll that anchor into view
    if(location.hash.match(/#toc-[a-z0-9_-]+$/i)) {
      $('a[href="'+location.hash+'"]').click();
    }
  });

}

loaded();

