<footer class="fl-wrap main-footer ">
    <div class=container>
        <div class="footer-widget-wrap fl-wrap">
            <div class=row>
                <div class=col-md-4>
                    <div id=gmag-about-widget-2 class="widget footer-widget gmag_about_widget">
                        <div class=footer-widget-content>
                            <div class="footer-list footer-box fl-wrap">
                                <div class=about-widget><a href=index.html class=footer-logo><img
                                            src="{{asset("theme/client/page/wp-content/uploads/2022/06/logo2.png")}}" alt=Gmag></a>
                                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Eaque
                                        ipsa quae ab illo inventore veritatis et quasi architecto.</p> --}}
                                    <div class="footer-social fl-wrap">
                                        <ul>
                                            <li><a class=magnetic-item target=_blank rel=noopener href=#><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a class=magnetic-item target=_blank rel=noopener href=#><i
                                                        class="fab fa-x-twitter"></i></a></li>
                                            <li><a class=magnetic-item target=_blank rel=noopener href=#><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a target=_blank rel=noopener href=#><i
                                                        class="fab fa-vk"></i></a></li>
                                            <li><a target=_blank rel=noopener href=#><i
                                                        class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=col-md-2>
                    <div id=categories-2 class="widget footer-widget widget_categories">
                        <div class=footer-widget-content>
                            <div class="footer-list footer-box fl-wrap">
                                <div class=footer-widget-title>Danh mục</div>
                                <ul>
                                    @foreach ($tags as $item)
                                    <li class="cat-item cat-item-9"><a
                                        href=category/politics/index.html>{{$item->name}}</a>
                                </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=col-md-2>
                    <div id=nav_menu-2 class="widget footer-widget widget_nav_menu">
                        <div class=footer-widget-content>
                            <div class="footer-list footer-box fl-wrap">
                                <div class=footer-widget-title>Links</div>
                                <div class=menu-footer-widget-container>
                                    <ul id=menu-footer-widget class=menu>
                                        <li id=menu-item-443
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-13 current_page_item menu-item-443">
                                            <a href=index.html aria-current=page>Home</a>
                                        </li>
                                        <li id=menu-item-445
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-445">
                                            <a href=about/index.html>About</a>
                                        </li>
                                        <li id=menu-item-446
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-446">
                                            <a href=contacts/index.html>Contacts</a>
                                        </li>
                                        <li id=menu-item-444
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-444">
                                            <a href=blog/index.html>News</a>
                                        </li>
                                        <li id=menu-item-447
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-447">
                                            <a href=shop/index.html>Shop</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=col-md-4>
                    <div id=mc4wp_form_widget-2 class="widget footer-widget widget_mc4wp_form_widget">
                        <div class=footer-widget-content>
                            <div class="footer-list footer-box fl-wrap">
                                <div class=footer-widget-title>Đặt mua</div>
                                <script>
                                    (function() {
                                        window.mc4wp = window.mc4wp || {
                                            listeners: [],
                                            forms: {
                                                on: function(evt, cb) {
                                                    window.mc4wp.listeners.push({
                                                        event: evt,
                                                        callback: cb
                                                    });
                                                }
                                            }
                                        }
                                    })();
                                </script>
                                <form id=mc4wp-form-1 class="mc4wp-form mc4wp-form-495" method=post
                                    data-id=495 data-name=Subscribe>
                                    <div class=mc4wp-form-fields>
                                        <p>
                                            Bạn muốn được thông báo khi chúng tôi ra mắt mẫu mới hoặc bản cập nhật. Chỉ cần đăng ký và chúng tôi sẽ gửi cho bạn thông báo qua email.</p>
                                        <br>
                                        <input type=email name=EMAIL placeholder="địa chỉ email"
                                            required>
                                        <input type=submit value="Đăng nhập">
                                    </div><label style="display: none !important;">Leave this field empty
                                        if
                                        you're human: <input type=text name=_mc4wp_honeypot value
                                            tabindex=-1 autocomplete=off></label><input type=hidden
                                        name=_mc4wp_timestamp value=1720233656><input type=hidden
                                        name=_mc4wp_form_id value=495><input type=hidden
                                        name=_mc4wp_form_element_id value=mc4wp-form-1>
                                    <div class=mc4wp-response></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom fl-wrap ">
        <div class=container>
           
            <div class=to-top> <i class="fas fa-caret-up"></i></div>
            <div class=subfooter-nav>
                <ul>
                    <li id=menu-item-450
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-450"><a
                            href=shop/refund_returns/index.html>Terms &#038; Conditions</a></li>
                    <li id=menu-item-451
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-451">
                        <a rel=privacy-policy href=shop/privacy-policy/index.html>Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>