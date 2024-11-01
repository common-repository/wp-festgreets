<?php
    function iq_add_help_menu(){
        $parent_slug    = 'edit.php?post_type=festgreets';
        $page_title     = 'FestGreets usage Guide';
        $menu_title     = 'Help';
        $capability     =  'manage_options';
        $menu_slug      = 'help';
        $function       = 'iq_add_help_menu_callback';
        add_submenu_page($parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function);
    }
    add_action( 'admin_menu' , 'iq_add_help_menu' );

    function iq_add_help_menu_callback(){
         ?>
            <style>
                pre{
                    display:inline-block;
                    width:500px;
                    margin-left:100px;
                    text-align:left;
                    border:1px solid rgba(0,0,0,.4);
                }
                span.plugin-credits{
                    float:right;
                    margin-right:30px;
                    margin-top:40px;
                    font-weight:bold;
                    padding:5px;
                    border-top:2px solid green;
                }
            </style>
            <div class="wrap">
                <h3>Help</h3>
                <p>
                   <b style="color:red;">This is the guide where you'll be explained about "<span style="color:green;">How to Add your FestGreet</span>".</b>
                   <br />
                   <ol>
                        <li> It's pretty simple, just go to "Add New FestGreet".</li>
                        <li> Then, write your Festival Name in the Title Box.</li>
                        <li> Add a FestGreet Cover Image, it should be a GIF image so that your website will come up with Animative Greeting!</li>
                        <li> Then, just add the "Starting Date" and "Ending Date" in the "Session Details" box. Starting Date tells about when the Animation would Start and the Ending Date determines about when will the animation disappear or when will the festival get over!</li>
                   </ol>
                   <b>Most Final Thing...</b>
                   <p>
                   Then you have to add a shortcode " <span style="color:blue;">[showSession width="500" height="500"]</span> " wherever you want the festival Animation.
                   <br />
                   For eg. <b>If you want in it Sidebar section</b>, 
                   <br />
                   Go to <b>Appearance > Customize > Widgets > Sidebar > Text</b>. In that textbox, just write that Shortcode and save your work!
                   <br />
                   <br />
                   <b>If you want your animation to appear in a Post/Page,</b>
                   <br />
                   Just edit or add a Post/Page and write that Shortcode wherever you want to show the animation.
                   <br />
                   <br />
                   <b>If you want your animation to appear anywhere else,</b>
                   <br />
                   Go to <b>Appearance > Editor</b>. Then, enter to the file you want to edit, find a good placement, and then add the code given below:
                   <br />
                   <pre>
echo do_shortcode( '[showSession width="500" height="500"]' ); 
                   </pre>
                   </p>
                </p>
            </div>
            <h4>Want Support? Feel free to write us an email at <a href="mailto:info@iqubex.com" target="_blank"><span style="color:green;font-weight:bold;">info@iqubex.com</span></a>!</h4>
            We would Answer you with whole Explaination and Screenshots within 48 hours. <b>We can also help you with giving Pro Look to your website by adding animation at right place.</b>
            <br />
            <span class="plugin-credits">
                Plugin developed by <a href="http://www.iqubex.com/services">IQubex Technologies</a>.
            <span>
        <?php
        ;
    }
?>