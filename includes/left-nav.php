<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
        
        <div id="left">
            <h3><?php
            if ($page == 'about.php' || $page == 'about-board-trustees.php' || $page == 'about-financils.php' || $page == 'about-terms-conditions.php' || $page == 'about-overview.php' || $page == 'about-audited-financials.php' || $page == 'about-jrs-irs-990s.php' ) { echo '<a href="about.php">About Us</a>'; }

                elseif ($page == 'approach.php' || $page == 'strategy.php' || $page == 'how-to-apply.php' || $page == 'where-we-work.php' || $page == 'grantmaking.php' ) { echo '<a href="approach.php">Our Approach</a>'; }
                
                ?>
            </h3>
                <div id="left-nav">
                    <ul>
                    <?php // write the proper "about" sub navigation
                        if ($page == 'about.php' || $page == 'about-board-trustees.php' || $page == 'about-terms-conditions.php'  ) { ?>
                        <li<?php if ($page == 'about-board-trustees.php') { echo ''; } ?>><a href="about-board-trustees.php">Trustees &amp; Staff</a></li>
                        <li<?php if ($page == 'about-financils.php') { echo ''; } ?>><a href="about-financils.php">Financials</a></li>
                        <li<?php if ($page == 'about-terms-conditions.php') { echo ''; } ?>><a href="about-terms-conditions.php">Terms &amp; Conditions</a></li> 
                        <li<?php if ($page == 'gallery.php') { echo ''; } ?>><a href="gallery.php">Photo Gallery</a></li> <?php } ?>
                        <?php //  // write the proper "services" sub navigation
                        
                        if ($page == 'about-financils.php' || $page == 'about-overview.php' || $page == 'about-audited-financials.php' || $page == 'about-jrs-irs-990s.php') { ?>
                        <li<?php if ($page == 'about-board-trustees.php') { echo ''; } ?>><a href="about-board-trustees.php">Board &amp; Trustees</a></li>
                        <li<?php if ($page == 'about-financils.php') { echo ''; } ?>><a href="about-financils.php">Financials</a>
                            <ul class="sub-menu"><li><a href="about-overview.php">Overview</a></li><li><a href="about-audited-financials.php">Audited Financials</a></li><li><a href="about-jrs-irs-990s.php">JRS IRS 990s</a></li></ul>
                        <li<?php if ($page == 'about-terms-conditions.php') { echo ''; } ?>><a href="about-terms-conditions.php">Terms &amp; Conditions</a></li> <?php } ?>
                        <?php //  // write the proper "services" sub navigation

                        if ($page == 'approach.php' || $page == 'strategy.php' || $page == 'how-to-apply.php' || $page == 'where-we-work.php' || $page == 'grantmaking.php' ) { ?>
                        <li<?php if ($page == 'strategy.php') { echo ''; } ?>><a href="strategy.php">Strategy</a></li>                     
                        <li<?php if ($page == 'where-we-work.php') { echo ''; } ?>><a href="where-we-work.php">Where we Work</a></li>
                        <li<?php if ($page == 'grantmaking.php') { echo ''; } ?>><a href="grantmaking.php">Grantmaking</a></li>
                        <li<?php if ($page == 'how-to-apply.php') { echo ''; } ?>><a href="how-to-apply.php">How to Apply</a></li> <?php } ?>
                   </ul>
                </div>
        </div><!--end left-->