<style type="text/css">
	html, body{
  height:100%;
}
.uk-logo, .uk-logo:hover, .uk-logo:active, .uk-logo:visited {
    color: #ffffff;
}

.uk-navbar-toggle, .uk-navbar-toggle:hover, .uk-navbar-toggle:active, .uk-navbar-toggle:visited {
    color: #ffffff;
    padding-top: 2px;
}
.uk-navbar-container {
    background-color: #1e87f0 !important;
}
.user > #name {
    font-size: 22px;
}
.header {
    box-sizing: border-box;
    border-bottom: 1px #e5e5e5 solid;
}
	.content-padder {
	    margin-left: 0px;
	}
.content-background {
    min-height: calc(100% - 80px);
    background-color: #F0F0F0;
}
.statistics-text {
    font-size: 20px;
}
.statistics-number {
    font-size: 50px;
}

.tm-sidebar-left {
    position: fixed;
    z-index: 100;
    top: 80px;
    bottom: 0;
    box-sizing: border-box;
    width: 240px !important;
    padding: 40px 40px 60px 40px;
    border-right: 1px #e5e5e5 solid;
    overflow-y: auto;
	overflow-x: hidden;
}
.tm-sidebar-left::-webkit-scrollbar-track {
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
}

.tm-sidebar-left::-webkit-scrollbar {
	width: 6px;
	background-color: #F5F5F5;
}

.tm-sidebar-left::-webkit-scrollbar-thumb {
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: #bdbdbd;
}

.tm-sidebar-right {
    position: absolute;
    top: 0;
    left: calc(100% + 0px);
    width: 200px
}
@media(max-width: 960px) {
    .tm-sidebar-left {
        opacity: 0;
    }
}
@media (min-width: 1200px) {
    .tm-sidebar-right {
        left: calc(100% + 0px);
    }
    .tm-sidebar-left+.tm-main {
        padding-left: 40px;
        opacity: 0 !important;
    }
}
@media (min-width: 1400px) {
    .tm-sidebar-left {
        width: 300px !important;
        padding: 45px 45px 60px 45px
    }
    .tm-sidebar-right {
        left: calc(100% + 60px)
    }
    .tm-sidebar-left+.tm-main {
        padding-left: 40px
    }
}

::-webkit-scrollbar { width: 7px; }
::-webkit-scrollbar-track-piece { background-color: #f0f0f0; 
/*this can also be transparent*/}
::-webkit-scrollbar-thumb:vertical {
    width: 1px;
    background-color: #1e87f0;
    border-top: 4px solid #f0f0f0;
    border-right: 3px solid #f0f0f0;
    border-bottom: 4px solid #f0f0f0;
    border-left: 3px solid #f0f0f0;
}
::selection {
  background-color: #d1eefe;
  color: #1e87f0;
}
::moz-selection {
 background-color: #d1eefe;
 color: #1e87f0;
}

</style>
<div uk-sticky class="uk-navbar-container tm-navbar-container uk-active">
    <div class="uk-container uk-container-expand">
        <nav uk-navbar>
            <div class="uk-navbar-left">
                <a href="#" class="uk-navbar-item uk-logo">
                    Lancelot
                </a>
            </div>
            <div class="uk-navbar-right uk-light">
                <ul class="uk-navbar-nav">
                    <li class="uk-active">
                        <a href="#"><?php echo $_SESSION['username']; ?> &nbsp;<span class="ion-ios-arrow-down"></span></a>
                        <div uk-dropdown="pos: bottom-right; mode: click; offset: -17;">
                           <ul class="uk-nav uk-navbar-dropdown-nav">
                               <li><a href="<?php echo base_url('Penawar/logout'); ?>">logout</a></li>
                           </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>