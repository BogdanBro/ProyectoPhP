$(document).ready(function () {

    
    $.fn.togglepanels = function() {
        return this.each(function() {
          $(this).addClass("ui-accordion ui-accordion-icons ui-widget ui-helper-reset")
            .find("h3")
            .addClass("ui-accordion-header ui-helper-reset ui-state-default ui-corner-top ui-corner-bottom")
            .hover(function() {
              $(this).toggleClass("ui-state-hover");
            })
            .prepend('<span class="ui-icon ui-icon-triangle-1-e"></span>')
            .click(function() {
              $(this)
                .toggleClass("ui-accordion-header-active ui-state-active ui-state-default ui-corner-bottom")
                .find("> .ui-icon").toggleClass("ui-icon-triangle-1-e ui-icon-triangle-1-s").end()
                .next().slideToggle();
              return false;
            })
            .next()
            .addClass("ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom")
            .hide();
        });
      };
        
      $("#accordion").togglepanels();

      

   
                $(".post div").mouseover(function(){
                    console.log("prueba");
                    $(this).stop(true)
                    $(this).css("overflow: hidden;");
                    $(this).animate({
                                    width: "36%"},160);
                    });

                    $(".post div").mouseout(function(){
                        $(this).stop(true)
                        $(this).css("overflow: hidden;");
                        $(this).animate({
                                        
                                        width: "31%"},160);
                        });


                        $(".logo").click(function(){

                          window.location.href="/";

                        });

                    })