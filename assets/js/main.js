window.onresize = navigationResize;
    navigationResize();

    function navigationResize() {
      $('#employeestabs li.more').before($('#overflow > li'));
      var $navItemMore = $('#employeestabs > li.more'),
          $navItems = $('#employeestabs > li:not(.more)'),
          navItemMoreWidth = navItemWidth = $navItemMore.width(),
          windowWidth = $(window).width();

      $navItems.each(function() {
        navItemWidth += $(this).width();
      });

      navItemWidth > windowWidth ? $navItemMore.show() : $navItemMore.hide();

      while (navItemWidth > windowWidth) {
        navItemWidth -= $navItems.last().width();
        $navItems.last().prependTo('#overflow');
        $navItems.splice(-1, 1);
      }

      var navItemMoreLeft = $('#employeestabs .more').offset().left,
          navOverflowWidth = $('#overflow').width(),
          offset = navItemMoreLeft + navItemMoreWidth - navOverflowWidth;

      $('#overflow').css({
        'left': offset
      });
    }

    function showOverflow() {
      document.getElementById("overflow").classList.toggle("show");
    }

    // Load content for each link manually
    $('#employeestabs a').click(function(e) {
      e.preventDefault();
      var url = $(this).attr('href');
      
      // Highlight the selected tab
      $('#employeestabs a').removeClass('selected');
      $(this).addClass('selected');

      // Load the content into the container
      $('#employeesdivcontainer').load(url, function(response, status, xhr) {
        if (status === "error") {
          $('#employeesdivcontainer').html("<p>Sorry, an error occurred while loading the page.</p>");
        }
      });
    });

    // Optionally, trigger the first link to load content on page load
    $('#employeestabs a').first().trigger('click');