<?php
require_once '../functions/public_func.php'
?>
<div class="row">
    <div class="col-lg-12">
        <div class="ws-comment panel-comment-ws">
            <p style="font-size: 20px; font-weight: bolder; color:#333">پیام مدیر سایت : </p>
            <p style="font-size: 16px; padding:0 20px; color:#333">
                <?php
                require_once '../functions/page_func.php';
                $am = admin_message();
                echo $am['message'];
                ?>
            </p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="ws-comment panel-prod-ws">
            <svg class="bi bi-file-richtext" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M4 1h8a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V3a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V3a1 1 0 00-1-1H4z"
                      clip-rule="evenodd"></path>
                <path fill-rule="evenodd"
                      d="M4.5 11.5A.5.5 0 015 11h3a.5.5 0 010 1H5a.5.5 0 01-.5-.5zm0-2A.5.5 0 015 9h6a.5.5 0 010 1H5a.5.5 0 01-.5-.5zm1.639-3.708l1.33.886 1.854-1.855a.25.25 0 01.289-.047l1.888.974V7.5a.5.5 0 01-.5.5H5a.5.5 0 01-.5-.5V7s1.54-1.274 1.639-1.208zM6.25 5a.75.75 0 100-1.5.75.75 0 000 1.5z"
                      clip-rule="evenodd"></path>
            </svg>
            <br><br>
            <span>
				تعداد نوشته های شما :
                <span class="bold"><?php
                    count_post();
                    ?></span>
            </span>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="ws-comment panel-ticket-ws">
            <svg class="bi bi-chat-dots-fill" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 01-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 11-2 0 1 1 0 012 0zm4 0a1 1 0 11-2 0 1 1 0 012 0zm3 1a1 1 0 100-2 1 1 0 000 2z"
                      clip-rule="evenodd"></path>
            </svg>
            <br><br>
            <span>
				تعداد نظرات شما :
				<span class="bold"><?php
                    count_comment()
                    ?></span>
            </span>
        </div>
    </div>


    <div class="col-lg-4">
        <div class="ws-comment panel-time-ws">
            <svg class="bi bi-calendar" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"
                      clip-rule="evenodd"></path>
                <path fill-rule="evenodd"
                      d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z"
                      clip-rule="evenodd"></path>
            </svg>
            <br><br>
            <span>
				تاریخ ثبت نام شما  :
				<span class="bold"><?php register_date(); ?></span>
            </span>
        </div>
    </div>
</div>