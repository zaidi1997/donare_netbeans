 <div data-role="footer" data-position="fixed" data-tap-toggle="false">
    <div data-role="navbar">
        <ul>
            <li>
                <a href="index.php" data-name="page_main" rel="external" 
                  class="ui-alt-icon ui-nodisc-icon ui-icon-home ui-btn-icon-top" 
                  >Home</a>
            </li>
            
            <li>
                <a href="donate.php" data-name="donate" rel="external" 
                  class="ui-alt-icon ui-nodisc-icon ui-icon-donate ui-btn-icon-top"
                  >Donate</a>
            </li>
            
            <li>
                <a href="aboutus.php" data-name="aboutus" rel="external" 
                  class="ui-alt-icon ui-nodisc-icon ui-icon-about ui-btn-icon-top"
                  >About Us</a>
            </li>
        
        </ul>
    </div>
</div>

<script>
    $(document).on("pageshow", function() {
        $("[data-role='footer']").toolbar({
            theme: "b"
        });
    
        $("[data-role='navbar'] a").each(function () {
            if ($(this).attr('data-name') === $.mobile.activePage.attr('id')) 
            {
                $(this).addClass("ui-btn-active");
            } else {
                $(this).removeClass("ui-btn-active");
            }
        });
    });

</script>