// DataRar v3.0 | datarar.com
var base = 'http://datarar.com';

// tab menü
$(document).ready(function() {
    //Default Action 1
    $(".tab_content").hide(); //Hide all content
    $("ul.tabs li:first").addClass("active").show(); //Activate first tab
    $(".tab_content:first").show(); //Show first tab content

    //On Click Event 1
    $("ul.tabs li").click(function() {
        $("ul.tabs li").removeClass("active"); //Remove any "active" class
        $(this).addClass("active"); //Add "active" class to selected tab
        $(".tab_content").hide(); //Hide all tab content
        var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
        $(activeTab).fadeIn(); //Fade in the active content
        return false;
    });
});

// üst menü - http://micjamking.github.io/Menutron/
(function(a){a.fn.menutron=function(b){var c={maxScreenWidth:700,menuTitle:"Seçiniz..."};var b=a.extend(c,b);return this.each(function(){var i=a(this).children();var f=a("<select>").css("display","none");var h=a("<optgroup>").css("display","none");g();function g(){e();d();j()}function e(){if(a(window).width()<b.maxScreenWidth){a(f).css("display","inline-block");a(i).css("display","none")}else{a(f).css("display","none");a(i).css("display","block")}}function d(){a(i).children().each(function(){if(a(this).get(0).tagName!=="DT"){if(a(this).find("ul,ol,dl").length){a(h).attr("label",a(this).children(":first").text());var l=a("<option>").text(a(this).children(":first").text());var m=a(this).children("a").attr("href");a(l).attr("value",m);a(l).appendTo(h);var n=a(this).children().not(":first");a(n).children().each(function(){var o=a("<option>").text(a(this).text());var p=a(this).children("a").attr("href");a(o).attr("value",p);a(o).appendTo(h)});console.log(h);a(h).appendTo(f)}else{var l=a("<option>").text(a(this).text());var m=a(this).children("a").attr("href");a(l).attr("value",m);a(l).appendTo(f)}}});var k='<option selected="selected" value>'+b.menuTitle+"</option>";a(f).prepend(k);f.appendTo(a(i).parent());f.change(function(){if(a(this).val()!=""){window.location.href=a(this).val()}})}function j(){a(window).resize(function(){e()})}})}})(jQuery);
$(function(){
    $(".menunav").menutron();
});

//ading github code
(function(){"use strict";$(function(){var t,e,a,i,n,s;return t="https://gist.github.com",a=$("div[data-gist]"),i={},e=[],s=[],n=function(t){var e;e=document.createElement("link"),e.type="text/css",e.rel="stylesheet",e.href=t,document.getElementsByTagName("head")[0].appendChild(e)},a.addClass("loading"),a.each(function(t,e){var a;return e=$(e),a=e.data("gist"),null==i[a]&&(i[a]={targets:[]}),i[a].targets.push(e)}),$.each(i,function(e){return $.getJSON(""+t+"/"+e+".json?callback=?",function(t){var a,r,l;return r=i[e],r.data=t,l=r.data.stylesheet,s.indexOf(l)<0&&(s.push(l),n(l)),a=r.data.div,r.files=$(a).find(".gist-file"),r.outer=$(a).first().html(""),$(r.targets).each(function(t,e){var i,n,s;return i=e.data("gist-file"),i?(s=r.outer.clone(),n='<div class="gist-file">'+$(r.files.get(r.data.files.indexOf(i))).html()+"</div>",s.html(n)):s=$(a),s.hide(),e.fadeOut("fast",function(){return $(this).replaceWith(s),s.fadeIn()})})})})})}).call(this);

// yeni sayfa
$('body').on('click', 'a[target^=_blank], a[rel^=external], area[target^=_blank]', function(e) {
    window.open($(this).attr('href'));
    return false;
});

// sayfa yenile
$('body').on('click', 'a[target^=sayfayenile], a[rel^=appendix], area[target^=sayfayenile]', function(e) {
    window.location= $(this).attr('href');
    return false;
});

// tepe sayfa
$('body').on('click', 'a[class^=dJAX_internal]', function(e) {
    $(window).scrollTop(0);
    e.preventDefault();
});

// djax
jQuery(document).ready(function($) {
    $('body').djax('.updatable', ['go/?url=', 'dr/', 'h/', '?rastgele', 'sitemap', '#tab', 'wp-admin', 'wp-login']);
});

// yukleyici
$.ajaxSetup({
    beforeSend: function (XMLHttpRequest) {
        $("#yukleyici").html('<i class="fa fa-refresh fa-spin"></i>');
    },
    complete: function (XMLHttpRequest, textStatus) {
        $("#yukleyici").html('');
    }
});

/*
 // https://github.com/beezee/djax
// @version v0.122
// https://gist.github.com/Hadryan/6045111

(function ($, exports) {
    'use strict';

    $.fn.djax = function (selector, exceptions, replaceBlockWithFunc) {

        // If browser doesn't support pushState, abort now
        if (!history.pushState) {
            return $(this);
        }

        var self = this,
            blockSelector = selector,
            excludes = (exceptions && exceptions.length) ? exceptions : [],
            replaceBlockWith = (replaceBlockWithFunc) ? replaceBlockWithFunc : $.fn.replaceWith,
            djaxing = false;

        // Ensure that the history is correct when going from 2nd page to 1st
        window.history.replaceState(
            {
                'url' : window.location.href,
                'title' : $('title').text()
            },
            $('title').text(),
            window.location.href
        );

        self.clearDjaxing = function() {
            self.djaxing = false;
        }

        // Exclude the link exceptions
        self.attachClick = function (element, event) {

            var link = $(element),
                exception = false;

            $.each(excludes, function (index, exclusion) {
                if (link.attr('href').indexOf(exclusion) !== -1) {
                    exception = true;
                }
                if (window.location.href.indexOf(exclusion) !== -1) {
                    exception = true;
                }
            });

            // If the link is one of the exceptions, return early so that
            // the link can be clicked and a full page load as normal
            if (exception) {
                return $(element);
            }

            // From this point on, we handle the behaviour
            event.preventDefault();

            // If we're already doing djaxing, return now and silently fail
            if (self.djaxing) {
                setTimeout(self.clearDjaxing, 1000);
                return $(element);
            }

            $(window).trigger('djaxClick', [element]);
            self.reqUrl = link.attr('href');
            self.triggered = false;
            self.navigate(link.attr('href'), true);
        };

        // Handle the navigation
        self.navigate = function (url, add) {

            var blocks = $(blockSelector);

            self.djaxing = true;

            // Get the new page
            $(window).trigger(
                'djaxLoading',
                [{
                    'url' : url
                }]
            );

            var replaceBlocks = function (response) {
                if (url !== self.reqUrl) {
                    self.navigate(self.reqUrl, false);
                    return true;
                }

                var result = $(response),
                    newBlocks = $(result).find(blockSelector);

                if (add) {
                    window.history.pushState(
                        {
                            'url' : url,
                            'title' : $(result).filter('title').text()
                        },
                        $(result).filter('title').text(),
                        url
                    );
                }

                // Set page title as new page title
                $('title').text($(result).filter('title').text());

                //Remove element not done by other removes
                $('.datepicker').remove();

                var newStyle = $(result).filter('style'+blockSelector).text();
                if($('style'+blockSelector).length)
                {
                    $('style'+blockSelector).remove();
                }

                //Get all styles to add to the new page
                var head = document.getElementsByTagName('head')[0];
                var newStyles = $(result).filter('style'+blockSelector);
                $.each(newStyles, function () {
                    var newStyle = $(this).text();
                    var style = document.createElement('style');

                    style.type = 'text/css';
                    style.className = blockSelector.replace('.', '');
                    if (style.styleSheet){
                        style.styleSheet.cssText = newStyle;
                    } else {
                        style.appendChild(document.createTextNode(newStyle));
                    }

                    head.appendChild(style);
                });

                // Loop through each block and find new page equivalent
                blocks.each(function () {

                    var id = '#' + $(this).attr('id'),
                        newBlock = newBlocks.filter(id),
                        block = $(this);
                    //console.log(newBlock.html());
                    //console.log(block.html());

                    $('a', newBlock).not('.no-djax').filter(function () {
                        return this.hostname === location.hostname;
                    }).addClass('dJAX_internal').on('click', function (event) {
                        return self.attachClick(this, event);
                    });

                    if (newBlock.length) {
                        if (block.html() !== newBlock.html()) {
                            replaceBlockWith.call(block, newBlock);
                        }
                    } else {
                        block.remove();
                    }

                });

                // Loop through new page blocks and add in as needed
                $.each(newBlocks, function () {

                    var newBlock = $(this),
                        id = '#' + $(this).attr('id'),
                        $previousSibling;
                    //console.log(newBlocks.html());
                    //console.log(newBlock.html());

                    // If there is a new page block without an equivalent block
                    // in the old page, we need to find out where to insert it
                    if (!$(id).length) {

                        // Find the previous sibling
                        $previousSibling = $(result).find(id).prev();

                        if ($previousSibling.length) {
                            // Insert after the previous element
                            newBlock.insertAfter('#' + $previousSibling.attr('id'));
                        } else {
                            // There's no previous sibling, so prepend to parent instead
                            newBlock.prependTo('#' + newBlock.parent().attr('id'));
                        }
                    }

                    // Only add a class to internal links
                    $('a', newBlock).not('.no-djax').filter(function () {
                        return this.hostname === location.hostname;
                    }).addClass('dJAX_internal').on('click', function (event) {
                        return self.attachClick(this, event);
                    });

                });

                var oldScripts = $('script.no-djax');
                $.each(oldScripts, function () {
                    $(this).remove();
                });

                //Get all scripts to add to the new page
                var newScripts = $(result).filter('script.no-djax');
                $.each(newScripts, function () {
                    var newScript = $(this).text();

                    //console.log('error', newScript); //Debugging yo
                    //Create new script element and add it to the DOM corrently, that way it is executed :D
                    var script = document.createElement("script");
                    script.type = "text/javascript";
                    script.text = newScript; // use this for inline script
                    script.className = "no-djax";
                    var updateId = blockSelector.replace('#', '');
                    document.getElementById(updateId).appendChild(script);
                });

                // Trigger djaxLoad event as a pseudo ready()
                if (!self.triggered) {
                    $(window).trigger(
                        'djaxLoad',
                        [{
                            'url' : url,
                            'title' : $(result).filter('title').text(),
                            'response' : response
                        }]
                    );
                    self.triggered = true;
                    self.djaxing = false;
                }
            };
            $.get(url, function (response) {
                replaceBlocks(response);
            }).error(function (response) {
                // handle error
                console.log('error', response);
                replaceBlocks(response['responseText']);
            });
        }; // End self.navigate

        // Only add a class to internal links
        $(this).find('a').not('.no-djax').filter(function () {
            return this.hostname === location.hostname;
        }).addClass('dJAX_internal').on('click', function (event) {
            return self.attachClick(this, event);
        });

        // On new page load
        $(window).bind('popstate', function (event) {
            self.triggered = false;
            if (event.originalEvent.state) {
                self.reqUrl = event.originalEvent.state.url;
                self.navigate(event.originalEvent.state.url, false);
            }
        });

    };

}(jQuery, window));
*/


