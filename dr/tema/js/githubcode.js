(function() {
  'use strict';
  $(function() {
    var GIST_HOST, code, elements, gists, loader, stylesheets;
    GIST_HOST = 'https://gist.github.com';
    elements = $('div[data-gist]');
    gists = {};
    code = [];
    stylesheets = [];
    loader = function(url) {
      var link;
      link = document.createElement('link');
      link.type = 'text/css';
      link.rel = 'stylesheet';
      link.href = url;
      document.getElementsByTagName('head')[0].appendChild(link);
    };
    elements.addClass('loading');
    elements.each(function(index, element) {
      var gist;
      element = $(element);
      gist = element.data('gist');
      if (gists[gist] == null) {
        gists[gist] = {
          targets: []
        };
      }
      return gists[gist].targets.push(element);
    });
    return $.each(gists, function(id, data) {
      return $.getJSON("" + GIST_HOST + "/" + id + ".json?callback=?", function(data) {
        var div, gist, stylesheet;
        gist = gists[id];
        gist.data = data;
        stylesheet = gist.data.stylesheet;
        if (stylesheets.indexOf(stylesheet) < 0) {
          stylesheets.push(stylesheet);
          loader(stylesheet);
        }
        div = gist.data.div;
        gist.files = $(div).find('.gist-file');
        gist.outer = $(div).first().html('');
        return $(gist.targets).each(function(index, target) {
          var file, inner, outer;
          file = target.data('gist-file');
          if (file) {
            outer = gist.outer.clone();
            inner = "<div class=\"gist-file\">" + $(gist.files.get(gist.data.files.indexOf(file))).html() + "</div>";
            outer.html(inner);
          } else {
            outer = $(div);
          }
          outer.hide();
          return target.fadeOut('fast', function() {
            $(this).replaceWith(outer);
            return outer.fadeIn();
          });
        });
      });
    });
  });

}).call(this);
