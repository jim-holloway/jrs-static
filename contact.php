<?php include('includes/header.php'); ?>
        <div id="contact">
            <h1>Contact</h1>
            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus.</p>
            <h2 class="push-left">Have Questions? Get in touch!</h2>
            <form id="contact_form" action="" method="post">
                 <p>
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" required>
                 </p>
                 <p>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" multiple placeholder="abc@xyz.com"  required>
                 </p>
                 <p>
                    <label for="comments" >Details:</label>
                    <textarea id="comments" name="comments"  placeholder="We would like to hear from you" required></textarea>
                 </p>
                 
                 
                 <p id="check-box">
                    <input id="demo_box_1" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_1" name="news" class="css-label"> News &amp; Announcements </label>
                    
                    <input id="demo_box_2" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_2" name="proposals" class="css-label">  Call for Proposals </label>
                    
                    
                 
                 
                 
                 
                 
                 
                 
                    <span>Like, Follow, or Add us! <br><a href="javascript:;"><img src="images/contact-icon1.png" /></a><a href="javascript:;"><img src="images/contact-icon2.png" /></a><a href="javascript:;"><img src="images/contact-icon3.png" /></a></span>
                </p><br>
                <input type="submit" value="Submit" name="submit" id="submit"><br />
                <input type="submit" value="Join Our Newsletter" name="submit" id="newsletter">
          </form> 
           <p class="bold  bigger">Need to send us something, or swing by our offices? <br>Here’s where you can reach us.</p>  
           <div class="address ">
                <p class="bold blue push-bottom">Mailing Address</p>
                <p class="bold">JRS Biodiversity Foundation</p> 
                <address>PO Box 15178<br>Seattle, Washington 98115<br><a href="tel:(206) 454-7915">(206) 454-7915</a><br><a href="mailto:info@jrsbiodiversity.org">info@jrsbiodiversity.org</a></address>   
           </div> 
           <div class="address ">
                <p class="bold blue push-bottom">Physical Address</p>
                <p class="bold">JRS Biodiversity Foundation</p> 
                <address>1501 East Madison St.<br>Suite 400, Seattle, WA 98122<br><a href="tel:(206) 454-7915">(206) 454-7915</a><br><a href="mailto:info@jrsbiodiversity.org">info@jrsbiodiversity.org</a></address>   
           </div> 
        </div><!--end main-->
<?php include('includes/sidebar-news.php'); ?>
<?php include('includes/footer.php'); ?>