<style>
    body{

    }
</style>
<br><Br>
<div class="col-sm-2">
                        <h4>Main Navigation</h4>
                        <!--    <div class="rst-slider">-->
                        <!--        <span class="price-min">$0</span>-->
                        <!--        <input type="text" class="slider-input" value="0" data-slider-text-after="$" data-slider-min="0" data-slider-max="1200" data-slider-step="1" />-->
                        <!--        <span class="price-max">$1200</span>-->
                        <!--    </div>-->
                        <hr />
                        <!--    <h4>Discount</h4>-->
                        <!--    <div class="rst-slider">-->
                        <!--        <span class="price-min">50%</span>-->
                        <!--        <input type="text" class="slider-input" value="0" data-slider-text-before="%" data-slider-min="50" data-slider-max="90" data-slider-step="1" />-->
                        <!--        <span class="price-max">90%</span>-->
                        <!--    </div>-->
                        <!--    <hr />-->
                        <!--    <h4>Categories</h4>-->
                        <ul class="list-category">
<!--                            <li class="" id="das"><a id="dash" data-content="" rel="popover" data-placement="bottom" data-original-title="This is your Dashboard" data-trigger="hover"  href="--><?php //echo base_url();?><!--index.php/consumer/dashboard">Dashboard</a></li>-->
                            <li id="popoverDat" class=""><a id="popoverData" data-content="" rel="popover" data-placement="bottom" data-original-title="This is your Profile" data-trigger="hover" href="<?php echo base_url();?>user">Profile</a></li>
                            <!--<li id="orderGe" class=""><a  id="orderGet"rel="popover" data-placement="bottom" data-original-title="These are the orders you get from other consumers" data-trigger="hover" href="<?php echo base_url();?>index.php/consumer/pastOrder">Orders Taken </a></li>
                            <li class=""  id="orderBooke" ><a  id="orderBooked" rel="popover" data-placement="bottom" data-original-title="These are the orders you booked for yourself" data-trigger="hover"href="<?php echo base_url();?>index.php/consumer/presentOrder">Orders Given</a></li>
                            <li class=""  id="orderCusto" ><a  id="orderCustom" rel="popover" data-placement="bottom" data-original-title="These are the custom orders you booked for yourself" data-trigger="hover"href="<?php echo base_url();?>index.php/consumer/customOrders">Custom Orders</a></li>
                            <li class="" id="item"><a id="items" rel="popover" data-placement="bottom" data-original-title="These are the items you provide" data-trigger="hover"href="<?php echo base_url();?>index.php/consumer/getAllItems">Items</a></li>-->
                            <!--<li id="inbo" class=""><a id="inbox" rel="popover" data-placement="bottom" data-original-title="This is the place where you can chat with other consumers" data-trigger="hover"href="<?php echo base_url();?>index.php/user/inboxUser">Inbox</a></li>-->
                            <!--<li class=""  id="repo"><a  id="rep" rel="popover" data-placement="bottom" data-original-title="Reports" data-trigger="hover"href="<?php echo base_url();?>index.php/consumer/reportsShow">Reports</a></li>
                            <li class=""  id="blo"><a  id="blog" rel="popover" data-placement="bottom" data-original-title="Blogs" data-trigger="hover"href="<?php echo base_url();?>index.php/consumer/writeblog">Blog</a></li>
                            <li class=""  id="fe"><a  id="fea" rel="popover" data-placement="bottom" data-original-title="Featured Items" data-trigger="hover"href="<?php echo base_url();?>index.php/consumer/addfeatured">Add Featured</a></li>
                            <li class=""  id="fav"><a  id="favo" rel="popover" data-placement="bottom" data-original-title="Favourite Items" data-trigger="hover"href="<?php echo base_url();?>index.php/consumer/favouritesShow">Favourites</a></li>
                            <li id="C" class=""><a id="Cp"  rel="popover" data-placement="bottom" data-original-title="Change Password" data-trigger="hover" href="<?php echo base_url();?>index.php/consumer/change">Change Password</a></li>-->

                            <li id="order" class=""><a id="Lg" rel="popover" data-placement="bottom" data-original-title="Previous Orders" data-trigger="hover" href="<?php echo base_url();?>user/previousOrders">Previous Orders</a></li>


                            <li id="change" class=""><a id="Lg" rel="popover" data-placement="bottom" data-original-title="ChangePassword" data-trigger="hover" href="<?php echo base_url();?>user/changePassword">Change Password</a></li>


                            <li id="L" class=""><a id="Lg" rel="popover" data-placement="bottom" data-original-title="Log Out" data-trigger="hover" href="<?php echo base_url();?>index.php/user/logout">Logout</a></li>


                        </ul>
                        
                    </div>

                    <script type="text/javascript">

                    var v = '<?php echo $this->session->userdata('nav2'); ?>';
                    //alert(v);

                        if(v == "dashboard") {
       //alert("Alert: !");
       var d=document.getElementById("das");
        d.className +=" active";
}
if(v == "profileUser") {
       //alert("Alert: !");
       var d=document.getElementById("popoverDat");
        d.className +=" active";
}
if(v == "pastOrder") {
       //alert("Alert: !");
       var d=document.getElementById("orderGe");
        d.className +=" active";
}
if(v == "presentOrder") {
       //alert("Alert: !");
       var d=document.getElementById("orderBooke");
        d.className +=" active";
}

if(v == "customOrders") {
       //alert("Alert: !");
       var d=document.getElementById("orderCusto");
        d.className +=" active";
}

if(v == "getAllItems") {
       //alert("Alert: !");
       var d=document.getElementById("item");
        d.className +=" active";
}

if(v == "inboxUser") {
       //alert("Alert: !");
       var d=document.getElementById("inbo");
        d.className +=" active";
}

if(v == "favouritesShow") {
       //alert("Alert: !");
       var d=document.getElementById("fav");
        d.className +=" active";
}

if(v == "change") {
       //alert("Alert: !");
       var d=document.getElementById("C");
        d.className +=" active";
}

if(v == "logout") {
       //alert("Alert: !");
       var d=document.getElementById("L");
        d.className +=" active";
}

                    </script>