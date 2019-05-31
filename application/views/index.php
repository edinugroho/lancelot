<!DOCTYPE html>
<html>
    <body>
        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
            <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
                <div class="uk-navbar-left">

                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li>
                            <a href="#">Parent</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Item</a></li>
                    </ul>

                </div>
            </nav>
        </div>
        <div class="uk-container">
            <div class="uk-grid-medium uk-child-width-1-3@s" uk-grid="">
                <?php 
                $i=0;
                do { ?>
                <div>
                    <div class="uk-card uk-card-default uk-card-hover">
                        <div class="uk-card-media-top">
                            <img src="https://previews.123rf.com/images/kubixdesign/kubixdesign1612/kubixdesign161200010/69145245-initial-dd-logo-design.jpg" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Media Top</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="uk-card-footer">
                            <a href="#" class="uk-button uk-button-text">Read more</a>
                        </div>
                    </div>
                </div>
                <?php $i++;} while ($i < 9); ?>
            </div>
        </div>
    </body>
</html>