<?php
$name = $_SESSION['login'];
require_once '../functions/public_func.php';
?>

<div class="col-md-2">
    <div class="admin-menu">

        <ul>
            <div class="userwel">
                <img src="../img/uuser.png">
                <p>خوش اومدی <?php echo $name ?></p>
            </div>

            <li class="dash">
                <a href="dashboard.php">
                    <svg class="bi bi-gear-wide-connected" width="1em" height="1em" viewBox="0 0 20 20"
                         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M10.932 2.724c-.243-.97-1.621-.97-1.864 0l-.072.286a.96.96 0 01-1.622.434l-.205-.211c-.695-.72-1.889-.03-1.614.932l.08.283a.96.96 0 01-1.187 1.188l-.283-.081c-.962-.275-1.651.919-.932 1.614l.211.205a.96.96 0 01-.434 1.622l-.286.072c-.97.243-.97 1.621 0 1.864l.286.072a.96.96 0 01.434 1.622l-.211.205c-.72.695-.03 1.889.932 1.614l.283-.08a.96.96 0 011.188 1.187l-.081.283c-.275.962.919 1.651 1.614.932l.205-.211a.96.96 0 011.622.434l.072.286c.243.97 1.621.97 1.864 0l.072-.286a.96.96 0 011.622-.434l.205.211c.695.72 1.889.03 1.614-.932l-.08-.283a.96.96 0 011.187-1.188l.283.081c.962.275 1.651-.919.932-1.614l-.211-.205a.96.96 0 01.434-1.622l.286-.072c.97-.243.97-1.621 0-1.864l-.286-.072a.96.96 0 01-.434-1.622l.211-.205c.72-.695.03-1.889-.932-1.614l-.283.08a.96.96 0 01-1.188-1.187l.081-.283c.275-.962-.919-1.651-1.614-.932l-.205.211a.96.96 0 01-1.622-.434l-.072-.286zM10 15a5 5 0 100-10 5 5 0 000 10z"
                              clip-rule="evenodd"></path>
                        <path fill-rule="evenodd"
                              d="M9.375 10L6.6 6.3l.8-.6 2.85 3.8H15v1h-4.75L7.4 14.3l-.8-.6L9.375 10z"
                              clip-rule="evenodd"></path>
                    </svg>
                    پیشخوان
                </a>
            </li>
            <?php if (user_role() == "admin"): ?>
                <!--  دسته بندی ها-->
                <li class="article">
                    <a href="javascript:;">
                        <svg class="bi bi-book-half-fill" width="1em" height="1em" viewBox="0 0 20 20"
                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M5.214 3.072c1.599-.32 3.702-.363 5.14 1.074a.5.5 0 01.146.354v11a.5.5 0 01-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 012 15.5v-11a.5.5 0 01.276-.447L2.5 4.5l-.224-.447.002-.001.004-.002.013-.006a5.116 5.116 0 01.22-.103 12.958 12.958 0 012.7-.869zM3 4.82v9.908c.846-.343 1.944-.672 3.074-.788 1.143-.118 2.387-.023 3.426.56V4.718c-1.063-.929-2.631-.956-4.09-.664A11.958 11.958 0 003 4.82z"
                                  clip-rule="evenodd"></path>
                            <path fill-rule="evenodd"
                                  d="M14.786 3.072c-1.598-.32-3.702-.363-5.14 1.074A.5.5 0 009.5 4.5v11a.5.5 0 00.854.354c.844-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0018 15.5v-11a.5.5 0 00-.276-.447L17.5 4.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 00-.799-.34 12.96 12.96 0 00-2.073-.609z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        دسته بندی ها
                        <span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                    </a>
                </li>
                <ul class="sub-article">
                    <li><a href="dashboard.php?page=list_category">همه دسته بندی ها</a></li>
                    <li><a href="dashboard.php?page=add_category">افزودن دسته جدید</a></li>
                </ul>

                <!--مدیریت کاربران-->
                <li class="article7">
                    <a href="javascript:;">
                        <svg class="bi bi-book-half-fill" width="1em" height="1em" viewBox="0 0 20 20"
                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M5.214 3.072c1.599-.32 3.702-.363 5.14 1.074a.5.5 0 01.146.354v11a.5.5 0 01-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 012 15.5v-11a.5.5 0 01.276-.447L2.5 4.5l-.224-.447.002-.001.004-.002.013-.006a5.116 5.116 0 01.22-.103 12.958 12.958 0 012.7-.869zM3 4.82v9.908c.846-.343 1.944-.672 3.074-.788 1.143-.118 2.387-.023 3.426.56V4.718c-1.063-.929-2.631-.956-4.09-.664A11.958 11.958 0 003 4.82z"
                                  clip-rule="evenodd"></path>
                            <path fill-rule="evenodd"
                                  d="M14.786 3.072c-1.598-.32-3.702-.363-5.14 1.074A.5.5 0 009.5 4.5v11a.5.5 0 00.854.354c.844-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0018 15.5v-11a.5.5 0 00-.276-.447L17.5 4.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 00-.799-.34 12.96 12.96 0 00-2.073-.609z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        مدیریت کاربران
                        <span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                    </a>
                </li>
                <ul class="sub-article7">
                    <li><a href="dashboard.php?page=list_users">لیست کاربران</a></li>
                    <li><a href="dashboard.php?page=add_user">افزودن کاربر جدید</a></li>
                </ul>
                <!--برگه ها-->
                <li class="article5">
                    <a href="javascript:;">
                        <svg class="bi bi-book-half-fill" width="1em" height="1em" viewBox="0 0 20 20"
                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M5.214 3.072c1.599-.32 3.702-.363 5.14 1.074a.5.5 0 01.146.354v11a.5.5 0 01-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 012 15.5v-11a.5.5 0 01.276-.447L2.5 4.5l-.224-.447.002-.001.004-.002.013-.006a5.116 5.116 0 01.22-.103 12.958 12.958 0 012.7-.869zM3 4.82v9.908c.846-.343 1.944-.672 3.074-.788 1.143-.118 2.387-.023 3.426.56V4.718c-1.063-.929-2.631-.956-4.09-.664A11.958 11.958 0 003 4.82z"
                                  clip-rule="evenodd"></path>
                            <path fill-rule="evenodd"
                                  d="M14.786 3.072c-1.598-.32-3.702-.363-5.14 1.074A.5.5 0 009.5 4.5v11a.5.5 0 00.854.354c.844-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0018 15.5v-11a.5.5 0 00-.276-.447L17.5 4.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 00-.799-.34 12.96 12.96 0 00-2.073-.609z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        برگه ها
                        <span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                    </a>
                </li>
                <ul class="sub-article5">
                    <li><a href="dashboard.php?page=admin_message">پیام مدیریت</a></li>
                    <li><a href="dashboard.php?page=about_page">درباره ما</a></li>
                    <li><a href="dashboard.php?page=about_footer">درباره مای قسمت فوتر</a></li>
                    <li><a href="dashboard.php?page=single_post">تک پست سایت</a></li>
                    <li><a href="dashboard.php?page=top_header">تنظیمات لوگو</a></li>

                </ul>
                <!--فوتر-->
                <li class="article6">
                    <a href="javascript:;">
                        <i class="fa fa-book ml-2"></i>
                        فوتر
                        <span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                    </a>
                </li>
                <ul class="sub-article6">
                    <li><a href="dashboard.php?page=list_footer_menu">همه منوهای فوتر</a></li>
                    <li><a href="dashboard.php?page=add_footer_menu">افزودن فوتر منو جدید</a></li>
                </ul>
            <?php endif; ?>
            <?php if (user_role() == "author" || user_role() == 'admin'): ?>
                <!-- پست ها-->

                <li class="article2">
                    <a href="javascript:;">
                        <i class="fa fa-book ml-2"></i>
                        پست ها
                        <span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                    </a>
                </li>
                <ul class="sub-article2">
                    <li><a href="dashboard.php?page=list_post">همه پست ها</a></li>
                    <li><a href="dashboard.php?page=add_post">افزودن پست جدید</a></li>
                </ul>

                <!--اسلایدر-->
                <li class="article3">
                    <a href="javascript:;">
                        <i class="fa fa-book ml-2"></i>
                        اسلایدر
                        <span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                    </a>
                </li>
                <ul class="sub-article3">
                    <li><a href="dashboard.php?page=list_slider">همه اسلایدر ها</a></li>
                    <li><a href="dashboard.php?page=add_slider">افزودن اسلایدر جدید</a></li>
                </ul>
                <!-- ابزارک ها-->
                <li class="article4">
                    <a href="javascript:;">
                        <i class="fa fa-book ml-2"></i>
                        ابزارک ها
                        <span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                    </a>
                </li>
                <ul class="sub-article4">
                    <li><a href="dashboard.php?page=list_widget">همه ابزارک ها</a></li>
                    <li><a href="dashboard.php?page=add_widget">افزودن ابزارک جدید</a></li>
                </ul>
            <?php endif; ?>

        </ul>
    </div>
</div>
